    @extends('users.master')
    @section('title', 'Agenda - DPRD')

    @section('content')

    {{-- Agenda section --}}

    <div class="w3l-homeblock2 py-5">
        <div class="w3l-error-grid py-3 text-center">
            <div class="center-align">
                <h2>Agenda</h2>
                <p>Agenda Terbaru Anggota DPRD Provinsi Kalimantan.</p>
            </div>
        </div>


        <!-- Header -->
        <!-- Page content -->
        <div class="container py-lg-5 py-md-4">

            <div class="container-fluid mt--6">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header border-0">
                                <h3 class="mb-0">Light table</h3>
                            </div>
                            <!-- Light table -->
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="name">Project</th>
                                            <th scope="col" class="sort" data-sort="budget">Budget</th>
                                            <th scope="col" class="sort" data-sort="status">Status</th>
                                            <th scope="col">Users</th>
                                            <th scope="col" class="sort" data-sort="completion">Completion</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <th scope="row">
                                                <div class="media align-items-center">
                                                    <a href="#" class="avatar rounded-circle mr-3">
                                                        <img alt="Image placeholder" src="../assets/img/theme/vue.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">Vue Paper UI Kit PRO</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="budget">
                                                $2200 USD
                                            </td>
                                            <td>
                                                <span class="badge badge-dot mr-4">
                                                    <i class="bg-success"></i>
                                                    <span class="status">completed</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a href="#" class="avatar avatar-sm rounded-circle"
                                                        data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                        <img alt="Image placeholder"
                                                            src="../assets/img/theme/team-1.jpg">
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="completion mr-2">100%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100" style="width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- isi --}}
            </div>
            <div class="container py-lg-5 py-md-4">
                <!-- block -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 mt-md-0 mt-sm-5 mt-4">
                                <div class="card">
                                    <div class="card-header p-0 position-relative">
                                        <a href="#blog-single.html">
                                            <img class="card-img-bottom d-block radius-image-full"
                                                src="assets/images/image2.jpg" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body blog-details">
                                        <a href="#blog-single.html" class="blog-desc">2 New outfit formulas to add to
                                            your
                                            Capsule Wardrobe
                                        </a>
                                        <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                                            vitae sit.</p>
                                        <div class="authorag align-items-center mt-3 mb-1">
                                            {{-- <img src="assets/images/a2.jpg" alt="" class="img-fluid rounded-circle" /> --}}
                                            <ul class="blog-meta">
                                                <li>
                                                    <a href="author.html">Charlotte mia</a> </a>
                                                </li>
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value"> July 13, 2020 </span>. <span
                                                        class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1
                                                        min</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-md-0 mt-sm-5 mt-4">
                                <div class="card">
                                    <div class="card-header p-0 position-relative">
                                        <a href="#blog-single.html">
                                            <img class="card-img-bottom d-block radius-image-full"
                                                src="assets/images/image2.jpg" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body blog-details">
                                        <a href="#blog-single.html" class="blog-desc">2 New outfit formulas to add to
                                            your
                                            Capsule Wardrobe
                                        </a>
                                        <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                                            vitae sit.</p>
                                        <div class="authorag align-items-center mt-3 mb-1">
                                            <ul class="blog-meta">
                                                <li>
                                                    <a href="author.html">Charlotte mia</a> </a>
                                                </li>
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value"> July 13, 2020 </span>. <span
                                                        class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1
                                                        min</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-md-0 mt-sm-5 mt-4">
                                <div class="card">
                                    <div class="card-header p-0 position-relative">
                                        <a href="#blog-single.html">
                                            <img class="card-img-bottom d-block radius-image-full"
                                                src="assets/images/image2.jpg" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body blog-details">
                                        <a href="#blog-single.html" class="blog-desc">2 New outfit formulas to add to
                                            your
                                            Capsule Wardrobe
                                        </a>
                                        <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                                            vitae sit.</p>
                                        <div class="authorag align-items-center mt-3 mb-1">
                                            <ul class="blog-meta">
                                                <li>
                                                    <a href="author.html">Charlotte mia</a> </a>
                                                </li>
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value"> July 13, 2020 </span>. <span
                                                        class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1
                                                        min</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-md-0 mt-sm-5 mt-4">
                                <div class="card">
                                    <div class="card-header p-0 position-relative">
                                        <a href="#blog-single.html">
                                            <img class="card-img-bottom d-block radius-image-full"
                                                src="{{'assets'}}/images/image2.jpg" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body blog-details">
                                        <a href="#blog-single.html" class="blog-desc">2 New outfit formulas to add to
                                            your
                                            Capsule Wardrobe
                                        </a>
                                        <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                                            vitae sit.</p>
                                        <div class="authorag align-items-center mt-3 mb-1">
                                            <ul class="blog-meta">
                                                <li>
                                                    <a href="author.html">Charlotte mia</a> </a>
                                                </li>
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value"> July 13, 2020 </span>. <span
                                                        class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1
                                                        min</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /homeblock1-->
            <section class="w3l-homeblock1 py-sm-1 py-4">
                <div class="container py-md-4">
                    <div class="grids-area-hny main-cont-wthree-fea row">
                        <div class="col-lg-6 col-6 grids-feature">
                            <a href="beauty.html">
                                <div class="custom-box">
                                    <img src="{{ asset('assets/images/set1.jpeg') }}" alt=""
                                        class="card-body blogcustom-details">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-6 grids-feature">
                            <a href="fashion.html">
                                <div class="custom-box">
                                    <img src="{{ asset('assets/images/set1.jpeg') }}" alt=""
                                        class="card-body blogcustom-details">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //homeblock1-->
            <!-- /homeblock1-->
            <section class="w3l-homeblock1 py-sm-1 py-4">
                <div class="container py-md-4">
                    <div class="grids-area-hny main-cont-wthree-fea row">
                        <div class="col-12 grids-feature">
                            <a href="fashion.html">
                                <div class="custom-box">
                                    <img src="{{ asset('assets/images/set.jpeg') }}" alt=""
                                        class="card-body blogcustom-details">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //homeblock1-->
        </div>

        @endsection
