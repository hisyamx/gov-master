@extends('admin.layouts.master')
@section('title', 'Dashboard - Kategori')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kategori Berita - Agenda</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('kategori.index')}}">Kategori Berita - Agenda</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('kategori.index') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="kategori">kategori</label>
                                            <input required type="text" class="form-control" id="kategori" name="kategori"
                                                value="{{ old('kategori') }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="slug">slug</label>
                                            <input required type="text" class="form-control" id="slug" name="slug"
                                                value="{{ old('slug') }}">
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
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Kategori Berita - Agenda</h4>
                    </div>
                    <div class="table-responsive table-invoice">
                        <table class="table table-striped">
                            <tr>
                                <th>Kategori</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                            <?php $i = 1; ?>
                            @foreach($kategori AS $args)
                            <tr>
                                <td>{{$args->kategori}}</td>
                                <td>{{$args->slug}}</td>
                                <td>
                                    <div class="media-cta-square">
                                        <a href="{{route('kategori.show',$args->id)}}" class="btn btn-info">Edit</a>
                                        <form action="{{ route('kategori.delete',$args->id) }}" method="POST">
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
    </section>
</div>
@endsection
