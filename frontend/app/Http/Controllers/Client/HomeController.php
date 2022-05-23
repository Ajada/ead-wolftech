<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\ClassModel;
use Illuminate\Http\Request;
use App\Models\User;
use phpDocumentor\Reflection\Types\Void_;
use SebastianBergmann\Type\VoidType;
use function PHPUnit\Framework\returnSelf;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('token', session('session_token'))->first();

        $access = $this->courses($user);  

        return view('app.home', [
            'user' => $user->name, 
                'course' => $access,
                    'amount' => session(['quantity_courses' => $this->count($access)])
            ]);
    }

    public function courses($student)
    {
        $class = [];
        foreach ($student->courses as $key => $value) {
            $class[$key] = ClassModel::where('course_token', $value['course_token'])->first(); 
        }

        return $class;
    }

    protected function count(Array $params) 
    {
        return count($params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        die();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        die();
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
        die();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        die();
    }
}
