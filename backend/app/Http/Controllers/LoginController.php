<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;
use App\Models\Admin\SessionsModel;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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

        $verify = LoginModel::where('mail', $request->user)
                        ->where('password', $request->password)
                            ->get()
                                ->first();        

        if(!isset($verify->id))
            return json_encode([
                'error' => true,
                'menssage' => 'Dados inválidos'
            ]);

        // criando sessão

        SessionsModel::create([ 
            'mail' => $request->user,
                'token' => $request->_token
        ]);

        return json_encode([
            'success' => true
        ]);
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
