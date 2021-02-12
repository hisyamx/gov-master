    @extends('users.master')
    @section('title', 'Press Release - DPRD')

    @section('content')
    <section class="text-11 py-5">
        <div class="text11 py-lg-5 py-md-4">
            <div class="w3l-error-grid py-3 text-center mb-4">
                <div class="center-align">
                    <h2>Press Release</h2>
                    <p>Press Release DPRD Provinsi Kalimantan.</p>
                </div>
            </div>
            <div class="container">
                <div class="blog-title px-md-5">
                    <h3 class="title-big">Title.</h3>
                    <ul class="blog-list">
                        <li>
                            <p> Posted on <strong>July 11, 2020</strong></p>
                        </li>
                        <li>
                            <p> By <a href="#author"><strong>Charlotte mia</strong></a></p>
                        </li>
                        <li>
                            <p> Published in <a href="#category"><strong>Fashion</strong></a></p>
                        </li>
                        <li>
                            <p> <a href="#category"><strong>1 min read</strong></a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="image mb-sm-5 mb-4">
                <img src="{{asset('/assets')}}/images/blogsingle.jpg" alt="" class="img-fluid radius-image-full">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="text11-content">
                            <h4 class="mt-sm-3">Sub Title.</h4>
                            <p class="mt-4 mb-3">Description.</p>
                            {{-- tags --}}
                            <div class="social-share-blog mt-5">
                                <ul class="column3 tags m-0 p-0">
                                    <li>
                                        <p class="m-0 mr-sm-4 mr-2">Tags :</p>
                                    </li>
                                    <li><a href="#url" class="btn-small">tags</a></li>
                                    <li><a href="#url" class="btn-small">tags</a></li>

                                </ul>
                                <ul class="column3 social m-0 p-0">
                                    <li>
                                        <p class="m-0 mr-sm-4 mr-2">Share this post :</p>
                                    </li>
                                    <li><a href="#facebook" class="facebook"><span
                                                class="fa fa-facebook-square"></span></a>
                                    </li>
                                    <li><a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-lg-0 mt-5">
                        <aside class="sidebar">

                            <!-- Author card Widget-->
                            <div class="sidebar-widget sidebar-blog-category">
                                <div class="author">
                                    <div class="sidebar-title">
                                        <h4>Tentang Penulis</h4>
                                    </div>
                                    <div class="author-detalis">
                                        <a href="#author" class="author-image"><img src="{{asset('/assets')}}/images/a2.jpg" alt="author image" class="img-fluid"></a>
                                        <div class="author-info">
                                            <a href="#author-name" class="author-name">Isabella</a>
                                            <p class="mt-0">I am a Fashion designer, Makeup artist, and Blog
                                                writer.</p>
                                        </div>
                                        </div>
                                    </div>
                            </div>
                            <!-- //Author card Widget-->

                            <!--Blog Category Widget-->
                            <div class="sidebar-widget sidebar-blog-category">
                                <div class="sidebar-title">
                                    <h4>Kategori Berita</h4>
                                </div>
                                <ul class="blog-cat">
                                    <li><a href="#url">Press Release </a></li>
                                    <li><a href="#url">Berita Terbaru</a></li>
                                    <li><a href="#url">Berita Lainnya</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
