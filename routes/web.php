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
    return view('auth.login');
})->name('/');

Route::group(['prefix'=>'admin', 'middleware'=>'checkuser'], function(){
	Route::get('/','AdminController@admin')->name('admin');

	Route::group(['prefix'=>'user'], function(){
		Route::get('list', [
			'as' => 'user.list',
			'uses' => 'AdminController@list'
		]);

		Route::get('/add', [
			'as' => 'user.add',
			'uses' => 'AdminController@add'
		]);

		Route::post('/add', 'AdminController@postAdd');

	    Route::get('/edit/{id}', [
			'as' => 'user.edit',
			'uses' => 'AdminController@getEdit'
		]);
		Route::post('/edit/{id}', 'AdminController@postEdit');

		Route::get('/delete/{id}', [
			'as' => 'user.delete',
			'uses' => 'AdminController@getDelete'
		]);
	});

	Route::group(['prefix'=>'hocsinh'], function(){
		Route::get('list', [
			'as' => 'hocsinh.list',
			'uses' => 'HocSinhController@list'
		]);

		Route::get('/add', [
			'as' => 'hocsinh.add',
			'uses' => 'HocSinhController@getAdd'
		]);

		Route::post('/add', 'HocSinhController@postAdd');

	    Route::get('/edit/{id}', [
			'as' => 'hocsinh.edit',
			'uses' => 'HocSinhController@getEdit'
		]);
		Route::post('/edit/{id}', 'HocSinhController@postEdit');

		Route::get('/delete/{id}', [
			'as' => 'hocsinh.delete',
			'uses' => 'HocSinhController@getDelete'
		]);
	});

	Route::group(['prefix'=>'giaovien'], function(){
		Route::get('list', [
			'as' => 'giaovien.list',
			'uses' => 'GiaoVienController@list'
		]);

		Route::get('/add', [
			'as' => 'giaovien.add',
			'uses' => 'GiaoVienController@getAdd'
		]);

		Route::post('/add', 'GiaoVienController@postAdd');

	    Route::get('/edit/{id}', [
			'as' => 'giaovien.edit',
			'uses' => 'GiaoVienController@getEdit'
		]);
		Route::post('/edit/{id}', 'GiaoVienController@postEdit');

		Route::get('/delete/{id}', [
			'as' => 'giaovien.delete',
			'uses' => 'GiaoVienController@getDelete'
		]);
	});

	Route::group(['prefix'=>'lop'], function(){
		Route::get('add',[
			'as' => 'lop.add',
			'uses' => 'LopController@getAdd'
		]);
	});

	Route::group(['prefix'=>'khoahoc'], function(){
		Route::get('list',[
			'as' => 'khoahoc.list',
			'uses' => 'KhoahocController@index'
		]);

		Route::get('add',[
			'as' => 'khoahoc.add',
			'uses' => 'KhoahocController@showcreate'
		]);

		Route::get('khoahoc/suakhoahoc/{id}',[
			'as' => 'editshowkh',
			'uses' => 'KhoahocController@showedit'
		]);

		Route::get('khoahoc/xoa/{id}',[
			'as' => 'deletekh',
			'uses' => 'KhoahocController@destroy'
		]);

		Route::post('khoahoc/themkhoahoc',[
			'as' => 'createkhoahoc',
			'uses' => 'KhoahocController@create'
		]);
	});

	Route::get('bangdiem','BangDiemController@list');

	Route::get('diemchitiet','BangDiemController@diemchitiet');

	Route::get('monhoc',[
		'as' => 'monhoc',
		'uses'=> 'MonHocController@list'
	]);

	Route::get('monhoc/themmonhoc',[
		'as' => 'create.monhoc',
		'uses'=> 'MonHocController@showcreate'
	]);

	Route::get('monhoc/suamonhoc/{id}',[
		'as' => 'showedit.monhoc',
		'uses'=> 'MonHocController@showedit'
	]);

	Route::post('monhoc/themmonhoc',[
		'as' => 'create_monhoc',
		'uses'=> 'MonHocController@create'
	]);

	Route::get('monhoc/xoa/{id}',[
		'as' => 'deletemh',
		'uses' => 'MonHocController@destroy'
	]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['prefix'=>'giaovien'], function(){
// 	Route::get('/',[
// 		'as'=> 'giaovien',
// 		'uses' => 'GiaoVienController@index'
// 	]);

// 	Route::get('list_hoc_sinh', [
// 		'as' => 'qlhocsinh',
// 		'uses' => 'GiaoVienController@qlhocsinh'
// 	]);
// });
