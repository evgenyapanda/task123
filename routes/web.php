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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/index', 'IndexController@show');

Route::get('/men', 'MenController@show');
Route::get('/women', 'WomenController@show');
Route::get('/accessories', 'AccesoriesController@show');
Route::get('/about_us', 'AboutUsController@show');

Route::get('/add', 'HomeController@add');
Route::post('/add', 'HomeController@store')->name('itemStore');


