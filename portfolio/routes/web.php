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

Route::get('/', 'homeController@index');

Auth::routes();

Route::get('/admin','AdminController@index');
//Route::get('/home', 'HomeController@index')->name('home');


Route::get('/createPost','AdminController@create');

Route::post('/storePost','AdminController@store');

Route::get('/createCategory','AdminController@createCategory');

Route::post('/storeCategory','AdminController@storeCategory');


