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

    route::get('/create', 'SiswaController@create')->name('siswa.create');
});

Route::group(['prefix' => 'guru'], function(){

    route::get('/create', 'GuruController@create')->name('guru.create');
});
Route::group(['prefix'=>'mapel'], function(){

    route::get('/create','MapelController@create')->name('mapel.create');
});

Route::group(['prefix' => 'kelas'], function(){

    route::get('/create', 'RuangkelasController@create')->name('kelas.create');
});


Route::group(['prefix' => 'jurusan'], function(){

    route::get('create', 'JurusanController@create')->name('jurusan.create');
});

Route::group(['prefix'=> 'users'], function(){

    route::get('invite','InvitationController@create')->name('users.invite');
});

/**
 * Pengelompokan route
 * untuk function index
 */
Route::group(['prefix' => 'ambil-data'], function(){
    route::get('siswa', 'SiswaController@index')->name('ambil-data.siswa');
    route::get('guru', 'GuruController@index')->name('ambil-data.guru');
    route::get('mapel','MapelController@index')->name('ambil-data.mapel');
    route::get('jurusan', 'JurusanController@index')->name('ambil-data.jurusan');
    route::get('kelas', 'RuangkelasController@index')->name('ambil-data.kelas');
    route::get('ambil-data','InvitationController@index')->name('ambil-data.users');
    route::get('walikelas', 'WalasController@index')->name('ambil-data.walikelas');
});

/**
 * pengelompokan route
 * untuk function store
 */
Route::group(['prefix' => 'simpan-data'], function(){
    route::post('mapel','MapelController@store')->name('simpan-data.mapel');
    route::post('kelas','RuangkelasController@store')->name('simpan-data.kelas');
    route::post('jurusan','JurusanController@store')->name('simpan-data.jurusan');
    route::post('invitation','InvitationController@store')->name('simpan-data.invitation');
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