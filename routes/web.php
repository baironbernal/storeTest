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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{category_name}/{id}', 'Store\StoreController@viewCategory')->name('view.category');

/*
|--------------------------------------------------------------------------
| Add To Cart
|--------------------------------------------------------------------------
*/
Route::post('cart-add', 'Store\CartController@addToCart')->name('cart.add');
Route::get('carrito', 'Store\CartController@index')->name('cart.get');
Route::post('cart-remove', 'Store\CartController@removeItemCart')->name('cart.remove');
