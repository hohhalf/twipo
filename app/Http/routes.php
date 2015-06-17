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

Route::get('/', 'TwipsController@welcome');

Route::get('/create', 'TwipsController@create');

Route::get('/{id}', 'TwipsController@single_twip');

Route::post('/create', 'TwipsController@store');

Route::get('/{id}/edit', 'TwipsController@edit');

Route::patch('/{id}/edit', 'TwipsController@update');