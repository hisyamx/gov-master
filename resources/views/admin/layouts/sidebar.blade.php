<div class="sidebar-brand">
    <a href="{{ request()->is('dashboard') ? 'active' : ''}}" href="{{ url('/admin')  }}">
        <img alt="image" src="{{asset('assets')}}/images/logo.svg" class="header-logo" />
        <span class="logo-name"></span>
    </a>
</div>
<ul class="sidebar-menu">
    <li class="menu-header">Main</li>
    <li class="Dropdown">
        <a class="nav-link {{ request()->is('dashboard') ? 'active' : ''}}" href="{{ url('/admin')  }}"><i class="fas fa-home"></i><span>Dashboard</span></a>
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
            <li><a class="nav-link {{ request()->is('tentangdprd') ? 'active' : ''}}" href="{{ url('/admin/tentangdprd')  }}">Tentang</a></li>
            <li><a class="nav-link {{ request()->is('visimisi') ? 'active' : ''}}" href="{{ url('/admin/visimisi')  }}">Visi dan Misi</a></li>
            <li><a class="nav-link {{ request()->is('tugasfungsi') ? 'active' : ''}}" href="{{ url('/admin/tugasfungsi')  }}">Tugas dan Fungsi</a></li>
            <li><a class="nav-link {{ request()->is('strukturorganisasi') ? 'active' : ''}}" href="{{ url('/admin/strukturorganisasi')  }}">Struktur Organisasi</a></li>
            <li><a class="nav-link {{ request()->is('pejabatstruktural') ? 'active' : ''}}" href="{{ url('/admin/pejabatstruktural')  }}">Pejabat Struktural</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-list-alt"></i><span>Agenda</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link {{ request()->is('agendadprd') ? 'active' : ''}}" href="{{ url('/admin/agendadprd')  }}">Agenda DPRD</a></li>
            <li><a class="nav-link {{ request()->is('agendasekretariat') ? 'active' : ''}}" href="{{ url('/admin/agendasekretariat')  }}">Agenda Sekretariat</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-list-alt"></i><span>Berita</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link {{ request()->is('beritautama') ? 'active' : ''}}" href="{{ url('/admin/beritautama')  }}">Berita Utama</a></li>
            <li><a class="nav-link {{ request()->is('pressrelease') ? 'active' : ''}}" href="{{ url('/admin/pressrelease')  }}">Press Release</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fab fa-buromobelexperte"></i><span>Fraksi</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link  {{ request()->is('fraksi') ? 'active' : ''}}" href="{{ url('/admin/fraksi')  }}">Fraksi</a></li>
            <li><a class="nav-link {{ request()->is('anggotafraksi') ? 'active' : ''}}" href="{{ url('/admin/anggotafraksi')  }}">Anggota Fraksi</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-down"></i><span>Sekretariat</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link {{ request()->is('rencanalaporan') ? 'active' : ''}}" href="{{ url('/admin/rencanlaporan')  }}">Rencana dan Laporan</a></li>
            <li><a class="nav-link {{ request()->is('tugasfungsi') ? 'active' : ''}}" href="{{ url('/admin/tugasfungsisekretariat')  }}">Tugas dan Fungsi</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i><span>Informasi</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link {{ request()->is('dashboard') ? 'active' : ''}}" href="{{ url('/admin')  }}">Transparansi Anggaran</a></li>
            <li><a class="nav-link {{ request()->is('dashboard') ? 'active' : ''}}" href="{{ url('/admin')  }}">Transparansi Kinerja</a></li>
            <li><a class="nav-link {{ request()->is('dashboard') ? 'active' : ''}}" href="{{ url('/admin')  }}">Pengumuman</a></li>
            <li><a class="nav-link {{ request()->is('dashboard') ? 'active' : ''}}" href="{{ url('/admin')  }}">Formulir Masuk</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fab fa-airbnb"></i><span>Publikasi</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link {{ request()->is('dashboard') ? 'active' : ''}}" href="{{ url('/admin')  }}">Gallery</a></li>
            <li><a class="nav-link {{ request()->is('dashboard') ? 'active' : ''}}" href="{{ url('/admin')  }}">Video on Demand</a></li>
            <li><a class="nav-link {{ request()->is('dashboard') ? 'active' : ''}}" href="{{ url('/admin')  }}">Siaran Langsung</a></li>
        </ul>
    </li>
    <li class="menu-header">Users & Author</li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-lock"></i><span>User</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link {{ request()->is('dashboard') ? 'active' : ''}}" href="{{ url('/admin')  }}">Kelola User</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-leaf"></i><span>Author</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link {{ request()->is('dashboard') ? 'active' : ''}}" href="{{ url('/admin')  }}">Kelola Author</a></li>
        </ul>
    </li>
    <li class="menu-header">Kontak</li>
    <li class="dropdown">
        <a class="nav-link {{ request()->is('dashboard') ? 'active' : ''}}" href="{{ url('/admin')  }}"><i class="fas fa-envelope"></i><span>Kontak</span></a>
    </li>
</ul>
