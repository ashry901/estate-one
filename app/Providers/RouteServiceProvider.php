<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/';
    public const ADMIN = '/admin';
    public const DIRECTOR = '/director';
    public const SUPERVISOR = '/supervisor';
    public const SHIFTLEADER = '/shiftleader';

    protected $namespace = 'App\\Http\\Controllers';

    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/director.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/supervisor.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/shiftleader.php'));
        });
    }

    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
