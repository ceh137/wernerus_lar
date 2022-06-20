<?php

use App\Http\Controllers\IndexController;
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
    return view('index.index');
})->name('index');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/prices', [IndexController::class, 'prices'])->name('prices');
Route::get('/docs', [IndexController::class, 'docs'])->name('docs');
Route::get('/order', [IndexController::class, 'order'])->name('order');
Route::post('/order', [IndexController::class, 'order_post'])->name('order');
Route::post('/route_save', [IndexController::class, 'save_routes'])->name('save_routes');

Route::get('/contacts', [IndexController::class, 'contacts'])->name('contacts');
Route::get('/account', [\App\Http\Controllers\AccountController::class, 'account'])->middleware(['auth'])->name('account');

Route::prefix('admin')->name('admin.')->middleware(\App\Http\Middleware\EnsureUserIsAdmin::class)->group(function ()  {
    Route::get('/orders', [App\Http\Controllers\Admin\OrderController::class, 'index']);

});
