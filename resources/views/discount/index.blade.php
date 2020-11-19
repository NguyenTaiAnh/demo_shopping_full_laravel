@extends('layouts.admin')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Discounts</h1>
        </section>

        <!-- Main content -->
        <section class="content">


            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <a class="btn btn-success" href="{{route('discount.create')}}"> Create New Discount</a>

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
                                        <th>Code</th>
                                        <th>Percent</th>
                                        <th>Time start</th>
                                        <th>Time End</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                    <tr>
                                    @foreach ($discount as $discount)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $discount->code }}</td>
                                            <td>{{ $discount->percent }}</td>
                                            <td>{{$discount -> time_start}}</td>
                                            <td>{{$discount -> time_end}}</td>
                                            <td>
                                                <form action="{{ route('discount.destroy',$discount->id) }}" method="POST">
                                                @csrf
                                                    <a class="btn btn-primary" href="{{ route('discount.edit',$discount->id) }}">Edit</a>

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
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
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
