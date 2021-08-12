<?php

namespace App\Http\Middleware\Accesses;

use Closure;
use Illuminate\Http\Request;

class RouteAccess
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
        if ($request->user()) {
            $route_prefix = $request->segment(2);
            $route_access = config('app.route_access');
            $user_roles = $request->user()->roles()->firstOrFail();
            $roles = json_decode($user_roles->roles);

            if (in_array($route_prefix, $route_access)) {
                if (!in_array($route_prefix, $roles)) {
                    abort(403);
                }
            }
        }
        return $next($request);
    }
}
