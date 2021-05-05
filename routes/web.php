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

/*Route::get('/', 'HomeController@index')->name('home');

Route::get('/{slug_category}/', 'ProductController@index')->name('catalog');
Route::get('/catalog/{slug_category}', 'ProductController@category')->name('category');
Route::get('/catalog/{slug_brand}', 'ProductController@brand')->name('brand');
Route::get('/catalog/{slug_category}/{slug_product}', 'ProductController@show')->name('product');*/

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('catalog')->group(function () {
    Route::get('/search', 'ProductController@search')->name('catalog.search');
    Route::get('/{slug_category}', 'ProductController@index')->name('catalog.index');
    Route::get('/category/{slug_category}', 'ProductController@category')->name('catalog.category');
    Route::get('/brand/{slug_brand}', 'ProductController@brand')->name('catalog.brand');
    Route::get('/product/{slug_product}', 'ProductController@show')->name('catalog.product');
});

Route::prefix('basket')->group(function () {
    Route::get('/index', 'BasketController@index')->name('basket.index');
    Route::get('/checkout', 'BasketController@checkout')->name('basket.checkout');


    // Route::post('/plus/{id}', 'BasketController@plus')
    //     ->where('id', '[0-9]+')
    //     ->name('basket.plus');
    // Route::post('/minus/{id}', 'BasketController@minus')
    //     ->where('id', '[0-9]+')
    //     ->name('basket.minus');
    // Route::post('/remove/{id}', 'BasketController@remove')
    //     ->where('id', '[0-9]+')
    //     ->name('basket.remove');
    // Route::post('/clear', 'BasketController@clear')->name('basket.clear');
});
