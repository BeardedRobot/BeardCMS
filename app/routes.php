<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Admin Routes
Route::controller('admin/login', 'LoginController');
Route::get('admin/logout', 'LoginController@getLogout');

Route::group(['prefix' => 'admin', 'before' => 'auth'], function() {
    Route::resource('page', 'AdminPageController');

    Route::controller('/', 'AdminDashboardController');
});

Route::any('{slug}', 'PageController@showPage')->where('slug', '(.*)');