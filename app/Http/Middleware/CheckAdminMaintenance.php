<?php

namespace App\Http\Middleware;

use Closure;
class CheckAdminMaintenance 
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
        if(getenv('APP_ADMIN_MAINTENANCE') == 1)
        {
            // return redirect()->route('maintenance');
            return redirect('/pages-maintenance');
        }

        return $next($request);
    }
}
