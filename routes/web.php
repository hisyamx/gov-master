<?php

use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('register', 'Auth\AuthController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\AuthController@storeUser');

Route::get('login', 'Auth\AuthController@showLoginForm')->name('login');
Route::post('login', 'Auth\AuthController@authenticate');
Route::get('logout', 'Auth\AuthController@logout')->name('logout');

/// Admin Route
Route::group(['middleware' => 'auth'], function () {
    // Show Welcome
    Route::get('admin', 'AdminController@index')->name('dashboard.index');
    // Beranda
    // Show Kelola Banner
    Route::get('admin/kelola-banner', 'BerandaController@kelolaBanner')->name('banner.index');
    Route::get('admin/edit-banner/{id}', 'BerandaController@showEditBanner')->name('banner.show');
    Route::post('admin/kelola-banner','BerandaController@storeBanner');
	Route::post('admin/edit-banner/{id}','BerandaController@update_recordBanner')->name('banner.edit');
    Route::delete('admin/kelola-banner', 'BerandaController@destroyBanner')->name('banner.delete');
    // Show Kelola Logo
    Route::get('admin/kelola-logo', 'BerandaController@kelolaLogo')->name('logo.index');
    Route::get('admin/edit-logo/{id}', 'BerandaController@showEditLogo')->name('logo.show');
    Route::post('admin/kelola-logo','BerandaController@storeLogo');
	Route::post('admin/edit-logo/{id}','BerandaController@update_recordLogo')->name('logo.edit');
    Route::delete('admin/kelola-logo', 'BerandaController@destroyLogo')->name('logo.delete');
    // Profil
    // Show Kelola tentang
    Route::get('admin/kelola-tentangdprd', 'ProfilController@showKelolaTentang')->name('tentang.index');
    Route::get('admin/edit-tentangdprd', 'ProfilController@showEditTentang')->name('tentang.show');
    Route::get('admin/kelola-tentangdprd', 'ProfilController@storeTentang');
    Route::post('admin/edit-tentangdprd', 'ProfilController@editTentang')->name('tentang.edit');
    Route::delete('admin/hapus-tentangdprd', 'ProfilController@destroyTentang')->name('tentang.delete');
    // Show Kelola visimisi
    Route::get('admin/kelola-visimisi', 'ProfilController@showKelolaVisimisi')->name('visimisi.index');
    Route::get('admin/edit-visimisi', 'ProfilController@showEditVisimisi')->name('visimisi.show');
    Route::get('admin/kelola-visimisi', 'ProfilController@storeVisimisi');
    Route::post('admin/edit-visimisi', 'ProfilController@editVisimisi')->name('visimisi.edit');
    Route::delete('admin/hapus-visimisi', 'ProfilController@destroyVisimisi')->name('visimisi.delete');
    // Show Kelola tugasfungsi
    Route::get('admin/kelola-tugasfungsi', 'ProfilController@showKelolaTugasfungsi')->name('tugasfungsidprd.index');
    Route::get('admin/edit-tugasfungsi', 'ProfilController@showEditTugasfungsi')->name('tugasfungsidprd.show');
    Route::get('admin/kelola-tugasfungsi', 'ProfilController@storeTugasfungsi');
    Route::post('admin/edit-tugasfungsi', 'ProfilController@editTugasfungsi')->name('tugasfungsidprd.edit');
    Route::delete('admin/hapus-tugasfungsi', 'ProfilController@destroyTugasfungsi')->name('tugasfungsidprd.delete');
    // Show Kelola strukturorganisasi
    Route::get('admin/kelola-strukturorganisasi', 'ProfilController@showKelolaStrukturorganisasi')->name('strukturorganisasi.index');
    Route::get('admin/edit-strukturorganisasi', 'ProfilController@showEditStrukturorganisasi')->name('strukturorganisasi.show');
    Route::get('admin/kelola-strukturorganisasi', 'ProfilController@storeStrukturorganisasi');
    Route::post('admin/edit-strukturorganisasi', 'ProfilController@editStrukturorganisasi')->name('strukturorganisasi.edit');
    Route::delete('admin/hapus-strukturorganisasi', 'ProfilController@destroyStrukturorganisasi')->name('strukturorganisasi.delete');
    // Show Kelola pejabatstruktural
    Route::get('admin/kelola-pejabatstruktural', 'ProfilController@showKelolaPejabatstruktural')->name('pejabatstruktural.index');
    Route::get('admin/edit-pejabatstruktural', 'ProfilController@showEditPejabatstruktural')->name('pejabatstruktural.show');
    Route::get('admin/kelola-tentangdprd', 'ProfilController@storeVisimisi');
    Route::post('admin/edit-pejabatstruktural', 'ProfilController@editPejabatstruktural')->name('pejabatstruktural.edit');
    Route::delete('admin/hapus-pejabatstruktural', 'ProfilController@destroyPejabatstruktural')->name('pejabatstruktural.delete');
    // Agenda
    // Show Kelola agendadprd
    Route::get('admin/kelola-agendadprd', 'AgendaController@showKelolaDprd')->name('agendadprd.index');
    Route::get('admin/terbit-agendadprd/{id}', 'AgendaController@terbitDprd')->name('agendadprd.terbit');
    Route::get('admin/tunda-agendadprd/{id}', 'AgendaController@tundaDprd')->name('agendadprd.tunda');
    Route::get('admin/edit-agendadprd/{id}', 'AgendaController@showEditDprd')->name('agendadprd.show');
    Route::post('admin/edit-agendadprd/{id}', 'AgendaController@editDprd')->name('agendadprd.edit');
    Route::delete('admin/hapus-agendadprd/{id}', 'AgendaController@destroyDprd')->name('agendadprd.delete');
    Route::get('admin/draft-agendadprd', 'AgendaController@showDraftDprd')->name('agendadprd.draft');
    // Show Kelola agendasekretariat
    Route::get('admin/kelola-agendasekretariat', 'AgendaController@showKelolaSekretariat')->name('agendasekretariat.index');
    Route::get('admin/terbit-agendasekretariat/{id}', 'AgendaController@terbitSekretariat')->name('agendasekretariat.terbit');
    Route::get('admin/tunda-agendasekretariat/{id}', 'AgendaController@tundaSekretariat')->name('agendasekretariat.tunda');
    Route::get('admin/edit-agendasekretariat/{id}', 'AgendaController@showEditSekretariat')->name('agendasekretariat.show');
    Route::post('admin/edit-agendasekretariat/{id}', 'AgendaController@editSekretariat')->name('agendasekretariat.edit');
    Route::delete('admin/hapus-agendasekretariat/{id}', 'AgendaController@destroySekretariat')->name('agendasekretariat.delete');
    Route::get('admin/draft-agendasekretariat', 'AgendaController@showDraftSekretariat')->name('agendasekretariat.draft');
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
    Route::get('admin/kelola-komisi', 'AkdController@showKelolaKomisi')->name('komisi.index');
    Route::get('admin/terbit-komisi/{id}', 'AkdController@terbitKomisi')->name('komisi.terbit');
    Route::get('admin/tunda-komisi/{id}', 'AkdController@tundaKomisi')->name('komisi.tunda');
    Route::get('admin/edit-komisi/{id}', 'AkdController@showEditKomisi')->name('komisi.show');
    Route::post('admin/edit-komisi/{id}', 'AkdController@editKomisi')->name('komisi.edit');
    Route::delete('admin/hapus-komisi/{id}', 'AkdController@destroyKomisi')->name('komisi.delete');
    Route::get('admin/draft-komisi', 'AkdController@showDraftKomisi')->name('komisi.draft');
    // Show Kelola Pimpinan DPRD
    Route::get('admin/kelola-pimpinan', 'AkdController@showKelolaPimpinan')->name('pimpinan.index');
    Route::get('admin/terbit-pimpinan/{id}', 'AkdController@terbitPimpinan')->name('pimpinan.terbit');
    Route::get('admin/tunda-pimpinan/{id}', 'AkdController@tundaPimpinan')->name('pimpinan.tunda');
    Route::get('admin/edit-pimpinan/{id}', 'AkdController@showEditPimpinan')->name('pimpinan.show');
    Route::post('admin/edit-pimpinan/{id}', 'AkdController@editPimpinan')->name('pimpinan.edit');
    Route::delete('admin/hapus-pimpinan/{id}', 'AkdController@destroyPimpinan')->name('pimpinan.delete');
    Route::get('admin/draft-pimpinan', 'AkdController@showDraftPimpinan')->name('pimpinan.draft');
    // Show Kelola Badan Kehormatan
    Route::get('admin/kelola-badankehormatan', 'AkdController@showKelolaBadanKehormatan')->name('badankehormatan.index');
    Route::get('admin/terbit-badankehormatan/{id}', 'AkdController@terbitBadanKehormatan')->name('badankehormatan.terbit');
    Route::get('admin/tunda-badankehormatan/{id}', 'AkdController@tundaBadanKehormatan')->name('badankehormatan.tunda');
    Route::get('admin/edit-badankehormatan/{id}', 'AkdController@showEditBadanKehormatan')->name('badankehormatan.show');
    Route::post('admin/edit-badankehormatan/{id}', 'AkdController@editBadanKehormatan')->name('badankehormatan.edit');
    Route::delete('admin/hapus-badankehormatan/{id}', 'AkdController@destroyBadanKehormatan')->name('badankehormatan.delete');
    Route::get('admin/draft-badankehormatan', 'AkdController@showDraftBadanKehormatan')->name('badankehormatan.draft');
    // Show Kelola Badan Musyawarah
    Route::get('admin/kelola-badanmusyawarah', 'AkdController@showKelolaBadanMusyawarah')->name('badanmusyawarah.index');
    Route::get('admin/terbit-badanmusyawarah/{id}', 'AkdController@terbitBadanMusyawarah')->name('badanmusyawarah.terbit');
    Route::get('admin/tunda-badanmusyawarah/{id}', 'AkdController@tundaBadanMusyawarah')->name('badanmusyawarah.tunda');
    Route::get('admin/edit-badanmusyawarah/{id}', 'AkdController@showEditBadanMusyawarah')->name('badanmusyawarah.show');
    Route::post('admin/edit-badanmusyawarah/{id}', 'AkdController@editBadanMusyawarah')->name('badanmusyawarah.edit');
    Route::delete('admin/hapus-badanmusyawarah/{id}', 'AkdController@destroyBadanMusyawarah')->name('badanmusyawarah.delete');
    Route::get('admin/draft-badanmusyawarah', 'AkdController@showDraftBadanMusyawarah')->name('badanmusyawarah.draft');
    // Show Kelola Badan Anggaran
    Route::get('admin/kelola-badananggaran', 'AkdController@showKelolaBadanAnggaran')->name('badananggaran.index');
    Route::get('admin/terbit-badananggaran/{id}', 'AkdController@terbitBadanAnggaran')->name('badananggaran.terbit');
    Route::get('admin/tunda-badananggaran/{id}', 'AkdController@tundaBadanAnggaran')->name('badananggaran.tunda');
    Route::get('admin/edit-badananggaran/{id}', 'AkdController@showEditBadanAnggaran')->name('badananggaran.show');
    Route::post('admin/edit-badananggaran/{id}', 'AkdController@editBadanAnggaran')->name('badananggaran.edit');
    Route::delete('admin/hapus-badananggaran/{id}', 'AkdController@destroyBadanAnggaran')->name('badananggaran.delete');
    Route::get('admin/draft-badananggaran', 'AkdController@showDraftBadanAnggaran')->name('badananggaran.draft');
    // Show Kelola Badan Pembentukan Perda
    Route::get('admin/kelola-badanperda', 'AkdController@showKelolaBadanPerda')->name('badanperda.index');
    Route::get('admin/terbit-badanperda/{id}', 'AkdController@terbitBadanPerda')->name('badanperda.terbit');
    Route::get('admin/tunda-badanperda/{id}', 'AkdController@tundaBadanPerda')->name('badanperda.tunda');
    Route::get('admin/edit-badanperda/{id}', 'AkdController@showEditBadanPerda')->name('badanperda.show');
    Route::post('admin/edit-badanperda/{id}', 'AkdController@editBadanPerda')->name('badanperda.edit');
    Route::delete('admin/hapus-badanperda/{id}', 'AkdController@destroyBadanPerda')->name('badanperda.delete');
    Route::get('admin/draft-badanperda', 'AkdController@showDraftBadanPerda')->name('badanperda.draft');
    // Fraksi
    // Show Kelola fraksi
    Route::get('admin/kelola-fraksi', 'FraksiController@showKelola')->name('fraksi.index');
    Route::get('admin/edit-fraksi/{id}', 'FraksiController@showEdit')->name('fraksi.show');
    Route::post('admin/edit-fraksi/{id}', 'FraksiController@edit')->name('fraksi.edit');
    Route::delete('admin/hapus-fraksi/{id}', 'FraksiController@destroy')->name('fraksi.delete');
    // Show Kelola Anggota fraksi
    Route::get('admin/kelola-angota', 'FraksiController@showKelolaAnggota')->name('anggota.index');
    Route::get('admin/edit-anggota/{id}', 'FraksiController@showEditAnggota')->name('anggota.show');
    Route::post('admin/edit-anggota/{id}', 'FraksiController@editAnggota')->name('anggota.edit');
    Route::delete('admin/hapus-angota/{id}', 'FraksiController@destroyAnggota')->name('anggota.delete');
    // Show Kelola informasi
    Route::get('admin/kelola-transparansianggaran', 'InformasiController@showKelolaInformasi')->name('anggaran.index');
    Route::get('admin/kelola-transparansikinerja', 'InformasiController@showKelolaInformasi')->name('kinerja.index');
    Route::get('admin/kelola-pengumuman', 'InformasiController@showKelolaPengumuman')->name('pengumuman.index');
    Route::get('admin/kelola-formulir', 'InformasiController@showKelolaFormulir')->name('formulir.index');
    // Sekretariat
    // Show Kelola Rencana dan Laporan
    Route::get('admin/kelola-rencanalaporan', 'SekretariatController@showKelolaRencanaLaporan')->name('rencanalaporan.index');
    Route::get('admin/terbit-rencanalaporan/{id}', 'SekretariatController@terbitRencanaLaporan')->name('rencanalaporan.terbit');
    Route::get('admin/tunda-rencanalaporan/{id}', 'SekretariatController@tundaRencanaLaporan')->name('rencanalaporan.tunda');
    Route::get('admin/edit-rencanalaporan/{id}', 'SekretariatController@showEditRencanaLaporan')->name('rencanalaporan.show');
    Route::post('admin/edit-rencanalaporan/{id}', 'SekretariatController@editRencanaLaporan')->name('rencanalaporan.edit');
    Route::delete('admin/hapus-rencanalaporan/{id}', 'SekretariatController@destroyRencanaLaporan')->name('rencanalaporan.delete');
    Route::get('admin/draft-rencanalaporan', 'SekretariatController@showDraftRencanaLaporan')->name('rencanalaporan.draft');
    // Show Kelola Tugas dan Fungsi
    Route::get('admin/kelola-tugasfungsisekretariat', 'SekretariatController@showKelolaTugasFungsi')->name('tugasfungsi.index');
    Route::get('admin/terbit-tugasfungsisekretariat/{id}', 'SekretariatController@terbitTugasFungsi')->name('tugasfungsi.terbit');
    Route::get('admin/tunda-tugasfungsisekretariat/{id}', 'SekretariatController@tundaTugasFungsi')->name('tugasfungsi.tunda');
    Route::get('admin/edit-tugasfungsisekretariat/{id}', 'SekretariatController@showEditTugasFungsi')->name('tugasfungsi.show');
    Route::post('admin/edit-tugasfungsisekretariat/{id}', 'SekretariatController@editTugasFungsi')->name('tugasfungsi.edit');
    Route::delete('admin/hapus-tugasfungsisekretariat/{id}', 'SekretariatController@destroyTugasFungsi')->name('tugasfungsi.delete');
    Route::get('admin/draft-tugasfungsisekretariat', 'SekretariatController@showDraftTugasFungsi')->name('tugasfungsi.draft');
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
    Route::post('admin/edit-kontak/{id}', 'KontakController@edit')->name('kontak.edit');
    Route::delete('admin/hapus-kontak/{id}', 'KontakController@destroy')->name('kontak.delete');
    // Show Kelola User
    Route::get('admin/kelola-user', 'AdminController@showKelolaUser')->name('user.index');
    Route::get('admin/edit-user/{id}', 'AdminController@showEditUser')->name('user.show');
    Route::put('admin/edit-user/{id}', 'AdminController@editUser')->name('user.edit');
    Route::get('admin/delete-user/{id}', 'AdminController@destroyUser')->name('user.delete');
    Route::get('admin/buat-user', 'AdminController@showBuatUser')->name('user.showbuat');
    Route::post('admin/buat-user', 'AdminController@buatUser')->name('user.create');
    // Show Kelola author
    Route::get('admin/kelola-author', 'AdminController@showKelolaauthor')->name('author.index');
    Route::get('admin/edit-author/{id}', 'AdminController@showEditauthor')->name('author.show');
    Route::put('admin/edit-author/{id}', 'AdminController@editauthor')->name('author.edit');
    Route::get('admin/delete-author/{id}', 'AdminController@destroyauthor')->name('author.delete');
    Route::get('admin/buat-author', 'AdminController@showBuatauthor')->name('author.showbuat');
    Route::post('admin/buat-author', 'AdminController@buatauthor')->name('author.create');
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
