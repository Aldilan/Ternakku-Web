<?php

use App\Http\Controllers\AuthControllerApi;
use App\Http\Controllers\CartsControllerApi;
use App\Http\Controllers\CategoryControllerApi;
use App\Http\Controllers\ProductControllerApi;
use App\Http\Controllers\UserControllerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login/user', [AuthControllerApi::class, 'LoginUser']);
Route::post('validate/user', [AuthControllerApi::class, 'ValidateUser']);
Route::post('logout/user', [AuthControllerApi::class, 'LogoutUser']);
Route::apiResource('users', UserControllerApi::class);
Route::apiResource('categories', CategoryControllerApi::class);
Route::apiResource('products', ProductControllerApi::class);
Route::apiResource('carts', CartsControllerApi::class);
