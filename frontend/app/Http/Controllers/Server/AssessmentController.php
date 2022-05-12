<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Admin\AssessmentModel;
use App\Models\Admin\ClassModel;
use App\Models\ScoreModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Fluent;
use PHPUnit\Util\Json;

use function PHPUnit\Framework\returnSelf;

class AssessmentController extends Controller
{
    public function index($id)
    {
        $assessment = AssessmentModel::whereId($id)->get();

        $questions = json_decode($assessment[0]->{'questions'});

        return view('app.modules.assessment', ['assessment' => $assessment, 'questions' => $questions]);
    }

    public function showView($token)
    {
        $assessment_number = $this->verify($token);

        $assessment = AssessmentModel::where('assessment_number', $assessment_number[0]->{'assessment'})->first();

        /**TODO
         * contar quantas chances ainda disponivel
        */

        return view('app.assessment_instructions', ['quiz' => $assessment]);
    }

    public function verify($params)
    {
        $class = ClassModel::where('course_token', $params)->get('assessment');

        if(!isset($class[0]))
            die(redirect('/'));

        return $class;
    }

    public function getResult(Request $request)
    {
        $registerAssessment = ScoreModel::whereStudent($request->user)->first();

        if($registerAssessment['final_result'] == null){
            /**
            * TODO 
            * Separa função para adição de cursos
            */
            DB::table('score_student')
                ->whereStudent($registerAssessment['student'])
                    ->update(['final_result' => json_encode([
                        'course_name' => $request->course_name, 
                        'res_0' => $request->result[0],
                        'res_1' => $request->result[1],
                        'res_2' => $request->result[2],
                        'res_3' => $request->result[3],
                        'res_4' => $request->result[4]
                        ])]
                    );
            die(json_encode(['success' => true]));
        }
        
        $newResult = [
            'course_name' => $request->course_name,
            'res_0' => $request->result[0],
            'res_1' => $request->result[1],
            'res_2' => $request->result[2],
            'res_3' => $request->result[3],
            'res_4' => $request->result[4]
        ];
        
        $finalResult = json_decode($registerAssessment['final_result']);

        $collect = collect();

        $finalResult = new Fluent($finalResult);

        $collect->add($finalResult->toArray());

        $collect->add($newResult);

        $treat = str_replace('[','', $collect);

        $treat = str_replace(']','', $treat);

        DB::table('score_student')
            ->whereStudent($registerAssessment['student'])
                ->update([
                    'final_result' => '['.$treat.']'
                ]); 

        die(json_encode(['success' => true]));
    }
}
