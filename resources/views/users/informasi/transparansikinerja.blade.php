@extends('users.master')
@section('title', 'Transparansi Kinerja - DPRD')

@section('content')

<!-- single post -->
<section class="text-11 py-5">
    <div class="text11 py-lg-5 py-md-4">
        <div class="w3l-error-grid py-3 text-center mb-4">
            <div class="center-align">
                <h2>Transparansi Kinerja DPRD</h2>
                <p>Transparansi Kinerja DPRD Provinsi Kalimantan.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text11-content">
                        <h4 class="mt-sm-3">Tugas Pimpinan DPRD.</h4>
                        @foreach ($informasi as $args)
                        <a href="{{ $args->linkdua }}" target="_blank" class="btn btn-primary">{{ $args->linkdua }}.</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
