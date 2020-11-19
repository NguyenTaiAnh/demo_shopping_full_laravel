@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Edit product</h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
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

                <div class="row">
                    <!-- left column -->
                    <div class="col-4 mx-auto bg-info">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title"><a class="btn btn-primary" href="{{ route('products.index') }}">
                                        Back</a></h3>
                            </div>

                            <!-- /.box-header -->
                            <!-- form start -->
                            <form action="{{ route('products.update',$product->id) }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="box-body">
                                    <div class="form-group col-md-6">
                                        <label>Product name</label>
                                        <input type="text" class="form-control" name="name" value="{{$product->name}}"
                                               required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Category</label>
                                        <select name="cates" class="form-control" title="" data-actions-box="true">
                                            {{--<option--}}
                                                {{--value="@if(!empty($product -> category)){{$product->category->id}} @endif">--}}
                                                {{--@if($product -> category)--}}
                                                    {{--{{$product->category->name}}--}}
                                                {{--@endif--}}
                                            {{--</option>--}}
                                            <option value="{{$product->category->id}}">{{$product->category->name}}</option>

                                            @foreach($category as $value)
                                                <option value="{!!$value['id']!!}">{!!$value['name']!!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="10" name="description"
                                                  required>{{$product->description}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="add_name">Attribute</label>
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dynamic_field">
                                                <div class="hidden">{{$id = 0}}</div>
                                                @foreach ($product->attribute as $attdata)
                                                    <tr id="row{{$id}}">
                                                        <td><input type="text" name="size[]" value="{{$attdata->size}}" class="form-control name_list" /></td>
                                                        <td><input type="text" name="color[]" value="{{$attdata->color}}" class="form-control name_list" /></td>
                                                        <td><input type="number" name="price[]" value="{{$attdata->price}}" class="form-control name_list" /></td>
                                                        <td><input type="number" name="amount[]" value="{{$attdata->amount}}" class="form-control name_list" /></td>
                                                        <td><input type="number" name="price_sale[]" value="{{$attdata->price_sale}}" class="form-control name_list" /></td>
                                                        @if ($id == 0)
                                                            <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                                                        @else
                                                            <td><button type="button" name="remove" id="{{$id}}" class="btn btn-danger btn_remove">X</button></td>
                                                        @endif
                                                    </tr>
                                                    <div class="hidden">{{$id++}}</div>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="box box-solid">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Image</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <div id="carousel-product-image" class="carousel slide"
                                                     data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carousel-product-image" data-slide-to="0"
                                                            class="active"></li>
                                                        <li data-target="#carousel-product-image" data-slide-to="1"
                                                            class=""></li>
                                                        <li data-target="#carousel-product-image" data-slide-to="2"
                                                            class=""></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="hidden">{{$idi = 0}}</div>
                                                        @foreach ($product->image as $imgdata)
                                                            @if ($idi == 0)
                                                                <div class="item active">
                                                                    @else
                                                                        <div class="item">
                                                                            @endif
                                                                            <img
                                                                                src="/images/product/{{$imgdata->path}}">
                                                                        </div>
                                                                        <div class="hidden">{{$idi += 1}}</div>
                                                                        @endforeach
                                                                </div>
                                                                <a class="left carousel-control"
                                                                   href="#carousel-product-image" data-slide="prev">
                                                                    <span class="fa fa-angle-left"></span>
                                                                </a>
                                                                <a class="right carousel-control"
                                                                   href="#carousel-product-image" data-slide="next">
                                                                    <span class="fa fa-angle-right"></span>
                                                                </a>
                                                    </div>
                                                </div>

                                                <!-- /.box-body -->
                                            </div>
                                            <!-- /.box -->
                                        </div>
                                        <!-- /.col -->

                                        <div class="form-group col-lg-12 col-12">
                                            <div class="fileUpload blue-btn btn width100">
                                                <span>Upload your product image</span>
                                                <input type="file" name="image[]" class="uploadlogo" multiple/>
                                            </div>
                                            <p class="help-block">Select product image.</p>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
@stop

@section('css')
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800);

        body {
            font-family: 'Open Sans', sans-serif;
        }

        .blue-btn:hover,
        .blue-btn:active,
        .blue-btn:focus,
        .blue-btn {
            background: transparent;
            border: solid 1px #27a9e0;
            border-radius: 3px;
            color: #27a9e0;
            font-size: 16px;
            margin-bottom: 20px;
            outline: none !important;
            padding: 10px 20px;
        }

        .fileUpload {
            position: relative;
            overflow: hidden;
            height: 43px;
            margin-top: 0;
        }

        .fileUpload input.uploadlogo {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
            width: 100%;
            height: 42px;
        }

        /*Chrome fix*/
        input::-webkit-file-upload-button {
            cursor: pointer !important;
            height: 42px;
            width: 100%;
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
    <script>
        $(document).ready(function ($) {

            // Upload btn on change call function
            $(".uploadlogo").change(function () {
                var filename = readURL(this);
                $(this).parent().children('span').html(filename);
            });

            // Read File and return value
            function readURL(input) {
                var url = input.value;
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (
                    ext == "png" || ext == "jpeg" || ext == "jpg" || ext == "gif" || ext == "pdf"
                )) {
                    var path = $(input).val();
                    var filename = path.replace(/^.*\\/, "");
                    // $('.fileUpload span').html('Uploaded Proof : ' + filename);
                    return "Uploaded file : " + filename;
                } else {
                    $(input).val("");
                    return "Only image/pdf formats are allowed!";
                }
            }

            // Upload btn end

        });
    </script>
    <script>
        $(document).ready(function () {
            var i = 1;
            $('#add').click(function () {
                i++;
                // $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
                $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="size[]" placeholder="Product size" class="form-control name_list" /></td>\<td><input type="text" name="color[]" placeholder="Product color" class="form-control name_list" /></td> <td><input type="text" name="price[]" placeholder="Product price" class="form-control name_list" /></td>\<td><input type="text" name="amount[]" placeholder="Product amount" class="form-control name_list" /></td>\<td><input type="text" name="price_sale[]" placeholder="Product price sale" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
            });
            $(document).on('click', '.btn_remove', function () {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });
        });
    </script>

@stop
