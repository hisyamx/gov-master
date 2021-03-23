@extends('admin.layouts.master')
@section('title', 'komisi')

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
        $('#btnKomisi').click(function () {
            $('#tambah').val("create-post"); //valuenya menjadi create-post
            $('#id').val(''); //valuenya menjadi kosong
            $('#form-komisi').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("Tambah komisi Baru"); //valuenya tambah baru
            $('#modalInputKomisi').modal('show'); //modal tampil
        });
        //MULAI DATATABLE
        //script untuk memanggil data json dari server dan menampilkannya berupa datatable
        $(document).ready(function () {
            var table = $('#table-komisi').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side
                ajax: {
                    url: "{{ url('/admin/kelola-komisi') }}",
                    type: 'GET',
                    dataType:"json",
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
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'fraksi',
                        name: 'fraksi'
                    },
                    {
                        data: 'jabatan',
                        name: 'jabatan'
                    },
                    {
                        data: 'komisi',
                        name: 'komisi'
                    },
                    {
                        data: 'tingkat',
                        name: 'tingkat'
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
        $('#tambah').click(function(){
            var id = $('#id').val();
            if(id == ''){
                var formdata = new FormData();
                    var nama = $('#nama').val();
                    var jabatan = $('#jabatan').val();
                    var fraksi = $('#fraksi').val();
                    var komisi = $('#komisi').val();
                    var tingkat = $('#tingkat').val();
                    formdata.append('nama', nama);
                    formdata.append('jabatan', jabatan);
                    formdata.append('fraksi', fraksi);
                    formdata.append('komisi', komisi);
                    formdata.append('tingkat', tingkat);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                $.ajax({
                    data : formdata,
                    url : "{{ url('admin/kelola-komisi') }}",
                    type : "POST",
                    dataType : 'json',
                    processData: false,
                    contentType: false,
                    success: function (data) { //jika berhasil
                            $('#form-komisi').trigger("reset"); //form reset
                            $('#modalInputKomisi').modal('hide'); //modal hide
                            $('#tambah').html('Simpan'); //tombol simpan
                            var oTable = $('#table-komisi').dataTable(); //inialisasi datatable
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
                })
            }
        });
        // if ($("#form-komisi").length > 0) {
        //     $("#form-komisi").validate({
        //         submitHandler: function (form) {
        //             var actionType = $('#tambah').val();
        //             $('#tambah').html('Sending..');
        //             $.ajax({
        //                 data: $('#form-komisi')
        //                     .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
        //                 url: "{{ url('/komisi') }}", //url simpan data
        //                 type: "POST", //karena simpan kita pakai method POST
        //                 dataType: 'json', //data tipe kita kirim berupa JSON
        //                 success: function (data) { //jika berhasil
        //                     $('#form-komisi').trigger("reset"); //form reset
        //                     $('#modalInputkomisi').modal('hide'); //modal hide
        //                     $('#tambah').html('Simpan'); //tombol simpan
        //                     var oTable = $('#table-komisi').dataTable(); //inialisasi datatable
        //                     oTable.fnDraw(false); //reset datatable
        //                     iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
        //                         title: 'Data Berhasil Disimpan',
        //                         message: '{{ Session('
        //                         success ')}}',
        //                         position: 'bottomRight'
        //                     });
        //                 },
        //                 error: function (data) { //jika error tampilkan error pada console
        //                     console.log('Error:', data);
        //                     $('#tambah').html('Simpan');
        //                 }
        //             });
        //         }
        //     })
        // }
        //TOMBOL EDIT DATA PER komisi DAN TAMPILKAN DATA BERDASARKAN ID komisi KE MODAL
        //ketika class edit-post yang ada pada tag body di klik maka
        $('body').on('click', '.edit-post', function () {
            var data_id = $(this).data('id');
            $.get('admin/edit-komisi/' + data_id , function (data) {
                $('#modal-judul').html("Edit Post");
                $('#tambah').val("edit-post");
                $('#modalInputKomisi').modal('show');
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas
                $('#nama').val(data.result['nama']);
                $('#fraksi').val(data.result['fraksi']);
                $('#jabatan').val(data.result['jabatan']);
                $('#komisi').val(data.result['komisi']);
                $('#tingkat').val(data.result['tingkat']);
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
                url: "/admin/hapus-komisi/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#table-komisi').dataTable();
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
