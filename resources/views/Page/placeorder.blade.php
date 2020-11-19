@extends('master')
@section('content')
    <!-- Web Content -->
    <!-- Begin Torress's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>    Checkout
                </h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">    Checkout
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Torress's Breadcrumb Area End Here -->
    <!-- Begin Torress's Checkout Area -->
    <div class="checkout-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="cart-product-name">Code</th>
                                    <th class="cart-product-total">Total</th>
                                    <th class="cart-product-total">Payment</th>
                                    <th class="cart-product-total">Shipping</th>
                                    <th class="cart-product-total">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="cart_item">
                                    <td class="cart-product-name"> {{$order->code}}</td>
                                    <td class="cart-product-total"><span class="amount">${{ $order->total }}</span></td>
                                    <td class="cart-product-total"><span class="amount">{{ $paytype->payment }}</span></td>
                                    <td class="cart-product-total"><span class="amount">{{ $shipping->name}}</span></td>
                                    <td class="cart-product-total"><span class="amount">{{ $order->order_status->first()->name}}</span></td>
                                </tr>
                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Torress's Checkout Area End Here -->


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
    </div>    <!-- Torress's Brand Area End Here -->
    <!-- End Web Content -->
@endsection
