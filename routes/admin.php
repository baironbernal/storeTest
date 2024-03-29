<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::resource('user', 'Admin\UserController');
Route::resource('store', 'Admin\StoreController');
Route::resource('category', 'Admin\CategoryController');
Route::resource('product', 'Admin\ProductController');
