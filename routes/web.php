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

route::get('/nav', function(){
	return view('layouts/nav');
});

// route::get('/diagnosa', function(){
	// return get('v_diagnosa');
// });

// route::get('hasildiagnosa', function(){
// 	return view('v_hasil_diagnosa');
// });

route::resource('diagnosa', 'c_diagnosa');
route::get('/diagnosacoba', 'c_diagnosa@cekdiagnosa')->name('diagnosacoba');
route::get('kembali', 'c_diagnosa@updatestatus')->name('kembali');

route::resource('informasi', 'c_informasi');
// route::resource('pertanyaan','c_pertanyaan_diagnosa');

// route::get('tanya/{id}', 'c_pertanyaan_diagnosa@show');