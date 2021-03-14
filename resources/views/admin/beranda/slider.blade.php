@extends('admin.layouts.master')
@section('title', 'Dashboard - Slider')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Uploud Slider Beranda</h1>
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
                                <form action="{{ route('slider.index') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h6>slider</h6>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="title">Title</label>
                                            <input required type="text" class="form-control" id="title" name="title"
                                                value="{{ old('title') }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="description">Description</label>
                                            <input required type="text" class="form-control" id="description"
                                                name="description" value="{{ old('description') }}">
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

                {{-- Section --}}
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>slider</h4>
                            </div>
                            @if(count($beranda) >= 1)
                            <div class="table-responsive table-invoice">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>File</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php $i = 1; ?>
                                    @foreach($beranda AS $args)
                                    <tr>
                                        <td>{{$args->title}}</td>
                                        <td>{{$args->description}}</td>
                                        <td>
                                            <ul
                                                class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder mt-2">
                                                <li class="media">
                                                    <img alt="image" class="mr-3" width="250" height="100"
                                                        src="{{asset('storage/cover_images/'.$args->cover_image)}}">

                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="media-cta-square">
                                                <a href="{{route('slider.show',$args->id)}}"
                                                    class="btn btn-info">Edit</a>
                                                <form action="{{ route('slider.delete',$args->id) }}" method="POST">
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
</div>
@endsection
