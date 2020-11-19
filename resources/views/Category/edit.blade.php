@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    {{--<div id="page-wrapper">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row" style="padding-left: 150px;">--}}
                {{--<div class="col-lg-12">--}}
                    {{--<h1 class="page-header">Category--}}
                        {{--<small>Edit</small>--}}
                    {{--</h1>--}}
                {{--</div>--}}
                {{--<!-- /.col-lg-12 -->--}}
                {{--<div class="col-lg-7" style="padding-bottom:120px">--}}
                    {{--<form action="category/edit/{{$category->id}}" method="POST">--}}
                        {{--@csrf--}}
                        {{--<div class="form-group">--}}
                            {{--<label>Category Name</label>--}}
                            {{--<input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" />--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label>Category Image</label>--}}
                            {{--<input type="file" name="image" class="form-control">--}}
                        {{--</div>--}}


                        {{--<button type="submit" class="btn btn-default">Category Edit</button>--}}
                        {{--<button type="reset" class="btn btn-default"><a href="{{Route('list')}}">Back</a></button>--}}
                        {{--<form>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- /.row -->--}}
        {{--</div>--}}
        {{--<!-- /.container-fluid -->--}}
    {{--</div>--}}

    <!-- /#page-wrapper -->



    {{--<div style="padding-left: 100px">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-12 margin-tb">--}}
                {{--<div class="pull-left">--}}
                    {{--<h2>Edit Categary</h2>--}}
                {{--</div>--}}
                {{--<div class="pull-right">--}}
                    {{--<a class="btn btn-primary" href="{{ route('list') }}"> Back</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--@if ($errors->any())--}}
            {{--<div class="alert alert-danger">--}}
                {{--<strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
                {{--<ul>--}}
                    {{--@foreach ($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--@endif--}}

        {{--<form action="category/edit/{{$category->id}}" method="POST">--}}
            {{--@csrf--}}
            {{--@method('PUT')--}}

            {{--<div class="row">--}}
                {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
                    {{--<div class="form-group">--}}
                        {{--<strong>Name:</strong>--}}
                        {{--<input type="text" name="name" value="{{$category->name}}" class="form-control" placeholder="Name">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
                    {{--<div class="form-group">--}}
                        {{--<label>Category Image</label>--}}
                        {{--<input type="file" name="image" class="form-control">--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-xs-12 col-sm-12 col-md-12 text-center">--}}
                    {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                {{--</div>--}}

            {{--</div>--}}

        {{--</form>--}}
    {{--</div>--}}


    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row" style="padding-left: 150px">
                <div class="col-lg-12">
                    <h1 class="page-header">Category
                        <small>{{$category->name}}</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors) > 0 )
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $err)
                                {{$err}} <br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <form action="category/edit/{{$category->id}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>NAME</label>
                            <input class="form-control" name="name" value="{{$category->name}}" />
                        </div>
                        <div class="form-group">
                            <label>Category Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-default">Category Edit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection



