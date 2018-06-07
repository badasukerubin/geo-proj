@extends('layouts.master')
@section('content')

    <!-- start banner Area -->
    <section class="banner-area" id="home">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center" style="height:670px; !important;">
                <div class="banner-content col-lg-12 col-md-12">
                    <div id="mappy" class="mappy">
                        <iframe src="{{ asset('assets/front/gitspa/index.blade.php') }}" scrolling="no" frameborder="0" style="border:0; height:600px; width:100%; padding-top: 70px; padding-bottom: 0px !important;" allowfullscreen ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End banner Area -->

    <!-- Start products Area -->
    {{--<section class="products-area section-gap">--}}
        {{--<div class="container">--}}
            {{--<div class="row d-flex justify-content-center">--}}
                {{--<div class="col-md-12 pb-40 header-text text-center">--}}
                    {{--<h1 class="pb-10">Featured Robotics Products to Show</h1>--}}
                    {{--<p>--}}
                        {{--Who are in extremely love with eco friendly system.--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-3 col-md-6">--}}
                    {{--<div class="single-product">--}}
                        {{--<div class="thumb">--}}
                            {{--<img src="img/p1.png" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="details">--}}
                            {{--<h4>The Upper Eye</h4>--}}
                            {{--<p>--}}
                                {{--Who are in extremely love with eco friendly system.--}}
                            {{--</p>--}}
                            {{--<a href="#" class="primary-btn text-uppercase">View Details</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6">--}}
                    {{--<div class="single-product">--}}
                        {{--<div class="thumb">--}}
                            {{--<img src="img/p2.png" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="details">--}}
                            {{--<h4>The Crab Wheel</h4>--}}
                            {{--<p>--}}
                                {{--Who are in extremely love with eco friendly system.--}}
                            {{--</p>--}}
                            {{--<a href="#" class="primary-btn text-uppercase">View Details</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6">--}}
                    {{--<div class="single-product">--}}
                        {{--<div class="thumb">--}}
                            {{--<img src="img/p3.png" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="details">--}}
                            {{--<h4>The Plug Ninja</h4>--}}
                            {{--<p>--}}
                                {{--Who are in extremely love with eco friendly system.--}}
                            {{--</p>--}}
                            {{--<a href="#" class="primary-btn text-uppercase">View Details</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6">--}}
                    {{--<div class="single-product">--}}
                        {{--<div class="thumb">--}}
                            {{--<img src="img/p4.png" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="details">--}}
                            {{--<h4>The Controller</h4>--}}
                            {{--<p>--}}
                                {{--Who are in extremely love with eco friendly system.--}}
                            {{--</p>--}}
                            {{--<a href="#" class="primary-btn text-uppercase">View Details</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- End products Area -->

    <!-- Start home-about Area -->
    {{--<section class="home-about-area">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row align-items-center">--}}
                {{--<div class="col-lg-6 home-about-left no-padding">--}}
                    {{--<img class="mx-auto d-block img-fluid" src="img/about-img.png" alt="">--}}
                {{--</div>--}}
                {{--<div class="col-lg-6 home-about-right no-padding">--}}
                    {{--<h1>Globally Connected <br>--}}
                        {{--by Large Network</h1>--}}
                    {{--<h5>--}}
                        {{--We are here to listen from you deliver exellence--}}
                    {{--</h5>--}}
                    {{--<p>--}}
                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.--}}
                    {{--</p>--}}
                    {{--<a class="primary-btn text-uppercase" href="#">Get Details</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- End home-about Area -->


    <!-- Start about-video Area -->
    {{--<section class="about-video-area section-gap">--}}
        {{--<div class="container">--}}
            {{--<div class="row align-items-center">--}}
                {{--<div class="col-lg-6 about-video-left">--}}
                    {{--<h6 class="text-uppercase">Brand new app to blow your mind</h6>--}}
                    {{--<h1>--}}
                        {{--We’ve made a life <br>--}}
                        {{--that will change you--}}
                    {{--</h1>--}}
                    {{--<p>--}}
                        {{--<span>We are here to listen from you deliver exellence</span>--}}
                    {{--</p>--}}
                    {{--<p>--}}
                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmo d tempor incididunt ut labore et dolore magna aliqua.--}}
                    {{--</p>--}}
                    {{--<a class="primary-btn" href="#">Get Started Now</a>--}}
                {{--</div>--}}
                {{--<div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex relative">--}}
                    {{--<div class="overlay overlay-bg"></div>--}}
                    {{--<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="img/play-btn.png" alt=""></a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- End about-video Area -->


    <!-- Start feature Area -->
    {{--<section class="feature-area section-gap">--}}
        {{--<div class="container">--}}
            {{--<div class="row d-flex justify-content-center">--}}
                {{--<div class="col-md-12 pb-40 header-text text-center">--}}
                    {{--<h1 class="pb-10 text-white">Some Features that Made us Unique</h1>--}}
                    {{--<p class="text-white">--}}
                        {{--Who are in extremely love with eco friendly system.--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-4 col-md-6">--}}
                    {{--<div class="single-feature">--}}
                        {{--<a href="#" class="title d-flex flex-row">--}}
                            {{--<span class="lnr lnr-user"></span>--}}
                            {{--<h4>Expert Technicians</h4>--}}
                        {{--</a>--}}
                        {{--<p>--}}
                            {{--Usage of the Internet is becoming more common due to rapid advancement of technology and power.--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-6">--}}
                    {{--<div class="single-feature">--}}
                        {{--<a href="#" class="title d-flex flex-row">--}}
                            {{--<span class="lnr lnr-license"></span>--}}
                            {{--<h4>Professional Service</h4>--}}
                        {{--</a>--}}
                        {{--<p>--}}
                            {{--Usage of the Internet is becoming more common due to rapid advancement of technology and power.--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-6">--}}
                    {{--<div class="single-feature">--}}
                        {{--<a href="#" class="title d-flex flex-row">--}}
                            {{--<span class="lnr lnr-phone"></span>--}}
                            {{--<h4>Great Support</h4>--}}
                        {{--</a>--}}
                        {{--<p>--}}
                            {{--Usage of the Internet is becoming more common due to rapid advancement of technology and power.--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-6">--}}
                    {{--<div class="single-feature">--}}
                        {{--<a href="#" class="title d-flex flex-row">--}}
                            {{--<span class="lnr lnr-rocket"></span>--}}
                            {{--<h4>Technical Skills</h4>--}}
                        {{--</a>--}}
                        {{--<p>--}}
                            {{--Usage of the Internet is becoming more common due to rapid advancement of technology and power.--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-6">--}}
                    {{--<div class="single-feature">--}}
                        {{--<a href="#" class="title d-flex flex-row">--}}
                            {{--<span class="lnr lnr-diamond"></span>--}}
                            {{--<h4>Highly Recomended</h4>--}}
                        {{--</a>--}}
                        {{--<p>--}}
                            {{--Usage of the Internet is becoming more common due to rapid advancement of technology and power.--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-6">--}}
                    {{--<div class="single-feature">--}}
                        {{--<a href="#" class="title d-flex flex-row">--}}
                            {{--<span class="lnr lnr-bubble"></span>--}}
                            {{--<h4>Positive Reviews</h4>--}}
                        {{--</a>--}}
                        {{--<p>--}}
                            {{--Usage of the Internet is becoming more common due to rapid advancement of technology and power.--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- End feature Area -->


    <!-- Start brand Area -->
    {{--<section class="brand-area pt-120">--}}
        {{--<div class="container">--}}
            {{--<div class="row align-items-center">--}}
                {{--<div class="col single-brand">--}}
                    {{--<img class="img-fluid" src="img/l1.png" alt="">--}}
                {{--</div>--}}
                {{--<div class="col single-brand">--}}
                    {{--<img class="img-fluid" src="img/l2.png" alt="">--}}
                {{--</div>--}}
                {{--<div class="col single-brand">--}}
                    {{--<img class="img-fluid" src="img/l3.png" alt="">--}}
                {{--</div>--}}
                {{--<div class="col single-brand">--}}
                    {{--<img class="img-fluid" src="img/l4.png" alt="">--}}
                {{--</div>--}}
                {{--<div class="col single-brand">--}}
                    {{--<img class="img-fluid" src="img/l5.png" alt="">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- End brand Area -->


    <!-- Start blog Area -->
    {{--<section class="blog-area section-gap">--}}
        {{--<div class="container">--}}
            {{--<div class="row d-flex justify-content-center">--}}
                {{--<div class="col-md-12 pb-40 header-text text-center">--}}
                    {{--<h1 class="pb-10">Latest News from our Blog</h1>--}}
                    {{--<p>--}}
                        {{--Who are in extremely love with eco friendly system.--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-6 col-md-6 blog-left">--}}
                    {{--<div class="thumb">--}}
                        {{--<img class="img-fluid" src="img/b1.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="detais">--}}
                        {{--<ul class="tags">--}}
                            {{--<li><a href="#">Travel</a></li>--}}
                            {{--<li><a href="#">Life Style</a></li>--}}
                        {{--</ul>--}}
                        {{--<a href="#"><h4>Portable latest Fashion for young women</h4></a>--}}
                        {{--<p>--}}
                            {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.--}}
                        {{--</p>--}}
                        {{--<p class="date">31st January, 2018</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-6 col-md-6 blog-right">--}}
                    {{--<div class="thumb">--}}
                        {{--<img class="img-fluid" src="img/b2.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="detais">--}}
                        {{--<ul class="tags">--}}
                            {{--<li><a href="#">Travel</a></li>--}}
                            {{--<li><a href="#">Life Style</a></li>--}}
                        {{--</ul>--}}
                        {{--<a href="#"><h4>Portable latest Fashion for young women</h4></a>--}}
                        {{--<p>--}}
                            {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.--}}
                        {{--</p>--}}
                        {{--<p class="date">31st January, 2018</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- End blog Area -->

@stop