<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Request;

class RedirectIfAuthenticated
{
//    public function handle(Request $request, Closure $next, ...$guards)
//    {
//        $guards = empty($guards) ? [null] : $guards;
//
//        foreach ($guards as $guard) {
//            if (Auth::guard($guard)->check()) {
//                return redirect(RouteServiceProvider::HOME);
//            }
//        }
//        return $next($request);
//    }

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if($guard === 'admin')
                return redirect(RouteServiceProvider::ADMIN);
            else
                return redirect(RouteServiceProvider::HOME);
        }

        if (Auth::guard($guard)->check()) {
            if($guard === 'director')
                return redirect(RouteServiceProvider::DIRECTOR);
            else
                return redirect(RouteServiceProvider::HOME);
        }
        return $next($request);
    }

//    public function handle($request, Closure $next)
//    {
//        if (auth('web')->check()) {
//            return redirect(RouteServiceProvider::HOME);
//        }
//        if (auth('admin')->check()) {
//            return redirect(RouteServiceProvider::ADMIN);
//        }
//        if (auth('director')->check()) {
//            return redirect(RouteServiceProvider::DIRECTOR);
//        }
//        if (auth('supervisor')->check()) {
//            return redirect(RouteServiceProvider::SUPERVISOR);
//        }
//        if (auth('shiftleader')->check()) {
//            return redirect(RouteServiceProvider::SHIFTLEADER);
//        }
//        return $next($request);
//    }
}
