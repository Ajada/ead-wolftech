<?php

namespace App\Http\Controllers;

use App\Models\QuizModel;
use App\Models\ScoreModel;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Fluent;
use stdClass;

class ScoreController extends Controller
{

    protected $array = [];
    protected $collection;

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
    public function store(Request $request)
    {
        ScoreModel::create([
            'student' => $request->name,
            'class_score' => '['.json_encode($request->class_score).']'
        ]);

        return;
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

    public function checkResponse($question, $response)
    {
        $right_answer = QuizModel::whereId($question)->get('right_answer')->first();

        $response = $this->convertResponse($response[0]);

        if($response == $right_answer['right_answer'])
            return(['right_answer' => true]);

        return(['right_answer' => false]);

    }

    public function convertResponse($response)
    {
        $option = '';

        $response == 'A' ? $option = 0 : $option;
        $response == 'B' ? $option = 1 : $option;
        $response == 'C' ? $option = 2 : $option;
        $response == 'D' ? $option = 3 : $option;

        return $option;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->filled('name') ? '' : $request->name = 'UNDEFINED';

        $student = ScoreModel::whereStudent($request->name)->first();

        $check_response = $this->checkResponse($request->question_id, explode(' - ', $request->class_score['response']));

        if($check_response['right_answer'] == false)
            return(['right_answer' => false]);

        if( !isset($student->id) ){
            $this->store($request);            
            return(['create' => true ]); 
        }
    
        $clientCollect = $this->getClientCollect(json_decode($student->class_score));

        $compareCollect = $this->compareCollect($request->class_score);

        if(isset($compareCollect['exist']) && $compareCollect['exist'] == true)
            return (['exist' => true]);

        $this->collection = collect();

        $newCollect = $this->assembleCollection(json_decode($student->class_score), $compareCollect);

        DB::table('score_student')
            ->where('student', $request->name)
                ->update([
                    'class_score' => '['.$newCollect.']'
                ]);
        
        return(['updated' => true]);
    }

    /**
     * Assembling the new collection
     * 
     * @param object $studantScore
     * @param object $requestCollect
     * @return string $treat
     */
    public function assembleCollection($studantScore, $requestCollect)
    {        
        $clientCollect = new Fluent($studantScore);
        
        $this->collection->add($clientCollect->toArray());
        
        $this->collection->add($requestCollect);
        
        $treat = str_replace('[','', $this->collection);

        $treat = str_replace(']','', $treat);

        return $treat;

    }

    /**
     * Separa todos os videos ja assistidos do aluno
     * 
     * @param object
     * @return array
     */
    public function getClientCollect($clientObject)
    {
        foreach ($clientObject as $key => $value) {
            $this->array[] = $value->{'class_link'};
        }
        return $this->array;
    }

    /**
     * Compara resposta ja existe na coleção do cliente
     * 
     * @param array
     * @return array/string
     */
    public function compareCollect($classScore)
    {
        foreach ($this->array as $key => $value) {
            if( $classScore['class_link'] == $value )
                return ['exist' => true];
        }
        return $classScore;
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
