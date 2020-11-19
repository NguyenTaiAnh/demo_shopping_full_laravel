@extends('master')
@section('content')

<!-- Begin Torress's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Other</h2>
            <ul>
                <li><a href="{{Route('index')}}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Torress's Breadcrumb Area End Here -->
<!-- Begin Torress's Main Content Area -->
<div class="main-content_area">
    <!-- Begin About Us Area -->
    <div class="about-us_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-us_img">
                        <img class="primary-img" src="assets/images/about-us/1.jpg" alt="Torress's About Us Image">
                        <img class="secondary-img" src="assets/images/about-us/2.jpg" alt="Torress's About Us Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us_content">
                        <h3 class="heading">About Us</h3>
                        <p class="short-desc">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
                            some form, by injected humour,
                        </p>
                        <p class="additional-desc">
                            There are many but the majority have suffered alteration in some form, by injecte variations of passages of
                            Lorem Ipsum available.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area End Here -->
    <!-- Begin Mission Area -->
    <div class="mission-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="mission-heading">Mission vision</h3>
                    <div class="mission-img_area">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=9No-FiEInLA&t=20s">
                            <i class="ion-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission Area End Here -->
    <!-- Begin Testimonial Area -->
    <div class="testimonial-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider slider-navigation_style-4">
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="assets/images/about-us/testimonial/1.png" alt="Torress's Testimonial Image">
                            </div>
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <i class="ion-quote"></i>
                                </div>
                                <p class="short-desc">
                                    There's nothing would satisfy me much more than a worry-free clean and responsive theme for my high-traffic site.
                                </p>
                                <div class="client-info">
                                    <h3 class="name">Willie Bradley</h3>
                                    <span class="occupation">/ Reporter</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="assets/images/about-us/testimonial/1.png" alt="Torress's Testimonial Image">
                            </div>
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <i class="ion-quote"></i>
                                </div>
                                <p class="short-desc">
                                    There's nothing would satisfy me much more than a worry-free clean and responsive theme for my high-traffic site.
                                </p>
                                <div class="client-info">
                                    <h3 class="name">Willie Bradley</h3>
                                    <span class="occupation">/ Reporter</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End Here -->
</div>
<!-- Torress's Main Content Area End Here -->

<!-- Begin Torress's Brand Area -->
<div class="torress-brand_area">
    <div class="container">
        <div class="torress-brand_nav">
            <div class="row">
                <div class="col-lg-12">
                    <div class="torress-brand_slider slider-navigation_style-1">
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img src="assets/images/brand/1.jpg" alt="Torress's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img src="assets/images/brand/2.jpg" alt="Torress's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img src="assets/images/brand/3.jpg" alt="Torress's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img src="assets/images/brand/4.jpg" alt="Torress's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img src="assets/images/brand/5.jpg" alt="Torress's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img src="assets/images/brand/1.jpg" alt="Torress's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img src="assets/images/brand/2.jpg" alt="Torress's Brand Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Torress's Brand Area End Here -->

@endsection
