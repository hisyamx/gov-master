@extends('admin.layouts.master')
@section('title', 'Fraksi')

@section('script')
<script type="text/javascript">
        //CSRF TOKEN PADA HEADER
        //Script ini wajib krn kita butuh csrf token setiap kali mengirim request post, patch, put dan delete ke server
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        //TOMBOL TAMBAH DATA
        //jika tombol-tambah diklik maka
        $('#btnFraksi').click(function () {
            $('#tambah').val("create-post"); //valuenya menjadi create-post
            $('#fraksi_id').val(''); //valuenya menjadi kosong
            $('#form-fraksi').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("Tambah Pegawai Baru"); //valuenya tambah pegawai baru
            $('#modalInputFraksi').modal('show'); //modal tampil
        });
        //MULAI DATATABLE
        //script untuk memanggil data json dari server dan menampilkannya berupa datatable
        $(document).ready(function () {
            var table = $('#table-fraksi').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side 
                ajax: {
                    url: "{{ route('/fraksi.fraksi') }}",
                    type: 'POST',
                    dataType:"json"
                    data: function (d) {
                        d.action = 'load';
                    },
                    dataSrc: function (data) {
                        return data.data;
                    }
                },
                "columnDefs": [{
                    "searchable": false,
                    "orderable": false,
                    "targets": []
                }],
                columns: [{
                        data: 'fraksi_name',
                        name: 'fraksi_name'
                    },
                    {
                        data: 'fraksi_foto',
                        name: 'fraksi_foto'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                ],
                order: [
                    [0, 'asc']
                ]
            });
        });
        //SIMPAN & UPDATE DATA DAN VALIDASI (SISI CLIENT)
        //jika id = form-tambah-edit panjangnya lebih dari 0 atau bisa dibilang terdapat data dalam form tersebut maka
        //jalankan jquery validator terhadap setiap inputan dll dan eksekusi script ajax untuk simpan data
        if ($("#form-fraksi").length > 0) {
            $("#form-fraksi").validate({
                submitHandler: function (form) {
                    var actionType = $('#tambah').val();
                    $('#tambah').html('Sending..');
                    $.ajax({
                        data: $('#form-fraksi')
                            .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('/fraksi.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON
                        success: function (data) { //jika berhasil 
                            $('#form-fraksi').trigger("reset"); //form reset
                            $('#modalInputFraksi').modal('hide'); //modal hide
                            $('#tambah').html('Simpan'); //tombol simpan
                            var oTable = $('#table-fraksi').dataTable(); //inialisasi datatable
                            oTable.fnDraw(false); //reset datatable
                            iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                                title: 'Data Berhasil Disimpan',
                                message: '{{ Session('
                                success ')}}',
                                position: 'bottomRight'
                            });
                        },
                        error: function (data) { //jika error tampilkan error pada console
                            console.log('Error:', data);
                            $('#tambah').html('Simpan');
                        }
                    });
                }
            })
        }
        //TOMBOL EDIT DATA PER FRAKSI DAN TAMPILKAN DATA BERDASARKAN ID FRAKSI KE MODAL
        //ketika class edit-post yang ada pada tag body di klik maka
        $('body').on('click', '.edit-post', function () {
            var data_id = $(this).data('id');
            $.get('admin/fraksi/' + data_id + '/edit', function (data) {
                $('#modal-judul').html("Edit Post");
                $('#tambah').val("edit-post");
                $('#modalInputFraksi').modal('show');
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
                $('#fraksi_id').val(data.fraksi_id);
                $('#fraksi_name').val(data.fraksi_name);
                $('#fraksi_foto').val(data.fraksi_foto);
            })
        });
        //jika klik class delete (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
        $(document).on('click', '.delete', function () {
            dataId = $(this).attr('id');
            $('#konfirmasi-modal').modal('show');
        });
        //jika tombol hapus pada modal konfirmasi di klik maka
        $('#tombol-hapus').click(function () {
            $.ajax({
                url: "/fraksi/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#table-fraksi').dataTable();
                        oTable.fnDraw(false); //reset datatable
                    });
                    iziToast.warning({ //tampilkan izitoast warning
                        title: 'Data Berhasil Dihapus',
                        message: '{{ Session('
                        delete ')}}',
                        position: 'bottomRight'
                    });
                }
            })
        });

</script>
@endsection