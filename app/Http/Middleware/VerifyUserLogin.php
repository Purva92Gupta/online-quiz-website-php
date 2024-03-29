<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class VerifyUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('user_id')) {
            $request->session()->put('user_role', User::where('id', session('user_id'))->value('role_name'));

            return $next($request);
        }
        else {
            return redirect()->route('login.view');
        }
    }
}