<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Admin\QuestionsModel;
use App\Models\QuizModel;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addQuestion(Request $request) 
    {
        $data = $request->all();

        $data['options'] = json_encode($data['options']);

        QuestionsModel::create($data);

        return(['success' => true]);
    }

    public function addQuiz(Request $request) 
    {
        $data = $request->all();

        $data['options'] = json_encode($data['options']);

        QuizModel::create($data);

        return(['success' => 'Pergunta: '.$data['query'].' ,foi adicionada com sucesso']);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
