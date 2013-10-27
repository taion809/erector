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
    Route::group(array('before' => 'guest'), function() {
        Route::get('login', array('uses' => 'AuthController@getLogin'));
        Route::post('login', array('before' => 'csrf', 'uses' => 'AuthController@postLogin'));

        Route::get('register', array('uses' => 'AuthController@getRegister'));
        Route::post('register', array('before' => 'csrf', 'uses' => 'AuthController@postRegister'));

        Route::get('password-reset', array('uses' => 'AuthController@getPasswordReset'));
        Route::post('password-reset', array('before' => 'csrf', 'uses' => 'AuthController@postPasswordReset'));

        Route::get('forgot-password', array('uses' => 'AuthController@getForgotPassword'));
        Route::post('forgot-password', array('before' => 'csrf', 'uses' => 'AuthController@postForgotPassword'));
    });

    Route::get('logout', array('before' => 'auth', 'uses' => 'AuthController@getLogout'));
});

Route::get('/', function()
{
	return View::make('hello');
});