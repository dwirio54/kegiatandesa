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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

Route::group(['prefix' => 'kegiatan'], function () {
    Route::get('/tampilkan', 'KegiatanController@show')->name('kegiatan.tampilkan');
    Route::get('/index', 'KegiatanController@index')->name('kegiatan.index');
    Route::get('/create{kegiatan}', 'KegiatanController@create')->name('kegiatan.create');
    Route::post('/store', 'KegiatanController@store')->name('kegiatan.store');
});

Route::group(['prefix' => 'data'], function () {
    Route::get('/rakyat', 'DataRakyatController@index')->name('data-rakyat.index');
});

Route::group(['prefix'  => 'manage-kegiatan'], function () {
    route::get('/', 'ManagekegiatanController@index')->name('manage-kegiatan');
    route::get('/add-form', 'ManagekegiatanController@create')->name('manage-kegiatan.add-form');
    route::get('/add-form/edit-kegiatan/{id}', 'ManagekegiatanController@edit')->name('manage-kegiatan.add-form.edit-kegiatan');
    route::post('/post', 'ManagekegiatanController@store')->name('manage-kegiatan.store');
    route::delete('/delete/{id}', 'ManagekegiatanController@destroy')->name('manage-kegiatan.delete');
    route::patch('/update/{activity}', 'ManagekegiatanController@update')->name('update.data.kegiatan');
});

Route::group(['prefix' => 'verifikasi-pendaftaran'], function () {
    Route::get('/verifikasi-pendaftaran', 'VerifikasiController@index')->name('verifikasi.index');
    Route::get('/ulang', 'DaftarUlangController@index')->name('verifikasi-pendaftaran.ulang');
    Route::get('/peserta', 'PesertaController@index')->name('verifikasi-pendaftaran.peserta');
    Route::patch('/accept/{register}', 'PesertaController@store')->name('verifikasi-pendaftaran.accept');
});

Route::group(['prefix' => 'laporan'], function () {
    route::get('tampilan', 'Laporan\LaporanController@cetak')->name('laporan.index');
    route::get('data', 'Laporan\DataRakyatController@rekap')->name('laporan.data');
    route::get('activity', 'Laporan\ActivityController@rekap')->name('laporan.activity');
    route::get('verified', 'Laporan\VerifikasiController@rekap')->name('laporan.verified');
    route::get('dashboard', 'Laporan\DashboardController@rekap')->name('laporan.dashboard');
});
