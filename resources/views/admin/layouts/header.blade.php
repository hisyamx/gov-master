    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets') }}/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets') }}/css/components.css">
    <link rel="stylesheet" href="{{asset('assets') }}/plugins/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="{{asset('assets') }}/plugins/flag-icon-css/css/flag-icon.min.css">
    <!-- Custom style CSS -->
    <!-- icons css -->
    <link rel="stylesheet" href="{{asset('assets') }}/plugins/ionicons/css/ionicons.min.css">
    <!-- Data Tables css -->
    {{-- <link rel="stylesheet" href="{{asset('assets')}}/plugins/datatables/DataTables/css/dataTables.bootstrap4.min.css"> --}}
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/datatables/datatables.min.css">
    {{-- Summernote --}}
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fonts/webfonts/fa-solid-900.woff2">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> --}}
    <!-- Font css -->
    <!-- include libraries -->
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
    <!-- include summernote css/js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
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

