@extends('master')
@section('content')
    <!-- Begin Torress's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Single Product Type</h2>
                <ul>
                    <li><a href="/home">Home</a></li>
                    <li class="active">Single Product</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Torress's Breadcrumb Area End Here -->

    <!-- Begin Torress's Single Product Area -->
    <div class="sp-area">
        <div class="container">
            <div class="sp-nav">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sp-img_area">
                            <div class="zoompro-border">
                                <img class="zoompro" src="/images/product/{{$product->image->first()->path}}" data-zoom-image="/images/product/{{$product->image->first()->path}}" alt="Torress's Product Image" />
                            </div>
                            <div id="gallery" class="sp-img_slider slider-navigation_style-4">
                                @foreach($product->image as $pro)
                                <a class="active" data-image="/images/product/{{$pro->path}}" data-zoom-image="/images/product/{{$pro->path}}">
                                    <img src="/images/product/{{$pro->path}}" alt="Torress's Product Image">
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sp-content">
                            <div class="sp-heading">
                                <h2><a href="javascript:void(0)">{{$product->name}}</a></h2>
                            </div>
                            <div class="price-box">
                                <span class="new-price">{{$product->attribute->first()->price}}$</span>
                            </div>
                            <div class="rating-box">
                                <ul>
                                    <li><i class="ion-ios-star"></i></li>
                                    <li><i class="ion-ios-star"></i></li>
                                    <li><i class="ion-ios-star"></i></li>
                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                </ul>
                                <div class="rating-info">
                                    <a href="javascript:void(0)">(1 customer review)</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <p>{{$product->description}}</p>
                            </div>
                            <div class="product-size_box">
                                <span>Size</span>
                                <select class="myniceselect nice-select">
                                    <option value="1">S</option>
                                    <option value="2">M</option>
                                    <option value="3">L</option>
                                    <option value="4">XL</option>
                                </select>
                            </div>
                            <div class="in-stock"><i class="fa fa-check-circle"></i><span>{{$product->attribute->first()->amount}} In Stock</span></div>
                            <div class="quantity">
                                <label>Quantity</label>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="1" type="text">
                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                </div>
                                <div class="additional-btn_area">
                                    <button class="additional_btn add-to-cart" data-id ="{{$product->id}}">
                                        <a href="{{route('addcart',$product->id)}}">Add To Cart</a>
                                    </button>
                                </div>

                            </div>
                            <div class="qty-btn_area">
                                <ul>
                                    <li><a class="qty-btn" href="wishlist.html" data-toggle="tooltip" title="Add To Wishlist"><i
                                                class="ion-android-favorite-outline"></i>Add To Wishlist</a></li>
                                    <li><a class="qty-btn" href="compare.html" data-toggle="tooltip" title="Compare This Product"><i
                                                class="ion-ios-shuffle-strong"></i>Add To Compare</a></li>
                                </ul>
                            </div>
                            <div class="category-list_area">
                                <h6>Category:</h6>
                                <ul class="tags-list">
                                    <li>
                                        <a href="javascript:void(0)">{{$product->category->name}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="category-list_area tag-list_area">
                                <h6>Tags:</h6>
                                <ul class="tags-list">
                                    <li>
                                        <a href="javascript:void(0)">Men</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="torress-social_link">
                                <h6>Shere This product:</h6>
                                <ul>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com" data-toggle="tooltip" target="_blank" title="Facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="https://twitter.com" data-toggle="tooltip" target="_blank" title="Twitter">
                                            <i class="fab fa-twitter-square"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="https://www.youtube.com" data-toggle="tooltip" target="_blank" title="Youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                            <i class="fab fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a href="https://rss.com" data-toggle="tooltip" target="_blank" title="Instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Torress's Single Product Area End Here -->

    <!-- Begin Torress's Single Product Tab Area -->
    <div class="sp-tab_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sp-product-tab_nav">
                        <div class="product-tab">
                            <ul class="nav product-menu">
                                <li><a class="active" data-toggle="tab" href="#description"><span>Description</span></a>
                                </li>
                                <li><a data-toggle="tab" href="#specification"><span>Specification</span></a></li>
                                <li><a data-toggle="tab" href="#reviews"><span>Reviews (1)</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-content torress-tab_content">
                            <div id="description" class="tab-pane active show" role="tabpanel">
                                <div class="product-description">
                                    <p class="short-desc">
                                        {{$product->description}}
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                                    </p>
                                    <p class="additional-desc">
                                        Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.
                                    </p>
                                </div>
                            </div>
                            <div id="specification" class="tab-pane" role="tabpanel">
                                <table class="table table-bordered specification-inner_stuff">
                                    <tbody>
                                    <tr>
                                        <td colspan="2"><strong>Memory</strong></td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td>test 1</td>
                                        <td>8gb</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td colspan="2"><strong>Processor</strong></td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td>No. of Cores</td>
                                        <td>1</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="reviews" class="tab-pane" role="tabpanel">
                                <div class="tab-pane active" id="tab-review">
                                    <form class="form-horizontal" id="form-review">
                                        <div id="review">
                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td style="width: 50%;"><strong>Customer</strong></td>
                                                    <td class="text-right">25/04/2019</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p>Good product! Thank you very much</p>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li><i class="ion-ios-star"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h2>Write a review</h2>
                                        <div class="form-group required">
                                            <div class="col-sm-12 p-0">
                                                <label>Your Email <span class="required">*</span></label>
                                                <input class="review-input" type="email" name="con_email" id="con_email" required>
                                            </div>
                                        </div>
                                        <div class="form-group required second-child">
                                            <div class="col-sm-12 p-0">
                                                <label class="control-label">Share your opinion</label>
                                                <textarea class="review-textarea" name="con_message" id="con_message"></textarea>
                                                <div class="help-block"><span class="text-danger">Note:</span> HTML is not
                                                    translated!</div>
                                            </div>
                                        </div>
                                        <div class="form-group last-child required">
                                            <div class="col-sm-12 p-0">
                                                <div class="your-opinion">
                                                    <label>Your Rating</label>
                                                    <span>
                                                        <select class="star-rating">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="torress-btn-ps_right">
                                                <a href="javascript:void(0)" class="torress-btn torress-btn_dark">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Torress's Single Product Tab Area End Here -->

    <!-- Begin Torress's Product Area Two -->
    <div class="torress-product_area torress-product_area-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="torress-section_title">
                        <h3>Related Product</h3>
                    </div>
                    <div class="torress-product_slider-2 slider-navigation_style-3">
                    @foreach($products as $pro)
                        <div class="slide-item">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="{{route('product',$pro->id)}}">
                                        <img class="primary-img" src="/images/product/{{$pro->image->first()->path}}" alt="Torress's Product Image">
                                    </a>
                                    <div class="add-actions">
                                        <ul>
                                            <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                            </li>
                                            <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                            </li>
                                            <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                            </li>
                                            <li><a href="{{route('addcart',$pro->id)}}" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                        class="ion-bag"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-desc_info">
                                        <h6 class="product-name"><a href="{{ route('product',$pro->id) }}">{{$pro->name}}</a></h6>
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
                                            <span class="new-price">{{$pro->attribute->first()->price_sale}}$</span>
                                            <span class="old-price">{{$pro->attribute->first()->price}}$</span>
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
    <!-- Torress's Product Area Two End Here -->

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
    @section('scripts')
    <script type="text/javascript">
        {{--            href="{{route('addtocart',['productid'=>$product->id, 'quantity'=>1 ])}}"--}}
        $(".add-to-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: 'add-to-cart/{id}',
                method: "GET",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: $(".cart-plus-minus-box").val()},
                success: function (response) {
                    window.location.reload();
                }
            });
        });

    </script>
    @endsection

@endsection
