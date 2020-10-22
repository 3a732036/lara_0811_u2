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

//練習 1：設定 Route 反應
/*1. 設定 Route 回傳字串
Route::get('/',function(){
    return'welcome';
});
*/

/*2. 設定 Route 回傳 view
Route::get('/',function(){
    returnview('welcome');
});
*/
/*3
Route::get('r1', function(){
    return redirect('r2');
});
Route::get('r2', function(){
    return view('welcome');
});
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//練習 2：設定 Route 接收參數
/*1. 修改 Route 接受參數*/
Route::get('hello/{name}',function($name){
    return'Hello,'.$name;
});


