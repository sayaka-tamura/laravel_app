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

// views>helo.php を見に行く
// Route::get('/helo', function () {
//     return view('helo',['message' => 'Hello World!']);
// });

// Controllers>HeloController.php 内の function <getIndex>　を見に行く
Route::get('/helo', 'HeloController@getIndex');


//下層ページ設定
Route::get('/subpage', function () {
    return view('subpage');
});