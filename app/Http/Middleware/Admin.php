<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if( Auth::check() && Auth::user()->is_admin == 1 || Auth::user()->is_super_admin == 1 && Auth::user()->is_agent == 0){
            return $next($request);
        }else{
            return redirect()->route('login');
        }
    }
}
