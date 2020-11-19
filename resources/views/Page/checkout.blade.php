@extends('master')
@section('content')


    <!-- Begin Torress's Checkout Area -->
    <div class="checkout-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="coupon-accordion">
                        @if (! Auth::check())
                            <h3>Returning customer <a href="{{route('login')}}">Click here to login</a></h3>
                        @endif
                        @if ($codedata == null)
                            <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                        @else
                            <h3>Your coupon code: <strong>{{$codedata->code}} discount {{$codedata->percent}}% </strong><span id="showcoupon">| Do you want to change coupon?</span></h3>
                        @endif
                        <div id="checkout_coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="{{route('checkout')}}" method="POST">
                                    @csrf
                                    <p class="checkout-coupon">
                                        <input name="discountcode" placeholder="Coupon code" type="text">
                                        <input class="coupon-inner_btn" value="Apply Coupon" type="submit">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <form action="{{route('placeorder')}}" method="POST">
                        @csrf
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>

                            @if ($codedata != null)
                                <input class="d-none" name="couponid" value="{{$codedata->id}}">
                                <input class="d-none" name="couponcodepercent" value="{{$codedata->percent}}">
                            @endif
                            @if(session('cart'))
                                @foreach(session('cart') as $id =>$details)
                                    <input class="d-none" name="itemid[]" value="{{$id}}">
                                    <input class="d-none" name="price[]" value="{{$details['price']}}">
                                    <input class="d-none" name="quantity[]" value="{{$details['quantity']}}">
                                @endforeach
                            @endif
                            <div class="row">
                                @if ($curaddress == true)
                                    <div class="col-md-12">
                                        <div class="payment-method">
                                            <div class="payment-accordion">
                                                <div id="accordion">
                                                    <h5><strong>Current address</strong></h5>
                                                    <div class="product-size_box">
                                                        <select id="curaddress" name="curaddress" class="myniceselect nice-select">
                                                            <option value="none"></option>
                                                            @foreach($address as $value)
                                                                <option value="{{$value->id}}">{{$value->address}} {{$value->district}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-12">
                                    <div class="country-select clearfix">
                                        <label>Country <span class="required">*</span></label>
                                        <select name="country" class="myniceselect nice-select wide">
                                            <option data-display="Bangladesh">Bangladesh</option>
                                            <option value="uk">London</option>
                                            <option value="rou">Romania</option>
                                            <option value="fr">French</option>
                                            <option value="de">Germany</option>
                                            <option value="aus">Australia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required">*</span></label>
                                        <input name="firstname" placeholder="" type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input name="lastname" placeholder="" type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Company Name</label>
                                        <input name="company" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address <span class="required">*</span></label>
                                        <input name="address" placeholder="Street address" type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <input name="apartment" placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input name="town" type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Province <span class="required">*</span></label>
                                        <input name="province" type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>State / County <span class="required">*</span></label>
                                        <input name="state" placeholder="" type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input name="postcode" placeholder="" type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input name="email" placeholder="" type="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Phone <span class="required">*</span></label>
                                        <input name="phone" type="text" required>
                                    </div>
                                </div>
                                @if (! Auth::check())
                                    <div class="col-md-12">
                                        <div class="checkout-form-list create-acc">
                                            <input id="cbox" type="checkbox">
                                            <label>Create an account?</label>
                                        </div>
                                        <div id="cbox-info" class="checkout-form-list create-account">
                                            <p>Create an account by entering the information below. If you are a returning
                                                customer please login at the top of the page.</p>
                                            <label>Account password <span class="required">*</span></label>
                                            <input placeholder="password" type="password">
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-6">
                                    <div class="payment-method mb-5">
                                        <div class="payment-accordion">
                                            <div id="accordion">
                                                <h5><strong>Payment</strong></h5>
                                                <div class="product-size_box">
                                                    <select name="payment" class="myniceselect nice-select">
                                                        @foreach($paytypes as $value)
                                                            <option value="{{$value->id}}">{{$value->payment}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="payment-method mb-5">
                                        <div class="payment-accordion">
                                            <div id="accordion">
                                                <h5><strong>Shipping</strong></h5>
                                                <div class="product-size_box">
                                                    <select name="shipping" class="myniceselect nice-select">
                                                        @foreach($shippings as $value)
                                                            <option value="{{$value->id}}">{{$value->name}} ${{$value->cost}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="order-button-payment">
                                <input value="Place order" type="submit">
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="cart-product-name">Product</th>
                                    <th class="cart-product-total">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $total = 0 ?>
                                @if(session('cart'))
                                    @foreach(session('cart') as $id =>$details)
                                        <?php $total += $details['price'] * $details['quantity'] ?>
                                        <tr class="cart_item">
                                            <td class="cart-product-name"> {{$details['name']}}<strong class="product-quantity">
                                                    × {{$details['quantity']}}</strong></td>
                                            <td class="cart-product-total"><span class="amount">${{ $details['price'] * $details['quantity'] }}</span></td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                                <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Discount</th>
                                    <td><span class="amount">@if ($codedata == null) 0 @else {{$codedata->percent}} @endif%</span></td>
                                </tr>
                                @if ($codedata != null)
                                    <?php
                                    $discount = $total*($codedata->percent/100);
                                    $total = $total-$discount;
                                    ?>
                                @endif
                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td><strong><span class="amount">£{{$total}}</span></strong></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Torress's Checkout Area End Here -->



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

@section('scripts')
    <script>
        $('#curaddress').change(function() {
            if ($(this).val() != "none") {
                $(".checkout-form-list").prop('hidden', true);
                $(".country-select").prop('hidden', true);
                $("input").prop('required',false);
            }
            else{
                $(".checkout-form-list").prop('hidden', false);
                $(".country-select").prop('hidden', false);
                $("input").prop('required',true);
            }
        });
    </script>
@stop

