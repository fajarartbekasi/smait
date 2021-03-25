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


/**
 * Pengelompokan route
 * untuk function index
 */
Route::group(['prefix' => 'ambil-data'], function(){
    route::get('siswa', 'SiswaController@index')->name('ambil-data.siswa');
    route::get('guru', 'GuruController@index')->name('ambil-data.guru');
    route::get('mapel','MapelController@index')->name('ambil-data.mapel');
    route::get('kelas', 'KelasController@index')->name('ambil-data.kelas');
    route::get('invitation','InvitationController@index')->name('ambil-data.invitation');
    route::get('walikelas', 'WalasController@index')->name('ambil-data.walikelas');
    route::get('jadwal', 'JadwalController@index')->name('ambil-data.jadwal');
    route::get('absensi', 'AbsenController@index')->name('ambil-data.absensi');
    route::get('predikat', 'PredikatController@index')->name('ambil-data.predikat');
    route::get('sikap', 'NilaisikapController@index')->name('ambil-data.sikap');
    route::get('ulangan', 'UlanganController@index')->name('ambil-data.ulangan');
    route::get('ulangan/siswa', 'Nilai\UlanganController@index')->name('ambil-data.ulangan.siswa');
    route::get('raport/siswa', 'Nilai\RaportController@index')->name('ambil-data.raport.siswa');
});
/**
 * pengelompokan route
 * untuk function create
 */
Route::group(['prefix'=> 'buat-form'], function(){
    route::get('mapel','MapelController@create')->name('buat-form.mapel');
    route::get('kelas', 'KelasController@create')->name('buat-form.kelas');
    route::get('invite','InvitationController@create')->name('buat-form.invite');


    route::get('jadwal','JadwalController@create')->name('buat-form.jadwal');
    route::get('predikat', 'PredikatController@create')->name('buat-form.predikat');
    route::get('entry-nilai', 'Nilai\UlanganController@create')->name('buat-form.entry-nilai');


    route::get('absensi-guru','AbsenController@create')->name('buat-form.absensi-guru');
});

/**
 * pengelompokan route
 * untuk function store
 */
Route::group(['prefix' => 'simpan-data'], function(){
    route::post('mapel','MapelController@store')->name('simpan-data.mapel');
    route::post('invitation','InvitationController@store')->name('simpan-data.invitation');
    route::post('kelas','KelasController@store')->name('simpan-data.kelas');
    route::post('jadwal','JadwalController@store')->name('simpan-data.jadwal');
    route::post('absensi-guru','AbsenController@store')->name('simpan-data.absensi-guru');
});

/**
 * pengelompokan route
 * untuk function edit
 */
Route::group(['[prefix' => 'ambil-form-edit'], function(){
    route::get('mapel/{mapel}', 'MapelController@edit')->name('ambil-form-edit.mapel');
    route::get('siswa/{user}','SiswaController@edit')->name('ambil-form-edit.siswa');
    route::get('guru/{user}','GuruController@edit')->name('ambil-form-edit.guru');
    route::get('walas/{user}','WalasController@edit')->name('ambil-form-edit.walas');
    route::get('kelas/{kela}','KelasController@edit')->name('ambil-form-edit.kelas');
    route::get('jadwal/{jadwal}','JadwalController@edit')->name('ambil-form-edit.jadwal');
});

/**
 * pengelompokan route
 * untuk function update
 */
Route::group(['prefix' => 'update'], function(){
    route::patch('mapel/{mapel}', 'MapelController@update')->name('update.mapel');
    route::patch('siswa/{siswa}', 'SiswaController@update')->name('update.siswa');
    route::patch('guru/{guru}', 'GuruController@update')->name('update.guru');
    route::patch('walas/{user}', 'WalasController@update')->name('update.walas');
    route::patch('kelas/{kela}', 'KelasController@update')->name('update.kelas');
    route::patch('jadwal/{jadwal}', 'JadwalController@update')->name('update.jadwal');
});

/**
 * pengelompokan route
 * untuk function delete
 */
Route::group(['prefix'=>'destroy'], function(){
    route::delete('mapel/{mapel}','MapelController@destroy')->name('destroy.mapel');
    route::delete('siswa/{user}','SiswaController@destroy')->name('destroy.siswa');
    route::delete('guru/{user}','GuruController@destroy')->name('destroy.guru');
    route::delete('kelas/{kela}','KelasController@destroy')->name('destroy.kelas');
    route::delete('jadawl/{jadwal}','JadwalController@destroy')->name('destroy.jadwal');
});

/**
 * route detail jadwal
 */
Route::group(['prefix'=>'lihat'], function(){
    route::get('jadwal/{jadwal}', 'JadwalController@show')->name('lihat.jadwal');
});