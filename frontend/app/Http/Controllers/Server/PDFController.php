<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index()
    {
        // return view('app.modules.certified');

        // $user = User::whereName(session('session_name'))->first();
        $teste = 'teste';
        $user = [
            'teste' => $teste
        ];

        return \PDF::loadView('app.modules.certified', compact($user))->setPaper('a4', 'landscape')->stream(session('session_name').'.pdf');
    }


}
