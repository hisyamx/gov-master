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
        $('#btn-Fraksi').click(function () {
            $('#tambah').val("create-post"); //valuenya menjadi create-post
            $('#id').val(''); //valuenya menjadi kosong
            $('#form-fraksi').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("Tambah Pegawai Baru"); //valuenya tambah pegawai baru
            $('#modalInputAnggota').modal('show'); //modal tampil
        });
        //MULAI DATATABLE
        //script untuk memanggil data json dari server dan menampilkannya berupa datatable
        $('#foto').change(function(e) {
            // console.log('sasa', e);
            var fileName = e.target.files[0].name;
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
                $('#file_upload').val(fileName);
            };
            reader.readAsDataURL(this.files[0]);
        });
        $(document).ready(function () {
            var table = $('#table-anggota').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side 
                ajax: {
                    url: "{{ url('/anggota') }}",
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
                        data: 'nama_anggota',
                        name: 'nama_anggota'
                    },
                    {
                        data: 'nama_fraksi',
                        name: 'nama_fraksi'
                    },
                    {
                        data: 'agama',
                        name: 'agama'
                    },
                    {
                        data: 'jenis_kelamin',
                        name: 'jenis_kelamin'
                    },
                    {
                        data: 'komisi',
                        name: 'komisi'
                    },
                    {
                        data: 'akd',
                        name: 'akd'
                    },
                    {
                        data: 'dapil',
                        name: 'dapil'
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
                    var nama = $('#nama_anggota').val();
                    var fraksi = $('#nama_fraksi').val();
                    var agama = $('#agama').val();
                    var jenis = $('#jenis_kelamin').val();
                    var jabatan = $('#jabatan_fraksi').val();
                    var komisi = $('#komisi').val();
                    var jabatan1 = $('#jabatan_komisi').val();
                    var akd = $('#akd').val();
                    var jabatan2 = $('#jabatan_akd').val();
                    var dapil = $('#dapil').val();
                    var gambar = $('#foto')[0].files[0];
                    formdata.append('nama_anggota', nama);
                    formdata.append('nama_fraksi', fraksi);
                    formdata.append('agama', agama);
                    formdata.append('jenis_kelamin', jenis);
                    formdata.append('jabatan_fraksi', jabatan);
                    formdata.append('komisi', komisi);
                    formdata.append('jabatan_komisi', jabatan1);
                    formdata.append('akd', akd);
                    formdata.append('jabatan_akd', jabatan2);
                    formdata.append('dapil', dapil);
                    formdata.append('foto', gambar);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                $.ajax({
                    data : formdata,
                    url : "{{ url('admin/tambah-anggota') }}",
                    type : "POST",
                    dataType : 'json',
                    processData: false,
                    contentType: false,
                    success: function (data) { //jika berhasil 
                            $('#form-fraksi').trigger("reset"); //form reset
                            $('#modalInputAnggota').modal('hide'); //modal hide
                            $('#tambah').html('Simpan'); //tombol simpan
                            var oTable = $('#table-anggota').dataTable(); //inialisasi datatable
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
            $.get('admin/edit-anggota' + data_id + '/{id}', function (data_id) {
                $('#modal-judul').html("Edit Post");
                $('#tambah').val("edit-post");
                $('#modalInputAnggota').modal('show');
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
                $('#id').val(data.result['id']);
                $('#nama_anggota').val(data.result['nama_anggota']);
                $('#nama_fraksi').val(data.result['nama_fraksi']);
                $('#agama').val(data.result['agama']);
                $('#jenis_kelamin').val(data.result['jenis_kelamin']);
                $('#jabatan_fraksi').val(data.result['jabatan_fraksi']);
                $('#komisi').val(data.result['komisi']);
                $('#jabatan_komisi').val(data.result['jabatan_komisi']);
                $('#akd').val(data.result['akd']);
                $('#jabatan_akd').val(data.result['jabatan_akd']);
                $('#dapil').val(data.result['dapil']);
                $('#foto').val(data.result['foto']);
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