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

Route::get('/', function () {
    return view('admin.layouts.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route user
Route::get('/beranda', 'MainController@beranda');
//profil
// Route::get('/tentangdprd', 'MainController@tentangdprd');
// Route::get('/visimisi', 'MainController@visimisi');
// Route::get('/tugasfungsi', 'MainController@tugasfungsi');
// Route::get('/strukturorganisasi', 'MainController@strukturorganisasi');
// Route::get('/pejabatsruktural', 'MainController@pejabatstruktural');
//agenda
// Route::get('/agendadprd', 'MainController@agendadprd');
// Route::get('/agendasekretariat', 'MainController@agendasekretariat');
//berita
// Route::get('/berita', 'MainController@berita');
// Route::get('/pressrelease', 'MainController@pressrelease');
//akd
// Route::get('/komisi', 'MainController@komisi');
// Route::get('/pimpinandprd', 'MainController@pimpinandprd');
// Route::get('/badankehormatan', 'MainController@badankehormatan');
// Route::get('/badanmusyawarah', 'MainController@badanmusyawarah');
// Route::get('/badananggaran', 'MainController@badananggaran');
// Route::get('/badanperda', 'MainController@badanperda');
//fraksi
// Route::get('/fraksi', 'MainController@fraksi');
//sekreatariat
// Route::get('/sekrerencanalaporan', 'MainController@sekrerencanalaporan');
// Route::get('/sekretugasfungsi', 'MainController@sekretugasfungsi');
//informasi
// Route::get('/tanggaran', 'MainController@tanggaran');
// Route::get('/tkinerja', 'MainController@tkinerja');
// Route::get('/tkinerja', 'MainController@tkinerja');
// Route::get('/pengumuman', 'MainController@pengumuman');
//publikasi
// Route::get('/gallery', 'MainController@gallery');
// Route::get('/vod', 'MainController@vod');
// Route::get('/live', 'MainController@live');
//kontak
Route::get('/kontak', 'MainController@kontak');
//ppid
Route::get('/ppid', 'MainController@ppid');
//jdih
Route::get('/jdih', 'MainController@jdih');
