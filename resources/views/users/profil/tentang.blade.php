
    @extends('users.master')
    @section('title', 'PPID - DPRD')
        
    @section('content')

    <section class="w3l-testimonials" id="testimonials">
        <!-- main-slider -->
        <div class="testimonials pt-2 pb-5">
            <div class="container pb-lg-5">
                <div class="owl-testimonial owl-carousel owl-theme mb-md-0 mb-sm-5 mb-4">
                    <div class="item">
                        <div class="row slider-info">
                            <div class="col-lg-8 message-info align-self">
                                <h1 class="title-big mb-4">404
                                </h1>
                                <h3 class="title-big mb-4">Page not found!
                                </h3>
                                <p class="message">Oops! The page you are looking for does not exist.It might have been moved or deleted.</p>
                            </div>
                            <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                                <img src="assets/images/beauty.jpg" class="img-fluid radius-image-full"
                                    alt="client image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /main-slider -->
    </section>
    <!-- /main-slider -->
    <div class="w3l-subscribe py-5">
        <div class="container py-lg-5 py-md-4">
            <div class="w3l-subscribe-content text-center bg-clr-white py-md-5 py-2">
                <div class="py-5">
                    <h3 class="section-title-left mb-2">Subscribe to our newsletter!</h3>
                    <p class="mb-md-5 mb-4">We'll send you the best of our blog just once a month. We promise. </p>
                    <form action="#" method="GET" class="subscribe">
                        <input type="email" class="subscribe_input" name="search" placeholder="Email address"
                            required="">
                        <button class="btn btn-style btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection