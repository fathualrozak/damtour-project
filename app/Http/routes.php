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

Route::resource('invoice', 'InvoiceController',
                ['only' => ['index', 'show']]);

Route::get('/network', ['as' => 'network.index', 'uses' => 'NetworkController@index']);
Route::post('/network', ['as' => 'network.index', 'uses' => 'NetworkController@index']);



//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
