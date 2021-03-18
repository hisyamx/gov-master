@extends('admin.layouts.master')
@section('title', 'Struktur Organisasi')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Struktur Organisasi DPRD</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('strukturorganisasi.index')}}">Struktur Organisasi</a>
                </div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('strukturorganisasi.index') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-lg-12">
                                            <label for="title">Title</label>
                                            <input required type="text" class="form-control" id="title" name="title"
                                                value="{{ old('title') }}">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label for="description">Description</label>
                                            <textarea class="form-control konten" name="description" id="description"
                                                rows="3" resize="none" placeholder="Deskripsi"
                                                value="{{ old('description') }}"></textarea>
                                        </div>
                                    </div> <br>
                                    <button type="submit" class="btn btn-primary tambah">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Section --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Dekripsi Struktur Organisasi DPRD</h4>
                    </div>
                    <div class="table-responsive table-invoice">
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th width="15%">Action</th>
                            </tr>
                            <?php $i = 1; ?>
                            @foreach($strukturorganisasi AS $args)
                            <tr>
                                <td>{{$args->title}}</td>
                                <td>{!! $args->description !!}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('strukturorganisasi.show',$args->id)}}"
                                            class="btn btn-info">Edit</a>
                                        <form action="{{ route('strukturorganisasi.delete',$args->id) }}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger hapus" type="submit">Delete</button>
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
        {{-- Section --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Struktur Organisasi DPRD</h4>
                    </div>
                    <div class="table-responsive table-invoice">
                        <table class="table table-striped">
                            <tr>
                                <td>Nama</td>
                                <td>Jabatan</td>
                                <td>Fraksi</td>
                            </tr>

                            @foreach($strukturorganisasi as $row)
                            <tr>
                                <td>
                                    <a href="#" class="xedit" data-pk="{{$row->id}}" data-name="name">
                                        {{$row->name}}</a>
                                </td>

                                <td>
                                    <a href="#" class="xedit" data-pk="{{$row->id}}" data-name="jabatan">
                                        {{$row->jabatan}}</a>
                                </td>
                                <td>
                                    <a href="#" class="xedit" data-pk="{{$row->id}}" data-name="fraksi">
                                        {{$row->fraksi}}</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            }
        });

        $('.xedit').editable({
            url: '{{url("contacts/update")}}',
            title: 'Update',
            success: function (response, newValue) {
                console.log('Updated', response)
            }
        });

    })
</script>

@endsection
