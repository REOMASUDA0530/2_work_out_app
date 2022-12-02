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

Route::get('/', 'PostController@index');

Auth::routes();

Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/posts/{post}', 'PostController@show');

Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');

Route::delete('/posts/{post}', 'PostController@delete');

Route::get('/users/{user}', 'UserController@index');

Route::get('/training_events/{training_event}', 'Training_eventController@index');


// Likeボタン
Route::get('/reply/like/{post}', 'LikeController@like')->name('like');
Route::get('/reply/unlike/{post}', 'LikeController@unlike')->name('unlike');