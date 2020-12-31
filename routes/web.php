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
Route::get('/berita', 'BeritaController@berita');
Route::get('/berita/{detailberita}', 'BeritaController@detailberita');
Route::get('/berita/pressrelease', 'BeritaController@pressrelease');
//akd
// Route::get('/akd/komisi', 'AkdController@komisi');
// Route::get('/akd/pimpinandprd', 'AkdController@pimpinandprd');
// Route::get('/akd/badankehormatan', 'AkdController@badankehormatan');
// Route::get('/akd/badanmusyawarah', 'AkdController@badanmusyawarah');
// Route::get('/akd/badananggaran', 'AkdController@badananggaran');
// Route::get('/akd/badanperda', 'AkdController@badanperda');
//fraksi
// Route::get('/fraksi', 'MainController@fraksi');
//sekreatariat
Route::get('/sekretariat/rencanalaporan', 'SekretariatController@rencanalaporan');
Route::get('/sekretariat/tugasfungsi', 'SekretariatController@tugasfungsi');
//informasi
Route::get('/informasi/transparansianggaran', 'InformasiController@tanggaran');
Route::get('/informasi/transparansikinerja', 'InformasiController@tkinerja');
Route::get('/informasi/pengumuman', 'InformasiController@pengumuman');
Route::get('/formulir/kunjungan', 'InformasiController@formulirkunjungan');
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
