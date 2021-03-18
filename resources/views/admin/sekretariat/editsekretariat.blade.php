@extends('admin.layouts.master')
@section('title', 'Dashboard - Sekretariat')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Sekretariat</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('sekretariat.index')}}">Sekretariat</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                @include('admin.layouts.message')
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('sekretariat.edit',$sekretariat->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group col-md-12">
                                        <label for="title">Title</label>
                                        <input required type="text" class="form-control" id="title" name="title"
                                            value="{{ $sekretariat->title }}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="description">Deskripsi</label>
                                        <textarea class="form-control konten" name="description"
                                            id="descriptionvisi" rows="3" resize="none">{{ $sekretariat->description }}</textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="link">link Rencana dan Laporan</label>
                                            <input required type="text" class="form-control" id="link"
                                                name="link" value="{{ $sekretariat->link }}">
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
