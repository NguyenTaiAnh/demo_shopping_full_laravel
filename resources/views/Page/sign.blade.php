@extends('master')
@section('content')

<!-- Begin Torress's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Shop Related Page</h2>
            <ul>
                <li><a href="{{Route('index')}}">Home</a></li>
                <li class="active">Login & Register</li>
            </ul>
        </div>
    </div>
</div>
<!-- Torress's Breadcrumb Area End Here -->
<!-- Begin Torress's Login Register Area -->
<div class="torress-login-register_area">
    <div class="container">
        <div class="row">
            <div class="align-content-center">
                <form action="#">
                    <div class="login-form">
                        <h4 class="/login">Login</h4>
                        <div class="row">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{route('login')}}" method="POST"></form>
                            @csrf
                            <div class="col-md-12 col-12">
                                <label>Email Address*</label>
                                <input type="email" placeholder="Email Address">
                            </div>
                            <div class="col-12 mb--20">
                                <label>Password</label>
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="col-md-8">
                                <div class="check-box">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Remember me</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="forgotton-password_info">
                                    <a href="#"> Forgotten pasward?</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="torress-login_btn">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Torress's Login Register Area  End Here -->
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
