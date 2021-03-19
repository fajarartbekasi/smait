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
    route::get('jurusan', 'JurusanController@index')->name('ambil-data.jurusan');
    route::get('ruang', 'RuangkelasController@index')->name('ambil-data.ruang');
    route::get('kelas', 'KelasController@index')->name('ambil-data.kelas');
    route::get('invitation','InvitationController@index')->name('ambil-data.invitation');
    route::get('walikelas', 'WalasController@index')->name('ambil-data.walikelas');
    route::get('jadwal', 'JadwalController@index')->name('ambil-data.jadwal');
});
/**
 * pengelompokan route
 * untuk function create
 */
Route::group(['prefix'=> 'buat-form'], function(){
    route::get('mapel','MapelController@create')->name('buat-form.mapel');
    route::get('ruang', 'RuangkelasController@create')->name('buat-form.ruang');
    route::get('kelas', 'KelasController@create')->name('buat-form.kelas');
    route::get('jurusan', 'JurusanController@create')->name('buat-form.jurusan');
    route::get('invite','InvitationController@create')->name('buat-form.invite');


    route::get('jadwal','JadwalController@create')->name('buat-form.jadwal');
});

/**
 * pengelompokan route
 * untuk function store
 */
Route::group(['prefix' => 'simpan-data'], function(){
    route::post('mapel','MapelController@store')->name('simpan-data.mapel');
    route::post('ruang','RuangkelasController@store')->name('simpan-data.ruang');
    route::post('jurusan','JurusanController@store')->name('simpan-data.jurusan');
    route::post('invitation','InvitationController@store')->name('simpan-data.invitation');
    route::post('kelas','KelasController@store')->name('simpan-data.kelas');
    route::post('jadwal','JadwalController@store')->name('simpan-data.jadwal');
});

/**
 * pengelompokan route
 * untuk function edit
 */
Route::group(['[prefix' => 'ambil-form-edit'], function(){
    route::get('mapel/{mapel}', 'MapelController@edit')->name('ambil-form-edit.mapel');
    route::get('ruang/{ruang}', 'RuangkelasController@edit')->name('ambil-form-edit.ruang');
    route::get('jurusan/{jurusan}', 'JurusanController@edit')->name('ambil-form-edit.jurusan');
    route::get('siswa/{user}','SiswaController@edit')->name('ambil-form-edit.siswa');
    route::get('guru/{user}','GuruController@edit')->name('ambil-form-edit.guru');
});

/**
 * pengelompokan route
 * untuk function update
 */
Route::group(['prefix' => 'update'], function(){
    route::patch('mapel/{mapel}', 'MapelController@update')->name('update.mapel');
    route::patch('ruang/{ruang}', 'RuangkelasController@update')->name('update.ruang');
    route::patch('jurusan/{jurusan}', 'JurusanController@update')->name('update.jurusan');
    route::patch('siswa/{siswa}', 'SiswaController@update')->name('update.siswa');
    route::patch('guru/{guru}', 'GuruController@update')->name('update.guru');
});

/**
 * pengelompokan route
 * untuk function delete
 */
Route::group(['prefix'=>'destroy'], function(){
    route::delete('mapel/{mapel}','MapelController@destroy')->name('destroy.mapel');
    route::delete('ruang/{ruang}','RuangkelasController@destroy')->name('destroy.ruang');
    route::delete('jurusan/{jurusan}','JurusanController@destroy')->name('destroy.jurusan');
    route::delete('siswa/{user}','SiswaController@destroy')->name('destroy.siswa');
    route::delete('guru/{user}','GuruController@destroy')->name('destroy.guru');
});