<?php

namespace App\Http\Middleware;

use Closure;
class CheckEcommerceMaintenance 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (getenv('APP_ECOMMERCE_MAINTENANCE') == 1) 
        {
            // return redirect()->route('maintenance');
            return redirect('/pages-maintenance');
        }

        return $next($request);
    }
}
