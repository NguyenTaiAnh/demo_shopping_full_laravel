@extends('master')
@section('content')

<!-- Begin Torress's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Shop Related Page</h2>
            <ul>
                <li><a href="{{Route('index')}}">Home</a></li>
                <li class="active">Wishlist</li>
            </ul>
        </div>
    </div>
</div>
<!-- Torress's Breadcrumb Area End Here -->
<!--Begin Torress's Wishlist Area -->
<div class="torress-wishlist_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="javascript:void(0)">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="torress-product_remove">remove</th>
                                <th class="torress-product-thumbnail">images</th>
                                <th class="cart-product-name">Product</th>
                                <th class="torress-product-price">Unit Price</th>
                                <th class="torress-product-stock-status">Stock Status</th>
                                <th class="torress-cart_btn">add to cart</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="torress-product_remove"><a href="javascript:void(0)"><i class="fa fa-trash"
                                                                                                   title="Remove"></i></a></td>
                                <td class="torress-product-thumbnail"><a href="javascript:void(0)"><img src="torress/assets/images/product/small-size/1.jpg" alt="Torress's Wishlist Thumbnail"></a>
                                </td>
                                <td class="torress-product-name"><a href="javascript:void(0)">Juma rema pola</a></td>
                                <td class="torress-product-price"><span class="amount">$23.39</span></td>
                                <td class="torress-product-stock-status"><span class="in-stock">in stock</span></td>
                                <td class="torress-cart_btn"><a href="javascript:void(0)">add to cart</a></td>
                            </tr>
                            <tr>
                                <td class="torress-product_remove"><a href="javascript:void(0)"><i class="fa fa-trash"
                                                                                                   title="Remove"></i></a></td>
                                <td class="torress-product-thumbnail"><a href="javascript:void(0)"><img src="torress/assets/images/product/small-size/2.jpg" alt="Torress's Wishlist Thumbnail"></a>
                                </td>
                                <td class="torress-product-name"><a href="javascript:void(0)">Suretin mipen ruma</a></td>
                                <td class="torress-product-price"><span class="amount">$30.50</span></td>
                                <td class="torress-product-stock-status"><span class="in-stock">in stock</span></td>
                                <td class="torress-cart_btn"><a href="javascript:void(0)">add to cart</a></td>
                            </tr>
                            <tr>
                                <td class="torress-product_remove"><a href="javascript:void(0)"><i class="fa fa-trash"
                                                                                                   title="Remove"></i></a></td>
                                <td class="torress-product-thumbnail"><a href="javascript:void(0)"><img src="torress/assets/images/product/small-size/3.jpg" alt="Torress's Wishlist Thumbnail"></a>
                                </td>
                                <td class="torress-product-name"><a href="javascript:void(0)">Bag Goodscol model</a></td>
                                <td class="torress-product-price"><span class="amount">$40.19</span></td>
                                <td class="torress-product-stock-status"><span class="out-stock">out stock</span></td>
                                <td class="torress-cart_btn"><a href="javascript:void(0)">add to cart</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Torress's Wishlist Area End Here -->
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
