@extends('master')
@section('content')
<div class="torress-slider_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="main-slider slider-navigation_style-1">
                    <!-- Begin Single Slide Area -->
                    <div class="single-slide animation-style-01 bg-1">
                        <div class="container">
                            <div class="slider-content">
                                <h4>Egg lounge chair.</h4>
                                <h3>Morden Furniture</h3>
                                <a class="product-price" href="shop-left-sidebar.html">
                                    <span>$175.70</span>
                                </a>
                            </div>
                            <div class="slider-progress"></div>
                        </div>
                    </div>
                    <!-- Single Slide Area End Here -->
                    <!-- Begin Single Slide Area -->
                    <div class="single-slide animation-style-02 bg-2">
                        <div class="container">
                            <div class="slider-content slider-content-2">
                                <h4>Windsor chair</h4>
                                <h3>Morden Furniture</h3>
                                <h5>All Selected Items</h5>
                                <div class="torress-btn-ps_left slide-btn">
                                    <a class="torress-btn torress-btn_dark" href="shop-left-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                            <div class="slider-progress"></div>
                        </div>
                    </div>
                    <!-- Single Slide Area End Here -->
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row torress-banner_area">
                    <div class="col-lg-12 col-md-6 col-sm-6">
                        <div class="banner-item img-hover_effect">
                            <a href="shop-left-sidebar.html">
                                <img class="img-full" src="torress/assets/images/banner/1.jpg" alt="Torress's Banner">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6">
                        <div class="banner-item img-hover_effect">
                            <a href="shop-left-sidebar.html">
                                <img class="img-full" src="torress/assets/images/banner/2.jpg" alt="Torress's Banner">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Begin Torress's Product Area -->
<div class="torress-product_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-5">
                        <div class="banner-item img-hover_effect">
                            <a href="single-product.html">
                                <img class="img-full" src="torress/assets/images/banner/3.jpg" alt="Torress's Banner">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7">
                        <div class="torress-section_title">
                            <h3>Best Selling</h3>
                        </div>
                        <div class="torress-product_slider slider-navigation_style-3">
                            @foreach($b_product as $bpro)
                            <div class="slide-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="{{route('sign_product',$bpro->id)}}">
                                            <img class="primary-img" src="/images/product/{{$bpro->image->first()->path}}" alt="Torress's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                            class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="{{route('addcart',$bpro->id)}}" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                            class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h6 class="product-name"><a href="{{route('sign_product',$bpro->id)}}">{{$bpro->name}}</a></h6>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">{{$bpro->attribute->first()->price_sale}}$</span>
                                                <span class="old-price">{{$bpro->attribute->first()->price}}$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Torress's Product Area End Here -->

<!-- Begin Torress's Banner Area -->
<div class="torress-banner_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner-item img-hover_effect">
                    <a href="javascript:void(0)">
                        <img class="img-full" src="torress/assets/images/banner/4.jpg" alt="Torress's Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner-item img-hover_effect">
                    <a href="javascript:void(0)">
                        <img class="img-full" src="torress/assets/images/banner/5.jpg" alt="Torress's Banner">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Torress's Banner Area End Here -->

<!-- Begin Torress's Product Tab Area -->
<div class="torress-product-tab_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="banner-item img-hover_effect">
                    <a href="javascript:void(0)">
                        <img src="torress/assets/images/banner/6.jpg" alt="Torress's Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-section_area">
                            <div class="product-tab_title">
                                <h3>Hot Deal</h3>
                            </div>
                            <div class="product-tab">
                                <ul class="nav product-menu">
                                    <li><a class="active" data-toggle="tab" href="#bookcase"><span>Bookcase</span></a></li>
                                    <li><a data-toggle="tab" href="#hatstand"><span>Hatstand</span></a></li>
                                    <li><a data-toggle="tab" href="#dresser"><span>Dresser</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-content torress-tab_content">
                            <div id="bookcase" class="tab-pane active show" role="tabpanel">
                                <div class="torress-product-tab_slider slider-navigation_style-1">
                                    @foreach($boproduct as $bopro)
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="{{route('sign_product',$bopro->id)}}">
                                                    <img class="primary-img" src="/images/product/{{$bopro->image->first()->path}}" alt="Torress's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="{{route('addcart',$bopro->id)}}" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <h6 class="product-name"><a href="{{route('sign_product',$bopro->id)}}">{{$bopro->name}}</a></h6>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">{{$bopro->attribute->first()->price_sale}}$</span>
                                                        <span class="old-price">{{$bopro->attribute->first()->price}}$</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="hatstand" class="tab-pane" role="tabpanel">
                                <div class="torress-product-tab_slider slider-navigation_style-1">
                                    @foreach($haproduct as $hapro)
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="{{route('sign_product',$hapro->id)}}">
                                                    <img class="primary-img" src="/images/product/{{$hapro->image->first()->path}}" alt="Torress's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="{{route('addcart',$hapro->id)}}" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <h6 class="product-name"><a href="{{route('sign_product',$hapro->id)}}">{{$hapro->name}}</a></h6>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">{{$hapro->attribute->first()->price_sale}}$</span>
                                                        <span class="old-price">{{$hapro->attribute->first()->price}}$</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="dresser" class="tab-pane" role="tabpanel">
                                <div class="torress-product-tab_slider slider-navigation_style-1">
                                    @foreach($deproduct as $depro)
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="{{route('sign_product',$depro->id)}}">
                                                    <img class="primary-img" src="/images/product/{{$depro->image->first()->path}}" alt="Torress's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="{{route('addcart',$depro->id)}}" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <h6 class="product-name"><a href="{{route('sign_product',$depro->id)}}">{{$depro->name}}</a></h6>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">{{$depro->attribute->first()->price_sale}}$</span>
                                                        <span class="old-price">{{$depro->attribute->first()->price}}$</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Torress's Product Tab Area End Here -->

