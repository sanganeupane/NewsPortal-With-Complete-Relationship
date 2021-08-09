@extends('backend.master.master')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Add Post
            </h1>

        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                @include('backend.layouts.message')


                                <form action="#" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Title</label>
                                        <a style="color:red;">{{$errors->first('title')}}</a>
                                        <input type="text" name="title" class="form-control" placeholder="title"
                                               value="{{old('title')}}" id="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <a style="color:red;">{{$errors->first('description')}}</a>
                                        <input type="text" name="description" class="form-control"
                                               placeholder="Enter description" value="{{old('description')}}"
                                               id="username">
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <a style="color:red;">{{$errors->first('image')}}</a>
                                        <input type="file" name="image" class="form-control" placeholder="Your image"
                                               value="{{old('image')}}" id="image">
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
                                                <option disabled>

                                                    <td>{{$data->cat_name}}</td>

                                                </option>

                                            @endforeach


                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="sub_category">Related Sub Category </label>

                                        <a style="color:red;">{{$errors->first('sub_category')}}</a><br>
                                        <select name="sub_category" id="sub_category">
                                            <option selected disabled>
                                                Choose sub category......
                                            </option>

                                            @foreach($subCatData as $key=>$subCat)

                                                <option>
                                                    <td>{{$subCat->id}}</td>
                                                    {{--                                                    {{$data=$data->cat_name}}--}}

                                                </option>
                                                <option disabled>

                                                    <td>{{$subCat->sub_cat_name}}</td>

                                                </option>

                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary">Add-Post</button>
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
