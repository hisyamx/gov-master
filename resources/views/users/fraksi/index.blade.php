@extends('users.master')
@section('title', 'Fraksi - DPRD')
@section('content')
{{-- Fraksi section --}}

<div class="w3l-homeblockfraksi py-5">
    <div class="w3l-error-grid py-3 text-center">
        <div class="center-align">
            <h2>Fraksi</h2>
            <p>Fraksi DPRD Provinsi Kalimantan.</p>
        </div>
    </div>
    {{-- isi --}}
    <div class="container py-lg-5 py-md-4">
        <div class="row top-pics">
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="top-pic">
                    <div class="card-body blog-details">
                        <div class="author align-items-center">
                            {{-- source --}}
                            <img src="assets/images/a1.jpg" alt="" class="img-fluid rounded-circle" />
                        </div>
                        <a href="/fraksinasdem" class="blog-desc">Title
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
