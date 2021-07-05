<?php

use App\Utils\MarketBaskets;
use App\Utils\MarketFavorites;
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

$favoritesInst = MarketFavorites::createInstance();
$basketInst = MarketBaskets::createInstance();

Route::get('/study', function () {
    return view('study');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/policy', 'HomeController@policy')->name('policy');
Route::get('/public', 'HomeController@public')->name('public');
Route::get('/scores', 'HomeController@scores')->name('scores');
Route::get('/provider', 'HomeController@provider')->name('provider');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/delivery', 'HomeController@delivery')->name('delivery');

Route::get('/login', 'LoginController@login')->name('login');



Route::prefix('subscribe')->group(function () {
    Route::get('/', 'HomeController@subscribeIndex')->name('subscribe.index');
    Route::get('/item', 'HomeController@subscribeShow')->name('subscribe.show');
});

Route::prefix('promotions')->group(function () {
    Route::get('/', 'PromotionsController@index')->name('promotions.index');
    Route::get('/{slug_promotion}', 'PromotionsController@show')->name('promotions.show');
});

Route::prefix('brands')->group(function () {
    Route::get('/', 'BrandsController@index')->name('brands.index');
    Route::get('/{letter}', 'BrandsController@show')->name('brands.show');
});


Route::prefix('catalog')->group(function () {
    Route::get('/search', 'ProductController@search')->name('catalog.search');
    Route::get('/favorite', 'ProductController@favorite')->name('catalog.favorite');
    Route::get('/product/{slug_product}', 'ProductController@show')->name('catalog.product');
    Route::get('/brand/{slug_brand}', 'BrandsController@catalog')->name('catalog.brand');
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


