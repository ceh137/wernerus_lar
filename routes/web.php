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
Route::get('/status', [IndexController::class, 'status'])->name('status');

Route::get('/contacts', [IndexController::class, 'contacts'])->name('contacts');
Route::get('/account', [\App\Http\Controllers\AccountController::class, 'account'])->middleware(['auth'])->name('account');

Route::prefix('admin')->name('admin.')->middleware(\App\Http\Middleware\EnsureUserIsAdmin::class)->group(function ()  {
    Route::resource('/application', App\Http\Controllers\Admin\ApplicationController::class)->names('application');
    Route::get('/orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('orders.index');
    Route::get('/reports', [App\Http\Controllers\Admin\ReportsController::class, 'index'])->name('reports.index');
    Route::get('/take', [App\Http\Controllers\Admin\TakeController::class, 'index'])->name('take.index');
    Route::get('/debt', [App\Http\Controllers\Admin\DebtController::class, 'index'])->name('debt.index');
    Route::get('/give', [App\Http\Controllers\Admin\GiveController::class, 'index'])->name('give.index');
    Route::get('/print', [App\Http\Controllers\Admin\PrintController::class, 'index'])->name('print.index');
    Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.index');




});
