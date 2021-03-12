<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ request()->is('dashboard') ? 'active' : ''}}" href="/admin/kelola-banner">
                <img alt="image" src="{{asset('assets')}}/images/logo.svg" class="header-logo" />
                <span class="logo-name"></span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="Dropdown">
                <a class="nav-link {{ request()->is('dashboard') ? 'active' : ''}}" href="/admin"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Pages</li>
            <li>
                <a href="#" class="nav-link has-dropdown {{ (request()->is(['kelolaslider*','kelolabanner*','kelolallogo*' ]))?'active':'' }}"><i class="fab fa-gg"></i><span>Beranda</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link {{ request()->is('kelolaslider') ? 'active' : ''}}" href="/admin/kelola-slider">Kelola Slider</a></li>
                    <li><a class="nav-link {{ request()->is('kelolabanner') ? 'active' : ''}}" href="/admin/kelola-banner">Kelola Banner</a></li>
                    <li><a class="nav-link {{ request()->is('kelolallogo') ? 'active' : ''}}" href="/admin/kelola-logo">Kelola Logo</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-anchor"></i><span>Profil</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link {{ request()->is('tentang') ? 'active' : ''}}" href="/admin/kelola-tentangdprd">Tentang</a></li>
                    <li><a class="nav-link {{ request()->is('visimisi') ? 'active' : ''}}" href="/admin/kelola-visimisi">Visi dan Misi</a></li>
                    <li><a class="nav-link {{ request()->is('tugasfungsi') ? 'active' : ''}}" href="/admin/kelola-tugasfungsidprd">Tugas dan Fungsi</a></li>
                    <li><a class="nav-link {{ request()->is('strukturorganisasi') ? 'active' : ''}}" href="admin/kelola-strukturorganisasi">Struktur Organisasi</a></li>
                    <li><a class="nav-link {{ request()->is('pejabatstruktural') ? 'active' : ''}}" href="/admin/kelola-pejabatstruktural">Pejabat Struktural</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown {{ (request()->is(['fraksi*','anggota*']))?'active':'' }}"><i class="fab fa-gg"></i><span>Fraksi</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('/fraksi') }}"  class="nav-link {{ (request()->is('fraksi*'))?'active':'' }} ">Fraksi</a></li>
                    <li><a href="{{ url('/anggota') }}" class="nav-link {{ (request()->is('anggota*'))?'active':'' }} ">Anggota Fraksi</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-list-alt"></i><span>Agenda</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link {{ request()->is('agendadprd') ? 'active' : ''}}" href="/admin/kelola-agendadprd">Agenda DPRD</a></li>
                    <li><a class="nav-link {{ request()->is('agendasekretariat') ? 'active' : ''}}" href="/admin/kelola-agendasekretariat">Agenda Sekretariat</a></li>
                    <li><a class="nav-link {{ request()->is('blog') ? 'active' : ''}}" href="/admin/kelola-blog">Agenda Blog</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-list-alt"></i><span>Berita</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link {{ request()->is('kategori') ? 'active' : ''}}" href="/admin/kelola-kategori">Kategori</a></li>
                    <li><a class="nav-link {{ request()->is('beritautama') ? 'active' : ''}}" href="/admin/kelola-beritautama">Berita Utama</a></li>
                    <li><a class="nav-link {{ request()->is('pressrelease') ? 'active' : ''}}" href="/admin/kelola-pressrelease">Press Release</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-anchor"></i><span>Akd</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link {{ request()->is('komisi') ? 'active' : ''}}" href="/admin/kelola-komisi">Komisi</a></li>
                    <li><a class="nav-link {{ request()->is('pimpinan') ? 'active' : ''}}" href="/admin/kelola-pimpinandprd">Pimpinan DPRD</a></li>
                    <li><a class="nav-link {{ request()->is('badankehormatan') ? 'active' : ''}}" href="/admin/kelola-badankehormatan">Badan Kehormatan</a></li>
                    <li><a class="nav-link {{ request()->is('badanmusyawarah') ? 'active' : ''}}" href="admin/kelola-badanmusyawarah">Badan Musyawarah</a></li>
                    <li><a class="nav-link {{ request()->is('badananggaran') ? 'active' : ''}}" href="/admin/kelola-badananggaran">Badan Anggaran</a></li>
                    <li><a class="nav-link {{ request()->is('badanperda') ? 'active' : ''}}" href="/admin/kelola-badanperda">Badan Perda</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-down"></i><span>Sekretariat</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link {{ request()->is('rencanalaporan') ? 'active' : ''}}" href="/admin/kelola-rencanalaporan">Rencana dan Laporan</a></li>
                    <li><a class="nav-link {{ request()->is('tugasfungsi') ? 'active' : ''}}" href="/admin/kelola-tugasfungsi">Tugas dan Fungsi</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i><span>Informasi</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link {{ request()->is('transparansianggaran') ? 'active' : ''}}" href="/admin/kelola-anggaran">Transparansi Anggaran</a></li>
                    <li><a class="nav-link {{ request()->is('transparansikinerja') ? 'active' : ''}}" href="/admin/kelola-kinerja">Transparansi Kinerja</a></li>
                    <li><a class="nav-link {{ request()->is('pengumuman') ? 'active' : ''}}" href="/admin/kelola-pengumuman">Pengumuman</a></li>
                    <li><a class="nav-link {{ request()->is('formulir') ? 'active' : ''}}" href="/admin/kelola-formulir">Formulir Masuk</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fab fa-airbnb"></i><span>Publikasi</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link {{ request()->is('gallery') ? 'active' : ''}}" href="/admin/kelola-gallery">Gallery</a></li>
                    <li><a class="nav-link {{ request()->is('vod') ? 'active' : ''}}" href="/admin/kelola-vod">Video on Demand</a></li>
                    <li><a class="nav-link {{ request()->is('live') ? 'active' : ''}}" href="/admin/kelola-live">Siaran Langsung</a></li>
                </ul>
            </li>
            <li class="menu-header">Users & Author</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-lock"></i><span>User</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link {{ request()->is('user') ? 'active' : ''}}" href="/admin/kelola-user">Kelola User</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-leaf"></i><span>Author</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link {{ request()->is('author') ? 'active' : ''}}" href="/admin/kelola-author">Kelola Author</a></li>
                </ul>
            </li>
            <li class="menu-header">Kontak</li>
            <li class="dropdown">
                <a class="nav-link {{ request()->is('kontak') ? 'active' : ''}}" href="/admin/kelola-kontak"><i class="fas fa-envelope"></i><span>Kontak</span></a>
            </li>
        </ul>
    </aside>
</div>

