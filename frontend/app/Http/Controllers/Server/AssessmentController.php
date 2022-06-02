<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Admin\AssessmentModel;
use App\Models\Admin\ClassModel;
use App\Models\ScoreModel;
use Hamcrest\Type\IsObject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Fluent;
use PHPUnit\Framework\RiskyTestError;
use PHPUnit\Util\Json;
use App\Http\Controllers\CertifiedModelController;
use App\Models\User;

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
        $registerAssessment = ScoreModel::whereStudent($request->user)->first(); // pontuação do aluno

        $newResult = [
            'course_name' => $request->course_name,
            'res_0' => isset($request->result[0]) ? $request->result[0] : 'not',
            'res_1' => isset($request->result[1]) ? $request->result[1] : 'not',
            'res_2' => isset($request->result[2]) ? $request->result[2] : 'not',
            'res_3' => isset($request->result[3]) ? $request->result[3] : 'not',
            'res_4' => isset($request->result[4]) ? $request->result[4] : 'not'
        ];

        $this->finalResult($newResult, $request->user); //

        if($registerAssessment['final_result'] == null){
            DB::table('score_student')
                ->whereStudent($registerAssessment['student'])
                    ->update(['final_result' => json_encode($newResult)]
                    );
            $this->finalResult($newResult, $request->user);
            die(json_encode(['accredited' => true])); // function
        }
        
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

        $this->finalResult($newResult, $request->user);
                
    }

    public function finalResult($data, $user)
    {
        $data == is_object($data) || 
            $data == is_array($data) ? '' : die(json_encode(['error' => 'string given']));

        $right_answer = $this->getRightAnswer($data['course_name']);
        $course_name = $data['course_name'];
        unset($data['course_name']);
        $i = 0; 
        $point = 0;

        foreach ($data as $key => $value) {
            $response = explode('_', $value);
            if($response[0] == $right_answer[$i])
                $point++;
            $i++;
        }

        if($point < $i - 2){
            die(json_encode(['accredited' => false, 'status' => $point]));
        }

        CertifiedModelController::registerUser($user, $course_name);    

        $assessment = AssessmentModel::where('assessment_name', $course_name)->first();
        $user = User::where('name', $user)->first();

        die(json_encode([
            'accredited' => true,
            'status' => $point,
            'name_studant' => $user['name'],
            'cpf_studant' => $user['cpf'],
            'nr_number' => $assessment['nr_number'],
            'content' => $assessment['content_certification'],
        ]));
    }

    /**
     * Responsavel por pegar as respostas corretas
     * 
     * @param string $title
     * @return array
     */
    public function getRightAnswer($title)
    {
        $right_answer = explode(",", AssessmentModel::where('assessment_name', $title)->get('right_answer'));

        $right_answer = str_replace('[{"right_answer":"', '', $right_answer);

        $right_answer = str_replace('"}]', '', $right_answer);

        return $right_answer;
    }

}
