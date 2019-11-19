<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::patch('users/{user}', 'UserControllerr@update');
Route::delete('users/{user}', 'UserController@delete');

Route::get('posts', 'PostController@index');
Route::get('posts/{post}', 'PostController@show');
Route::get('posts/{post}/comments', 'PostController@showComments');
Route::post('posts', 'PostController@store');
Route::patch('posts/{post}', 'PostController@update');
Route::delete('posts/{post}', 'PostController@delete');

Route::get('posts/{post}/comment/{comment}', 'CommentController@show');
