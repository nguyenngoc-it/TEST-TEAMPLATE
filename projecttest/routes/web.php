<?php

use App\Http\Controllers\AuthorController;
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


Route::get('/', [AuthorController::class,'showdata'])->name('showdata');


Route::post('/add-author', function (){
    return view('add-author');
})->name('add');
Route::post('/create-author', [AuthorController::class,'create'])->name('author-add');

Route::get('/user/profile', [UserController::class ,'profile']);

Route::resource('user', 'UserController');



