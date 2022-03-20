<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    //Route::get('selection', 'DashboardController@select')->name('selection');
    Route::get('/selection', [App\Http\Controllers\Dashboard\DashboardController::class, 'select'])->name('selection');
    //Route::get('/', 'MainController@main')->name('main');
    Route::get('/', [App\Http\Controllers\Site\MainController::class, 'main'])->name('main');

});
