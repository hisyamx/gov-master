@extends('admin.layouts.master')
@section('title', 'Dashboard - Banner')
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
                                    <h6>Banner</h6>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="name">Name</label>
                                            <input required type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label> Tambahkan Banner</label>
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

                {{-- Section --}}
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Banner</h4>
                            </div>
                            @if(count($beranda) >= 1)
                            <div class="table-responsive table-invoice">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Name</th>
                                        <th>File</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php $i = 1; ?>
                                    @foreach($beranda AS $args)
                                    <tr>
                                        <td>{{$args->name}}</td>
                                        <td>
                                            <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder mt-2">
                                                <li class="media">
                                                    <img alt="image" class="mr-3" width="750" height="150"
                                                        src="{{asset('storage/cover_images/'.$args->cover_image)}}">

                                                </li>
                                            </ul>
                                        </td>
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
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
