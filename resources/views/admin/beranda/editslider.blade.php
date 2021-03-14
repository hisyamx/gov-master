@extends('admin.layouts.master')
@section('title', 'Dashboard - Slider')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Slider Beranda</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('slider.index')}}">Kelola Slider</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                @include('admin.layouts.message')
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('slider.edit',$beranda->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h6>slider</h6>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="title">Title</label>
                                            <input required type="text" class="form-control" id="title" name="title"
                                                value="{{ $beranda->title }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="description">Description</label>
                                            <input required type="text" class="form-control" id="description"
                                                name="description" value="{{ $beranda->description }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label> Tambahkan slider</label>
                                            <label for="customFile"></label>
                                            <input type="file" class="form-control" id="customFile" name="cover_image">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tambahkan</button>
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
