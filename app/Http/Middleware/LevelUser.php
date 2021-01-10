<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LevelUser
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
        $user = \App\Models\User::where('username', $request->username)->first();
        if ($user->level == '0') {
            return response()->view('layout/dashboard_admin');
        } elseif ($user->level == '1') {
            return response()->view('layout/dashboard_staf');
        } elseif ($user->level == '2') {
            return response()->view('layout/dashboard_kepala');
        }
        else
        {
            return response()->view('auth.login');
        }
        
        return $next($request);
    }
}
