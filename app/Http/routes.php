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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//Account routes

Route::get('accounts','AccountsController@index');


Route::get('accounts/create', 'AccountsController@create');

Route::post('accounts', 'AccountsController@store');

Route::get('accounts/{id}', 'AccountsController@show');


//Users routes
Route::get('users', 'UsersController@index');

Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');



//Number guess game routes

Route::get('quiz','QuizController@index');


Route::post('quiz/process', 'QuizController@process');

Route::get('quiz/quit', 'QuizController@quit');


Route::post('process', 'AccountsController@transfer');

Route::get('about', 'PagesController@about');
