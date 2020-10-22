<?php

use App\Http\Controllers\HomeController;
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

//  練習 1：設定 Route 反應
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


//  練習 2：設定 Route 接收參數
/*1. 修改 Route 接受參數
Route::get('hello/{name}',function($name){
    return 'Hello,'.$name;
});
*/

/*3. 修改參數成選擇性
Route::get('hello/{name?}',function($name='Everybody'){
    return 'Hello,'.$name;
});
*/

//  練習 4：為 Route 命名
/*1. */
Route::get('hello/{name?}', function ($name='Everybody') {
    return 'Hello, '.$name;
})->name('hello.index');


//  練習 5：設定 Route 前置
/*1. 設定 dashboard路徑的 Route*/
Route::get('dashboard',function(){
    return'dashboard';
});

/*2. 設定另一個 Route 以群組包起來設定 prefix*/
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',function(){
        return 'admin dashboard';
    });
});


Route::get('/', [HomeController::class, 'index']);

Route::get('hello/{name?}', function ($name='Everybody') {
    return 'Hello, '.$name;
})->name('hello.index');
/*
 * Route::get('/', function () {
    return view('welcome');
});
*/



