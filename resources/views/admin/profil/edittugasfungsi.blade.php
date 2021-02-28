@extends('admin.layouts.master')
@section('title', 'Dashboard - Tugas Fungsi')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tugas Fungsi DPRD</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('tugasfungsi.index')}}">Tugas Fungsi</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                @include('admin.layouts.message')
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('tugasfungsi.edit') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="title">Title</label>
                                            <input required type="text" class="form-control" id="title" name="title"
                                            value="{{ $tugas->title }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Banner</label>
                                            <input type="file" class="form-control" id="customFile" name="cover_image">
                                            <label for="customFile"></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea required class="form-control editormce" name="description" id="description" rows="3"
                                                resize="none" placeholder="{{ $tugas->description }}"></textarea>
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
