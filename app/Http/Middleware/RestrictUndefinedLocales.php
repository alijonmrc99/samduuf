<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Http\Request;

class RestrictUndefinedLocales
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
        $available_locales = config('app.available_locales');
        $locale = $request->segment(1);

        if (!in_array($locale,$available_locales)){
            abort(404,'Localization not found');
        }

        session(['locale' => $locale]);
        App::setLocale($locale);

        return $next($request);
    }
}
