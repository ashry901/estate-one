<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    //Route::get('/', 'MainController@main')->name('main');
    Route::get('/', [App\Http\Controllers\Site\MainController::class, 'main'])->name('main');

});
