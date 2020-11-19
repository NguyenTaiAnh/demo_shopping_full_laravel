@extends('layouts.admin')
@section('content')
    <div class="container">

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
        <div class="box box-primary">
            <div class="box-header">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Edit orderstatus</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('orderstatus.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <form action="{{ route('orderstatus.update',$order->id) }}" method="POST">
                    @csrf
                    @method('PUT')


                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Status:</strong>
                                <input type="text" name="name"  class="form-control" value="{{$order->name}}">
                            </div>
                        </div>
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
@stop

@section('css')

@stop

@section('js')

    <!-- Page script -->
    <script>
        $( document ).ready(function() {
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 4000);
        });
    </script>

@stop


