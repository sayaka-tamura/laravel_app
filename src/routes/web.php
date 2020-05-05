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

// views>helo.php を見に行く (url: /helo)
// Route::get('/helo', function () {
//     return view('helo',['message' => 'Hello World!']);
// });

// Controllers>HeloController.php 内の function <getIndex>　を見に行く (url: /helo)
Route::get('/simpleForm/helo', 'HeloController@getIndex');
// Controllers>HeloController.php 内の function <getIndex>　を見に行く (url: /helo)
Route::post('/simpleForm/helo', 'HeloController@postIndex');

// Controllers>HeloController.php 内の function <postIndex>　を見に行く (url:/send)
// Route::post('/send','HeloController@postIndex');

// For Show About Page (url:/about)
Route::get('/TitleAndLink/about', 'AboutController@getIndex');

//下層ページ設定
Route::get('/subpage', function () {
    return view('subpage');
});

// For Validation on ValiDemoController or ValiDemoRequest 
# 入力画面
Route::get('/validation', [
    'uses' => 'ValiDemoController@getIndex',
    'as' => 'validation.index'
]);

# 確認画面
Route::post('/validation/confirm', [
    'uses' => 'ValiDemoController@confirm',
    'as' => 'validation.confirm'
]);

// For Bootstrap4 HTML Validation
Route::get('/index', function(){
    return view('/bootstrap_htmlValidation/index');
});

// For Bootstrap4 HTML x Laravel Validation
Route::get('/contact', 'ContactController@input');         // GETメソッドでアクセスした場合は「入力画面」
Route::patch('/contact', 'ContactController@confirm');     // PATCHメソッドでアクセスした場合は「確認画面」
// Route::post('contact/', 'ContactController@finish'); 今回はここはしません       // POSTメソッドでアクセスした場合は「完了画面」

// For inserting data to DB from input form
# 入力画面
Route::get('/request', [
    'uses' => 'InsertDemoController@getIndex',
    'as' => 'insert.index'
]);

# 確認画面
Route::post('/request/confirm', [
    'uses' => 'InsertDemoController@confirm',
    'as' => 'insert.confirm'
]);

# 完了画面
Route::post('insert/finish', [
    'uses' => 'InsertDemoController@finish',
    'as' => 'insert.finish'
]);