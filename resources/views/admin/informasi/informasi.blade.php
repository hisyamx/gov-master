@extends('admin.layouts.master')
@section('title', 'Dashboard - informasi')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>informasi DPRD</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('informasi.index')}}">informasi</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                @include('admin.layouts.message')
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('informasi.index') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="linksatu">link Transparansi Anggaran</label>
                                            <input required type="text" class="form-control" id="linksatu" name="linksatu"
                                                value="{{ old('linksatu') }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="linkdua">link Transparansi Kinerja</label>
                                            <input required type="text" class="form-control" id="linkdua" name="linkdua"
                                                value="{{ old('linkdua') }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="linktiga">link Pengumuman</label>
                                            <input required type="text" class="form-control" id="linktiga" name="linktiga"
                                                value="{{ old('linktiga') }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="linkkunjungan">Link Kunjungan</label>
                                            <input required type="text" class="form-control" id="linkkunjungan" name="linkkunjungan"
                                                value="{{ old('linkkunjungan') }}">
                                        </div>
                                    </div> <br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
                        <h4>Informasi</h4>
                    </div>
                    <div class="table-responsive table-invoice">
                        <table class="table table-striped">
                            <tr>
                                <th>Alamat</th>
                                <th>link Transparansi Anggaran</th>
                                <th>link Transparansi Kinerja</th>
                                <th>link Pengumuman</th>
                                <th>Link Kunjungan</th>
                                <th>Action</th>
                            </tr>
                            <?php $i = 1; ?>
                            @foreach($informasi AS $args)
                            <tr>
                                <td>{{$args->alamat}}</td>
                                <td>{{$args->linksatu}}</td>
                                <td>{{$args->linkdua}}</td>
                                <td>{{$args->linktiga}}</td>
                                <td>{{$args->linkkunjungan}}</td>
                                <td>
                                    <div class="media-cta-square">
                                        <a href="{{route('banner.show',$args->id)}}" class="btn btn-info">Edit</a>
                                        <form action="{{ route('banner.delete',$args->id) }}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger" type="submit">Delete</button>
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
    @endsection
