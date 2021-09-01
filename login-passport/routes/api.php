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

Route::post('register',[\App\Http\Controllers\PassportAuthController::class,'register']);
Route::post('login',[\App\Http\Controllers\PassportAuthController::class,'login']);
Route::post('forgot',[\App\Http\Controllers\PassportAuthController::class,'forgot']);
