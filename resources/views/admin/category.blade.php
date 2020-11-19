@extends('layouts.admin')
@section('content')
    <div class="content-wrapper" style="min-height: 551px;">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Category</h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Category List -->
                        <div class="box box-primary">
                            <div class="box-header">
                                <i class="ion ion-clipboard"></i>
                                <h3 class="box-title">Categories</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                                <ul class="todo-list">
                                    @foreach ($categories  as $cate)
                                        <li>
                                            <span class="text">{{ ++$i }}:</span>
                                            <!-- category text -->
                                            <span class="text">{{ $cate->name }}</span>
                                            @if ($i == 1)
                                                <small class="label label-danger"> New</small>
                                            @endif

                                            <form action="{{ route('delete',$cate->id) }}" method="POST">
                                                @csrf
                                                <div class="tools">
                                                    <a class="btn btn-danger" href="{{ route('edit',$cate->id) }}"><i
                                                            class="fa fa-edit"></i></a>
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </div>
                                            </form>

                                            <!-- category image -->
                                            <img src="/images/category/{{$cate->image}} " style="width: 100px" alt="">
                                            <!-- General tools such as edit or delete-->

                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            {!! $categories->links() !!}

                        </div>
                        <!-- /.box -->
                    </div>
                    <div class="col-lg-4">
                        <!-- Category List -->
                        <div class="box box-primary">
                            <div class="box-header">
                                <i class="ion ion-clipboard"></i>

                                <h3 class="box-title">Control</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                @if ($category)
                                    <form action="{{ route('edit',$category->id) }}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                   value="{{$category->name}}" placeholder="Category name:">
                                        </div>
                                        <div class="form-group">
                                            <label>Images</label>
                                            <input type="file" name="image">

                                            <p class="help-block">Choose image for category.</p>
                                        </div>
                                        <div class="box-footer clearfix">
                                            <button type="submit" class="pull-right btn btn-danger" id="addCategory"><i
                                                    class="fa fa-plus"></i> Update Category
                                            </button>
                                        </div>
                                    </form>
                                @else
                                    <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                   placeholder="Category name:">
                                        </div>
                                        <div class="form-group">
                                            <label>Images</label>
                                            <input type="file" name="image">

                                            <p class="help-block">Choose image for category.</p>
                                        </div>
                                        <div class="box-footer clearfix">
                                            <button type="submit" class="pull-right btn btn-default" id="addCategory"><i
                                                    class="fa fa-plus"></i> Add Category
                                            </button>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

