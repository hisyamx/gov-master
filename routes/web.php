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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route user
Route::get('/beranda', 'MainController@beranda');
//profil
Route::get('/tentangdprd', 'ProfilController@tentangdprd');
Route::get('/visimisi', 'ProfilController@visimisi');
Route::get('/tugasfungsi', 'ProfilController@tugasfungsi');
Route::get('/profil/strukturorganisasi', 'ProfilController@strukturorganisasi');
Route::get('/profil/pejabatsruktural', 'ProfilController@pejabatstruktural');
//agenda
Route::get('/agenda', 'AgendaController@agenda');
Route::get('/agenda/dprd', 'AgendaController@agendadprd');
Route::get('/agenda/sekretariat', 'AgendaController@agendasekretariat');
//berita
// Route::get('/berita', 'BeritaController@berita');
// Route::get('/pressrelease', 'BeritaController@pressrelease');
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
