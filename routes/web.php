<?php

// use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductController;
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

Route::get('products', 'ProductController@index')->name('product.index');
Route::get('products/create', 'ProductController@create')->name('product.create');
Route::post('products', 'ProductController@store')->name('products.store');
