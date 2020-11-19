@extends('layouts.admin')
@section('content')
    <!-- Page Content -->
    {{--<div id="page-wrapper">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row" style="padding-left: 256px;">--}}
                {{--<div class="col-lg-12">--}}
                    {{--<h1 class="page-header">Category--}}
                        {{--<small>Add</small>--}}
                    {{--</h1>--}}
                {{--</div>--}}
                {{--<!-- /.col-lg-12 -->--}}
                {{--<div class="col-lg-7" style="padding-bottom:120px">--}}
                    {{--<form action="{{Route('update')}}" method="POST">--}}
                        {{--@csrf--}}
                        {{--<div class="form-group">--}}
                            {{--<label>Add Category</label>--}}
                            {{--<input class="form-control" name="name" placeholder="category" />--}}
                            {{--<br>--}}
                            {{--<input type="file" name="image" class="form-control">--}}
                        {{--</div>--}}

                        {{--<button type="submit" class="btn btn-default">Add</button>--}}
                        {{--<button type="reset" class="btn btn-default"><a href="{{Route('list')}}">Back</a></button>--}}
                        {{--<form>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- /.row -->--}}
        {{--</div>--}}
        {{--<!-- /.container-fluid -->--}}
    {{--</div>--}}
    <!-- /#page-wrapper -->
    <div style="padding-left: 100px">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New Category</h2>
                </div>

            </div>
        </div>

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

        <form action="{{ route('update') }}" method="POST">
            @csrf

            <div class="form-group">
            <label>Add Category</label>
            <input class="form-control" name="name" placeholder="category" />
            <br>
            <input type="file" name="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-default">Add</button>
    <button type="reset" class="btn btn-default"><a href="{{Route('list')}}">Back</a></button>

        </form>
    </div>
@endsection
