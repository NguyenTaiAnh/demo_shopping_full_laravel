@extends('master')
@section('content')
<!-- Begin Torress's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Shop Related Page</h2>
            <ul>
                <li><a href="{{Route('index')}}">Home</a></li>
                <li class="active">Cart</li>
            </ul>
        </div>
    </div>
</div>
<!-- Torress's Breadcrumb Area End Here -->
<!-- Begin Torress's Cart Area -->
<div class="torress-cart-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="javascript:void(0)">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="torress-product-remove">remove</th>
                                <th class="torress-product-thumbnail">images</th>
                                <th class="cart-product-name">Product</th>
                                <th class="torress-product-price">Unit Price</th>
                                <th class="torress-product-quantity">Quantity</th>
                                <th class="torress-product-subtotal">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--<tr>--}}
                                {{--<td class="torress-product-remove"><a href="javascript:void(0)"><i class="fa fa-trash"--}}
                                                                                                   {{--title="Remove"></i></a></td>--}}
                                {{--<td class="torress-product-thumbnail"><a href="javascript:void(0)"><img src="torress/assets/images/product/small-size/1.jpg" alt="Torress's Cart Thumbnail"></a></td>--}}
                                {{--<td class="torress-product-name"><a href="javascript:void(0)">Juma rema pola</a></td>--}}
                                {{--<td class="torress-product-price"><span class="amount">$46.80</span></td>--}}
                                {{--<td class="quantity">--}}
                                    {{--<label>Quantity</label>--}}
                                    {{--<div class="cart-plus-minus">--}}
                                        {{--<input class="cart-plus-minus-box" value="1" type="text">--}}
                                        {{--<div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>--}}
                                        {{--<div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                                {{--<td class="product-subtotal"><span class="amount">$46.80</span></td>--}}
                            {{--</tr>--}}
                            <?php $total = 0 ?>
                            @if(session('cart'))
                                @foreach(session('cart') as $id =>$details)

                                    <?php $total += $details['price'] * $details['quantity'] ?>
                                    @csrf
                                    <tr>

                                        <td class="torress-product-remove remove-from-cart" data-id="{{ $id }}"><a  href="javascript:void(0)"><i class="fa fa-trash"
                                                                                                                                                 title="Remove"></i></a></td>
                                        <td class="torress-product-thumbnail"><a href="javascript:void(0)"><img src="/images/product/{{ $details['photo'] }}" width="100px" alt="Torress's Cart Thumbnail"></a></td>
                                        <td class="torress-product-name"><a href="javascript:void(0)">{{ $details['name'] }}</a></td>
                                        <td class="torress-product-price"><span class="amount">{{ $details['price'] * $details['quantity'] }}$</span></td>
                                        <td class="quantity"><span>{{$details['quantity'] }}</span>
                                            {{--<label>Quantity</label>--}}
                                            {{--<div class="cart-plus-minus">--}}
                                            {{--<input class="cart-plus-minus-box" value="1" type="text">--}}
                                            {{--<div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>--}}
                                            {{--<div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>--}}
                                            {{--</div>--}}
                                        </td>
                                        <td class="product-subtotal"><span class="amount">{{ $details['price'] * $details['quantity'] }}$</span></td>
                                    </tr>
                                @endforeach
                            @endif

                            </tbody>
                        </table>
                    </div>
                    {{--<div class="row">--}}
                        {{--<div class="col-12">--}}
                            {{--<div class="coupon-all">--}}
                                {{--<div class="coupon">--}}
                                    {{--<input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">--}}
                                    {{--<input class="button" name="apply_coupon" value="Apply coupon" type="submit">--}}
                                {{--</div>--}}
                                {{--<div class="coupon2">--}}
                                    {{--<input class="button" name="update_cart" value="Update cart" type="submit">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Subtotal <span> {{ $total }}</span></li>
                                    <li>Total <span> {{ $total }}</span></li>
                                </ul>
                                <a href="{{route('checkout')}}">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Torress's Cart Area End Here -->
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

        $(".update-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ url('update-cart') }}',
                method: "patch",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
                success: function (response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>
@endsection
@endsection
