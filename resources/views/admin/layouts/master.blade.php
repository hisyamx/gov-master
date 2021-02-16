<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Dashboard</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets') }}/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets') }}/css/components.css">
    <link rel="stylesheet" href="{{asset('assets') }}/plugins/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="{{asset('assets') }}/plugins/flag-icon-css/css/flag-icon.min.css">
    <!-- Custom style CSS -->
    <link rel='shortcut icon' type='image/x-icon' href="{{asset('assets') }}/images/logo.svg">
    <!-- icons css -->
    <link rel="stylesheet" href="{{asset('assets') }}/plugins/ionicons/css/ionicons.min.css">
    <!-- Font css -->
    <link rel="stylesheet" href="{{asset('assets')}}/fonts/webfonts/fa-solid-900.woff2">
    <!-- Data Tables css -->
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/datatables/DataTables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/datatables/datatables.min.css">
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                @include('admin/layouts/header')
            </nav>
            <div class="main-sidebar sidebar-style-1">
                <aside id="sidebar-wrapper">
                    @include('admin/layouts/sidebar')
                </aside>
            </div>
            <!-- Main Content -->
            @yield('content')
            <footer class="main-footer">
                @include('admin/layouts/footer')
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{asset('assets')}}/js/app.min.js"></script>
    <!-- JS Libraie assets -->
    <script src="{{asset('assets')}}/plugins/echart/echarts.js"></script>

    <script src="{{asset('assets')}}/plugins/chartjs/chart.min.js"></script>
    <script src="{{asset('assets')}}/plugins/apexcharts/apexcharts.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="{{asset('assets')}}/js/page/index.js"></script>
    <!-- Template JS File -->
    <script src="{{asset('assets')}}/js/scripts.js"></script>
    <!-- Data Table js -->
    <script src="{{asset('assets')}}/plugins/datatables/DataTables/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('assets')}}/plugins/datatables/datatables.min.js"></script>
</body>

</html>
