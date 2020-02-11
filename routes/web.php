<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TeamsController@index')->name('home');
Route::get('/teams/{team}', 'TeamsController@show');
Route::get('/players/{player}', 'PlayerController@show');
Route::get('/register', 'RegisterController@create');
Route::get('/login', 'LoginController@create')->name('login');
Route::post('/login', 'LoginController@authenticate');
Route::get('/logout', 'LoginController@destroy');
Route::post('/register', 'RegisterController@store');
