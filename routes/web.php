<?php

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

//強制轉型示範
Route::get('/test', function () {
    $num1 = 8 / 3;
    $num2 = (int) $num1;
    //echo ($num2);

    settype($num2, 'string');
    echo (gettype($num2));
});

//單雙引號的差異示範
Route::get('/test2',function(){
    $num = 100;
    $str1 = "$num is 100";
    $str2 = '$num is 100';
    echo ($str1);
    echo($str2);
});

//變數大小寫視為不同的示範
Route::get('/test3',function(){
    $num = 100;
    $NUM = 200;
    //dd($num);
    dd($NUM);
});

Route::get
