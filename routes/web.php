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

Route::get('/', function () {
    return view('home');
});

Route::get('/catalog/', 'ProductController@index')->name('catalog');
Route::get('/catalog/category/', 'ProductController@category')->name('category');
Route::get('/catalog/category/card-product/{id}/', 'ProductController@show')->name('product');

//Route::get('/catalog/{slug_category}/', 'ProductController@category')->name('category');
//Route::get('/catalog/{slug_category}/{slug_product}/', 'ProductController@show')->name('product');
