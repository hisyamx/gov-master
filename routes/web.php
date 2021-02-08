<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

/// Admin Route
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    // Show Welcome
    Route::get('', 'AdminController@index')->name('dashboard.index');
    Route::get('welcome', 'AdminController@index')->name('dashboard.index');
    Route::get('statistik', 'AdminController@showStatistic');
    Route::get('buat-artikel', 'AdminController@showBuatArtikel');
    Route::post('buat-artikel', 'AdminController@buatArtikel');
    // Show Kelola beranda
    Route::get('kelola-beranda', 'AdminController@showKelolaBeranda');
    Route::get('terbit-beranda/{id}', 'AdminController@terbitBeranda');
    Route::get('tunda-beranda/{id}', 'AdminController@tundaBeranda');
    Route::get('edit-beranda/{id}', 'AdminController@showEditBeranda');
    Route::post('edit-beranda/{id}', 'AdminController@editBeranda');
    Route::get('hapus-beranda/{id}', 'AdminController@deleteBeranda');
    Route::get('draft-beranda', 'AdminController@showDraftBeranda');
    // Show Kelola profil
    Route::get('kelola-profil', 'ProfilController@showKelola');
    Route::get('terbit-profil/{id}', 'ProfilController@terbit');
    Route::get('tunda-profil/{id}', 'ProfilController@tunda');
    Route::get('edit-profil/{id}', 'ProfilController@showEdit');
    Route::post('edit-profil/{id}', 'ProfilController@edit');
    Route::get('hapus-profil/{id}', 'ProfilController@delete');
    Route::get('draft-profil', 'ProfilController@showDraft');
    // Show Kelola agenda
    Route::get('kelola-agenda', 'AgendaController@showKelola');
    Route::get('terbit-agenda/{id}', 'AgendaController@terbit');
    Route::get('tunda-agenda/{id}', 'AgendaController@tunda');
    Route::get('edit-agenda/{id}', 'AgendaController@showEdit');
    Route::post('edit-agenda/{id}', 'AgendaController@edit');
    Route::get('hapus-agenda/{id}', 'AgendaController@delete');
    Route::get('draft-agenda', 'AgendaController@showDraft');
    // Show Kelola berita
    Route::get('kelola-berita', 'BeritaController@showKelola');
    Route::get('terbit-berita/{id}', 'BeritaController@terbit');
    Route::get('tunda-berita/{id}', 'BeritaController@tunda');
    Route::get('edit-berita/{id}', 'BeritaController@showEdit');
    Route::post('edit-berita/{id}', 'BeritaController@edit');
    Route::get('hapus-berita/{id}', 'BeritaController@delete');
    Route::get('draft-berita', 'BeritaController@showDraft');
    // Show Kelola akd
    Route::get('kelola-akd', 'AkdController@showKelola');
    Route::get('terbit-akd/{id}', 'AkdController@terbit');
    Route::get('tunda-akd/{id}', 'AkdController@tunda');
    Route::get('edit-akd/{id}', 'AkdController@showEdit');
    Route::post('edit-akd/{id}', 'AkdController@edit');
    Route::get('hapus-akd/{id}', 'AkdController@delete');
    Route::get('draft-akd', 'AkdController@showDraft');
    // Show Kelola fraksi
    Route::get('kelola-fraksi', 'FraksiController@showKelola');
    Route::get('edit-fraksi/{id}', 'FraksiController@showEdit');
    Route::post('edit-fraksi/{id}', 'FraksiController@edit');
    Route::get('hapus-fraksi/{id}', 'FraksiController@delete');
    Route::get('kelola-angota', 'FraksiController@showKelolaAnggota');
    Route::get('edit-angota/{id}', 'FraksiController@showEditAnggota');
    Route::post('edit-angota/{id}', 'FraksiController@editAnggota');
    Route::get('hapus-angota/{id}', 'FraksiController@deleteAnggota');
    // Show Kelola informasi
    Route::get('kelola-informasi', 'InformasiController@showKelola');
    Route::get('terbit-informasi/{id}', 'InformasiController@terbit');
    Route::get('tunda-informasi/{id}', 'InformasiController@tunda');
    Route::get('edit-informasi/{id}', 'InformasiController@showEdit');
    Route::post('edit-informasi/{id}', 'InformasiController@edit');
    Route::get('hapus-informasi/{id}', 'InformasiController@delete');
    Route::get('draft-informasi', 'InformasiController@showDraft');
    // Show Kelola sekretariat
    Route::get('kelola-sekretariat', 'SekretariatController@showKelola');
    Route::get('terbit-sekretariat/{id}', 'SekretariatController@terbit');
    Route::get('tunda-sekretariat/{id}', 'SekretariatController@tunda');
    Route::get('edit-sekretariat/{id}', 'SekretariatController@showEdit');
    Route::post('edit-sekretariat/{id}', 'SekretariatController@edit');
    Route::get('hapus-sekretariat/{id}', 'SekretariatController@delete');
    Route::get('draft-sekretariat', 'SekretariatController@showDraft');
    // Show Kelola publikasi
    Route::get('kelola-gallery', 'ProfilController@showKelola');
    Route::get('kelola-gallery', 'ProfilController@showKelola');
    Route::get('kelola-gallery', 'ProfilController@showKelola');
    Route::get('terbit-profil/{id}', 'ProfilController@terbit');
    Route::get('tunda-profil/{id}', 'ProfilController@tunda');
    Route::get('edit-profil/{id}', 'ProfilController@showEdit');
    Route::post('edit-profil/{id}', 'ProfilController@edit');
    Route::get('hapus-profil/{id}', 'ProfilController@delete');
    Route::get('draft-profil', 'ProfilController@showDraft');
    // Show Kelola kontak
    Route::get('kelola-kontak', 'KontakController@showKelola');
    Route::get('edit-kontak/{id}', 'KontakController@showEdit');
    Route::post('edit-kontak/{id}', 'KontakController@edit');
    Route::get('hapus-kontak/{id}', 'KontakController@delete');
    // Show Kelola User
    Route::get('kelola-user', 'AdminController@showKelolaUser');
    Route::get('edit-user/{id}', 'AdminController@showEditUser');
    Route::put('edit-user/{id}', 'AdminController@editUser');
    Route::get('delete-user/{id}', 'AdminController@deleteUser');
    Route::get('buat-user', 'AdminController@showBuatUser');
    Route::post('buat-user', 'AdminController@buatUser');
});

