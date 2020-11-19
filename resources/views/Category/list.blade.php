@extends('layouts.admin')
@section('content')
    <div id="page-wrapper">
        <div class="container">
            <div class="row" >
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Category list </h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('add') }}"> Add Product</a>
                    </div>
                </div>
                <br>
                <br>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($cate as $cate)
                        <tr class="odd gradeX" align="center">
                            <td>{{$cate->id}}</td>
                            <td>{{$cate->name}}</td>
                            <td>
                                <img src="torress/assets/images/product/large-size/{{$cate->image}} " style="width: 100px" alt="">
                            </td>

                            <td class="center"><a href="{{Route('delete',$cate->id)}}"> Delete</a></td>
                            <td class="center"> <a href=""><a href="{{Route('edit',$cate->id)}}">Edit</a></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>


@endsection
