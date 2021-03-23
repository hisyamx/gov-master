@extends('admin.layouts.master')
@section('title', 'Agenda')

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
        $('#btnAgenda').click(function () {
            $('#tambah').val("create-post"); //valuenya menjadi create-post
            $('#id').val(''); //valuenya menjadi kosong
            $('#form-agenda').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("Tambah Agenda Baru"); //valuenya tambah baru
            $('#modalInputAgenda').modal('show'); //modal tampil
        });
        //MULAI DATATABLE
        //script untuk memanggil data json dari server dan menampilkannya berupa datatable
        $(document).ready(function () {
            var table = $('#table-agenda').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side
                ajax: {
                    url: "{{ url('admin/agendadprd') }}",
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
                        data: 'nama_agenda',
                        name: 'nama_agenda'
                    },
                    {
                        data: 'tempat',
                        name: 'tempat'
                    },
                    {
                        data: 'durasi',
                        name: 'durasi'
                    },
                    {
                        data: 'tanggal_buat',
                        name: 'tanggal_buat'
                    },
                    {
                        data: 'tanggal_post',
                        name: 'tanggal_post'
                    },
                    {
                        data: 'peserta',
                        name: 'peserta'
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
                    var nama = $('#nama_agenda').val();
                    var tempat = $('#tempat').val();
                    var durasi = $('#durasi').val();
                    var buat = $('#tanggal_buat').val();
                    var post = $('#tanggal_post').val();
                    var peserta = $('#peserta').val();
                    formdata.append('nama_agenda', nama);
                    formdata.append('tempat', tempat);
                    formdata.append('durasi', durasi);
                    formdata.append('tanggal_buat', buat);
                    formdata.append('tanggal_post', post);
                    formdata.append('peserta', peserta);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                $.ajax({
                    data : formdata,
                    url : "{{ url('admin/tambah-agenda') }}",
                    type : "POST",
                    dataType : 'json',
                    processData: false,
                    contentType: false,
                    success: function (data) { //jika berhasil
                            $('#form-admin').trigger("reset"); //form reset
                            $('#modalInputAdmin').modal('hide'); //modal hide
                            $('#tambah').html('Simpan'); //tombol simpan
                            var oTable = $('#table-admin').dataTable(); //inialisasi datatable
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
        //TOMBOL EDIT DATA PER FRAKSI DAN TAMPILKAN DATA BERDASARKAN ID FRAKSI KE MODAL
        //ketika class edit-post yang ada pada tag body di klik maka
        $('body').on('click', '.edit-post', function () {
            var data_id = $(this).data('id');
            $.get('admin/edit-fraksi' + data_id + '/{id}', function (data_id) {

                $('#modal-judul').html("Edit Post");
                $('#tambah').val("edit-post");
                $('#modalInputFraksi').modal('show');
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas
                $('#fraksi_id').val(data.result['fraksi_id']);
                $('#fraksi_name').val(data.result['fraksi_name']);
                $('#fraksi_foto').val(data.result['fraksi_foto']);
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
                url: "admin/hapus-fraksi" + dataId, //eksekusi ajax ke url ini
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
