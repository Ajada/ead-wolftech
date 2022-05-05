<?php

namespace App\Http\Middleware\Auth;

use App\Models\Admin\TokenModel;
use Closure;
use Illuminate\Http\Request;

class QuestionMiddleware
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
        $auth_create = TokenModel::where('function', $request->function)->first();

        if(!isset($auth_create['token']) || $request->_token !== $auth_create['token'])
            return redirect('/');

        return $next($request);
    }
}
