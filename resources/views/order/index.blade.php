@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Products</h1>
        </section>

        <!-- Main content -->
        <section class="content">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <a class="btn btn-success" href="#"> Edit order status</a>

                                <div class="box-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <tr>
                                        <th>ID</th>
                                        <th>Status</th>
                                        <th>Order id</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                    @foreach ($order as $orderstatus)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td><span class="label label-success">{{ $orderstatus->name }}</span></td>
                                            <td>{{ $orderstatus->order_id }}</td>
                                            <td>
                                                <a class="btn-sm btn-primary" href="{{ route('orderstatus.edit',$orderstatus->id) }}">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>



        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



@stop

@section('css')

@stop

@section('js')
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
