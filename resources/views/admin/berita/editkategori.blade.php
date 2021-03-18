@extends('admin.layouts.master')
@section('title', 'Dashboard - Kategori')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kategori DPRD</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('kategori.index')}}">Kategori</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                @include('admin.layouts.message')
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('kategori.edit',$kategori->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="kategori">kategori</label>
                                            <input required type="text" class="form-control" id="kategori" name="kategori"
                                                value="{{ $kategori->kategori }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="slug">slug</label>
                                            <input required type="text" class="form-control" id="slug" name="slug"
                                                value="{{ $kategori->slug }}">
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
