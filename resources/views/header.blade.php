

<!-- Begin Torress's Header Main Area -->
<header class="header-main_area">
    <div class="header-top_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="ht-left_area">
                        <div class="essential-stuff">
                            <ul>
                                <li class="welcome-msg">
                                    <span>Welcome to our shop</span>
                                </li>
                                <li class="contact-info">
                                    <span class="ion-android-call"></span>
                                    <a href="tel://+123123321345">(+123) 123 321 345</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="ht-right_area">
                        <div class="ht-menu">
                            <ul>
                                <li><a href="javascript:void(0)">USD</a>
                                    <ul class="ht-dropdown ht-currency">
                                        <li><a href="javascript:void(0)">€ EUR</a></li>
                                        <li><a href="javascript:void(0)">£ Pound Sterling</a></li>
                                        <li class="active"><a href="javascript:void(0)">$ Us Dollar</a></li>
                                    </ul>
                                </li>


                                @if( !Auth::check())
                                <li><a href="/login">Login</a></li>
                                <li><a href="/register">Register</a></li>
                                @else
                                    @if(Auth::user()->role_id == 1)
                                        <li><a href="/admin">Admin panel</a></li>
                                    @endif
                                    <li><a href="{{Route('account')}}">My Account</a></li>
                                    <li><a href="{{Route('wishlist')}}">Wishlist</a></li>
                                    <li><a href="/logout">Logout</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5 col-sm-5">
                    <div class="header-logo">
                        <a href="/home">
                            <img src="torress/assets/images/menu/logo/1.png" alt="Torress's Header Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="hm-form_area">
                        <form action="{{route('search')}}" class="hm-searchbox" method="post">
                            @csrf
                            <input type="text" placeholder="Search here" name="key">
                            <button class="torress-search_btn" type="submit"><i class="ion-android-search"></i></button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3 d-none d-lg-block">
                    <div class="hm-minicart_area">
                        <ul>
                            <li>
                                <ul class="minicart-body">
                                    <?php $total = 0;
                                    $count = 0;?>
                                    @if(session('cart'))
                                        @foreach(session('cart') as $id =>$details)

                                            <?php $total += $details['price'] * $details['quantity'];
                                            $count+= 1;?>
                                            <li class="minicart-item_area">
                                                <div class="minicart-single_item">
                                                    <div class="minicart-img">
                                                        <a href="{{route('sign_product', $id)}}">
                                                            <img src="/images/product/{{ $details['photo'] }}" alt="Torress's Product Image">
                                                        </a>
                                                    </div>
                                                    <div class="minicart-content">
                                                        <div class="product-name">
                                                            <h6>
                                                                <a href="{{route('sign_product', $id)}}">
                                                                    {{ $details['name'] }}
                                                                </a>
                                                            </h6>
                                                        </div>
                                                        <span class="product-quantity">Qty {{$details['quantity']}}</span>
                                                        <div class="price-box">
                                                            <span class="new-price">{{ $details['price'] * $details['quantity'] }}$</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif
                                    <li>
                                        <div class="price_content">
                                            <div class="cart-subtotals">
                                                {{--<div class="products subtotal-list">--}}
                                                {{--<span class="label">Subtotal</span>--}}
                                                {{--<span class="value">$150.00</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="shipping subtotal-list">--}}
                                                {{--<span class="label">Shipping</span>--}}
                                                {{--<span class="value">$7.00</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="tax subtotal-list">--}}
                                                {{--<span class="label">Taxes</span>--}}
                                                {{--<span class="value">$0.00</span>--}}
                                                {{--</div>--}}
                                                <div class="cart-total subtotal-list">
                                                    <span class="label">Total</span>
                                                    <span class="value">{{ $total }}$</span>
                                                </div>
                                            </div>
                                            <div class="minicart-button">
                                                <a class="torress-btn torress-btn_fullwidth" href="{{route('checkout')}}">Checkout</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a href="{{route('cart')}}">
                                    <div class="minicart-icon">
                                        <i class="ion-bag"></i>
                                        <span class="item-count">{{$count}}</span>
                                    </div>
                                    <div class="minicart-title">
                                        <span class="item_total">{{ $total }}$</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-7 col-sm-7 d-block d-lg-none">
                    <div class="mobile-menu_area">
                        <ul>
                            <li class="minicart-area">
                                <a href="cart.html"><i class="ion-bag"></i><span class="item-count">2</span></a>
                            </li>
                            <li>
                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white d-lg-none d-block">
                                    <i class="ion-navicon"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-none d-lg-block position-static">
                    <div class="main-menu_area">
                        <nav class="main_nav">
                            <ul>
                                <li class="dropdown-holder"><a href="/home">Home</a>

                                </li>
                                <li class="megamenu-holder"><a href="{{Route('shop')}}">Shop</a>
                                </li>
                                <li><a href="{{Route('blog')}}">Blog</a>

                                </li>
                                <li><a href="{{Route('error')}}">Error 404</a></li>
                                <li><a href="{{Route('about')}}">About Us</a></li>
                                <li><a href="{{Route('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom_area header-sticky stick">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5 col-sm-5">
                    <div class="header-logo">
                        <a href="/home">
                            <img src="torress/assets/images/menu/logo/1.png" alt="Torress's Header Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 d-none d-lg-block position-static">
                    <div class="main-menu_area">
                        <nav class="main_nav">
                            <ul>
                                <li class="dropdown-holder"><a href="/home">Home</a>

                                </li>
                                <li class="megamenu-holder"><a href="{{route('shop')}}">Shop</a>
                                </li>
                                <li><a href="{{route('blog')}}">Blog</a>

                                </li>
                                <li><a href="{{route('error')}}">Error 404</a>

                                </li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 d-block d-lg-none">
                    <div class="mobile-menu_area">
                        <ul>
                            <li class="minicart-area">
                                <a href="cart.html"><i class="ion-bag"></i><span class="item-count">2</span></a>
                            </li>
                            <li>
                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white d-lg-none d-block">
                                    <i class="ion-navicon"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="offcanvas-menu-inner">
            <div class="container">
                <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                <div class="offcanvas-inner_search">

                    <form action="{{route('search')}}" class="hm-searchbox" method="post">
                        @csrf
                        <input type="text" name="key" placeholder="Search for item..." >
                        <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                    </form>

                </div>
                <nav class="offcanvas-navigation">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children active"><a href="index.html"><span
                                    class="mm-text">Home</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.html">
                                        <span class="mm-text">Home Shop 01</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-2.html">
                                        <span class="mm-text">Home Shop 02</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="shop-left-sidebar.html">
                                <span class="mm-text">Shop</span>
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">
                                    <a href="shop-left-sidebar.html">
                                        <span class="mm-text">Grid View</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="shop-3-column.html">
                                                <span class="mm-text">Grid Fullwidth</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar.html">
                                                <span class="mm-text">Left Sidebar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-right-sidebar.html">
                                                <span class="mm-text">Right Sidebar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop-list-left-sidebar.html">
                                        <span class="mm-text">Shop List</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="shop-list-fullwidth.html">
                                                <span class="mm-text">Full Width</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-list-left-sidebar.html">
                                                <span class="mm-text">Left Sidebar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-list-right-sidebar.html">
                                                <span class="mm-text">Right Sidebar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="single-product-gallery-left.html">
                                        <span class="mm-text">Single Product Style</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="single-product-gallery-left.html">
                                                <span class="mm-text">Gallery Left</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-gallery-right.html">
                                                <span class="mm-text">Gallery Right</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-tab-style-left.html">
                                                <span class="mm-text">Tab Style Left</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-tab-style-right.html">
                                                <span class="mm-text">Tab Style Right</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-sticky-left.html">
                                                <span class="mm-text">Sticky Left</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-sticky-right.html">
                                                <span class="mm-text">Sticky Right</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="single-product.html">
                                        <span class="mm-text">Single Product Type</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="single-product.html">
                                                <span class="mm-text">Single Product</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-sale.html">
                                                <span class="mm-text">Single Product Sale</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-group.html">
                                                <span class="mm-text">Single Product Group</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-variable.html">
                                                <span class="mm-text">Single Product Variable</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-affiliate.html">
                                                <span class="mm-text">Single Product Affiliate</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-slider.html">
                                                <span class="mm-text">Single Product Slider</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="single-product.html">
                                        <span class="mm-text">Shop Related Pages</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="my-account.html">
                                                <span class="mm-text">My Account</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login-register.html">
                                                <span class="mm-text">Login | Register</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <span class="mm-text">Wishlist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <span class="mm-text">Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">
                                                <span class="mm-text">Checkout</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html">
                                                <span class="mm-text">Comparer</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="blog-left-sidebar.html">
                                <span class="mm-text">Blog</span>
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children has-children">
                                    <a href="blog-left-sidebar.html">
                                        <span class="mm-text">Grid View</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog-2-column.html">
                                                <span class="mm-text">Column Two</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-3-column.html">
                                                <span class="mm-text">Column Three</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-left-sidebar.html">
                                                <span class="mm-text">Left Sidebar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-right-sidebar.html">
                                                <span class="mm-text">Right Sidebar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children has-children">
                                    <a href="blog-list-left-sidebar.html">
                                        <span class="mm-text">List View</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog-list-fullwidth.html">
                                                <span class="mm-text">List Fullwidth</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-list-left-sidebar.html">
                                                <span class="mm-text">List Left Sidebar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-list-right-sidebar.html">
                                                <span class="mm-text">List Right Sidebar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children has-children">
                                    <a href="blog-details-left-sidebar.html">
                                        <span class="mm-text">Blog Details</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog-details-left-sidebar.html">
                                                <span class="mm-text">Left Sidebar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-details-right-sidebar.html">
                                                <span class="mm-text">Right Sidebar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children has-children">
                                    <a href="blog-gallery-format.html">
                                        <span class="mm-text">Blog Format</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog-gallery-format.html">
                                                <span class="mm-text">Gallery Format</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-audio-format.html">
                                                <span class="mm-text">Audio Format</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-video-format.html">
                                                <span class="mm-text">Video Format</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="index.html">
                                <span class="mm-text">Pages</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="about-us.html">
                                        <span class="mm-text">About Us</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        <span class="mm-text">Contact</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="faq.html">
                                        <span class="mm-text">FAQ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="404.html">
                                        <span class="mm-text">Error 404</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <nav class="offcanvas-navigation user-setting_area">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children active"><a href="javascript:void(0)"><span
                                    class="mm-text">User
                                        Setting</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="my-account.html">
                                        <span class="mm-text">My Account</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="login-register.html">
                                        <span class="mm-text">Login | Register</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0)"><span
                                    class="mm-text">Currency</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="mm-text">EUR €</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="mm-text">USD $</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0)"><span
                                    class="mm-text">Language</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="mm-text">English</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="mm-text">Français</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="mm-text">Romanian</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="mm-text">Japanese</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Torress's Header Main Area End Here -->

