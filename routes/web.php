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

/*Route::get('/', function () {
    return view('welcome');
})->name('home'); */

Route::resource('content','ContentController');
Route::resource('dashboard','DashboardController');
//Route::resource('post',)
Route::post('/detail',['as'=>'detail','uses'=>'ContentController@detail']);
Route::get('/',['as'=>'post','uses'=>'DashboardController@post']);

