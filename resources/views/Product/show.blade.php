@extends('layouts.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Show Product</h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container">
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="ion ion-clipboard"></i>
                        <h3 class="box-title">Product Details</h3>
                        <div class="box-tools pull-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="hidden">{{$id = 0}}</div>
                                        @foreach ($product->image as $imgdata)
                                            @if ($id == 0)
                                                <div class="item active">
                                                    @else
                                                        <div class="item">
                                                            @endif
                                                            <img src="/images/product/{{$imgdata->path}}">
                                                        </div>
                                                        <div class="hidden">{{$id += 1}}</div>
                                                        @endforeach
                                                </div>

                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>Product: <b>{{$product->name}} <span
                                                        class="label label-success">{{$product->category->name}}</span></b>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><span
                                                    class="label label-warning">Create by {{$product->user->email}}</span>
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p><span class="label label-success">Create {{$product->created_at}}</span>
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p><span
                                                    class="label label-warning">Last update {{$product->updated_at}}</span>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="box box-primary">
                                                <div class="box-header">
                                                    Description
                                                </div>
                                                <div class="box-body">
                                                    <div class="desc">
                                                        {{$product->description}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="box box-danger">
                                                <div class="box-header">
                                                    Attribute
                                                </div>
                                                <div class="box-body">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th style="width: 10px">#</th>
                                                            <th>Size</th>
                                                            <th>Color</th>
                                                            <th>Price</th>
                                                            <th>Amount</th>
                                                            <th>Price Sale</th>
                                                        </tr>
                                                        @foreach ($product->attribute as $attdata)
                                                            <tr>
                                                                <td>{{$attdata->id}}</td>
                                                                <td>{{$attdata->size}}</td>
                                                                <td>{{$attdata->color}}</td>
                                                                <td>{{$attdata->price}}</td>
                                                                <td>{{$attdata->amount}}</td>
                                                                <td>{{$attdata->price_sale}}</td>
                                                            </tr>
                                                        @endforeach

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@stop

@section('css')
    <style>
        div .desc {
            width: 500px;
            word-wrap: break-word;
        }
    </style>
@stop

@section('js')
    <script>
        $(document).ready(function () {
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 4000);
        });
    </script>
@stop


