<?php

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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::resource('customers','CustomerController');

Route::prefix('customer')->group(function (){
    Route::get('index',function (){
//       echo 'hien thi danh sach khach hang';
        return view('modules.customer.index');
    });
    Route::get('create', function (){
        //hien thi form tao khach hang
    });
    Route::post('store', function (){
        //xu ly du lieu tao khach hang thong qua phuong thuc POST tu form

    });
    Route::get('{id}/show', function (){
        //hien thi thong tin chi tiet khach hang co ma dinh danh id
    });
    Route::get('{id}/edit',function (){
        //hien thi form chinh sua thong tin khach hang
    });
    Route::patch('{id}/update', function (){
        //xu ly luu du lieu thong tin khach hang dc chinh sua thong qua PATCH tu form
    });
    Route::delete('{id}',function (){
        //xoa thong tin du lieu khach hang
    });
});
