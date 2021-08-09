
@extends('backend.master.master')
@section('content')

    <div class="content-wrapper">
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
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Posted By</th>

                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($usersData as $key=>$data)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$data->cat_name}}</td>
                                        <td>{{$data->slug}}</td>
                                        <td>{{$data->description}}</td>
                                        <td>{{$data->status}}</td>
                                        <td>{{$data->postedBy->name}}</td>

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
