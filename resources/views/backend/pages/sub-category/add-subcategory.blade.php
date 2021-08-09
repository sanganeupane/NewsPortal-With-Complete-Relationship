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


                                <form action="{{route('add-subcategory')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="sub_cat_name">Sub Category </label>
                                        <a style="color:red;">{{$errors->first('sub_cat_name')}}</a>
                                        <input type="text" name="sub_cat_name" class="form-control"
                                               placeholder="sub_cat_name" value="{{old('sub_cat_name')}}"
                                               id="sub_cat_name">
                                    </div>

                                    <div class="form-group">
                                        <label for="category">Related Category </label>

                                        <a style="color:red;">{{$errors->first('category')}}</a><br>
                                        <select name="category" id="category">
                                            <option selected disabled>
                                                Choose...
                                            </option>

                                            @foreach($usersData as $key=>$data)

                                                <option>
                                                    <td>{{$data->id}}</td>
{{--                                                    {{$data=$data->cat_name}}--}}

                                                </option>
                                                <option disabled >

                                                    <td>{{$data->cat_name}}</td>

                                                </option>

                                            @endforeach


                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <a style="color:red;">{{$errors->first('slug')}}</a>
                                        <input type="text" name="slug" class="form-control" placeholder="Enter slug"
                                               value="{{old('slug')}}" id="slug">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">description</label>
                                        <a style="color:red;">{{$errors->first('description')}}</a>
                                        <input type="text" name="description" class="form-control"
                                               placeholder="description" value="{{old('description')}}"
                                               id="description">
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
