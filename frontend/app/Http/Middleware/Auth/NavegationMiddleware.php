<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Illuminate\Http\Request;
use App\Models\Admin\SessionModel;

class NavegationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $session = SessionModel::where('token', session('session_token'))
            ->get()
                ->first();

        if(!isset($session->id)){
            session()->flush(); 
            return redirect()->route('login');
        }

        return $next($request);
    }
}
