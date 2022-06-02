<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Controller;
use App\Models\Admin\ClassModel;
use App\Models\Admin\QuestionsModel;
use App\Models\ClassesSeenModel;
use App\Models\QuizModel;
use App\Models\ScoreModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Fluent;
use Mockery\Undefined;
use PhpParser\ErrorHandler\Collecting;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

use function GuzzleHttp\Promise\each;
use function PHPUnit\Framework\returnSelf;

class ClassController extends Controller
{
    private $arr = [];
    private $obj = [];
    private $before = [];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(HomeController $amount)
    {
        $course = ClassModel::all();

        $course_title = $course[0]->course_name;

        $class = json_decode($course[1]->class); // $class[$key]->class_name

        return view('app.modules.class', ['course_title' => $course_title ,'class' => $class]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        !$request->filled('course_name') ||
            !$request->filled('class') ? die(json_encode(['error' => true, 'menssage' => 'Parametros obrigatorios inexistentes'])) : '';
        
        !isset($request->_token) || !$request->filled('_token') ? die(json_encode(['error' => true, 'menssage' => 'Requisição não permitida'])) : '';

        ClassModel::create([
            'course_name' => $request->course_name,
                'class' => json_encode($request->class),
                    'course_token' => md5($request->course_name.md5(date('Y/m/d H:m:s')).json_encode($request->class))
        ]);

        die(json_encode([
            'success' => true,
                'menssage' => 'O curso: '.$request->course_name.' foi adicionado com sucesso'
        ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $course_class = null)
    {
        $course = ClassModel::where('id', $id)->get()->first();

        if(!isset($course->id))
            return json_encode([
                'error' => true,
                    'menssage' => 'Modulo não encontrado ou não disponivel'
            ]);

        $this->allLinks((object)json_decode($course->class));
        
        $this->allClasses((object)json_decode($course->class));

        $class = $this->getClass($this->arr, $course_class);

        $question = $this->query($class[1]['query']);

        $memory = $this->addMemory($course['course_name'], $course_class);
        
        $memory = $this->returnClassFromLink($memory);

        return view('app.modules.class', [
            'course_name' => $course->course_name,
            'course_token' => $course->course_token,
            'id' => $course->id,
            'before' => $class[0],
            'current' => $class[1],
            'after' => $class[2],
            'memory' => $memory,
            'link' => $class[1]['link'],
            'query' => $question->query, 
            'question' => json_decode($question->options), 
            'question_id' => $question->id,
            // 'assessment' => $this->scoreStudent()['hidden']
        ]);
    }

    public function returnClassFromLink($link)
    {
        $collect = [];
        for ($i = 0; $i < count($link); $i++) { 
            if($link[$i]->{'link'} == $this->obj[$i]['link']){
                $collect[] = [
                    'name' => $this->obj[$i]['name'], 
                    'link' => $this->obj[$i]['link'], 
                    'desc' => $this->obj[$i]['desc'],
                    'query' => $this->obj[$i]['query'],
                ];
            }
        }

        return $collect;
    }

    /**
     * Registra as aulas que o aluno ja assistiu
     * 
     * @param string $link
     * @param string $course_current
     * 
     */
    public function addMemory($course_current, $link)
    {   
        $user = ClassesSeenModel::where('user_name', session('session_name'))->where('course_name', $course_current)->first();

        $verifyLink = $this->checkLink($link);

        if(!isset($user)){
            ClassesSeenModel::create([
                'user_name' => session('session_name'),
                'classes' => '['.json_encode(['link' => $verifyLink ]).']',
                'course_name' => $course_current
            ]);

            return $this->before;
        }

        $toArray = new Fluent(json_decode($user['classes']));

        $collect = collect();

        $collect->add($toArray->toArray());

        $check = $this->checkCollectionStudant($collect, $link);

        if($check == null){
            return json_decode($user['classes']);
        }        

        $collect->add(['link' => $check]);
        $treat = str_replace('[','', $collect);
        $treat = str_replace(']','', $treat);

        DB::table('classes_seen')
            ->where('user_name', session('session_name'))
                ->where('course_name', $course_current)
                    ->update(['classes' => '['.$treat.']']);

        return json_decode($user['classes']);
    }

    /**
     * Verifica se o link ja existe na coleção do estudante e 
     * 
     * @param object $studant
     * @param string $link
     * @return boolean
     */
    public function checkCollectionStudant($studant, $link)
    {
        foreach ($studant[0] as $key => $value) {
            if($link == $value->{'link'}){
                return null;
            }
        }
        return $link;
    }

    /**
     * Verifica se o link existe na coleção de links
     * 
     * @param string $link
     * @return string
     */
    public function checkLink($link)
    {   
        $link == null ? $link = $this->arr[0] : $link;

        foreach ($this->arr as $key => $value) {
            if($value == $link)
                return $link;
        }

        return $this->arr[0];
    }    

    /**
     * Monta o array com todas as aulas
     * 
     * @param object $course
     * @return array
     */
    public function allClasses(object $course)
    {
        $this->obj = collect();
        foreach ($course as $key => $value) {
            $this->obj->add([
                'name' => $value->{'class_name'}, 
                'link' => $value->{'class_link'}, 
                'desc' => $value->{'link_description'},
                'query' => $value->{'query'},
            ]);
        }
        return $this->obj;
    }

    /**
     * Monta o array com os links do curso atual
     * 
     * @param object $course
     * @return object
     */
    public function allLinks(object $course)
    {
        $this->arr = collect();
        foreach ($course as $key => $value) {
            $this->arr->add($value->{'class_link'});
        }
        return $this->arr;
    }

    /**
     * Retorna o objeto anterior, o selecionado e o próximo 
     * 
     * @param object|array $links
     * @param string $class
     */
    public function getClass($links, $class)
    {
        if($class == null)
            return [$before = null, $current = $this->obj[0], $after = $this->obj[1]];

        foreach ($links as $key => $value) {
            if($value == $class){
                return [
                    $before = $key == 0 ? null : $this->obj[$key - 1], // adicionar no array 
                    $current = $this->obj[$key],
                    $after = !isset($this->obj[$key + 1]) ? null : $this->obj[$key + 1],
                ];
            }
        }

        return [$before = null, $current = $this->obj[0], $after = $this->obj[1]];
    }

    public function query($id)
    {
        $question = QuizModel::whereId($id)->first();

        return $question;
    }

    // public function scoreStudent()
    // {
    //     $score = ScoreModel::whereStudent(session('session_name'))->get('class_score');

    //     return $score == null || $score == '' || strlen($score) < 272 ? ['hidden' => true] : ['hidden' => false];
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
