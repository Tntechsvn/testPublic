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
	Route::get('/','AdminController@admin')->name('admin');

	Route::get('hocsinh','HocSinhController@list');


	// Lớp

	Route::get('lop',[
		'as' =>'lophoc',
		'uses' => 'LopController@list'
	]);

	Route::get('lop/create_lop',[
		'as' => 'create_lop',
		'uses' => 'LopController@createlop'
	]);


	// end lớp

	//Route::get('giaovien','GiaoVienController@list');

	

	Route::get('bangdiem','BangDiemController@list');


//	khóa học	//

	Route::get('khoahoc',[
		'as' => 'khoahoc',
		'uses' => 'KhoahocController@index'
	]);

	Route::get('khoahoc/themkhoahoc',[
		'as' => 'create_khoahoc',
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
//	end khóa học

	Route::get('diemchitiet','BangDiemController@diemchitiet');


// Môn học  //
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



// Route::group(['prefix'=>'admin'], function(){
// 	Route::get('/','AdminController@admin')->name('admin');

// 	Route::get('hocsinh', [
// 		'as' => 'admin.hocsinh',
// 		'uses' => 'HocSinhController@list'
// 	]);

// 	Route::get('lophoc', [
// 		'as' => 'admin.lophoc',
// 		'uses' => 'LopController@list'
// 	]);

// 	// Route::get('giaovien', [
// 	// 	'as' => 'admin.giaovien',
// 	// 	'uses' => 'GiaoVienController@list'
// 	// ]);

// 	Route::get('monhoc', [
// 		'as' => 'admin.monhoc',
// 		'uses' => 'MonHocController@list'
// 	]);

// 	Route::get('bangdiem', [
// 		'as' => 'admin.bangdiem',
// 		'uses' => 'BangDiemController@list'
// 	]);

// 	Route::get('diemchitiet', [
// 		'as' => 'admin.diemchitiet',
// 		'uses' => 'BangDiemController@diemchitiet'
// 	]);
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

///////////////hungpro

Route::group(['prefix'=>'giaovien'], function(){
	Route::get('/',[
		'as'=> 'giaovien',
		'uses' => 'GiaoVienController@index'
	]);

	Route::get('list_hoc_sinh', [
		'as' => 'qlhocsinh',
		'uses' => 'GiaoVienController@qlhocsinh'
	]);
});
