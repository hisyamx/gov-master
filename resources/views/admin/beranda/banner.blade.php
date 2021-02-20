@extends('admin.layouts.master')
@section('title', 'Dashboard - Logo')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Uploud Banner Beranda</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('banner.index')}}">Kelola banner</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                @include('admin.layouts.message')
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('banner.index') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h6>Banner 1</h6>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="name">Nama</label>
                                            <input required type="text" class="form-control" id="name" name="name"
                                            value="{{ old('bannername') }}">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label>Tambahkan Banner</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="cover_image">
                                                <label class="custom-file-label" for="bannersatu"></label>
                                            </div>
                                        </div>
                                    </div> <br>
                                    <h6>Banner 2</h6>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="name">Nama</label>
                                            <input required type="text" class="form-control" id="name" name="name"
                                            value="{{ old('bannername') }}">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label>Tambahkan Banner</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="cover_image">
                                                <label class="custom-file-label" for="bannerdua"></label>
                                            </div>
                                        </div>
                                    </div> <br>
                                    <h6>Banner 3</h6>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="name">Nama</label>
                                            <input required type="text" class="form-control" id="name" name="name"
                                            value="{{ old('bannername') }}">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label>Tambahkan Banner</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="cover_image">
                                                <label class="custom-file-label" for="bannertiga"></label>
                                            </div>
                                        </div>
                                    </div> <br>
                                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
