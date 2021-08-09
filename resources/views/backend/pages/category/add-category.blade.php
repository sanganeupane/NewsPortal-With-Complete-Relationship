
@extends('backend.master.master')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Add User
            </h1>

        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                @include('backend.layouts.message')


                                <form action="{{route('add-category')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Category Name</label>
                                        <a style="color:red;">{{$errors->first('cat_name')}}</a>
                                        <input type="text" name="cat_name" class="form-control" placeholder="cat_name" value="{{old('cat_name')}}"  id="cat_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <a style="color:red;">{{$errors->first('slug')}}</a>
                                        <input type="text" name="slug" class="form-control" placeholder="Enter slug" value="{{old('slug')}}"  id="slug">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">description</label>
                                        <a style="color:red;">{{$errors->first('description')}}</a>
                                        <input type="text" name="description" class="form-control" placeholder="description" value="{{old('description')}}"  id="description">
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-danger">Add-Category</button>
                                    </div>




                                </form>


                            </div><!-- /.col -->

                        </div><!-- /.col -->
                    </div><!-- ./box-body -->

                </div><!-- /.box -->
            </div>

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection
