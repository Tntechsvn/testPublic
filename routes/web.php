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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'checkuser','prefix'=>'admin'], function(){
	Route::get('/','AdminController@admin');

	Route::get('hocsinh','HocSinhController@list');

	Route::get('lop','LopController@list');

	Route::get('giaovien','GiaoVienController@list');

	Route::get('monhoc','MonHocController@list');

	Route::get('bangdiem','BangDiemController@list');

	Route::get('diemchitiet','BangDiemController@diemchitiet');
});


