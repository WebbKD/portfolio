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

Route::get('/view-posts', 'AdminController@viewPosts');
Route::get('/create-post','AdminController@createPost');
Route::post('/store-post', 'AdminController@storePost');
Route::get('/edit-post/{post}', 'AdminController@editPost');
Route::post('/update-post/{post}', 'AdminController@updatePost');


Route::get('/view-categories', 'AdminController@viewCategories');
Route::get('/create-category', 'AdminController@createCategory');
Route::get('/edit-category/{category}', 'AdminController@editCategory');
Route::post('/update-category/{category}', 'AdminController@updateCategory');

Route::get('/view-tags', 'AdminController@viewTags');
Route::get('/create-tag', 'AdminController@createTag');
Route::post('/store-tag','AdminController@storeTag');

Route::post('/add-tag-to-post/{post}/{tag}', 'AdminController@storePostTag');

