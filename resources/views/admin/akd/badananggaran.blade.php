@extends('admin.layouts.master')
@section('title', 'Dashboard - Badan Anggaran')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Badan Anggaran DPRD</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('badananggaran.index')}}">Badan Anggaran</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                @include('admin.layouts.message')
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('badananggaran.index') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="title">Title</label>
                                            <input required type="text" class="form-control" id="title" name="title"
                                                value="{{ old('title') }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Banner</label>
                                            <input type="file" class="form-control" id="customFile" name="cover_image">
                                            <label for="customFile"></label>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="description">Description</label>
                                            <textarea required class="form-control editormce" name="description" id="description"
                                                rows="5" placeholder="Deskripsi"
                                                value="{{ old('description') }}"></textarea>
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
                        <h4>Badan Anggaran DPRD</h4>
                    </div>
                    <div class="table-responsive table-invoice">
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>File</th>
                                <th>Description</th>
                                <th width="15%">Action</th>
                            </tr>
                            <?php $i = 1; ?>
                            @foreach($badananggaran AS $args)
                            <tr>
                                <td>{{$args->title}}</td>
                                <td>
                                    <ul
                                        class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder mt-2">
                                        <li class="media">
                                            <img alt="image" class="mr-3" width="250" height="150"
                                                src="{{asset('storage/cover_images/'.$args->cover_image)}}">
                                        </li>
                                    </ul>
                                </td>
                                <td>{{$args->description}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('badananggaran.show',$args->id)}}" class="btn btn-info">Edit</a>
                                        <form action="{{ route('badananggaran.delete',$args->id) }}" method="POST">
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
