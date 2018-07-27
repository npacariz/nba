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
Route::get('/teams/{team}', 'TeamController@show');

Route::get('/players/{player}', 'PlayerController@show');

Route::post('/user', 'RegistrationController@store');
Route::get('/register', 'RegistrationController@create');
Route::get('confirme/{user}/{token}', 'RegistrationController@verify');

Route::get('/login', 'SessionController@create')->name('login');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');



Route::post('/comment/{team}/create', 'CommentController@store');
Route::get('/forbidden', 'CommentController@show');

Route::get('/news', 'NewsController@index');
Route::get('/news/create', 'NewsController@create');
Route::post('/news/create', 'NewsController@store');
Route::get('/news/{id}', 'NewsController@show');
Route::get('/news/team/{name}', 'NewsController@teamNews');

