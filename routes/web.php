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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// post
// Route::get(['/posts', '/'], 'PostsController@index')->name('post_index');
Route::get('/post/create', 'PostsController@create')->name('post_create');
Route::get('/post/{id}', 'PostsController@show')->name('post_show');
Route::post('/posts', 'PostsController@store')->name('post_store');
Route::get('/post/{id}/edit', 'PostsController@edit')->name('post_edit');

