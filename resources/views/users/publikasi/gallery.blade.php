@extends('users.master')
@section('title', 'Tentang - DPRD')

@section('content')

<!-- single post -->
<section class="text-11 py-5">
    <div class="text11 py-lg-5 py-md-4">
        <div class="w3l-error-grid py-3 text-center mb-4">
            <div class="center-align">
                <h2>Gallery DPRD</h2>
                <p>Gallery DPRD Provinsi Kalimantan.</p>
            </div>
        </div>
        <div class="image mb-sm-5 mb-4">
            <img src="{{asset('/assets')}}/images/blogsingle.jpg" alt="" class="img-fluid radius-image-full">
            {{-- <iframe src="https://www.youtube.com/embed/ZlbHdYMWSOA" frameborder="0" class="mb-5" allowfullscreen="true"></iframe> --}}
        </div>
        <div class="w3l-homeblock2 w3l-homeblock5 py-5">
            <div class="container pt-md-4 pb-md-5">
                <!-- block -->
                <h3 class="category-title mb-3"> Food and Wellness</h3>
                <p class="mb-md-5 mb-4 max-width">Lorem ipsum dolor sit amet elit. Id quaerat amet ipsum sunt et quos
                    dolorum.</p>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="{{asset('/assets')}}/images/food.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="blog-single.html" class="blog-desc">Smoky, silky smooth, beyond creamy
                                        Chipotle Cashew Queso
                                    </a>
                                    <div class="author align-items-center">
                                        <img src="{{asset('/assets')}}/images/a1.jpg" alt="" class="img-fluid rounded-circle">
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
                    <div class="col-lg-6 mt-lg-0 mt-4">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="{{asset('/assets')}}/images/fashion1.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="blog-single.html" class="blog-desc">How to make a Two-Person Banana Cream
                                        Pies!
                                    </a>
                                    <div class="author align-items-center">
                                        <img src="{{asset('/assets')}}/images/a2.jpg" alt="" class="img-fluid rounded-circle">
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html">Charlotte mia</a>
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
                    <div class="col-lg-6 mt-4">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="{{asset('/assets')}}/images/fashion2.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="blog-single.html" class="blog-desc">How to Make the Best Japanese Shokupan
                                        Veg Bread
                                    </a>
                                    <div class="author align-items-center">
                                        <img src="{{asset('/assets')}}/images/a3.jpg" alt="" class="img-fluid rounded-circle">
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html">ELizabeth</a>
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
                    <div class="col-lg-6 mt-4">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="{{asset('/assets')}}/images/fashion3.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="blog-single.html" class="blog-desc">5 Ways PineApple Cider Vinegar Promotes
                                        Great Health </a>
                                    <div class="author align-items-center">
                                        <img src="{{asset('/assets')}}/images/a1.jpg" alt="" class="img-fluid rounded-circle">
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
                    <div class="col-lg-6 mt-4">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="{{asset('/assets')}}/images/fashion4.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="blog-single.html" class="blog-desc">Cooking With Tea: The Savory Summer
                                        Recipes for you
                                    </a>
                                    <div class="author align-items-center">
                                        <img src="{{asset('/assets')}}/images/a2.jpg" alt="" class="img-fluid rounded-circle">
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html">Charlotte mia</a>
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
                    <div class="col-lg-6 mt-4">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="{{asset('/assets')}}/images/fashion5.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="blog-single.html" class="blog-desc">Discover the benefits of black berries
                                        of the summer season </a>
                                    <div class="author align-items-center">
                                        <img src="{{asset('/assets')}}/images/a3.jpg" alt="" class="img-fluid rounded-circle">
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html">Elizabeth</a>
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
                    <div class="col-lg-6 mt-4">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="{{asset('/assets')}}/images/fashion6.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="blog-single.html" class="blog-desc">
                                        Why you need a Spa Day, Reasons to get a Spa Package
                                    </a>
                                    <div class="author align-items-center">
                                        <img src="{{asset('/assets')}}/images/a1.jpg" alt="" class="img-fluid rounded-circle">
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
                    <div class="col-lg-6 mt-4">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="blog-single.html" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="{{asset('/assets')}}/images/food8.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="blog-single.html" class="blog-desc"> How to make Blueberry Pancake Cereal
                                        Milk Milkshake
                                    </a>
                                    <div class="author align-items-center">
                                        <img src="{{asset('/assets')}}/images/a2.jpg" alt="" class="img-fluid rounded-circle">
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html">Charlotte mia</a>
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
                <ul class="site-pagination text-center mt-md-5 mt-4">
                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                    <li><a class="page-numbers" href="#page2">2</a></li>
                    <li><a class="page-numbers" href="#page3">3</a></li>
                    <li><span class="page-numbers dots">…</span></li>
                    <li><a class="page-numbers" href="#page7">7</a></li>
                    <li><a class="next page-numbers" href="#next">Next »</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- //single post -->

@endsection
