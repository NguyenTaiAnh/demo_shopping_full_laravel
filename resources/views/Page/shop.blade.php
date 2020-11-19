@extends('master')
@section('content')
    <!-- Begin Torress's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Shop Grid View</h2>
                <ul>
                    <li><a href="{{Route('index')}}">Home</a></li>
                    <li class="active">Shop Left Sidebar</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Torress's Breadcrumb Area End Here -->

    <!-- Begin Torress's Content Wrapper Area -->
    <div class="torress-content_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="torress-sidebar-catagories_area">
                        <div class="torress-sidebar_categories">
                            <div class="torress-categories_title first-child">
                                <h5>Filter by price</h5>
                            </div>
                            <div class="price-filter">
                                <div id="slider-range"></div>
                                <div class="price-slider-amount">
                                    <div class="label-input">
                                        <label>price : </label>
                                        <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        <button class="filter-btn">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="torress-sidebar_categories category-module">
                            <div class="torress-categories_title">
                                <h5>Product Categories</h5>
                            </div>
                            <div class="sidebar-categories_menu">
                                <ul>
                                    <li class="has-sub"><a href="javascript:void(0)">Bed & Bath <i
                                                class="ion-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="javascript:void(0)">Baskets & Bins</a></li>
                                            <li><a href="javascript:void(0)">Bed Frames</a></li>
                                            <li><a href="javascript:void(0)">Bedroom Armoires</a></li>
                                            <li><a href="javascript:void(0)">Dressers</a></li>
                                            <li><a href="javascript:void(0)">Hangers</a></li>
                                            <li><a href="javascript:void(0)">Headboards & Footboards</a></li>
                                            <li><a href="javascript:void(0)">Nightstands</a></li>
                                            <li><a href="javascript:void(0)">Shoe Organizers</a></li>
                                            <li><a href="javascript:void(0)">Storage & Organization</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)">Bedroom</a></li>
                                    <li class="has-sub"><a href="javascript:void(0)">Console Tables <i
                                                class="ion-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="javascript:void(0)">Daylesford</a></li>
                                            <li><a href="javascript:void(0)">Delaware</a></li>
                                            <li><a href="javascript:void(0)">Fayence</a></li>
                                            <li><a href="javascript:void(0)">Mable</a></li>
                                            <li><a href="javascript:void(0)">Mobo</a></li>
                                            <li><a href="javascript:void(0)">Pippins</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)">Dining Tables</a></li>
                                    <li><a href="javascript:void(0)">End Tables</a></li>
                                    <li class="has-sub"><a href="javascript:void(0)">Furniture <i
                                                class="ion-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="javascript:void(0)">Bedroom Furniture</a></li>
                                            <li><a href="javascript:void(0)">Chairs</a></li>
                                            <li><a href="javascript:void(0)">Coffee Tables</a></li>
                                            <li><a href="javascript:void(0)">Console Tables</a></li>
                                            <li><a href="javascript:void(0)">End Tables</a></li>
                                            <li><a href="javascript:void(0)">Living Room Sets</a></li>
                                            <li><a href="javascript:void(0)">Ottomans & Storage Ottomans</a></li>
                                            <li><a href="javascript:void(0)">Sofas & Couches</a></li>
                                            <li><a href="javascript:void(0)">TV Stands</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub"><a href="javascript:void(0)">Home Decor <i
                                                class="ion-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="javascript:void(0)">Candleholders</a></li>
                                            <li><a href="javascript:void(0)">Candles</a></li>
                                            <li><a href="javascript:void(0)">Clocks</a></li>
                                            <li><a href="javascript:void(0)">Floor Mirrors</a></li>
                                            <li><a href="javascript:void(0)">Lamps & Lighting</a></li>
                                            <li><a href="javascript:void(0)">Rugs</a></li>
                                            <li><a href="javascript:void(0)">Runners</a></li>
                                            <li><a href="javascript:void(0)">Wall Decor</a></li>
                                            <li><a href="javascript:void(0)">Wall Mirrors</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub"><a href="javascript:void(0)">Kitchen & Dining <i
                                                class="ion-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="javascript:void(0)">Bowls</a></li>
                                            <li><a href="javascript:void(0)">Cups, Mugs & Saucers</a></li>
                                            <li><a href="javascript:void(0)">Cutting Boards</a></li>
                                            <li><a href="javascript:void(0)">Dinnerware Sets</a></li>
                                            <li><a href="javascript:void(0)">Flatware</a></li>
                                            <li><a href="javascript:void(0)">Glassware & Drinkware</a></li>
                                            <li><a href="javascript:void(0)">Knife Sets</a></li>
                                            <li><a href="javascript:void(0)">Plates</a></li>
                                            <li><a href="javascript:void(0)">Serveware</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub"><a href="javascript:void(0)">Living Room Sets <i
                                                class="ion-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="javascript:void(0)">Coffee & side tables</a></li>
                                            <li><a href="javascript:void(0)">Living room lighting</a></li>
                                            <li><a href="javascript:void(0)">Living room storage</a></li>
                                            <li><a href="javascript:void(0)">Living room textiles & rugs</a></li>
                                            <li><a href="javascript:void(0)">Sofas & armchairs</a></li>
                                            <li><a href="javascript:void(0)">TV & media furniture</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)">TV Stands</a></li>
                                    <li><a href="javascript:void(0)">Uncategorized</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="torress-sidebar_categories">
                            <div class="torress-categories_title">
                                <h5>Color</h5>
                            </div>
                            <ul class="sidebar-checkbox_list">
                                <li>
                                    <a href="javascript:void(0)">Black (1)</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Blue (1)</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Gold (3)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="torress-sidebar_categories">
                            <div class="torress-categories_title torress-tags_title">
                                <h5>Product Tags</h5>
                            </div>
                            <ul class="torress-tags_list">
                                <li><a href="javascript:void(0)">Rack</a></li>
                                <li><a href="javascript:void(0)">Bookcase</a></li>
                                <li><a href="javascript:void(0)">Dresser</a></li>
                                <li><a href="javascript:void(0)">Hatstand</a></li>
                                <li><a href="javascript:void(0)">Sofa</a></li>
                                <li><a href="javascript:void(0)">Jukebox</a></li>
                            </ul>
                        </div>
                        <div class="torress-sidebar_categories torress-banner_area sidebar-banner_area">
                            <div class="banner-item img-hover_effect">
                                <div class="banner-img">
                                    <a href="javascript:void(0)">
                                        <img class="img-full" src="torress/assets/images/banner/6.jpg" alt="Torress's Banner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="shop-toolbar">
                        <div class="product-view-mode">
                            <a class="active grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="fa fa-th"></i></a>
                            <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="fa fa-th-list"></i></a>
                        </div>
                        <div class="product-page_count">
                            <p>Showing 1–9 of 40 results)</p>
                        </div>
                        <div class="product-item-selection_area">
                            <div class="product-short">
                                <label class="select-label">Short By:</label>
                                <select class="nice-select">
                                    <option value="1">Default sorting</option>
                                    <option value="2">Name, A to Z</option>
                                    <option value="3">Name, Z to A</option>
                                    <option value="4">Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                                    <option value="5">Rating (Highest)</option>
                                    <option value="5">Rating (Lowest)</option>
                                    <option value="5">Model (A - Z)</option>
                                    <option value="5">Model (Z - A)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="shop-product-wrap grid gridview-3 row">
                        @foreach($product as $pro)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="slide-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="{{route('sign_product',$pro->id)}}">
                                            <img class="primary-img" src="/images/product/{{$pro->image->first()->path}}" alt="Torress's Product Image">
                                        </a>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                            class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="{{route('wishlist')}}" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="{{route('addcart',$pro->id)}}" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
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
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-slide_item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="{{route('sign_product',$pro->id)}}">
                                            <img src="/images/product/{{$pro->image->first()->path}}" alt="Torress's Product Image">
                                        </a>
                                    </div>
                                    <div class="torress-product-content">
                                        <div class="product-desc_info">
                                            <h6 class="product-name"><a href="{{route('sign_product',$pro->id)}}">{{$pro->name}}</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="new-price">{{$pro->attribute->first()->price_sale}}$</span>
                                                <span class="old-price">{{$pro->attribute->first()->price}}$</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                </ul>
                                            </div>
                                            <div class="product-short_desc">
                                                <p>{{$pro->description}}</p>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                            class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="{{route('wishlist')}}" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="{{route('addcart',$pro->id)}}" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                                <ul class="torress-pagination-box">
                                    {{$product->links()}}
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Torress's Content Wrapper Area End Here -->

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
