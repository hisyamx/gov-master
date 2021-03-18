@extends('users.master')
@section('title', 'Struktur Organisasi - DPRD')

@section('content')

<!-- single post -->
<section class="text-11 py-5">
    <div class="text11 py-lg-5 py-md-4">
        <div class="w3l-error-grid py-3 text-center mb-4">
            <div class="center-align">
                <h2>Struktur Organisasi DPRD</h2>
                @foreach ($strukturorganisasi as $args)
                <p>{{ $args->title }}.</p>
                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text11-content">
                        <h4 class="mt-sm-3">Struktur Organisasi.</h4>
                        @foreach ($strukturorganisasi as $args)
                        <p class="mt-4 mb-3">{!! $args->description !!}.</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //single post -->

<!-- Header -->
<!-- Page content -->
<div class="w3l-homeblock2 py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="py-2">Struktur Organisasi</h3>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Nama</th>
                                        <th scope="col" class="sort" data-sort="budget">Jabatan</th>
                                        <th scope="col" class="sort" data-sort="status">Status</th>
                                    </tr>
                                </thead>
                                @foreach ($strukturorganisasi as $args)
                                <tbody class="list">
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar rounded-circle mr-3">
                                                    <img alt="Image placeholder" src="../assets/img/theme/vue.jpg">
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">{{ $args->name }}</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            {{ $args->jabatan}}
                                        </td>
                                        <td class="budget">
                                            {{ $args->fraksi}}
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- isi --}}
        </div>
    </div>
</div>

@endsection
