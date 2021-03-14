        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2021 <div class="bullet"></div> Powered by <a href="#">Team Informatika</a>
            </div>
            <div class="footer-right">
            </div>
        </footer>
    </div>
</div>

@yield('script')
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
{{-- <script src="{{asset('assets')}}/plugins/datatables/DataTables/js/dataTables.bootstrap4.min.js"></script> --}}
<script src="{{asset('assets')}}/plugins/datatables/datatables.min.js"></script>
<!-- chart js -->
<script src="{{asset('assets')}}/plugins/chartjs/chart.min.js"></script>
<script src="{{asset('assets')}}/plugins/echart/echarts.js"></script>
<!-- izitoast js -->
<script src="{{asset('assets')}}/plugins/izitoast/js/iziToast.min.js"></script>
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
<script>
    $(document).ready(function () {
        var table = $('#example').DataTable();
    });

</script>
<script>
    $('.tambah').click(function () {
        swal("Selamat!", "Data berhasil ditambahkan", "success");
    })

</script>
<script>
    $('.edit').click(function () {
        swal("Selamat!", "Data berhasil diubah", "success");
    })

</script>
<script>
    $('.hapusvisimisi').click(function () {
        var id = $(this).attr('id');
        swal({
                title: "Kamu Yakin?",
                text: "Data visimisi ini mau dihapus!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/admin/hapus-visimisi/" + id + "";
                    swal("Selamat! Data berhasil dihapus!", {
                        icon: "success",
                    });
                }
            });
    });

</script>
<script>
    $('.hapusblog').click(function () {
        var id = $(this).attr('id');
        swal({
                title: "Kamu Yakin?",
                text: "Data Blog ini mau dihapus!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/admin/hapus-blog/" + id + "";
                    swal("Selamat! Data berhasil dihapus!", {
                        icon: "success",
                    });
                }
            });
    });

</script>
<script>
    $('.hapusberita').click(function () {
        var id = $(this).attr('id');
        swal({
                title: "Kamu Yakin?",
                text: "Data berita ini mau dihapus!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/admin/hapus-berita/" + id + "";
                    swal("Selamat! Data berhasil dihapus!", {
                        icon: "success",
                    });
                }
            });
    });

</script>
