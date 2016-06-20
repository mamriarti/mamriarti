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

Route::get('/', 'PagesController@indexpage');


//Route::get('articles','ArticlesController@articles');
//Route::get('articles/create','ArticlesController@create');
//Route::get('article/{id}','ArticlesController@article');
//Route::post('articles','ArticlesController@store');

Route::resource('articles','ArticlesController');

//Route::controllers([
//    'auth' => 'Auth\AuthController',
//    'password' => 'Auth\PasswordController',
//]);




Route::auth();

Route::get('/home', 'HomeController@index');
