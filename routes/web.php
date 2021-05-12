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
//customer
Route::get('/', 'Shop\\HomeController@index');
Route::get('{id}/category', 'Shop\\CategoryController@index')->name('shop.category');
Route::get('/search', 'Shop\\SearchController@search')->name('shop.search');
Route::get('{id}/product', 'Shop\\ProductController@index')->name('shop.product');


Route::middleware('user')->group(function(){

    //cart
    Route::get('/cart', 'Shop\\CartController@index')->name('shop.cart');
    Route::post('/add-cart', 'Shop\\CartController@addCart');
    Route::delete('/delete-cart/{id}', 'Shop\\CartController@delete');

    //order
    Route::post('/submit-order', 'Shop\\OrderController@submit');
    Route::get('/order', 'Shop\\OrderController@index');
    Route::post('/delete-order/{id}', 'Shop\\OrderController@delete');

});


//auth
Route::get('/login', 'Shop\\Auth\\LoginController@index')->name('shop.login');
Route::post('/login', 'Shop\\Auth\\LoginController@submit')->name('shop.login.submit');
Route::get('/logout', 'Shop\\Auth\\LoginController@logout')->name('shop.login.logout');
Route::post('/sigh-up', 'Shop\\Auth\\LoginController@sighUp')->name('shop.login.sigh_up');
Route::get('/checklogin', 'Shop\\Auth\\LoginController@checkLogin');


