<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() && Auth::user()->is_admin == 1) {
                // return redirect(RouteServiceProvider::HOME);
                return redirect()->route('admin.index');
            }elseif(Auth::guard($guard)->check() && Auth::user()->is_agent == 1){
                return redirect()->route('agent-member.index');
            }elseif(Auth::guard($guard)->check() && Auth::user()->is_agent != 1 && Auth::user()->is_admin != 1){
                return redirect()->route('index');
            }
        }

        return $next($request);
    }
}
