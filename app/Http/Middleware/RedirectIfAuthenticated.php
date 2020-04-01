<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        if($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect('/admin');
        }
        if($guard == "shop" && Auth::guard($guard)->check()) {
            return redirect('/shop');
        }
        if($guard == "service" && Auth::guard($guard)->check()) {
            return redirect()->route('service');
        }
        // if(Auth::guard($guard)->check()) {
        //     return redirect()->route('account');
        // }

        return $next($request);
    }
}
