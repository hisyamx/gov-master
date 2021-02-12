    @extends('users.master')
    @section('title', 'Beranda - DPRD')

    @section('content')
    <!-- //header -->
    <div class="w3l-homeblock2 w3l-homeblock5 py-5">
        <div class="container pt-md-4 pb-md-5">
            <!-- block -->
            <h3 class="category-title mb-3">Berita Utama</h3>
            <div class="row">
                <div class="col-lg-6 mt-4">
                    <div class="bg-clr-white hover-box">
                        <div class="row">
                            <div class="col-sm-5 position-relative">
                                <a href="#blog-single.html" class="image-mobile">
                                    <img class="card-img-bottom d-block radius-image-full"
                                        src="assets/images/beauty2.jpg" alt="Card image cap">
                                </a>
                            </div>
                            <div class="col-sm-7 card-body blog-details align-self">
                                <a href="#blog-single.html" class="blog-desc">How to get Beautiful coloring Highlights
                                    this weak
                                </a>
                                <div class="author align-items-center">
                                    <img src="assets/images/a2.jpg" alt="" class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="author.html">Charlotte mia</a> </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> July 13, 2020 </span>. <span
                                                class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="site-pagination text-center mt-md-5 mt-4">
                <li><a class="next page-numbers current" href="#next">Lihat lebih</a></li>
            </ul>
        </div>
    </div>
    <div class="w3l-homeblock2 py-5">
        <div class="container pt-md-4 pb-md-5">
            <!-- block -->
            <h3 class="category-title mb-3">Berita Lainnya</h3>
            <div class="row">
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="blog-single.html">
                                <img class="card-img-bottom d-block radius-image-full" src="assets/images/fashion5.jpg"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body blog-details">
                            <a href="blog-single.html" class="blog-desc">Searching for online inspiration and how to
                                steal their style?
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                                vitae sit.</p>
                            <div class="author align-items-center mt-3 mb-1">
                                <img src="assets/images/a3.jpg" alt="" class="img-fluid rounded-circle">
                                <ul class="blog-meta">
                                    <li>
                                        <a href="author.html">ELizabeth</a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> July 13, 2020 </span>. <span
                                            class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="site-pagination text-center mt-md-5 mt-4">
                <li><a class="next page-numbers current" href="#next">Lihat lebih</a></li>
            </ul>
        </div>
    </div>

    @endsection
