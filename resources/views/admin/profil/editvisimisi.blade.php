@extends('admin.layouts.master')
@section('title', 'Dashboard - Visi Misi')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Visi Misi DPRD</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('visimisi.index')}}">Visi Misi</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                @include('admin.layouts.message')
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('visimisi.edit',$visimisi->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="title">Title</label>
                                            <input required type="text" class="form-control" id="title" name="title"
                                                value="{{ $visimisi->title }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="descriptionvisi">Description</label>
                                            <textarea class="form-control konten" name="descriptionvisi"
                                                id="descriptionvisi" rows="3"
                                                resize="none">{{ $visimisi->descriptionvisi }}</textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="descriptionmisi">Description</label>
                                            <textarea class="form-control konten" name="descriptionmisi"
                                                id="descriptionmisi" rows="3"
                                                resize="none">{{ $visimisi->descriptionmisi }}</textarea>
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
