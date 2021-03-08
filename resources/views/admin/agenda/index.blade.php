@extends('admin.layouts.master')
@section('title', 'Blog - HMTI Udinus 2020')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Blog HMTI</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#" style="text-decoration:none">Home</a></li>
            <li class="breadcrumb-item active">Blog</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <div class="container">
          <a href="/informatic-media/tambah-blog" class="btn btn-primary btn-md">Tambah Blog</a>
        </div><br>  
        <div class="row">
          {{-- <div class="col-md-1"></div> --}}
          <div class="col-md">
            <div class="card">
            <div class="header">
              <h4 class="title">List Blog</h4>
            </div> <!--akhir clas header-->
              <div class="content table-responsive table-full-width">
                <table class="table table-striped" id="example">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Judul</th>
                      <th scope="col">Thumbnail</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($blog as $no => $item)				
                      <tr>
                        <th scope="row">{{ $no+1 }}</th>
                        <td>{{ $item->judul }}</td>
                        <td><img src="{{ asset('/storage/images/'. $item->thumbnail) }}" alt="" width="250px" height="120px"></td>
                        <td>
                          <a href="/informatic-media/detail/{{ $item->id }}" class="btn btn-primary btn-sm">Detail</a>
                          <a href="/informatic-media/{{ $item->id }}/edit" class="btn btn-success btn-sm">Edit</a>
                          <a href="#" class="btn btn-danger btn-sm hapusblog" blog-id="{{ $item->id }}">Hapus</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                </div>
              </div>
            </div>
        </div>
</div>

@endsection
@section('texteditor')
<script>
  $('#summernote').summernote({
    tabsize: 2,
    height: 100
  });
</script>
@endsection

