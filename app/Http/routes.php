<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Dashboard main route
Route::get('/', ['uses' => 'PagesController@dashboard', 'as' => 'home.dashboard']);
Route::get('/roadmap', ['uses' => 'PagesController@roadmap', 'as' => 'home.roadmap']);

// Compliments
Route::get('compliments', ['uses' => 'PagesController@compliment', 'as' => 'pages.compliments']);

// Weather
Route::get('weather/view', ['middleware' => 'cors', 'uses' => 'WeatherController@index', 'as' => 'weather.view']);
Route::get('weather/create', ['middleware' => 'cors', 'uses' => 'WeatherController@create', 'as' => 'weather.add']);
Route::get('weather/active', ['middleware' => 'cors', 'uses' => 'WeatherController@single', 'as' => 'weather.single']);
Route::post('weathers', ['uses' => 'WeatherController@store', 'as' => 'weather.create']);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);
