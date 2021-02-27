<div class="sidebar-brand">
    <a href="index.html">
        <img alt="image" src="{{asset('assets')}}/images/logo.png" class="header-logo" />
        <span class="logo-name">Grexa</span>
    </a>
</div>
<ul class="sidebar-menu">
    <li class="menu-header">Main</li>
    <li class="Dropdown">
        <a href="index.html#" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
    </li>
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
        <a class="nav-link" href="vector-map.html"><i class="fas fa-map-marked-alt"></i><span>Vector Map</span></a>
    </li>

</ul>
