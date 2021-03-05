@extends('admin.layouts.master')
@section('title', 'Dashboard - visimisi')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>visimisi DPRD</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('visimisi.index')}}">visimisi</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                @include('admin.layouts.message')
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('visimisi.index') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="title">Title</label>
                                            <input required type="text" class="form-control" id="title" name="title"
                                                value="{{ old('title') }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="descriptionvisi">Visi</label>
                                            <textarea required class="form-control konten" name="descriptionvisi" id="descriptionvisi"
                                                rows="3" resize="none" placeholder="Visi"
                                                value="{{ old('descriptionvisi') }}"></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="descriptionmisi">Misi</label>
                                            <textarea required class="form-control konten" name="descriptionmisi" id="descriptionmisi"
                                                rows="3" resize="none" placeholder="Misi"
                                                value="{{ old('descriptionmisi') }}"></textarea>
                                        </div>
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div> <br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Section --}}
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Visi Misi DPRD</h4>
                    </div>
                    <div class="table-responsive table-invoice">
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Visi</th>
                                <th>Misi</th>
                                <th>Action</th>
                            </tr>
                            <?php $i = 1; ?>
                            @foreach($visimisi AS $args)
                            <tr>
                                <td>{{$args->title}}</td>
                                <td>{{$args->descriptionvisi}}</td>
                                <td>{{$args->descriptionmisi}}</td>
                                <td>
                                    <div class="media-cta-square">
                                        <a href="{{route('banner.show',$args->id)}}" class="btn btn-info">Edit</a>
                                        <form action="{{ route('banner.delete',$args->id) }}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger tambah" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script>
        $('#tambah').click(function(){
            var id = $('#fraksi_id').val();
            if(id == ''){
                var formdata = new FormData();
                    var nama = $('#fraksi_name').val();
                    formdata.append('fraksi_name', nama);
                    formdata.append('foto', gambar);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                $.ajax({
                    data : formdata,
                    url : "{{ url('admin/kelola-fraksi') }}",
                    type : "POST",
                    dataType : 'json',
                    processData: false,
                    contentType: false,
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
                })
            }
        });
        $('#tombol-hapus').click(function () {
            $.ajax({
                url: "/admin/hapus-fraksi/" + dataId, //eksekusi ajax ke url ini
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
