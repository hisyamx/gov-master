@extends('users.master')
@section('title', 'Tugas dan Fungsi - DPRD')

@section('content')

<!-- single post -->
<section class="text-11 py-5">
    <div class="text11 py-lg-5 py-md-4">
        <div class="w3l-error-grid py-3 text-center mb-4">
            <div class="center-align">
                <h2>Tugas dan Fungsi DPRD</h2>
                @foreach ($tugas as $args)
                <p>{{ $args->title }}.</p>
                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text11-content">
                        <h4 class="mt-sm-3">Tugas dan Fungsi.</h4>
                        @foreach ($tugas as $args)
                        <p class="mt-4 mb-3">{{ $args->description }}.</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //single post -->

@endsection
