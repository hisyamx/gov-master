    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets') }}/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets') }}/css/components.css">
    <link rel="stylesheet" href="{{asset('assets') }}/plugins/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="{{asset('assets') }}/plugins/flag-icon-css/css/flag-icon.min.css">
    <!-- Custom style CSS -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> --}}
    <!-- icons css -->
    <link rel="stylesheet" href="{{asset('assets') }}/plugins/ionicons/css/ionicons.min.css">
    <!-- Data Tables css -->
    {{-- <link rel="stylesheet" href="{{asset('assets')}}/plugins/datatables/DataTables/css/dataTables.bootstrap4.min.css"> --}}
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/datatables/datatables.min.css">
    {{-- Editor --}}
    <link rel="stylesheet" href="{{asset('assets')}}/fonts/webfonts/fa-solid-900.woff2">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/gz7dxy3cdxgn8mmaiqvzfc946r68pwukt3nce3dwdnfvoavk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    {{-- editable table --}}
    {{-- <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script> --}}
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <div class="navbar-bg"></div>
                <nav class="navbar navbar-expand-lg main-navbar">
                    <div class="form-inline mr-auto">
                        <ul class="navbar-nav mr-3">
                            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"><i class="fas fa-bars"></i></a></li>
                        </ul>
                    </div>
                    <ul class="navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="/dashboard" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <img alt="image" src="{{asset('assets')}}/images/user.png" class="user-img-radious-style">
                                <span class="d-sm-none d-lg-inline-block"></span>
                            </a>
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
                </nav>

