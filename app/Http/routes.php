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

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => ['auth']], function() {
    Route::get('/', 'DashboardController@index');

    Route::get('dashboard', 'DashboardController@index');

    Route::resource('program', 'ProgramController');

    Route::resource('user', 'UserController');

    Route::resource('jamaah', 'JamaahController', ['except' => ['destroy']]);

    Route::resource('booking', 'BookingController', ['except' => ['edit', 'update', 'destroy']]);

    Route::resource('invoice', 'InvoiceController', ['only' => ['index', 'show']]);
    Route::post('invoice', 'InvoiceController@index');

    Route::get('payer', 'PayerController@index');

    Route::resource('payment', 'PaymentController');

    Route::get('/network', ['as' => 'network.index', 'uses' => 'NetworkController@index']);
    Route::post('/network', ['as' => 'network.index', 'uses' => 'NetworkController@index']);
});



