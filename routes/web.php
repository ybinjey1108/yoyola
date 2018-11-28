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
// 首頁
Route::get('/yoyola','YoyolaController@index');//首頁
Route::get('/yoyola/logout','YoyolaController@logout'); //登出

Route::get('/yoyola/login','YoyolaController@login');   //登入
Route::post('/yoyola/login','YoyolaController@logincheck'); //登入驗證

Route::get('/yoyola/sign','YoyolaController@sign');   //註冊
Route::post('/yoyola/sign','YoyolaController@signcheck');   //註冊驗證

//Product
Route::get('/yoyola/Product','ProductController@index'); //產品頁 

//support
Route::get('/support','SupportController@index');
Route::post('/support','SupportController@update');
Route::delete('/support/{support}','SupportController@destroy');













Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
