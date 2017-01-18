<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'EntranceController@index');

// Chruch

Route::group(array('prefix' => 'church', 'namespace' => 'Church'), function () {
    Route::get('/', 'HomeController@index');
    Route::get('/contact', 'ContactUsController@create');
    Route::post('/contact', ['as'=>'contactus.store','uses'=>'ContactUsController@store']);
});


// Bible College


// Admin

Route::group(array('prefix' => 'admin', 'namespace' => 'Admin'), function () {
    Route::get('/', 'HomeController@index');
});