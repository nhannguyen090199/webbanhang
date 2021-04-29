<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/', function (){
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::group(['prefix'=>'shop', 'namespace'=>'Shop', 'as'=>'admin.shop.'],function(){
    Route::resource('order','OrderController',[
        'names' => [
            'index' => 'order',
            'edit' => 'order.edit',
            'create' => 'order.create',
            'store' => 'order.store',
            'show' => 'order.show',
            'update' => 'order.update',
            'destroy' => 'order.destroy',
        ]]);
    Route::resource('product','ProductController',[
        'names' => [
            'index' => 'product',
            'edit' => 'product.edit',
            'create' => 'product.create',
            'store' => 'product.store',
            'show' => 'product.show',
            'update' => 'product.update',
            'destroy' => 'product.destroy',
        ]]);
    Route::resource('category','CategoryController',[
        'names' => [
            'index' => 'category',
            'edit' => 'category.edit',
            'create' => 'category.create',
            'store' => 'category.store',
            'show' => 'category.show',
            'update' => 'category.update',
            'destroy' => 'category.destroy',
        ]]);
});
