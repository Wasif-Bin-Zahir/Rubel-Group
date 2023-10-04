<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
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
        if ($request->has('lang')) {
            session()->put('locale', $request->get('lang'));
            App::setLocale($request->get('lang'));
        } else {
            if (session()->has('locale')) {
                $locale = session()->get('locale');
                App::setLocale($locale);
            } else {
                session()->put('locale', 'en');
                App::setLocale('en');
            }
        }
        return $next($request);
    }
}
