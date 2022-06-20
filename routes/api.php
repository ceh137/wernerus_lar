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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/order/cities_to', [\App\Http\Controllers\Api\Order::class, 'cities_to'])->name('order.cities_to');
Route::get('/order/cities_from', [\App\Http\Controllers\Api\Order::class, 'cities_from'])->name('order.cities_from');
//Route::get('/order/types', [\App\Http\Controllers\Api\Order::class, 'types'])->name('order.types');



