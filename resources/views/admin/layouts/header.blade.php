<div class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
        <li><a href="index.html#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"><i
                    class="fas fa-bars"></i></a></li>
    </ul>
</div>
<ul class="navbar-nav navbar-right">
    <li class="dropdown"><a href="index.html#" data-toggle="dropdown"
            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{asset('assets')}}/images/user.png" class="user-img-radious-style">
            <span class="d-sm-none d-lg-inline-block"></span></a>
        <div class="dropdown-menu dropdown-menu-right">
            {{-- <div class="dropdown-title">Hello Jessica Hill</div> --}}
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fab fa-gg"></i><span>Beranda</span></a>
        <ul class="dropdown-menu">
            <a class="nav-link @if(Request::is('admin/buat-artikel')) {{'active'}} @endif" href="{{ url('admin/buat-artikel') }}">
            <li><a class="nav-link" href="chat.html">Kelola Banner</a></li>
            <li><a class="nav-link" href="portfolio.html">Kelola Logo</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fab fa-gg"></i><span>Profil</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="chat.html">Kelola Profil</a></li>
            <li><a class="nav-link" href="portfolio.html">Struktur Organisasi</a></li>
            <li><a class="nav-link" href="portfolio.html">Pejabat Struktural</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fab fa-gg"></i><span>Profil</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="chat.html">Kelola Profil</a></li>
            <li><a class="nav-link" href="portfolio.html">Struktur Organisasi</a></li>
            <li><a class="nav-link" href="portfolio.html">Pejabat Struktural</a></li>
        </ul>
    </li>
    <div class="dropdown-divider"></div>
    <a href="auth-login.html" class="dropdown-item has-icon text-danger">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>
    </div>
    </li>
</ul>
