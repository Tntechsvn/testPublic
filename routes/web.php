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

Route::group(['prefix'=>'admin'], function(){
	Route::get('/','AdminController@admin')->name('admin');

	Route::get('hocsinh', [
		'as' => 'admin.hocsinh',
		'uses' => 'HocSinhController@list'
	]);

	Route::get('lophoc', [
		'as' => 'admin.lophoc',
		'uses' => 'LopController@list'
	]);

	Route::get('giaovien', [
		'as' => 'admin.giaovien',
		'uses' => 'GiaoVienController@list'
	]);

	Route::get('monhoc', [
		'as' => 'admin.monhoc',
		'uses' => 'MonHocController@list'
	]);

	Route::get('bangdiem', [
		'as' => 'admin.bangdiem',
		'uses' => 'BangDiemController@list'
	]);

	Route::get('diemchitiet', [
		'as' => 'admin.diemchitiet',
		'uses' => 'BangDiemController@diemchitiet'
	]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');