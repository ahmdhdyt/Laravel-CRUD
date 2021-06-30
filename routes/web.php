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

Route::get('mahasiswa', 'MahasiswaController@index');

Route::get('mahasiswa-tambah','MahasiswaController@tambah');

Route::get('makul','MakulController@index')->name('index.makul');

Route::get('makul-tambah','MakulController@tambah')->name('tmbh.makul');

Route::post('simpan-makul','MakulController@simpan')->name('save.makul');

Route::get('edit-makul/{id}','MakulController@edit')->name('makul.edit');

Route::post('update-makul/{id}','MakulController@update')->name('makul.update');

Route::get('hapus-makul/{id}','MakulController@delete')->name('makul.hapus');