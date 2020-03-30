<?php

use Illuminate\Support\Facades\Route;

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
// Component
Route::get('/','HomeController@index');

// Http Client

// index
Route::get('/posts','ClientController@getAllPosts');
// show
Route::get('/posts/{id}','ClientController@getPostById');
// store
Route::get('/add-post','ClientController@addPost');
// update
Route::get('/update-post','ClientController@updatePost');
// delete
Route::get('/delete-post/{id}','ClientController@deletePost');

// Fluent String

Route::get('/test','TestController@index');