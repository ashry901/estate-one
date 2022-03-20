<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Dashboard',
    'middleware' => 'auth:admin',
    'prefix' => 'admin'
], function () {

    Route::get('selection', 'DashboardController@select')->name('selection');

    Route::get('main', 'DashboardController@dashboard')->name('admin.dashboard');
    Route::get('logout', 'LoginController@logout')->name('admin.logout');

    Route::group(['prefix' => 'profile'], function () {
        Route::get('edit', 'ProfileController@editProfile')->name('edit.profile');
        Route::put('update', 'ProfileController@updateprofile')->name('update.profile');
    });



});




Route::group([
    'namespace' => 'Dashboard',
    'middleware' => 'guest:admin',
    'prefix' => 'admin'
], function () {
    Route::get('login', 'LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@postLogin')->name('admin.post.login');
});
