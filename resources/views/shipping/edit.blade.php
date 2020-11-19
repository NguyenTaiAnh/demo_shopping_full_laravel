@extends('layouts.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Edit Discount</h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container">

                <div class="box box-primary">
                    <div class="box-header">
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2>Edit Discount</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{route('shipping.index')}}"> Back</a>
                                </div>
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
                    <div class="box-body">
                        <form action="{{ route('shipping.update',$shipping->id) }}" method="POST">
                            @csrf
                            @method('PUT')


                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" value="{{ $shipping->name }}" class="form-control" placeholder="Code">

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <strong>Cost:</strong>
                                        <input type="text" name="cost" value="{{ $shipping->cost }}" class="form-control" placeholder="Percent">
                                    </div>
                                </div>
                                        <!-- /.input group -->

                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <!-- /.form group -->
                            </div>

                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
