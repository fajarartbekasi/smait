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


Route::group(['prefix' => 'siswa'], function(){
    route::get('/', 'SiswaController@index')->name('siswa');
    route::get('/create', 'SiswaController@create')->name('siswa.create');
});

Route::group(['prefix' => 'guru'], function(){
    route::get('/', 'GuruController@index')->name('guru');
    route::get('/create', 'GuruController@create')->name('guru.create');
});
Route::group(['prefix'=>'mapel'], function(){
    route::get('/','MapelController@index')->name('mapel');
    route::get('/create','MapelController@create')->name('mapel.create');
});

Route::group(['prefix' => 'kelas'], function(){
    route::get('/', 'RuangkelasController@index')->name('kelas');
    route::get('/create', 'RuangkelasController@create')->name('kelas.create');
});

Route::group(['prefix'=> 'tahun-akademik'], function(){
    route::get('/','TahunakademikController@index')->name('tahun-akademik');
     route::get('create','TahunakademikController@create')->name('tahun-akademik.create');
});

Route::group(['prefix' => 'jurusan'], function(){
    route::get('/', 'JurusanController@index')->name('jurusan');
    route::get('create', 'JurusanController@create')->name('jurusan.create');
});

Route::group(['prefix'=>'walikelas'], function(){
    route::get('/', 'WalasController@index')->name('walikelas');
});

/**
 * pengelompokan route
 * untuk function store
 */
Route::group(['prefix' => 'simpan-data'], function(){
    route::post('mapel','MapelController@store')->name('simpan-data.mapel');
    route::post('kelas','RuangkelasController@store')->name('simpan-data.kelas');
    route::post('jurusan','JurusanController@store')->name('simpan-data.jurusan');
});

/**
 * pengelompokan route
 * untuk function edit
 */
Route::group(['[prefix' => 'ambil-form-edit'], function(){
    route::get('mapel/{mapel}', 'MapelController@edit')->name('ambil-form-edit.mapel');
    route::get('kelas/{ruang}', 'RuangkelasController@edit')->name('ambil-form-edit.kelas');
    route::get('jurusan/{jurusan}', 'JurusanController@edit')->name('ambil-form-edit.jurusan');
});

/**
 * pengelompokan route
 * untuk function update
 */
Route::group(['prefix' => 'update'], function(){
    route::patch('mapel/{mapel}', 'MapelController@update')->name('update.mapel');
    route::patch('jurusan/{jurusan}', 'JurusanController@update')->name('update.jurusan');
});

/**
 * pengelompokan route
 * untuk function delete
 */
Route::group(['prefix'=>'destroy'], function(){
    route::delete('mapel/{mapel}','MapelController@destroy')->name('destroy.mapel');
    route::delete('kelas/{ruang}','RuangkelasController@destroy')->name('destroy.kelas');
    route::delete('jurusan/{jurusan}','JurusanController@destroy')->name('destroy.jurusan');
});