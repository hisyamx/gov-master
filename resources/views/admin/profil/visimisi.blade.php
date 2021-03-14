@extends('admin.layouts.master')
@section('title', 'Dashboard - visimisi')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Visi Misi DPRD</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('visimisi.index')}}">visimisi</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                @include('admin.layouts.message')
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('visimisi.index') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="title">Title</label>
                                            <input required type="text" class="form-control" id="title" name="title"
                                                value="{{ old('title') }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="descriptionvisi">Visi</label>
                                            <textarea class="form-control summernote" name="descriptionvisi"
                                                id="descriptionmisi" rows="3" resize="none" placeholder="Visi"
                                                value="{{ old('descriptionvisi') }}"></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="descriptionmisi">Misi</label>
                                            <textarea class="form-control summernote" name="descriptionmisi"
                                                id="descriptionvisi" rows="3" resize="none" placeholder="Misi"
                                                value="{{ old('descriptionmisi') }}"></textarea>
                                        </div>
                                    </div> <br>
                                    <button type="submit" class="btn btn-primary tambah">Submit</button>
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
                        <h4>Visi Misi DPRD</h4>
                    </div>
                    <div class="table-responsive table-invoice">
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Visi</th>
                                <th>Misi</th>
                                <th>Action</th>
                            </tr>
                            <?php $i = 1; ?>
                            @foreach($visimisi AS $args)
                            <tr>
                                <td>{{$args->title}}</td>
                                <td>{{$args->descriptionvisi}}</td>
                                <td>{{$args->descriptionmisi}}</td>
                                <td>
                                    <div class="media-cta-square">
                                        <a href="{{route('visimisi.show',$args->id)}}" class="btn btn-info">Edit</a>
                                        <form action="{{ route('visimisi.delete',$args->id) }}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger hapusvisimisi" type="submit">Delete</button>
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
</div>
@endsection
<script>
    $('#summernote').summernote({
        tabsize: 2,
        height: 100
    });

</script>
