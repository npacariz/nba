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

Route::get('/', 'TeamController@index')->name('home');
Route::get('/teams/{id}', 'TeamController@show');

Route::get('/players/{player}', 'PlayerController@show');

Route::post('/user', 'RegistrationController@store');
Route::get('/register', 'RegistrationController@create');

Route::post('/login', 'SessionController@store');
Route::get('/login', 'SessionController@create')->name('login');
Route::get('/logout', 'SessionController@destroy');

Route::post('/comment/{team}/create', 'CommentController@store');
