<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
//use Illuminate\Support\Facades\Request;
use Request;

class Authenticate extends Middleware
{
//    protected function redirectTo($request)
//    {
//        if (! $request->expectsJson()) {
//            return route('login');
//        }
//    }

    protected function redirectTo($request)
    {
        if (!$request->expectsJson()){
            if (Request::is(app()->getLocale().'/admin*'))
                return route('admin.login');
            else
                return route('login');

        }
    }

//    protected function redirectTo($request)
//    {
//        if (!$request->expectsJson()) {
//            if (Request::is(app()->getLocale() . '/admin*')) {
//                return route('admin.login');
//            }
//            elseif(Request::is(app()->getLocale() . '/director')) {
//                return route('selection');
//            }
//            elseif(Request::is(app()->getLocale() . '/supervisor')) {
//                return route('selection');
//            }
//            elseif(Request::is(app()->getLocale() . '/shiftleader')) {
//                return route('selection');
//            }
//            else {
//                return route('selection');
//            }
//        }
//    }
}
