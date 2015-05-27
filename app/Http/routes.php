<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'DashboardController@index');

Route::get('dashboard', 'DashboardController@iindex');

Route::resource('program', 'ProgramController');

Route::resource('jamaah', 'JamaahController',
                ['except' => ['destroy']]);

Route::resource('booking', 'BookingController',
                ['except' => ['edit', 'update', 'destroy']]);

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
