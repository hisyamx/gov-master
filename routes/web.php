<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

/// Admin Route
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    // Show Welcome
    Route::get('admin', 'AdminController@index')->name('dashboard.index');
    Route::get('admin/kelola-banner', 'AdminController@kelolaBeranda');
    Route::get('admin/kelola-logo', 'AdminController@kelolaLogo');
    // Show Kelola beranda
    Route::get('admin/edit-banner', 'AdminController@showEditBanner');
    Route::post('admin/edit-banner', 'AdminController@editBanner');
    Route::get('admin/edit-logo', 'AdminController@showEditBanner');
    Route::post('admin/edit-logo', 'AdminController@editBanner');
    Route::get('admin/hapus-banner', 'AdminController@deleteBanner');
    Route::get('admin/hapus-logo', 'AdminController@deleteLogo');
    // Show Kelola profil
    Route::get('admin/kelola-profil', 'ProfilController@showKelola');
    Route::get('admin/terbit-profil/{id}', 'ProfilController@terbit');
    Route::get('admin/tunda-profil/{id}', 'ProfilController@tunda');
    Route::get('admin/edit-profil/{id}', 'ProfilController@showEdit');
    Route::post('admin/edit-profil/{id}', 'ProfilController@edit');
    Route::get('admin/hapus-profil/{id}', 'ProfilController@delete');
    Route::get('admin/draft-profil', 'ProfilController@showDraft');
    // Show Kelola agenda
    Route::get('admin/kelola-agenda', 'AgendaController@showKelola');
    Route::get('admin/terbit-agenda/{id}', 'AgendaController@terbit');
    Route::get('admin/tunda-agenda/{id}', 'AgendaController@tunda');
    Route::get('admin/edit-agenda/{id}', 'AgendaController@showEdit');
    Route::post('admin/edit-agenda/{id}', 'AgendaController@edit');
    Route::get('admin/hapus-agenda/{id}', 'AgendaController@delete');
    Route::get('admin/draft-agenda', 'AgendaController@showDraft');
    // Show Kelola berita
    Route::get('admin/kelola-berita', 'BeritaController@showKelola');
    Route::get('admin/terbit-berita/{id}', 'BeritaController@terbit');
    Route::get('admin/tunda-berita/{id}', 'BeritaController@tunda');
    Route::get('admin/edit-berita/{id}', 'BeritaController@showEdit');
    Route::post('admin/edit-berita/{id}', 'BeritaController@edit');
    Route::get('admin/hapus-berita/{id}', 'BeritaController@delete');
    Route::get('admin/draft-berita', 'BeritaController@showDraft');
    // Show Kelola akd
    Route::get('admin/kelola-akd', 'AkdController@showKelola');
    Route::get('admin/terbit-akd/{id}', 'AkdController@terbit');
    Route::get('admin/tunda-akd/{id}', 'AkdController@tunda');
    Route::get('admin/edit-akd/{id}', 'AkdController@showEdit');
    Route::post('admin/edit-akd/{id}', 'AkdController@edit');
    Route::get('admin/hapus-akd/{id}', 'AkdController@delete');
    Route::get('admin/draft-akd', 'AkdController@showDraft');
    // Show Kelola fraksi
    Route::get('admin/kelola-fraksi', 'FraksiController@showKelola');
    Route::get('admin/edit-fraksi/{id}', 'FraksiController@showEdit');
    Route::post('admin/edit-fraksi/{id}', 'FraksiController@edit');
    Route::get('admin/hapus-fraksi/{id}', 'FraksiController@delete');
    Route::get('admin/kelola-angota', 'FraksiController@showKelolaAnggota');
    Route::get('admin/edit-angota/{id}', 'FraksiController@showEditAnggota');
    Route::post('admin/edit-angota/{id}', 'FraksiController@editAnggota');
    Route::get('admin/hapus-angota/{id}', 'FraksiController@deleteAnggota');
    // Show Kelola informasi
    Route::get('admin/kelola-informasi', 'InformasiController@showKelola');
    Route::get('admin/terbit-informasi/{id}', 'InformasiController@terbit');
    Route::get('admin/tunda-informasi/{id}', 'InformasiController@tunda');
    Route::get('admin/edit-informasi/{id}', 'InformasiController@showEdit');
    Route::post('admin/edit-informasi/{id}', 'InformasiController@edit');
    Route::get('admin/hapus-informasi/{id}', 'InformasiController@delete');
    Route::get('admin/draft-informasi', 'InformasiController@showDraft');
    // Show Kelola sekretariat
    Route::get('admin/kelola-sekretariat', 'SekretariatController@showKelola');
    Route::get('admin/terbit-sekretariat/{id}', 'SekretariatController@terbit');
    Route::get('admin/tunda-sekretariat/{id}', 'SekretariatController@tunda');
    Route::get('admin/edit-sekretariat/{id}', 'SekretariatController@showEdit');
    Route::post('admin/edit-sekretariat/{id}', 'SekretariatController@edit');
    Route::get('admin/hapus-sekretariat/{id}', 'SekretariatController@delete');
    Route::get('admin/draft-sekretariat', 'SekretariatController@showDraft');
    // Show Kelola publikasi
    Route::get('admin/kelola-gallery', 'ProfilController@showKelola');
    Route::get('admin/kelola-gallery', 'ProfilController@showKelola');
    Route::get('admin/kelola-gallery', 'ProfilController@showKelola');
    Route::get('admin/terbit-profil/{id}', 'ProfilController@terbit');
    Route::get('admin/tunda-profil/{id}', 'ProfilController@tunda');
    Route::get('admin/edit-profil/{id}', 'ProfilController@showEdit');
    Route::post('admin/edit-profil/{id}', 'ProfilController@edit');
    Route::get('admin/hapus-profil/{id}', 'ProfilController@delete');
    Route::get('admin/draft-profil', 'ProfilController@showDraft');
    // Show Kelola kontak
    Route::get('admin/kelola-kontak', 'KontakController@showKelola');
    Route::get('admin/edit-kontak/{id}', 'KontakController@showEdit');
    Route::post('admin/edit-kontak/{id}', 'KontakController@edit');
    Route::get('admin/hapus-kontak/{id}', 'KontakController@delete');
    // Show Kelola User
    Route::get('admin/kelola-user', 'AdminController@showKelolaUser');
    Route::get('admin/edit-user/{id}', 'AdminController@showEditUser');
    Route::put('admin/edit-user/{id}', 'AdminController@editUser');
    Route::get('admin/delete-user/{id}', 'AdminController@deleteUser');
    Route::get('admin/buat-user', 'AdminController@showBuatUser');
    Route::post('admin/buat-user', 'AdminController@buatUser');
});

/// Author Route
// Route::group(['prefix' => 'author', 'middleware' => 'author'], function () {
//     //
//     Route::get('', 'AuthorController@showWelcome');
//     Route::get('welcome', 'AuthorController@showWelcome');
//     Route::get('profil', 'AuthorController@showProfil');
//     Route::get('buat-artikel', 'AuthorController@showBuatArtikel');
//     Route::get('kelola-artikel', 'AuthorController@showKelolaArtikel');
// });

///User Route
Route::get('/', 'MainController@beranda');
Route::get('/beranda', 'MainController@beranda');
//profil
Route::get('/tentangdprd', 'ProfilController@tentangdprd');
Route::get('/visimisi', 'ProfilController@visimisi');
Route::get('/tugasfungsi', 'ProfilController@tugasfungsi');
Route::get('/profil/strukturorganisasi', 'ProfilController@strukturorganisasi');
Route::get('/profil/pejabatstruktural', 'ProfilController@pejabatstruktural');
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
