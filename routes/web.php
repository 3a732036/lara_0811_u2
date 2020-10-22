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

/*2. 設定 Route 回傳 view*/
Route::get('/',function(){
    returnview('welcome');
});

/*
Route::get('/', function () {
    return view('welcome');
});
*/
