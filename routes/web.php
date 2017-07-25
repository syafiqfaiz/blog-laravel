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
Route::get('/', 'PostsController@index')->name('post_index');

// post
Route::get('/posts', 'PostsController@index')->name('post_index');
Route::get('/post/{id}', 'PostsController@show')->name('post_show');

// Admin dashboard
Route::namespace('Admin')->group(function () {
    Route::get('/admin/posts', 'PostsController@index')->name('admin_post_index');
    Route::get('/admin/posts/create', 'PostsController@create')->name('admin_post_create');
    Route::get('/admin/post/{id}', 'PostsController@show')->name('admin_post_show');
    Route::post('/admin/posts', 'PostsController@store')->name('admin_post_store');
    Route::get('/admin/post/{id}/edit', 'PostsController@edit')->name('admin_post_edit');
    Route::patch('/admin/post/{id}', 'PostsController@update')->name('admin_post_update');
    Route::delete('/admin/post/{id}', 'PostsController@destroy')->name('admin_post_destroy');
});