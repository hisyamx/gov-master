<?php

use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Auth::routes();
Route::get('register', 'Auth\AuthController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\AuthController@storeUser');

Route::get('login', 'Auth\AuthController@showLoginForm')->name('login');
Route::post('login', 'Auth\AuthController@authenticate');
Route::get('logout', 'Auth\AuthController@logout')->name('logout');
// Show Welcome
Route::get('/home', 'HomeController@index');
Route::get('admin', 'AdminController@index')->name('dashboard.index');


Route::group(['middleware' => 'auth'], function () {
    // Show Welcome
    Route::get('admin', 'AdminController@index')->name('dashboard.index');
    // Beranda
    // Show Kelola slider
    Route::get('admin/kelola-slider', 'BerandaController@kelolaSlider')->name('slider.index');
    Route::get('admin/edit-slider/{id}', 'BerandaController@showEditSlider')->name('slider.show');
    Route::post('admin/kelola-slider','BerandaController@storeSlider');
	Route::post('admin/edit-slider/{id}','BerandaController@update_recordSlider')->name('slider.edit');
    Route::delete('admin/kelola-slider/{id}', 'BerandaController@destroySlider')->name('slider.delete');
    // Show Kelola Banner
    Route::get('admin/kelola-banner', 'BerandaController@kelolaBanner')->name('banner.index');
    Route::get('admin/edit-banner/{id}', 'BerandaController@showEditBanner')->name('banner.show');
    Route::post('admin/kelola-banner','BerandaController@storeBanner');
	Route::post('admin/edit-banner/{id}','BerandaController@update_recordBanner')->name('banner.edit');
    Route::delete('admin/kelola-banner/{id}', 'BerandaController@destroyBanner')->name('banner.delete');
    // Show Kelola Logo
    Route::get('admin/kelola-logo', 'BerandaController@kelolaLogo')->name('logo.index');
    Route::get('admin/edit-logo/{id}', 'BerandaController@showEditLogo')->name('logo.show');
    Route::post('admin/kelola-logo','BerandaController@storeLogo');
	Route::post('admin/edit-logo/{id}','BerandaController@update_recordLogo')->name('logo.edit');
    Route::delete('admin/kelola-logo/{id}', 'BerandaController@destroyLogo')->name('logo.delete');
    // Profil
    // Show Kelola tentang
    Route::get('admin/kelola-tentangdprd', 'TentangController@showKelola')->name('tentang.index');
    Route::get('admin/edit-tentangdprd/{id}', 'TentangController@showEdit')->name('tentang.show');
    Route::post('admin/kelola-tentangdprd', 'TentangController@store');
    Route::post('admin/edit-tentangdprd/{id}', 'TentangController@edit')->name('tentang.edit');
    Route::delete('admin/hapus-tentangdprd/{id}', 'TentangController@destroy')->name('tentang.delete');
    // Show Kelola visimisi
    Route::get('admin/kelola-visimisi', 'VisimisiController@showKelola')->name('visimisi.index');
    Route::get('admin/edit-visimisi/{id}', 'VisimisiController@showEdit')->name('visimisi.show');
    Route::post('admin/kelola-visimisi', 'VisimisiController@store');
    Route::post('admin/edit-visimisi/{id}', 'VisimisiController@edit')->name('visimisi.edit');
    Route::delete('admin/hapus-visimisi/{id}', 'VisimisiController@destroy')->name('visimisi.delete');
    // Show Kelola tugasfungsi
    Route::get('admin/kelola-tugasfungsidprd', 'TugasController@showKelola')->name('tugasfungsidprd.index');
    Route::get('admin/edit-tugasfungsidprd/{id}', 'TugasController@showEdit')->name('tugasfungsidprd.show');
    Route::post('admin/kelola-tugasfungsidprd', 'TugasController@store');
    Route::post('admin/edit-tugasfungsidprd/{id}', 'TugasController@edit')->name('tugasfungsidprd.edit');
    Route::delete('admin/hapus-tugasfungsidprd/{id}', 'TugasController@destroy')->name('tugasfungsidprd.delete');
    // Show Kelola strukturorganisasi
    Route::get('admin/kelola-strukturorganisasi', 'StrukturorganisasiController@showKelola')->name('strukturorganisasi.index');
    Route::get('admin/edit-strukturorganisasi/{id}', 'StrukturorganisasiController@showEdit')->name('strukturorganisasi.show');
    Route::post('admin/kelola-strukturorganisasi', 'StrukturorganisasiController@store');
    Route::post('admin/edit-strukturorganisasi/{id}', 'StrukturorganisasiController@edit')->name('strukturorganisasi.edit');
    Route::delete('admin/hapus-strukturorganisasi/{id}', 'StrukturorganisasiController@destroy')->name('strukturorganisasi.delete');
    // Show Kelola pejabatstruktural
    Route::get('admin/kelola-pejabatstruktural', 'PejabatstrukturalController@showKelola')->name('pejabatstruktural.index');
    Route::get('admin/edit-pejabatstruktural/{id}', 'PejabatstrukturalController@showEdit')->name('pejabatstruktural.show');
    Route::post('admin/kelola-pejabatstruktural', 'PejabatstrukturalController@store');
    Route::post('admin/edit-pejabatstruktural/{id}', 'PejabatstrukturalController@edit')->name('pejabatstruktural.edit');
    Route::delete('admin/hapus-pejabatstruktural/{id}', 'PejabatstrukturalController@destroy')->name('pejabatstruktural.delete');
    // Agenda
    // Show Kelola agendadprd
    Route::get('admin/kelola-agendadprd', 'AgendaController@showKelolaDprd')->name('agendadprd.index');
    Route::get('admin/edit-agendadprd/{id}', 'AgendaController@showEditDprd')->name('agendadprd.show');
    Route::post('admin/edit-agendadprd/{id}', 'AgendaController@editDprd')->name('agendadprd.edit');
    Route::delete('admin/hapus-agendadprd/{id}', 'AgendaController@destroyDprd')->name('agendadprd.delete');
    // Show Kelola agendasekretariat
    Route::get('admin/kelola-agendasekretariat', 'AgendaController@showKelolaSekretariat')->name('agendasekretariat.index');
    Route::get('admin/edit-agendasekretariat/{id}', 'AgendaController@showEditSekretariat')->name('agendasekretariat.show');
    Route::post('admin/edit-agendasekretariat/{id}', 'AgendaController@editSekretariat')->name('agendasekretariat.edit');
    Route::delete('admin/hapus-agendasekretariat/{id}', 'AgendaController@destroySekretariat')->name('agendasekretariat.delete');
    // Show Kelola agendablog
    Route::get('admin/kelola-blog', 'AgendaController@showKelola')->name('blog.index');
    Route::get('admin/terbit-blog/{id}', 'AgendaController@terbit')->name('blog.terbit');
    Route::get('admin/tunda-blog/{id}', 'AgendaController@tunda')->name('blog.tunda');
    Route::get('admin/edit-blog/{id}', 'AgendaController@showEdit')->name('blog.show');
    Route::post('admin/edit-blog/{id}', 'AgendaController@edit')->name('blog.edit');
    Route::delete('admin/hapus-blog/{id}', 'AgendaController@destroy')->name('blog.delete');
    Route::get('admin/draft-blog', 'AgendaController@showDraft')->name('blog.draft');
    // Kategori
    // Show Kelola Kategori
    Route::get('admin/kelola-kategori/index', 'KategoriController@index')->name('kategori.index');
    Route::get('admin/edit-kategori/{id}', 'KategoriController@showEdit')->name('kategori.show');
    Route::post('admin/kelola-kategori/index', 'KategoriController@store');
    Route::post('admin/edit-kategori/{id}', 'KategoriController@edit')->name('kategori.edit');
    Route::get('admin/kelola-kategori/delete/{id}', 'KategoriController@delete')->name('kategori.delete');
    // Berita
    // Show Kelola beritautama
    Route::get('admin/kelola-berita', 'BeritaController@kelolaBerita')->name('berita.index');
    Route::get('admin/terbit-berita/{id}', 'BeritaController@terbit')->name('berita.terbit');
    Route::get('admin/tunda-berita/{id}', 'BeritaController@tunda')->name('berita.tunda');
    Route::get('admin/edit-berita/{id}', 'BeritaController@showEdit')->name('berita.show');
    Route::post('admin/edit-berita/{id}', 'BeritaController@edit')->name('berita.edit');
    Route::delete('admin/hapus-berita/{id}', 'BeritaController@destroy')->name('berita.delete');
    Route::get('admin/draft-berita', 'BeritaController@showDraft')->name('berita.draft');
    // Show Kelola pressrelease
    Route::get('admin/kelola-pressrelease', 'BeritaController@kelolaPressrelease')->name('pressrelease.index');
    Route::get('admin/terbit-pressrelease/{id}', 'BeritaController@terbitPressrelease')->name('pressrelease.terbit');
    Route::get('admin/tunda-pressrelease/{id}', 'BeritaController@tundaPressrelease')->name('pressrelease.tunda');
    Route::get('admin/edit-pressrelease/{id}', 'BeritaController@showEditPressrelease')->name('pressrelease.show');
    Route::post('admin/edit-pressrelease/{id}', 'BeritaController@editPressrelease')->name('pressrelease.edit');
    Route::delete('admin/hapus-pressrelease/{id}', 'BeritaController@destroyPressrelease')->name('pressrelease.delete');
    Route::get('admin/draft-pressrelease', 'BeritaController@showDraftPressrelease')->name('pressrelease.draft');
    // Akd
    // Show Kelola Komisi
    Route::get('admin/kelola-komisi', 'KomisiController@showKelola');
    Route::get('admin/edit-komisi/{id}', 'KomisiController@showEdit')->name('komisi.show');
    Route::post('admin/kelola-komisi', 'KomisiController@store');
    Route::post('admin/edit-komisi/{id}', 'KomisiController@edit')->name('komisi.edit');
    Route::delete('admin/hapus-komisi/{id}', 'KomisiController@destroy')->name('komisi.delete');
    // Show Kelola Pimpinan DPRD
    Route::get('admin/kelola-pimpinan', 'PimpinanController@showKelola')->name('pimpinan.index');
    Route::get('admin/edit-pimpinan/{id}', 'PimpinanController@showEdit')->name('pimpinan.show');
    Route::post('admin/kelola-pimpinan', 'PimpinanController@store');
    Route::post('admin/edit-pimpinan/{id}', 'PimpinanController@edit')->name('pimpinan.edit');
    Route::delete('admin/hapus-pimpinan/{id}', 'PimpinanController@destroy')->name('pimpinan.delete');
    // Show Kelola Badan Kehormatan
    Route::get('admin/kelola-badankehormatan', 'BadanKehormatanController@showKelola')->name('badankehormatan.index');
    Route::get('admin/edit-badankehormatan/{id}', 'BadanKehormatanController@showEdit')->name('badankehormatan.show');
    Route::post('admin/kelola-pimpinan', 'PimpinanController@store');
    Route::post('admin/edit-badankehormatan/{id}', 'BadanKehormatanController@edit')->name('badankehormatan.edit');
    Route::delete('admin/hapus-badankehormatan/{id}', 'BadanKehormatanController@destroy')->name('badankehormatan.delete');
    // Show Kelola Badan Musyawarah
    Route::get('admin/kelola-badanmusyawarah', 'BadanMusyawarahController@showKelola')->name('badanmusyawarah.index');
    Route::get('admin/edit-badanmusyawarah/{id}', 'BadanMusyawarahController@showEdit')->name('badanmusyawarah.show');
    Route::post('admin/kelola-badanmusyawarah', 'BadanMusyawarahController@store');
    Route::post('admin/edit-badanmusyawarah/{id}', 'BadanMusyawarahController@edit')->name('badanmusyawarah.edit');
    Route::delete('admin/hapus-badanmusyawarah/{id}', 'BadanMusyawarahController@destroy')->name('badanmusyawarah.delete');
    // Show Kelola Badan Anggaran
    Route::get('admin/kelola-badananggaran', 'BadanAnggaranController@showKelola')->name('badananggaran.index');
    Route::get('admin/edit-badananggaran/{id}', 'BadanAnggaranController@showEdit')->name('badananggaran.show');
    Route::post('admin/kelola-badananggaran', 'BadanAnggaranController@store');
    Route::post('admin/edit-badananggaran/{id}', 'BadanAnggaranController@edit')->name('badananggaran.edit');
    Route::delete('admin/hapus-badananggaran/{id}', 'BadanAnggaranController@destroy')->name('badananggaran.delete');
    // Show Kelola Badan Pembentukan Perda
    Route::get('admin/kelola-badanperda', 'BadanPerdaController@showKelola')->name('badanperda.index');
    Route::get('admin/edit-badanperda/{id}', 'BadanPerdaController@showEdit')->name('badanperda.show');
    Route::post('admin/kelola-badanperda', 'BadanPerdaController@store');
    Route::post('admin/edit-badanperda/{id}', 'BadanPerdaController@edit')->name('badanperda.edit');
    Route::delete('admin/hapus-badanperda/{id}', 'BadanPerdaController@destroy')->name('badanperda.delete');
    // Fraksi
    //Show Kelola fraksi
    Route::get('admin/fraksi', 'FraksiController@fraksi');
    Route::post('admin/tambah-fraksi', 'FraksiController@store');
    Route::get('admin/edit-fraksi/{id}', 'FraksiController@edit');
    Route::get('admin/hapus-fraksi/{id}', 'FraksiController@destroy');
    // Show Kelola Anggota fraksi
    Route::get('admin/anggota', 'AnggotaController@anggota');
    Route::post('admin/tambah-anggota', 'AnggotaController@store');
    Route::get('admin/edit-anggota/{id}', 'AnggotaController@edit');
    Route::get('admin/hapus-anggota/{id}', 'AnggotaController@destroy');

    Route::get('/anggota', 'AnggotaController@anggota');
    Route::post('admin/tambah-anggota', 'AnggotaController@store');
    Route::get('admin/edit-anggota/{id}', 'AnggotaController@edit');
    Route::get('admin/hapus-anggota/{id}', 'AnggotaController@destroy');
    // Show Kelola informasi
    Route::get('admin/kelola-informasi', 'InformasiController@showKelola')->name('informasi.index');
    Route::get('admin/edit-informasi/{id}', 'InformasiController@showEdit')->name('informasi.show');
    Route::post('admin/kelola-informasi', 'InformasiController@store');
    Route::get('admin/edit-informasi/{id}', 'InformasiController@edit')->name('informasi.edit');
    Route::get('admin/hapus-informasi/{id}', 'InformasiController@destroy')->name('informasi.delete');
    // Sekretariat
    // Show Kelola Rencana dan Laporan
    Route::get('admin/kelola-sekretariat', 'SekretariatController@showKelola')->name('sekretariat.index');
    Route::get('admin/edit-sekretariat/{id}', 'SekretariatController@showEdit')->name('sekretariat.show');
    Route::post('admin/kelola-sekretariat', 'SekretariatController@store');
    Route::post('admin/edit-sekretariat/{id}', 'SekretariatController@edit')->name('sekretariat.edit');
    Route::delete('admin/hapus-sekretariat/{id}', 'SekretariatController@destroy')->name('sekretariat.delete');
    // Publikasi
    // Show Kelola Gallery
    Route::get('admin/kelola-gallery', 'PublikasiController@showKelolaGallery')->name('gallery.index');
    Route::get('admin/terbit-gallery/{id}', 'PublikasiController@terbitGallery')->name('gallery.terbit');
    Route::get('admin/tunda-gallery/{id}', 'PublikasiController@tundaGallery')->name('gallery.tunda');
    Route::get('admin/edit-gallery/{id}', 'PublikasiController@showEditGallery')->name('gallery.show');
    Route::post('admin/edit-gallery/{id}', 'PublikasiController@editGallery')->name('gallery.edit');
    Route::delete('admin/hapus-gallery/{id}', 'PublikasiController@destroyGallery')->name('gallery.delete');
    Route::get('admin/draft-gallery', 'PublikasiController@showDraftGallery')->name('gallery.draft');
    // Show Kelola Video on demand
    Route::get('admin/kelola-vod', 'PublikasiController@showKelolaVod')->name('vod.index');
    Route::get('admin/terbit-vod/{id}', 'PublikasiController@terbitVod')->name('vod.terbit');
    Route::get('admin/tunda-vod/{id}', 'PublikasiController@tundaVod')->name('vod.tunda');
    Route::get('admin/edit-vod/{id}', 'PublikasiController@showEditVod')->name('vod.show');
    Route::post('admin/edit-vod/{id}', 'PublikasiController@editVod')->name('vod.edit');
    Route::delete('admin/hapus-vod/{id}', 'PublikasiController@destroyVod')->name('vod.delete');
    Route::get('admin/draft-vod', 'PublikasiController@showDraftVod')->name('vod.draft');
    // Show Kelola Siaran langsung
    Route::get('admin/kelola-live', 'PublikasiController@showKelolaLive')->name('live.index');
    Route::get('admin/terbit-live/{id}', 'PublikasiController@terbitLive')->name('live.terbit');
    Route::get('admin/tunda-live/{id}', 'PublikasiController@tundaLive')->name('live.tunda');
    Route::get('admin/edit-live/{id}', 'PublikasiController@showEditLive')->name('live.show');
    Route::post('admin/edit-live/{id}', 'PublikasiController@editLive')->name('live.edit');
    Route::delete('admin/hapus-live/{id}', 'PublikasiController@destroyLive')->name('live.delete');
    Route::get('admin/draft-live', 'PublikasiController@showDraftLive')->name('live.draft');
    // Show Kelola kontak
    Route::get('admin/kelola-kontak', 'KontakController@showKelola')->name('kontak.index');
    Route::get('admin/edit-kontak/{id}', 'KontakController@showEdit')->name('kontak.show');
    Route::post('admin/kelola-kontak', 'KontakController@store');
    Route::post('admin/edit-kontak/{id}', 'KontakController@edit')->name('kontak.edit');
    Route::delete('admin/hapus-kontak/{id}', 'KontakController@destroy')->name('kontak.delete');
    // Show Kelola User
    Route::get('admin/kelola-user', 'AdminController@showKelolaUser')->name('user.index');
    Route::get('admin/edit-user/{id}', 'AdminController@showEditUser')->name('user.show');
    Route::put('admin/edit-user/{id}', 'AdminController@editUser')->name('user.edit');
    Route::post('admin/kelola-user', 'AdminController@store');
    Route::get('admin/delete-user/{id}', 'AdminController@destroyUser')->name('user.delete');
    Route::get('admin/buat-user', 'AdminController@showBuatUser')->name('user.showbuat');
    Route::post('admin/buat-user', 'AdminController@buatUser')->name('user.create');
    // Show Kelola author
    Route::get('admin/kelola-author', 'AdminController@showKelolaauthor')->name('author.index');
    Route::get('admin/edit-author/{id}', 'AdminController@showEditauthor')->name('author.show');
    Route::put('admin/edit-author/{id}', 'AdminController@editauthor')->name('author.edit');
    Route::post('admin/kelola-author', 'AdminController@store');
    Route::get('admin/delete-author/{id}', 'AdminController@destroyauthor')->name('author.delete');
    Route::get('admin/buat-author', 'AdminController@showBuatauthor')->name('author.showbuat');
    Route::post('admin/buat-author', 'AdminController@buatauthor')->name('author.create');
});

// Author Route
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
Route::get('/beranda', 'MainController@beranda');
//profil
Route::get('/profil/tentangdprd', 'ProfilController@tentangdprd');
Route::get('/profil/visimisi', 'ProfilController@visimisi');
Route::get('/profil/tugasfungsi', 'ProfilController@tugas');
Route::get('/profil/strukturorganisasi', 'ProfilController@struktur');
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
Route::get('/fraksi/{fraksi_name}', 'FraksiController@detailfraksi');
Route::get('/fraksi/{fraksi_name}/{nama_anggota}', 'FraksiController@listanggota');
Route::get('/fraksi/{fraksi_name}/{nama_anggota}/{id}', 'FraksiController@detailanggota');
//sekreatariat
Route::get('/sekretariat/rencanalaporan', 'SekretariatController@rencanalaporan');
Route::get('/sekretariat/tugasfungsi', 'SekretariatController@tugasfungsi');
//informasi
Route::get('/informasi/transparansianggaran', 'InformasiController@anggaran');
Route::get('/informasi/transparansikinerja', 'InformasiController@kinerja');
Route::get('/informasi/pengumuman', 'InformasiController@pengumuman');
Route::get('/informasi/formulir/kunjungan', 'InformasiController@formulirkunjungan');
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
