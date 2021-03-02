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
            <div class="dropdown-title">Hello {{ Auth::user()->name ?? 'admin' }}</div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
</ul>
