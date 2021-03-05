<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{csrf_token() }}">
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
    {{-- Tiny MCE editor --}}
    <script src="https://cdn.tiny.cloud/1/gz7dxy3cdxgn8mmaiqvzfc946r68pwukt3nce3dwdnfvoavk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    {{-- editable table --}}
    {{-- <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script> --}}
</head>

<body>
    <div></div>
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
        </div>
        <footer class="main-footer">
            @include('admin/layouts/footer')
        </footer>
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
    <!-- JS Libraies -->
    <script src="{{asset('assets')}}/bundles/dropzonejs/min/dropzone.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="{{asset('assets')}}/js/page/multiple-upload.js"></script>
    <!-- Data Table js -->
    <!-- <script src="{{asset('assets')}}/plugins/datatables/DataTables/js/dataTables.bootstrap4.min.js"></script> -->
    <script src="{{asset('assets')}}/plugins/datatables/datatables.min.js"></script>
    {{-- <script>
        $(".datepicker").datepicker({
            inline: true,
            changeYear: true,
            changeMonth: true,
            dateFormat: "yy-mm-dd"
        });

        $(".tanggal").datepicker({
            inline: true,
            changeYear: true,
            changeMonth: true,
            dateFormat: "dd-mm-yy"
        });
    </script> --}}
    <script type="text/javascript">
        tinymce.init({
            selector: '.editormce'
        });
    </script>
    <script>
        // TINYMCE
        tinymce.init({
            selector: '.konten',
            height: 300,
            content_css_cors: true,
            content_style: 'div { margin: 10px; border: 5px solid red; padding: 10px; }',
            plugins: 'print preview paste searchreplace autolink directionality visualblocks visualchars code fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools colorpicker textpattern code preview help',
            toolbar: 'formatselect | fontsizeselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | image | table | hr media removeformat code preview',
            visual_table_class: 'tiny-table',
            fontsize_formats: "8px 10px 12px 14px 18px 24px 36px"
        });
        // Simpple
        tinymce.init({
            selector: '.simple',
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount image media'
            ],
            toolbar: 'undo redo | formatselect | media | image | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css_cors: true
        });

    </script>

</body>

    <!-- chart js -->
    <script src="{{asset('assets')}}/plugins/chartjs/chart.min.js"></script>
    <script src="{{asset('assets')}}/plugins/echart/echarts.js"></script>

    <!-- izitoast js -->
    <script src="{{asset('assets')}}/plugins/izitoast/js/iziToast.min.js"></script>
</body>

@yield('script')

</html>
