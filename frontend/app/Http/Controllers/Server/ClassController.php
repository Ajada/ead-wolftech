<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Admin\ClassModel;
use App\Models\Admin\QuestionsModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
    public function show($id, $course_class = '')
    {
        $course = ClassModel::where('id', $id)->get()->first();

        // foreach (json_decode($this->query(1)->options) as $key => $value) {            
        //     $key == 0 ? $key = 'A' : '';
        //     $key == 1 ? $key = 'B' : '';
        //     $key == 2 ? $key = 'C' : '';
        //     $key == 3 ? $key = 'D' : '';

        //     echo $value->{$key};
        // }

        // die();

        if(!isset($course->id))
            return json_encode([
                'error' => true,
                    'menssage' => 'Modulo não encontrado ou não disponivel'
            ]);

        /**TODO
         * Otimizar código
         */

        if($course_class !== '' || $course_class !== null ){
            foreach(json_decode($course->class) as $key => $value){
                if($course_class == $value->class_link){
                    return view('app.modules.class', [
                        'course' => $course ,
                            'class' => json_decode($course->class), 
                                'class_link' => $value->class_link,
                                    'query' => $this->query($course->question)->query,
                                        'question' => json_decode($this->query($course->question)->options)
                        ]);
                }
            }
                // die('foraq do doreach');
                return view('app.modules.class', [
                    'course' => $course,
                        'class' => json_decode($course->class),
                            'class_link' => $value->class_link,
                                'query' => $this->query($course->question)->query,
                                    'question' => json_decode($this->query($course->question)->options)
                    ]);
        }else{
            // die('Passou no else');
            $class_link = json_decode($course->class[0]);
            return view('app.modules.class', [
                'course' => $course ,
                    'class' => json_decode($course->class), 
                        'class_link' => $class_link,
                            'query' => $this->query($course->question)->query,
                                'question' => json_decode($this->query($course->question)->options)
                ]);
        }
    }

    public function query($id)
    {
        $question = QuestionsModel::whereId($id)->first();

        return $question;
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
