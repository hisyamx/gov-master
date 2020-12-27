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
                <!-- <a class="navbar-brand" href="index.html">
                    <span class="fa fa-newspaper-o"></span></a> -->
                <!-- if logo is image enable this    -->
                    <a class="navbar-brand" href="#index.html">
                        <img src="{{asset('/assets')}}/images/logodprd.svg" alt="Logo DPRD" title="DPRD" style="height:35px;" />
                    </a>
                    <!-- <nav class="mx-auto">
                        <div class="search-bar">
                            <form class="search">
                                <input type="search" class="search__input" name="search"
                                    placeholder="Discover news, articles and more" onload="equalWidth()" required>
                                <span class="fa fa-search search__icon"></span>
                            </form>
                        </div>
                    </nav> -->

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
                <!-- <a class="navbar-brand" href="index.html">
                    <span class="fa fa-newspaper-o"></span></a> -->
                <!-- if logo is image enable this    -->
                    <!-- <a class="navbar-brand" href="#index.html">
                        <img src="image-path" alt="Logo DPRD" title="DPRD" style="height:35px;" />
                    </a> -->

                <!-- <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fa icon-expand fa-bars"></span>
                    <span class="fa icon-close fa-times"></span>
                </button> -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item @@pages_active">
                            <a class="nav-link" href="/beranda">Beranda</a>
                        </li>
                        <li class="nav-item dropdown @@pages__active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profil <span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item @@b__active" href="profil/tentang">Tentang</a>
                                <a class="dropdown-item @@fa__active" href="profil/visimisi">Visi dan Misi</a>
                                <a class="dropdown-item @@fa__active" href="profil/tugasfungsi">Tugas dan Fungsi</a>
                                <a class="dropdown-item @@fa__active" href="profil/strukturorganisasi">Struktur Organinasi</a>
                                <a class="dropdown-item @@fa__active" href="profil/profilpjb">Profil Pejabat Struktural</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown @@pages__active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Agenda<span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item @@b__active" href="{{ url('/agenda/sekretariat')  }}">Agenda Sekkretariat</a>
                                <a class="dropdown-item @@fa__active" href="{{ url('/agenda/dprd')  }}">Agenda DPRD</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown @@pages__active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Berita<span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item @@b__active" href="berita/mainberita">Berita Utama</a>
                                <a class="dropdown-item @@fa__active" href="berita/pressrelease">Press Release</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown @@pages__active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                AKD<span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item @@b__active" href="akd/komisi">Komisi</a>
                                <a class="dropdown-item @@fa__active" href="akd/pimpinan">Pimpinan DPRD</a>
                                <a class="dropdown-item @@fa__active" href="akd/badankehormatan">Badan Kehormatan</a>
                                <a class="dropdown-item @@fa__active" href="akd/badanmusyawarah">Badan Musyawarah</a>
                                <a class="dropdown-item @@fa__active" href="akd/badananggaran">Badan Anggaran</a>
                                <a class="dropdown-item @@fa__active" href="akd/badanperda">Badan Pembentukan Perda</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown @@fraksi__active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Fraksi<span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item @@b__active" href="fraksi/pdip">Partai PDIP</a>
                                <a class="dropdown-item @@fa__active" href="fraksi/demokrat">Partai Demokrat</a>
                                <a class="dropdown-item @@fa__active" href="fraksi/pks">Partai PKS</a>
                                <a class="dropdown-item @@fa__active" href="fraksi/golkar">Partai Golkar</a>
                                <a class="dropdown-item @@fa__active" href="fraksi/pan">Partai PAN</a>
                                <a class="dropdown-item @@fa__active" href="fraksi/nasdem">Partai Nasdem</a>
                                <a class="dropdown-item @@fa__active" href="fraksi/pan">Partai PSI</a>
                                <a class="dropdown-item @@fa__active" href="fraksi/nasdem">Partai PPP</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown @@sekretariat__active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sekretariat<span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item @@b__active" href="/sekrerencanalaporan"> Rencana dan Laporan</a>
                                <a class="dropdown-item @@fa__active" href="/sekretugasfungsi">Tugas dan Fungsi</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown @@informasi__active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Informasi<span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item @@b__active" href="/tanggaran">Rencana dan Laporan</a>
                                <a class="dropdown-item @@fa__active" href="/tkinerja">Tugas dan Fungsi</a>
                                <a class="dropdown-item @@fa__active" href="/pengumuman">Tugas dan Fungsi</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown @@publikasi__active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Publikasi<span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item @@b__active" href="publikasi/gallery">Gallery</a>
                                <a class="dropdown-item @@fa__active" href="publikasi/vod">Video on Demand</a>
                                <a class="dropdown-item @@fa__active" href="publikasi/live">Siaran Langsung</a>
                            </div>
                        </li>
                        <li class="nav-item @@kontak_active">
                            <a class="nav-link" href="/kontak">Kontak</a>
                        </li>
                        <li class="nav-item @@ppid_active">
                            <a class="nav-link" href="/ppid">PPID</a>
                        </li>
                        <li class="nav-item @@jdih__active">
                            <a class="nav-link" href="/jdih">JDIH</a>
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <!-- <div class="mobile-position">
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
                </div> -->
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
        <!--//nav-->
    </header>
    <!-- //header -->