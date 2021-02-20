@extends('admin.layouts.master')
@section('title', 'Dashboard - Tentang')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tentang DPRD</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('tentang.index')}}">Tentang</a></div>
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
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea required class="form-control" name="description" id="description" rows="3"
                                                resize="none" placeholder="Deskripsi" value="{{ old('description') }}"></textarea>
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
