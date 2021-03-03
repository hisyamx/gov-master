    @extends('users.master')
    @section('title', 'Beranda - DPRD')

    @section('content')

    <section class="w3l-testimonials" id="testimonials">
        <!-- main-slider -->
        <div class="testimonials pt-5 pb-5">
            <div class="container pb-lg-5">
                <div class="owl-testimonial owl-carousel owl-theme mb-md-0 mb-sm-5 mt-4 mb-4">
                    @foreach( $beranda as $args )
                    <div class="item {{ $loop->first ? 'active' : '' }}">
                        <div class="rowslider slider-info">
                            <div class="col-lg-4 message-info align-self">
                                <h3 class="title-big mb-4">{{ $args->name }}.</h3>
                                <p class="message">{{ $args->description }}.</p>
                            </div>
                            <div class="col-lg-8 col-md-8 img-circle mt-lg-0 mt-4">
                                <img src="{{asset('storage/cover_images/'.$args->cover_image)}}" alt="client image" width="700px" height="400px" class="radius-image-full">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- /main-slider -->

    {{-- Agenda section --}}
    <div class="w3l-homeblock2 py-5">
        <div class="w3l-error-grid py-3 text-center">
            <div class="center-align">
                <h2>Agenda</h2>
                <p>Agenda Terbaru Anggota DPRD Provinsi Kalimantan.</p>
            </div>
        </div>
        {{-- isi --}}
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
                                    <a href="#blog-single.html" class="blog-desc">2 New outfit formulas to add to your
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
                                <img src="assets/images/set1.jpeg" alt="" class="card-body blogcustom-details">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-6 grids-feature">
                        <a href="fashion.html">
                            <div class="custom-box">
                                <img src="assets/images/set1.jpeg" alt="" class="card-body blogcustom-details">
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
                                <img src="assets/images/set.jpeg" alt="" class="card-body blogcustom-details">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- //homeblock1-->
    </div>

    {{-- berita section --}}
    <div class="w3l-homeblock2cstm py-5">
        <div class="container py-lg-5 py-md-4">
            <div class="w3l-error-grid py-3 text-center">
                <div class="center-align">
                    <h2>Berita</h2>
                    <p>Berita seputar DPRD Provinsi Kalimantan.</p>
                </div>
            </div>
            <!-- block -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        {{-- section berita --}}
                        <div class="col-lg-4 col-md-6 mt-4 mb-2 item">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="blog-single.html">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="assets/images/image1.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body blog-details">
                                    <span class="label-blue">Beauty</span>
                                    <a href="blog-single.html" class="blog-desc">The 3 Eyeshadow palettes I own &amp;
                                        How to
                                        downsize your stash
                                    </a>
                                    <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                                        vitae sit.</p>
                                    <div class="author align-items-center mt-3 mb-1">
                                        <img src="assets/images/a1.jpg" alt="" class="img-fluid rounded-circle">
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html">Isabella ava</a>
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
            <!-- block -->
            <div class="left-right">
                <h3 class="section-title-left mb-0"></h3>
                <a href="/fraksi" class="more btn btn-small mt-2 mb-0">View more</a>
            </div>
        </div>
    </div>
    {{-- Fraksi section --}}
    <div class="w3l-homeblockfraksi py-5">
        <div class="w3l-error-grid py-3 text-center">
            <div class="center-align">
                <h2>Fraksi</h2>
                <p>Fraksi-fraksi DPRD Provinsi Kalimantan.</p>
            </div>
        </div>
        {{-- isi --}}
        <div class="container py-lg-5 py-md-4">
            <div class="row top-pics">
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="top-pic">
                        <div class="card-body blog-details">
                            <div class="author align-items-center">
                                <img src="assets/images/a1.jpg" alt="" class="img-fluid rounded-circle" />
                            </div>
                            <a href="/fraksinasdem" class="blog-desc">Partai Nasdem
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- block -->
            <div class="left-right">
                <h3 class="section-title-left mb-sm-4 mb-2"></h3>
                <a href="/fraksi" class="more btn btn-small mt-4 mb-0">View more</a>
            </div>
        </div>
    </div>

    @endsection
