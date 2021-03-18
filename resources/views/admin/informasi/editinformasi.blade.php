@extends('admin.layouts.master')
@section('title', 'Dashboard - informasi')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>informasi</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('informasi.index')}}">informasi</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('informasi.edit',$informasi->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="linksatu">link Transparansi Anggaran</label>
                                            <input required type="text" class="form-control" id="linksatu"
                                                name="linksatu" value="{{ $informasi->linksatu }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="linkdua">link Transparansi Kinerja</label>
                                            <input required type="text" class="form-control" id="linkdua" name="linkdua"
                                                value="{{ $informasi->linkdua }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="linktiga">link Pengumuman</label>
                                            <input required type="text" class="form-control" id="linktiga"
                                                name="linktiga" value="{{ $informasi->linktiga }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="linkkunjungan">Link Kunjungan</label>
                                            <input required type="text" class="form-control" id="linkkunjungan"
                                                name="linkkunjungan" value="{{ $informasi->linkkunjungan }}">
                                        </div>
                                    </div> <br>
                                    <button type="submit" class="btn btn-primary edit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
