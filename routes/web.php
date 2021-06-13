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
    return view('v0000');
});

Route::get('/home', function () {
    return view('v0000');
});

//ホーム画面
//Route::get('/home', 'HomeController@index')->name('home');



/* =======================================
    初期設定ページ
    ====================================== */
Route::namespace('setting')->prefix('setting')->name('setting.')->group(function () {
    //ホーム画面
    Route::get('home', 'SettingController@home_setting')->name('home');
			
});
		
Auth::routes();

