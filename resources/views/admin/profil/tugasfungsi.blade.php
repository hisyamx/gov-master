@extends('admin.layouts.master')
@section('title', 'Dashboard - tugasfungsi')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>tugasfungsi DPRD</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('tugasfungsidprd.index')}}">tugasfungsi</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                @include('admin.layouts.message')
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('tugasfungsidprd.index') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-lg-12">
                                            <label for="title">Title</label>
                                            <input required type="text" class="form-control" id="title" name="title"
                                                value="{{ old('title') }}">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label>Banner</label>
                                            <input type="file" class="form-control" id="customFile" name="cover_image">
                                            <label for="customFile"></label>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label for="description">Description</label>
                                            <textarea required class="form-control" name="description" id="description"
                                                rows="3" resize="none" placeholder="Deskripsi"
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
                        <h4>tugasfungsi DPRD</h4>
                    </div>
                    <div class="table-responsive table-invoice">
                        <table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th>File</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            <?php $i = 1; ?>
                            @foreach($tugas AS $args)
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
                                    <div class="media-cta-square">
                                        <a href="{{route('tugasfungsidprd.show',$args->id)}}" class="btn btn-info">Edit</a>
                                        <form action="{{ route('tugasfungsidprd.delete',$args->id) }}" method="POST">
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