/// Author Route
Route::group(['prefix' => 'author', 'middleware' => 'author'], function () {
    //
    Route::get('', 'AuthorController@showWelcome');
    Route::get('welcome', 'AuthorController@showWelcome');
    Route::get('profil', 'AuthorController@showProfil');
    Route::get('buat-artikel', 'AuthorController@showBuatArtikel');
    Route::get('kelola-artikel', 'AuthorController@showKelolaArtikel');
});

///User Route
Route::get('/', 'MainController@beranda');
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
Route::get('/berita/pressrelease', 'BeritaController@pressrelease');
Route::get('/berita/{id}', 'BeritaController@detailberita');
//akd
Route::get('/akd/komisi', 'AkdController@komisi');
Route::get('/akd/pimpinandprd', 'AkdController@pimpinandprd');
Route::get('/akd/badankehormatan', 'AkdController@badankehormatan');
Route::get('/akd/badanmusyawarah', 'AkdController@badanmusyawarah');
Route::get('/akd/badananggaran', 'AkdController@badananggaran');
Route::get('/akd/badanperda', 'AkdController@badanperda');
//fraksi
Route::get('/fraksi', 'FraksiController@fraksi');
Route::get('/fraksi/{namafraksi}', 'FraksiController@detailfraksi');
Route::get('/fraksi/{namafraksi}/{id}', 'FraksiController@detailanggotafraksi');
//sekreatariat
Route::get('/sekretariat/rencanalaporan', 'SekretariatController@rencanalaporan');
Route::get('/sekretariat/tugasfungsi', 'SekretariatController@tugasfungsi');
//informasi
Route::get('/informasi/transparansianggaran', 'InformasiController@anggaran');
Route::get('/informasi/transparansikinerja', 'InformasiController@kinerja');
Route::get('/informasi/pengumuman', 'InformasiController@pengumuman');
Route::get('/formulir/kunjungan', 'InformasiController@formulirkunjungan');
//publikasi
Route::get('/publikasi/gallery', 'PublikasiController@gallery');
Route::get('/publikasi/vod', 'PublikasiController@vod');
Route::get('/publikasi/live', 'PublikasiController@live');
//kontak
Route::get('/kontak', 'MainController@kontak');
//ppid
Route::get('/ppid', 'MainController@ppid');
//jdih
Route::get('/jdih', 'MainController@jdih');

Route::get('/home', 'HomeController@index')->name('home');
