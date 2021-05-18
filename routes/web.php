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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/policy', 'HomeController@policy')->name('policy');

Route::prefix('action')->group(function () {
    Route::get('/', 'ActionsController@index')->name('actions.index');
    Route::get('/item', 'ActionsController@show')->name('actions.show');
});

Route::prefix('brand')->group(function () {
    Route::get('/', 'BrandsController@index')->name('brands.index');
    Route::get('/item', 'BrandsController@show')->name('brands.show');
});


Route::prefix('catalog')->group(function () {
    Route::get('/search', 'ProductController@search')->name('catalog.search');
    Route::get('/favorite', 'ProductController@favorite')->name('catalog.favorite');
    Route::get('/product/{slug_product}', 'ProductController@show')->name('catalog.product');
    Route::get('/{path}/', 'ProductController@index')
        ->where('path', '[a-zA-Z0-9\/-]+')
        ->name('catalog.index');
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
