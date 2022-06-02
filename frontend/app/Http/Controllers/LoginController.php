<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Client\HomeController;
use App\Models\Admin\ClassModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\SessionModel;
use App\Models\LoginModel;
use App\Models\User;
use PHPUnit\Framework\Constraint\Count;

class LoginController extends Controller 
{
    public function index(HomeController $home)
    {   
        if(!session('login') == true ){
            return response()->view('login');
        }

        return $home->index();
    }

    public function access(Request $request, HomeController $home)
    {
        if( !$request->filled('user') || !$request->filled('password') )
            return json_encode([
                'error' => true,
                    'menssage' => 'Campos vazios não são permitidos'
            ]);

        if( !isset($request->_token) || !$request->filled('_token') )
            return json_encode([
                'error' => true,
                    'menssage' => 'Requisição não permitida'
            ]);

        $user = LoginModel::where('mail', $request->user)
                            ->where('password', $request->password)
                                ->get()
                                    ->first();        

        if(!isset($user->id))
            return json_encode([
                'error' => true,
                    'menssage' => 'Dados inválidos'
            ]);
        
        $session = SessionModel::where('mail', $user->mail)->get();

        if($session->count() >= 1)
            DB::table('sessions')
                ->where('mail', $user->mail)
                    ->delete();

        SessionModel::create([ 
                        'mail' => $user->mail, 
                            'token' => $user->token
                        ]);

        session(['login' => true, 
                    'session_token' => $user->token,
                        'session_name' => $user->name,
                            // 'session_cpf' => ''
        ]);

        return json_encode([
            'success' => true,
        ]);
    }

    public function destroy()
    {
        session()->flush(); 
        return redirect()->route('login');
    }

   
    
}
