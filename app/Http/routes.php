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

Route::get('/', 'HomeController@index');

Route::get('profile', array('as' => 'profile', 'uses' => 'ProfileController@index'));
Route::get('profile/edit', 'ProfileController@edit');
Route::post('profile/update', array('as' => 'profile.update', 'uses' => 'ProfileController@update'));

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
