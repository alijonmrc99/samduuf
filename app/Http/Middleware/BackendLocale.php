<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BackendLocale
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
        if ($request->segment(1) == 'admin'){
            app()->setLocale('en');
        }
        return $next($request);
    }
}
