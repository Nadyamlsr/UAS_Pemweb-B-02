<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    return view('auth.login');
});

Route::get('/dashboard', function() {
    return view('pages.dashboard');
});

Route::get('/test', 'PenggunaController@test');

// login
//Route::get('/masuk', 'OtentikController@index'); // halaman login
Route::post('/masuk/login', 'OtentikController@masuk')->name('yoman'); // form login
// logout
Route::get('/masuk/logout', 'OtentikController@keluar');

// pengguna
Route::get('/pengguna', 'PenggunaController@index');
Route::post('/pengguna/datatables', 'PenggunaController@daftarPengguna');
Route::get('/pengguna/{id}', 'PenggunaController@getPengguna'); // ambil data pengguna
Route::post('/pengguna/simpan', 'PenggunaController@simpanPengguna'); // update pengguna
Route::post('/pengguna/delete/{id}', 'PenggunaController@hapusPengguna');

// register pengguna
Route::post('/pengguna/register', 'PenggunaController@index');

// materi
Route::get('/materi', 'MateriController@index'); // index halaman
Route::post('/materi/datatables', 'MateriController@daftarMateri'); // datatables
Route::get('/materi/{id}', 'MateriController@getMateri');
Route::post('/materi/simpan', 'MateriController@simpanMateri'); // create or delete
Route::post('/materi/delete/{id}', 'MateriController@deleteMateri'); // create or delete

// detail materi
Route::get('/detailmateri/{id}', 'MateriController@detailMateri');
Route::post('/detailmateri/datatables/{id}', 'MateriController@daftarDetailMateri'); // datatables
Route::post('/detailmateri/simpan', 'MateriController@simpanDetailMateri'); // create or delete
Route::get('/detailmateri/edit/{id}', 'MateriController@editDetailMateri'); // 
Route::post('/detailmateri/delete/{id}', 'MateriController@deleteDetailMateri');

// Memilih materi yang dikerjakan
Route::get('/ambiltest/', 'TestController@tampilanAmbilTest'); // halaman ambil test
Route::post('/ambiltest/datatables', 'TestController@daftarAmbilTest'); // datatables
Route::get('/ambiltest/simpan/{id}', 'TestController@simpanAmbilTest'); // simpan

// daftar materi yang sudah dipilih
Route::get('/mulaitest/', 'TestController@mulaiTest')->name('mulaitest');
Route::post('/mulaitest/datatables', 'TestController@daftarMulaiTest'); // datatables

// daftar materi detail
Route::get('/mulaitestdetail/{id}', 'TestController@mulaitestdetail');
Route::post('/mulaitestdetail/daftarTestDetail', 'TestController@daftarMulaiTest'); // datatables

// master user untuk admin

//Route::get('/pengguna', 'PenggunaController@test')->name('test');

Route::get('/role', 'RoleController@index');
Route::post('/role/datatables', 'RoleController@datatables');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
