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
                                <form action="{{ route('kontak.edit',$kontak->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="alamat">Alamat</label>
                                            <input required type="text" class="form-control" id="alamat" name="alamat"
                                            value="{{ $kontak->alamat }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="emailsatu">Email DPRD</label>
                                            <input required type="text" class="form-control" id="emailsatu" name="emailsatu"
                                            value="{{ $kontak->emailsatu }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="emaildua">Email Sekwan</label>
                                            <input required type="text" class="form-control" id="emaildua" name="emaildua"
                                            value="{{ $kontak->emaildua }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="emailtiga">Email Admin</label>
                                            <input required type="text" class="form-control" id="emailtiga" name="emailtiga"
                                            value="{{ $kontak->emailtiga }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="telephone">Telephone</label>
                                            <input required type="text" class="form-control" id="telephone" name="telephone"
                                            value="{{ $kontak->telephone }}">
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
    </section>
    @endsection
