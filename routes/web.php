<?php

Auth::routes();

Route::get('/', function () {
	return view('v0000');
});

//ログアウトのとき"/"に遷移させる。
Route::get('/home', function () {
	return redirect('/');
});

/* -------------------------------
**  ログインユーザー認証
** ---------------------------------- */
Route::group(['middleware' => 'auth'], function() {

	Route::get('/', 'HomeController@index')->name('index');


	/* 初期設定ページ
	------------------------------------- */
	Route::namespace('setting')->prefix('setting')->name('setting.')->group(function () {
		//ホーム画面
		Route::get('index', 'SettingController@index')->name('index');
	});
;});