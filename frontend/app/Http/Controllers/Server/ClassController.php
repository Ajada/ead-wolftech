<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Controller;
use App\Models\Admin\ClassModel;
use App\Models\Admin\QuestionsModel;
use App\Models\ScoreModel;
use Illuminate\Http\Request;
use PhpParser\ErrorHandler\Collecting;

use function GuzzleHttp\Promise\each;

class ClassController extends Controller
{
    private $arr = [];
    private $obj = [];

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

        $question = $this->query($course->question);

        return view('app.modules.class', [
            'course_name' => $course->course_name,
            'course_token' => $course->course_token,
            'id' => $course->id,
            'before' => $class[0],
            'current' => $class[1],
            'after' => $class[2],
            'link' => $class[1]['link'],
            /**TODO
             * QUERY PASSARA A FAZER PARTE DO OBJETO CLASS COMO $class[1]['query'] PARA AS PERGUNTAS E
             * QUESTION PASSARA A FAZER PARTE DO OBJETO CLASS COMO $class[1]['question'] PARA AS POSSIVEIS RESPOSTAS DA PERGUNTA
             */
            'query' => $question->query, 
            'question' => json_decode($question->options), 
            'assessment' => $this->scoreStudent()['hidden']
        ]);
    }

    /**
     * Monta o array com todas as aulas
     * 
     * @param object $course
     * @return array
     */
    public function allClasses(object $course,)
    {
        $this->obj = collect();
        foreach ($course as $key => $value) {
            $this->obj->add([
                'name' => $value->{'class_name'}, 
                'link' => $value->{'class_link'}, 
                'desc' => $value->{'link_description'},
                /**TODO
                 * CADASTRAR TODAS AS PERGUNTAS DOS VIDEOS EM UM BANCO A PARTE 
                 * FAZER CAMPO PARA COLOCAR A PERGUNTA REFERENTE AO VIDEO ATUAL
                 * PUXAR PERGUNTA PELO ID DEFINIDO AQUI
                 * 'query' => $value->{'query'} // a query sera igual ao id da tabela de perguntas (query = 1,2,3,4,5,6,7,8,9,10 ...)
                 */
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
                    $after = $this->obj[$key + 1]
                ];
            }
        }

        return [$before = null, $current = $this->obj[0], $after = $this->obj[1]];
    }


    public function query($id)
    {
        $id = explode(',', $id);

        $rand = rand($id[0], $id[1]);

        $question = QuestionsModel::whereId($rand)->first();

        return $question;
    }

    public function scoreStudent()
    {
        $score = ScoreModel::whereStudent(session('session_name'))->get('class_score');

        return $score == null || $score == '' || strlen($score) < 272 ? ['hidden' => true] : ['hidden' => false];
    }

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
