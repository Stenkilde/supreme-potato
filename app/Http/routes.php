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
Route::get('weather/view', ['uses' => 'WeatherController@index', 'as' => 'weather.view']);
Route::get('weather/create', ['uses' => 'WeatherController@create', 'as' => 'weather.add']);
Route::post('weathers', ['uses' => 'WeatherController@store', 'as' => 'weather.create']);
