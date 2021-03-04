@extends('admin.layouts.master')
@section('title', 'Dashboard - Kontak')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kontak DPRD</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('kontak.index')}}">Kontak</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                @include('admin.layouts.message')
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('kontak.index') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="alamat">alamat</label>
                                            <input required type="text" class="form-control" id="alamat" name="alamat"
                                                value="{{ old('alamat') }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="emailsatu">Email DPRD</label>
                                            <input required type="text" class="form-control" id="emailsatu" name="emailsatu"
                                                value="{{ old('emailsatu') }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="emaildua">Email Sekwan</label>
                                            <input required type="text" class="form-control" id="emaildua" name="emaildua"
                                                value="{{ old('emaildua') }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="emailtiga">Email Admin</label>
                                            <input required type="text" class="form-control" id="emailtiga" name="emailtiga"
                                                value="{{ old('emailtiga') }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="telephone">Telephone</label>
                                            <input required type="text" class="form-control" id="telephone" name="telephone"
                                                value="{{ old('telephone') }}">
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
                        <h4>Kontak DPRD</h4>
                    </div>
                    <div class="table-responsive table-invoice">
                        <table class="table table-striped">
                            <tr>
                                <th>Alamat</th>
                                <th>Email DPRD</th>
                                <th>Email Sekwan</th>
                                <th>Email Admin</th>
                                <th>Telephone</th>
                                <th>Action</th>
                            </tr>
                            <?php $i = 1; ?>
                            @foreach($kontak AS $args)
                            <tr>
                                <td>{{$args->alamat}}</td>
                                <td>{{$args->emailsatu}}</td>
                                <td>{{$args->emaildua}}</td>
                                <td>{{$args->emailtiga}}</td>
                                <td>{{$args->telephone}}</td>
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
                </div>
            </div>
        </div>

    </section>
    @endsection
