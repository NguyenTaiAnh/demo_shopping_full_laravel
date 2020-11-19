@extends('master')
@section('content')
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
                        <h3>Address</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="cart-product-name">Province</th>
                                    <th class="cart-product-total">District</th>
                                    <th class="cart-product-total">Ward</th>
                                    <th class="cart-product-total">Village</th>
                                    <th class="cart-product-total">Address</th>
                                    <th class="cart-product-total">Phone</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="cart_item">
                                    <td class="cart-product-name"> {{$address['province']}}</td>
                                    <td class="cart-product-total"><span class="amount">{{ $address['district'] }}</span></td>
                                    <td class="cart-product-total"><span class="amount">{{ $address['ward'] }}</span></td>
                                    <td class="cart-product-total"><span class="amount">{{ $address['village']}}</span></td>
                                    <td class="cart-product-total"><span class="amount">{{ $address['address']}}</span></td>
                                    <td class="cart-product-total"><span class="amount">{{ $address['phone']}}</span></td>
                                </tr>
                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>
                        <h3>Your order item</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="cart-product-name">Image</th>
                                    <th class="cart-product-total">Name</th>
                                    <th class="cart-product-total">Amount</th>
                                    <th class="cart-product-total">Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order->item as $item)
                                    @foreach($products as $product)
                                        @if($item->product_id == $product->id)
                                            <tr class="cart_item">
                                                <td class="cart-product-name"><img src="/images/product_image/{{$product->image->first()->path}}" width="100px" alt="Torress's Cart Thumbnail"></td>
                                                <td class="cart-product-total"><span class="amount">{{$product->name}}</span></td>
                                                <td class="cart-product-total"><span class="amount">{{ $item->amount }}</span></td>
                                                <td class="cart-product-total"><span class="amount">${{ $item->price}}</span></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endforeach
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
    </div>
    <!-- Torress's Brand Area End Here -->

@endsection
