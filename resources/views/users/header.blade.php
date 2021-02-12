    <link href="//fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('/assets')}}/css/style-starter.css">
</head>

<body>

    <!-- header -->
    <header class="w3l-header">
        <div class="container">
            <!--/nav-->
            <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-sm-3 px-0">
                <!-- if logo is image enable this    -->
                    <a class="navbar-brand" href="#index.html">
                        <img src="{{asset('/assets')}}/images/logodprd.svg" alt="Logo DPRD" title="DPRD" style="height:35px;" />
                    </a>

                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <span class="fa icon-expand fa-bars"></span>
                    <span class="fa icon-close fa-times"></span>
                </button>
            </nav>
        </div>
        <div class="container">
        <!--//nav-->
            <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-sm-3 px-0">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item {{ request()->is('beranda') ? 'active' : ''}}">
                            <a class="nav-link"  href="/beranda">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profil <span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item {{ request()->is('tentang') ? 'active' : ''}}" href="/tentangdprd">Tentang</a>
                                <a class="dropdown-item {{ request()->is('visimisi') ? 'active' : ''}}" href="/visimisi">Visi dan Misi</a>
                                <a class="dropdown-item {{ request()->is('tugasfungsi') ? 'active' : ''}}" href="/tugasfungsi">Tugas dan Fungsi</a>
                                <a class="dropdown-item {{ request()->is('strukturorganisasi') ? 'active' : ''}}" href="/profil/strukturorganisasi">Struktur Organinasi</a>
                                <a class="dropdown-item {{ request()->is('pejabatstruktural') ? 'active' : ''}}" href="/profil/pejabatstruktural">Profil Pejabat Struktural</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Agenda<span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item {{ request()->is('agendasekretariat') ? 'active' : ''}}" href="{{ url('/agenda/sekretariat')  }}">Agenda Sekkretariat</a>
                                <a class="dropdown-item {{ request()->is('agendadprd') ? 'active' : ''}}" href="{{ url('/agenda/dprd')  }}">Agenda DPRD</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Berita<span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item {{ request()->is('berita') ? 'active' : ''}}" href="/berita">Berita Utama</a>
                                <a class="dropdown-item {{ request()->is('pressrelease') ? 'active' : ''}}" href="/berita/pressrelease">Press Release</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                AKD<span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item {{ request()->is('komisi') ? 'active' : ''}}" href="/akd/komisi">Komisi</a>
                                <a class="dropdown-item {{ request()->is('pimpinan') ? 'active' : ''}}" href="/akd/pimpinandprd">Pimpinan DPRD</a>
                                <a class="dropdown-item {{ request()->is('badankehormatan') ? 'active' : ''}}" href="/akd/badankehormatan">Badan Kehormatan</a>
                                <a class="dropdown-item {{ request()->is('badanmusyawarah') ? 'active' : ''}}" href="/akd/badanmusyawarah">Badan Musyawarah</a>
                                <a class="dropdown-item {{ request()->is('badananggaran') ? 'active' : ''}}" href="/akd/badananggaran">Badan Anggaran</a>
                                <a class="dropdown-item {{ request()->is('badanperda') ? 'active' : ''}}" href="/akd/badanperda">Badan Pembentukan Perda</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Fraksi<span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item {{ request()->is('fraksipdip') ? 'active' : ''}}" href="/fraksi/pdip">Partai PDIP</a>
                                <a class="dropdown-item {{ request()->is('fraksidemokrat') ? 'active' : ''}}" href="/fraksi/demokrat">Partai Demokrat</a>
                                <a class="dropdown-item {{ request()->is('fraksipks') ? 'active' : ''}}" href="/fraksi/pks">Partai PKS</a>
                                <a class="dropdown-item {{ request()->is('fraksigolkar') ? 'active' : ''}}" href="/fraksi/golkar">Partai Golkar</a>
                                <a class="dropdown-item {{ request()->is('fraksipan') ? 'active' : ''}}" href="/fraksi/pan">Partai PAN</a>
                                <a class="dropdown-item {{ request()->is('fraksinasdem') ? 'active' : ''}}" href="/fraksi/nasdem">Partai Nasdem</a>
                                <a class="dropdown-item {{ request()->is('fraksipsi') ? 'active' : ''}}" href="/fraksi/pan">Partai PSI</a>
                                <a class="dropdown-item {{ request()->is('fraksippp') ? 'active' : ''}}" href="/fraksi/nasdem">Partai PPP</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sekretariat<span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item {{ request()->is('skrrencanalaporan') ? 'active' : ''}}" href="/sekretariat/rencanalaporan"> Rencana dan Laporan</a>
                                <a class="dropdown-item {{ request()->is('skrtugasfungsi') ? 'active' : ''}}" href="/sekretariat/tugasfungsi">Tugas dan Fungsi</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Informasi<span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item {{ request()->is('transparansianggaran') ? 'active' : ''}}" href="/informasi/transparansianggaran">Transparansi Anggaran</a>
                                <a class="dropdown-item {{ request()->is('transparansikinerja') ? 'active' : ''}}" href="/informasi/transparansikinerja">Transparansi Kinerja</a>
                                <a class="dropdown-item {{ request()->is('pengumuman') ? 'active' : ''}}" href="/informasi/pengumuman">Pengumuman</a>
                                <a class="dropdown-item {{ request()->is('kunjungan') ? 'active' : ''}}" href="/informasi/formulir/kunjungan">Formulir Kunjungan</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Publikasi<span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item {{ request()->is('gallery') ? 'active' : ''}}" href="/publikasi/gallery">Gallery</a>
                                <a class="dropdown-item {{ request()->is('vod') ? 'active' : ''}}" href="/publikasi/vod">Video on Demand</a>
                                <a class="dropdown-item {{ request()->is('live') ? 'active' : ''}}" href="/publikasi/live">Siaran Langsung</a>
                            </div>
                        </li>
                        <li class="nav-item {{ request()->is('kontak') ? 'active' : ''}}">
                            <a class="nav-link" href="/kontak">Kontak</a>
                        </li>
                        <li class="nav-item {{ request()->is('ppid') ? 'active' : ''}}">
                            <a class="nav-link" href="/ppid">PPID</a>
                        </li>
                        <li class="nav-item {{ request()->is('jdih') ? 'active' : ''}}">
                            <a class="nav-link" href="/jdih">JDIH</a>
                    </ul>
                </div>
            </nav>
        </div>
        <!--//nav-->
    </header>
    <!-- //header -->