<!-- Begin Torress's Shipping Area -->
<div class="torress-shipping_area">
    <div class="container">
        <div class="shipping-nav">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="shipping-item">
                        <div class="shipping-icon">
                            <i class="fa fa-paper-plane"></i>
                        </div>
                        <div class="shipping-content">
                            <h6>Free Shipping</h6>
                            <p>On all orders over $75.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="shipping-item">
                        <div class="shipping-icon">
                            <i class="ion-ios-reload"></i>
                        </div>
                        <div class="shipping-content">
                            <h6>Easy 30 Days Returns</h6>
                            <p>30 days money back</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="shipping-item">
                        <div class="shipping-icon">
                            <i class="fa fa-credit-card"></i>
                        </div>
                        <div class="shipping-content">
                            <h6>100% Secure</h6>
                            <p>PayPal / MasterCard / Visa</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="shipping-item">
                        <div class="shipping-icon">
                            <i class="ion-help-buoy"></i>
                        </div>
                        <div class="shipping-content">
                            <h6>24/7 Support</h6>
                            <p>We will be at your service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Torress's Shipping Area End Here -->

<!-- Begin Torress's Product Tab Area Two -->
<div class="torress-product-tab_area torress-product-tab_area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="banner-item img-hover_effect">
                    <a href="javascript:void(0)">
                        <img src="torress/assets/images/banner/7.jpg" alt="Torress's Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-section_area">
                            <div class="product-tab_title">
                                <h3>Trending</h3>
                            </div>
                            <div class="product-tab">
                                <ul class="nav product-menu">
                                    <li><a class="active" data-toggle="tab" href="#home"><span>Home</span></a></li>
                                    <li><a data-toggle="tab" href="#office"><span>Office</span></a></li>
                                    <li><a data-toggle="tab" href="#decor"><span>Decor</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-content torress-tab_content">
                            <div id="home" class="tab-pane active show" role="tabpanel">
                                <div class="torress-product-tab_slider slider-navigation_style-1">
                                    @foreach($hoproduct as $hopro)
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="{{route('sign_product',$hopro->id)}}">
                                                    <img class="primary-img" src="/images/product/{{$hopro->image->first()->path}}" alt="Torress's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="{{route('addcart',$hopro->id)}}" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <h6 class="product-name"><a href="{{route('sign_product',$hopro->id)}}">{{$hopro->name}}</a></h6>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">{{$hopro->attribute->first()->price_sale}}$</span>
                                                        <span class="old-price">{{$hopro->attribute->first()->price}}$</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div id="office" class="tab-pane" role="tabpanel">
                                <div class="torress-product-tab_slider slider-navigation_style-1">
                                    @foreach($oproduct as $opro)
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="{{route('sign_product',$opro->id)}}">
                                                    <img class="primary-img" src="/images/product/{{$opro->image->first()->path}}" alt="Torress's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="{{route('addcart',$opro->id)}}" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <h6 class="product-name"><a href="{{route('sign_product',$opro->id)}}">{{$opro->name}}</a></h6>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">{{$opro->attribute->first()->price_sale}}$</span>
                                                        <span class="old-price">{{$opro->attribute->first()->price}}$</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="decor" class="tab-pane" role="tabpanel">
                                <div class="torress-product-tab_slider slider-navigation_style-1">
                                    @foreach($dproduct as $dpro)
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="{{route('sign_product',$dpro->id)}}">
                                                    <img class="primary-img" src="/images/product/{{$dpro->image->first()->path}}" alt="Torress's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="{{route('addcart',$dpro->id)}}" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <h6 class="product-name"><a href="{{route('sign_product',$dpro->id)}}">{{$dpro->name}}</a></h6>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">{{$dpro->attribute->first()->price_sale}}$</span>
                                                        <span class="old-price">{{$dpro->attribute->first()->price}}$</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Torress's Product Tab Area Two End Here -->

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
