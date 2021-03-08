@extends('admin.layouts.master')
@section('title', 'Edit Blog - HMTI Udinus 2020')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Blog HMTI</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/informatic-media" style="text-decoration:none">Blog</a></li>
            <li class="breadcrumb-item active">Edit Blog</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md">
        <!-- general form elements -->  
            <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Form Edit Blog</h3>
            </div>
        
            <form role="form" method="post" action="/informatic-media/{{ $blog->id }}" enctype="multipart/form-data">
                @method('patch')
                @csrf
            <div class="card-body">
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control inputjudul @error('judul') is-invalid @enderror" id="judul" placeholder="Masukkan judul blog" name="judul" value="{{ $blog->judul }}">
                  @error('judul')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="thumbnail">Thumbnail</label> (jika tidak ingin mengganti thumbnail, tidak usah diklik) <br>
                  <input type="file" id="thumbnail" placeholder="Masukkan thumbnail" name="thumbnail" value="{{ $blog->thumbnail }}">
                </div>
                <div class="form-group">
                  <label for="konten">Konten</label>
                  <textarea class="form-control" id="summernote" name="konten" rows="5">{!! $blog->konten !!} </textarea>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary editph">Submit</button>
            </div>
            </form>
        </div>
        <!-- /.card -->
        </div>
        {{-- end form --}}
        </div>
</div>

@endsection
@section('texteditor')
<script>
  $('#summernote').summernote({
    tabsize: 2,
    height: 300
  });
</script>
@endsection

