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

Route::group(['middleware' => ['auth']], function(){
	Route::post('employee', 'EmployeeController@insert');
	Route::get('employee', 'EmployeeController@fetchEmployee');
	Route::get('job/create', 'JobController@creatingJob');
});


