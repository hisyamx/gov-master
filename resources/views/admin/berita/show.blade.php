@extends('admin.layouts.master')
@section('title', 'Detail Blog - HMTI Udinus 2020')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Detail Blog</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/informatic-media" style="text-decoration:none">Blog</a></li>
            <li class="breadcrumb-item active">Detail Blog</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <br><br>
        <div class="container">
            <p><h1>{{ $blog->judul }}</h1></p><br>
            <h3>Thumbnail</h3>
            <img src="{{ asset('/storage/images/'. $blog->thumbnail) }}" alt="" width="100px" height="80px">
            <p>{!! $blog->konten !!}</p>
            <hr \>
        </div>
    </div>
</div>
@endsection