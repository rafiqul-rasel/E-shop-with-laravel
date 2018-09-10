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

// start frontend Route
Route::get('/','frontend@index')->name('home');
Route::get('/login', 'frontend@login')->name('login');
Route::get('/404', 'frontend@not_found')->name('not.found');
Route::get('/blog', 'frontend@blog')->name('blog');
Route::get('/blog_single', 'frontend@blog_single')->name('blog.single');
Route::get('/cart', 'frontend@cart')->name('cart');
Route::get('/checkout', 'frontend@checkout')->name('checkout');
Route::get('/contact', 'frontend@contact')->name('contact');
Route::get('/product_details', 'frontend@product_details')->name('product.details');
Route::get('/shop', 'frontend@shop')->name('shop');


// End frontend Route