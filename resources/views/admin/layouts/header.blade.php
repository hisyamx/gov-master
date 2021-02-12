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
            <div class="dropdown-divider"></div>
            <a href="auth-login.html" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </li>
</ul>
