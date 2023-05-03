<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControllerWeb;
use App\Http\Controllers\ProductControllerWeb;
use App\Http\Controllers\CategoryControllerWeb;
use App\Http\Controllers\DashboardControllerWeb;
use App\Http\Controllers\UserControllerWeb;
use App\Http\Controllers\TransactionControllerWeb;
use App\Http\Controllers\ReviewControllerWeb;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('auth', AuthControllerWeb::class);
Route::resource('product', ProductControllerWeb::class)->middleware('auth:admin');
Route::resource('category', CategoryControllerWeb::class)->middleware('auth:admin');
Route::resource('customer', UserControllerWeb::class)->middleware('auth:admin');
Route::resource('order', TransactionControllerWeb::class)->middleware('auth:admin');
Route::resource('rating', ReviewControllerWeb::class)->middleware('auth:admin');
Route::resource('/', DashboardControllerWeb::class)->middleware('auth:admin');
