<?php

use App\Http\Controllers\ProductController;
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

Route::get('user',function ()
{
    return view('backend.users.user');
});
Route::get('/', function () {
    return view('backend.master');
});


Route::prefix('products')->group(function (){
    Route::get('/abc', [ProductController::class,'showProduct'])->name('product.index');
    Route::get('/', [ProductController::class,'index'])->name('product.index');
    Route::get('/create', [ProductController::class,'create'])->name('product.create');
    Route::post('/create', [ProductController::class,'store'])->name('product.store');
    Route::post('/update/{id}', [ProductController::class,'update'])->name('product.update');
    Route::get('/edit/{id}', [ProductController::class,'edit'])->name('product.edit');
    Route::get('/delete/{id}', [ProductController::class,'destroy'])->name('product.destroy');
});
