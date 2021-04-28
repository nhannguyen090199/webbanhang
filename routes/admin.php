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

Route::group(['prefix'=>'shop', 'namespace'=>'Shop', 'as'=>'shop.'  ],function(){
    Route::resource('oder',function (){} ,[
        'names' => [
            'index' => 'oder',
            'edit' => 'oder.edit',
            'create' => 'oder.create',
            'store' => 'oder.store',
            'show' => 'oder.show',
            'update' => 'oder.update',
            'destroy' => 'oder.destroy',
        ]]);
});
