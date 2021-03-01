<div class="sidebar-brand">
    <a href="{{ request()->is('dashboard') ? 'active' : ''}}" href="/admin/kelola-banner">
        <img alt="image" src="{{asset('assets')}}/images/logo.svg" class="header-logo" />
        <span class="logo-name"></span>
    </a>
</div>
<ul class="sidebar-menu">
    <li class="menu-header">Main</li>
    <li class="Dropdown">
        <a class="nav-link {{ request()->is('dashboard') ? 'active' : ''}}" href="/admin/kelola-banner"><i class="fas fa-home"></i><span>Dashboard</span></a>
    </li>
    <li class="menu-header">Pages</li>
    <li class="dropdown">
        <a href="{{ url('/fraksi') }}" class="nav-link {{ (request()->is('fraksi*'))?'active':'' }}" class="nav-link">
            <i class="fab fa-gg"></i>
            <span>Fraksi</span>
        </a>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown {{ (request()->is(['agenda*','agendasekre*']))?'active':'' }}"><i class="fab fa-gg"></i><span>Agenda</span></a>
        <ul class="dropdown-menu">
            <li><a href="{{ url('/agenda') }}"  class="nav-link {{ (request()->is('agenda*'))?'active':'' }} ">Agenda DPRD</a></li>
            <li><a href="{{ url('/agendasekre') }}" class="nav-link {{ (request()->is('agendasekre*'))?'active':'' }} ">Agenda Sekretariat</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-list-alt"></i><span>Berita</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link {{ request()->is('beritautama') ? 'active' : ''}}" href="/admin/kelola-beritautama">Berita Utama</a></li>
            <li><a class="nav-link {{ request()->is('pressrelease') ? 'active' : ''}}" href="/admin/kelola-pressrelease">Press Release</a></li>
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
