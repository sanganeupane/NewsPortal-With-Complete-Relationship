
@extends('backend.master.master')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">

        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">

                            @include('backend.layouts.message')

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Post Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>Posted_by</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($postsData as $key=>$post)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->description}}</td>
                                        <td>
                                            <img src="{{url('uploads/post/'.$post->image)}}" width="28px" alt="">
                                        </td>
                                        <td>{{$post->catId->cat_name}}</td>
                                        <td>{{$post->subCatId->sub_cat_name}}</td>
                                        <td>{{$post->postedBy->name}}</td>


                                        <td>
                                            <a href="#">
                                                <button class="btn-xs btn-danger" name="criteria" ><i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                            <a href="#">
                                                <button class="btn-xs btn-primary" name="criteria"><i class="fa fa-trash"></i>
                                                </button>

                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </section>
    </div>

@endsection
