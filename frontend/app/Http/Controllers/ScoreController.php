<?php

namespace App\Http\Controllers;

use App\Models\ScoreModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Fluent;
use stdClass;

class ScoreController extends Controller
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
    public function store(Request $request)
    {
        //
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
    public function update(Request $request)
    {
        $student = ScoreModel::whereStudent($request->name)->first();

        if( !isset($student->id) ){
            ScoreModel::create([
                'student' => $request->name,
                'class_score' => json_encode($request->class_score)
            ]);
            return(['create' => true ]);
        }

        $student_score = json_decode($student->class_score); // stdClass

        $class = $request->class_score;  
        
        foreach ($student_score as $key => $value) {
            if(is_object($value))
                if($class['class_link'] == $value->{'class_link'})
                    return(['exist' => true]);    
            elseif(is_array($value))
                if($class['class_link'] == $value['class_link'])
                    return(['exist' => true]);    
            elseif($class['class_link'] == $value)
                return(['exist' => true]);    
        }

        $collect = collect();

        $db_score = new Fluent($student_score);

        $collect->add($db_score->toArray()); // stdClass to array 

        $collect->add($request->class_score); 

        $treat = str_replace('[','', $collect);

        $treat = str_replace(']','', $treat);

        DB::table('score_student')
            ->where('student', $request->name)
                ->update([
                    'class_score' => '['.$treat.']'
                ]);
        
        return(['updated' => true]);
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
