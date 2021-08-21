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

// ユーザー
Route::namespace('User')->prefix('user')->name('user.')->group(function () {

    // ログイン認証関連
    Auth::routes();

    // ログイン認証後
    Route::middleware('auth:user')->group(function () {

        // TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);

    });
});

// ショップ
Route::namespace('Shop')->prefix('shop')->name('shop.')->group(function () {

    // ログイン認証関連
    Auth::routes();

    // ログイン認証後
    Route::middleware('auth:shop')->group(function () {

        // TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);

        Route::get('{id}/job_create', 'HomeController@job_create')->name('job_create');
    });
    
});

// 認証不要
Route::get('/', function () {
    return view('welcome');
});

// Route::prefix('shop')->namespace('Shop')->name('shop.')->group(function(){
//     Auth::routes();
// });

// Userログイン後
// Route::group(['middleware' => 'auth:user'], function() {
//     Route::get('/home', 'HomeController@index')->name('home');
// });

// Shop認証不要
// Route::prefix('shop')->middleware('auth')->group(function() {
//     Route::get('/',         function () { return redirect('/shop/home'); });
//     Route::get('login',     'Shop\LoginController@showLoginForm')->name('shop.login');
//     Route::post('login',    'Shop\LoginController@login');
// });

// Route::group(['prefix' => 'shop'], function() {
//     Route::get('/',         function () { return redirect('/shop/home'); });
//     Route::get('login',     'Shop\LoginController@showLoginForm')->name('shop.login');
//     Route::post('login',    'Shop\LoginController@login');
// });

// Shopログイン後
// Route::group(['prefix' => 'shop', 'middleware' => 'auth:shop'], function() {
//     Route::post('logout',   'Shop\LoginController@logout')->name('shop.logout');
//     Route::get('home',      'Shop\HomeController@index')->name('shop.home');
// });