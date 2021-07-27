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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop',function ()
{
    echo "hello";
}
);

route::get('/shop/{name?}',function ($name)
{
    if ($name){
        echo 'hello'.' '.$name. '!';
    }else{
        echo 'hello word!';
    }
});

Route::get('/login',function ()
{
    return view('login');
}
);

Route::post('/login', function (Illuminate\Http\Request $request)
{
    if ($request->username=='admin' && $request->password=='admin'){
        return view('welcome_admin');
    }
    return view('login_error');
}
);
Route::get('/discount',function ()
{
    return view('form_discount');
}
);

Route::post('/discount',function (Illuminate\Http\Request $request)
{
    $description=$request['description'];
    $price= $request['price'];
    $discount=$request['discount'];
    $discount_amount= $price*$discount*0.01;
    $discount_price= $discount_amount/($discount*0.01);

    if (isset($_REQUEST['calculate'])){
        return view('display_discount',compact(['discount_price','discount_amount','description','price','discount']));
    }
//    elseif (isset($_REQUEST['back'])){
//        return view('form_discount');
//    }


});
Route::get('/display_discount', function ()
{
    if (isset($_REQUEST['back'])){
        return view('form_discount');
    }

}
);


