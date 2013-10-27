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

Route::group(array('prefix' => 'auth'), function() {
    Route::get('login', array('before' => 'guest', 'uses' => 'AuthController@getLogin'));
    Route::get('register', array('before' => 'guest', 'uses' => 'AuthController@getRegister'));
    Route::get('password-reset', array('before' => 'guest', 'uses' => 'AuthController@getPasswordReset'));
    Route::get('forgot-password', array('before' => 'guest', 'uses' => 'AuthController@getForgotPassword'));
});

Route::get('/', function()
{
	return View::make('hello');
});