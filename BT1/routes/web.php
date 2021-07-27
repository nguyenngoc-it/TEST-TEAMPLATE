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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dictionary', function () {
    return view('dictionary');

});

Route::post('/dictionary', function (Illuminate\Http\Request $request) {
    $dictionary = array(
                    'hi' => 'chào',
                    'hello'=> 'xin chào'
                    );
    $english = $request['english'];
    if (isset($_REQUEST['translate'])) {
        foreach ($dictionary as $key => $value) {
            if ($english == $key) {
                $vietnamese = $value;
                return view('/dictionary', compact([    'vietnamese']));
            }
        }


    }
}
);
//Route::get('/dictionary', function () {
//    return view('dictionary');
//});
//Route::post('/dictionary', function (Illuminate\Http\Request $request) {
//        $array = array(
//            'red' => 'do',
//            'yellow' => 'vang',
//            'blue' => 'xanh nuoc bien',
//            'black' => 'den',
//            'pink' => 'hong',
//            'do' => 'red',
//            'vang' => 'yellow',
//            'xanh' => 'blue',
//            'den' => 'back',
//            'hong' => 'pink'
//        );
//        $vocabulary = $request['voca'];
//        foreach ($array as $key => $value) {
//            if ($vocabulary == $key){
//                $va = $value;
//                return view('/dictionary', compact(['vocabulary', 'va']));
//            }
//        }
//    });
