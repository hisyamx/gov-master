<div class="sidebar-brand">
    <a href="{{ request()->is('dashboard') ? 'active' : ''}}" href="{{ route('banner.index')  }}">
        <img alt="image" src="{{asset('assets')}}/images/logo.svg" class="header-logo" />
        <span class="logo-name"></span>
    </a>
</div>
<ul class="sidebar-menu">
    <li class="menu-header">Main</li>
    <li class="Dropdown">
        <a class="nav-link {{ request()->is('dashboard') ? 'active' : ''}}" href="{{ route('banner.index')  }}"><i class="fas fa-home"></i><span>Dashboard</span></a>
    </li>
    <li class="menu-header">Pages</li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fab fa-gg"></i><span>Beranda</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link {{ request()->is('kelolabanner') ? 'active' : ''}}" href="{{ route('banner.index')}}">Kelola Banner</a></li>
            <li><a class="nav-link {{ request()->is('kelolallogo') ? 'active' : ''}}" href="{{ route('logo.index')  }}">Kelola Logo</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-anchor"></i><span>Profil</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link {{ request()->is('tentang') ? 'active' : ''}}" href="{{ route('tentang.index')  }}">Tentang</a></li>
            <li><a class="nav-link {{ request()->is('visimisi') ? 'active' : ''}}" href="{{ route('visimisi.index')  }}">Visi dan Misi</a></li>
            <li><a class="nav-link {{ request()->is('tugasfungsi') ? 'active' : ''}}" href="{{ route('tugasfungsidprd.index')  }}">Tugas dan Fungsi</a></li>
            <li><a class="nav-link {{ request()->is('strukturorganisasi') ? 'active' : ''}}" href="{{ route('stukturorganisasi.index')  }}">Struktur Organisasi</a></li>
            <li><a class="nav-link {{ request()->is('pejabatstruktural') ? 'active' : ''}}" href="{{ route('pejabatstruktural.index')  }}">Pejabat Struktural</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-list-alt"></i><span>Agenda</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link {{ request()->is('agendadprd') ? 'active' : ''}}" href="{{ route('agendadprd.index')  }}">Agenda DPRD</a></li>
            <li><a class="nav-link {{ request()->is('agendasekretariat') ? 'active' : ''}}" href="{{ route('agendasekretariat.index')  }}">Agenda Sekretariat</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-list-alt"></i><span>Berita</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link {{ request()->is('beritautama') ? 'active' : ''}}" href="{{ route('beritautama.index') }}">Berita Utama</a></li>
            <li><a class="nav-link {{ request()->is('pressrelease') ? 'active' : ''}}" href="{{ route('pressrelease.index')  }}">Press Release</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fab fa-buromobelexperte"></i><span>Fraksi</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link  {{ request()->is('fraksi') ? 'active' : ''}}" href="{{ route('fraksi.index')  }}">Fraksi</a></li>
            <li><a class="nav-link {{ request()->is('anggotafraksi') ? 'active' : ''}}" href="{{ route('anggota.index')  }}">Anggota Fraksi</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-down"></i><span>Sekretariat</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link {{ request()->is('rencanalaporan') ? 'active' : ''}}" href="{{ route('rencanalaporan.index')  }}">Rencana dan Laporan</a></li>
            <li><a class="nav-link {{ request()->is('tugasfungsi') ? 'active' : ''}}" href="{{ route('tugasfungsi.index')  }}">Tugas dan Fungsi</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i><span>Informasi</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link {{ request()->is('transparansianggaran') ? 'active' : ''}}" href="{{ route('anggaran.index')  }}">Transparansi Anggaran</a></li>
            <li><a class="nav-link {{ request()->is('transparansikinerja') ? 'active' : ''}}" href="{{ route('kinerja.index')  }}">Transparansi Kinerja</a></li>
            <li><a class="nav-link {{ request()->is('pengumuman') ? 'active' : ''}}" href="{{ route('pengumuman.index')  }}">Pengumuman</a></li>
            <li><a class="nav-link {{ request()->is('formulir') ? 'active' : ''}}" href="{{ route('formulir.index')  }}">Formulir Masuk</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fab fa-airbnb"></i><span>Publikasi</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link {{ request()->is('gallery') ? 'active' : ''}}" href="{{ route('gallery.index')  }}">Gallery</a></li>
            <li><a class="nav-link {{ request()->is('vod') ? 'active' : ''}}" href="{{ route('vod.index')  }}">Video on Demand</a></li>
            <li><a class="nav-link {{ request()->is('live') ? 'active' : ''}}" href="{{ route('live.index')  }}">Siaran Langsung</a></li>
        </ul>
    </li>
    <li class="menu-header">Users & Author</li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-lock"></i><span>User</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link {{ request()->is('user') ? 'active' : ''}}" href="{{ route('user.index')  }}">Kelola User</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-leaf"></i><span>Author</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link {{ request()->is('author') ? 'active' : ''}}" href="{{ route('author.index')  }}">Kelola Author</a></li>
        </ul>
    </li>
    <li class="menu-header">Kontak</li>
    <li class="dropdown">
        <a class="nav-link {{ request()->is('kontak') ? 'active' : ''}}" href="{{ route('kontak.index')  }}"><i class="fas fa-envelope"></i><span>Kontak</span></a>
    </li>
</ul>
