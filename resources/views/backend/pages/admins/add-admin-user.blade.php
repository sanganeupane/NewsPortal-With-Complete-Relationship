
@extends('backend.master.master')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Add User
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{route('add-admin-user')}}"><i class="fa fa-plus"></i>Add-user</a></li>
                <li><a href="{{route('show-admin-users')}}"><i class="fa fa-users"></i> Users</a></li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">
                                    @include('backend.layouts.message')


                                    <form action="{{route('add-admin-user')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <a style="color:red;">{{$errors->first('name')}}</a>
                                                <input type="text" name="name" class="form-control" placeholder="First name" value="{{old('name')}}"  id="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <a style="color:red;">{{$errors->first('username')}}</a>
                                                <input type="text" name="username" class="form-control" placeholder="Enter username" value="{{old('username')}}"  id="username">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <a style="color:red;">{{$errors->first('email')}}</a>
                                                <input type="text" name="email" class="form-control" placeholder="email" value="{{old('email')}}"  id="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <a style="color:red;">{{$errors->first('name')}}</a>
                                                <input type="password" name="password" class="form-control" placeholder="enter password" value="{{old('password')}}"  id="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="password_confirmation">Confirm_Password</label>
                                                <a style="color:red;">{{$errors->first('password_confirmation')}}</a>
                                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm your password" value="{{old('password')}}"  id="password_confirmation">
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <a style="color:red;">{{$errors->first('image')}}</a>
                                                <input type="file" name="image" class="form-control" placeholder="Your image" value="{{old('image')}}"  id="image">
                                            </div>
                                            <div class="form-group">
                                               <button class="btn btn-success">Add-user</button>
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
