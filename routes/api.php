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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('basket')->group(function () {
    Route::post('/change-product-quantity', 'BasketController@changeProductQuantity')
        ->name('basket.quantity');
    Route::post('/add/{id}', 'BasketController@add')
        ->where('id', '[0-9]+')
        ->name('basket.add');
});
