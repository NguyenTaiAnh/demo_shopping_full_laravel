@extends('master')
@section('content')


    <!-- Begin Torress's Product Tab Area Four -->
    <div class="torress-product-tab_area torress-product-tab_area-3 torress-product-tab_area-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-section_area">
                                <div class="product-tab_title">
                                    <h3>Kết quả tìm kiếm cho: {{$key}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="tab-content torress-tab_content">
                                <div id="‎hutch-2" class="tab-pane active show" role="tabpanel">
                                    <div class="torress-product-tab_slider-3 slider-navigation_style-1">
                                        @foreach($product as $pro)
                                        <div class="slide-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{route('sign_product',$pro->id)}}">
                                                        <img class="primary-img" src="/images/product/{{$pro->image->first()->path}}" alt="Torress's Product Image">
                                                    </a>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                            </li>
                                                            <li><a href="{{route('wishlist')}}" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                            </li>
                                                            <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                            </li>
                                                            <li><a href="{{route('sign_product',$pro->id)}}" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-desc_info">
                                                        <h6 class="product-name"><a href="{{route('sign_product',$pro->id)}}">{{$pro->name}}</a></h6>
                                                        <div class="price-box">
                                                            <span class="new-price">{{$pro->attribute->first()->price_sale}}$</span>
                                                            <span class="old-price">{{$pro->attribute->first()->price}}$</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                <div class="row">{{$product->links()}}</div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Torress's Product Tab Area Four End Here -->
@endsection
