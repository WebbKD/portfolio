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

Route::get('/', 'HomeController@index');
Route::get('/blog', 'HomeController@blogList');
Route::get('/projects', 'HomeController@projectList');
Route::get('/post', 'HomeController@viewPost');
Auth::routes();
Route::get('/admin', 'AdminController@index');
Route::get('/create-post','AdminController@createPost');
