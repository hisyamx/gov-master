@extends('users.master')
@section('title', 'Tentang - DPRD')

@section('content')

<!-- single post -->
<section class="text-11 py-5">
    <div class="text11 py-lg-5 py-md-4">
        <div class="w3l-error-grid py-3 text-center mb-4">
            <div class="center-align">
                <h2>Tentang DPRD</h2>
                @foreach ($tentang as $args)
                <p>{{ $args->title }}.</p>
                @endforeach
            </div>
        </div>
        <!-- /main-slider -->
        <div class="image mb-sm-5 mb-4">
            @foreach ($tentang as $args)
            <img src="{{asset('storage/cover_images/'.$args->cover_image)}}" alt="bannerdprd" class="img-fluid radius-image-full">
            @endforeach
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text11-content">
                        @foreach ($tentang as $args)
                        <h4 class="mb-md-4 mb-3">{{ $args->title }}</h4>
                        <p class="mb-4">{!! $args->description !!}</p>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- //single post -->

@endsection
