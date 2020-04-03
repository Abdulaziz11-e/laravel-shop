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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::name('home')->get('/', 'ShopController@index');
Route::name('product')->get('/product/{id}', 'ShopController@product');
Route::name('cart')->get('/cart', 'ShopController@cart');
Route::name('tocart')->post('/tocart', 'ShopController@tocart');
Route::name('clearall')->post('/clearall', 'ShopController@clearall');
Route::name('clearone')->post('/clearone', 'ShopController@clearone');
Route::name('mailer')->post('/mailer', 'ShopController@mailer');

 // Route::name('home')->get('/', 'Each\HomeController@index');
 // Route::name('product')->get('/product', 'Each\ShopController@index');
 // Route::name('cart')->get('/cart', 'Each\CartController@index');

