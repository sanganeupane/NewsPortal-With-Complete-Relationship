@extends('backend.master.master')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Edit User
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                @include('backend.layouts.message')

                                <form action="{{route('edit-admin-user-action')}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$userData->id }}">

                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <a style="color:red;">{{$errors->first('name')}}</a>
                                        <input type="text" name="name" class="form-control" placeholder="First name"
                                               value="{{$userData->name}}" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <a style="color:red;">{{$errors->first('username')}}</a>
                                        <input type="text" name="username" class="form-control"
                                               placeholder="Enter username" value="{{$userData->username}}"
                                               id="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <a style="color:red;">{{$errors->first('email')}}</a>
                                        <input type="text" name="email" class="form-control" placeholder="email"
                                               value="{{$userData->email}}" id="email">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary"><i class="fa fa-edit"></i>Edit-user</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
