@extends('master')
@section('content')

    <!-- Begin Torress's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Other</h2>
                <ul>
                    <li><a href="{{Route('index')}}">Home</a></li>
                    <li class="active">Error 404</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Torress's Breadcrumb Area End Here -->
    <!-- Begin Torress's Error 404 Page Area -->
    <div class="error404-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ml-auto mr-auto text-center">
                    <div class="search-error-wrapper">
                        <h1>404</h1>
                        <h2>PAGE NOT BE FOUND</h2>
                        <p class="short_desc">Sorry but the page you are looking for does not exist, have been removed, name
                            changed or is temporarily unavailable.</p>
                        <form action="javascript:void(0)" class="error-form">
                            <div class="inner-error_form">
                                <input type="text" placeholder="Search..." class="error-input-text">
                                <button type="submit" class="error-search_btn"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                        <div class="torress-btn-ps_center"></div>
                        <a href="{{Route('index')}}" class="torress-error_btn">Back To Home Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Torress's Error 404 Page End Here -->
    <!-- Begin Torress's Brand Area -->
    <div class="torress-brand_area">
        <div class="container">
            <div class="torress-brand_nav">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="torress-brand_slider slider-navigation_style-1">
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="torress/assets/images/brand/1.jpg" alt="Torress's Brand Image">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="torress/assets/images/brand/2.jpg" alt="Torress's Brand Image">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="torress/assets/images/brand/3.jpg" alt="Torress's Brand Image">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="torress/assets/images/brand/4.jpg" alt="Torress's Brand Image">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="torress/assets/images/brand/5.jpg" alt="Torress's Brand Image">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="torress/assets/images/brand/1.jpg" alt="Torress's Brand Image">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="torress/assets/images/brand/2.jpg" alt="Torress's Brand Image">
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
