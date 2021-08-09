
@extends('backend.master.master')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <a href="{{route('show-admin-users')}}">
                    <button class="btn btn-info">  <i class="fa fa-eye"></i> Users</button>

                </a>
                <a href="{{route('add-admin-user')}}">
                    <button class="btn btn-success">  <i class="fa fa-plus"></i> Add-user</button>
                    <hr>
                </a>
            </h1>




            <ol class="breadcrumb">
                <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{route('add-admin-user')}}"><i class="fa fa-plus"></i>Add-user</a></li>
                <li><a href="{{route('show-admin-users')}}"><i class="fa fa-users"></i> Users</a></li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">
                            <form action="">
                                <div class="row">
                                    <div class="form-group">
                                        @csrf
                                        <input type="text" name="search" class="form-control"
                                               placeholder="Search admin users">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary">Search</button>
                                    </div>

                                </div>
                            </form>

                            @include('backend.layouts.message')

                           <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>User_Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($usersData as $key=>$users)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$users->name}}</td>
                                <td>{{$users->username}}</td>
                                <td>{{$users->email}}</td>
                                <td>
                                    <img src="{{url('uploads/admins/'.$users->image)}}" width="28px" alt="">
                                </td>
                                <td>
                                    <form action="{{route('update-user-type')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="criteria" value="{{$users->id}}">
                                    @if($users->admin_type=='admin')
                                            <button name="admin" class="btn btn-info"><i class="fa fa-user"></i></button>
                                    @else
                                                    <button name="super-admin" class="btn btn-danger"><i class="fa fa-users"></i></button>
                                    @endif
                                    </form>
                                </td>
                                <td>
                                <form action="{{route('update-user-status')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="criteria" value="{{$users->id}}">

                                    @if($users->status==1)
                                <button class="btn-xs btn-success" name="active"><i class="fa fa-check"></i></button>

                                    @else
                                        <button class="btn-xs bnt btn-danger" name="inactive"><i class="fa fa-times"></i></button>

                                    @endif
                                </form>
                                </td>
                                <td>
                                    <a href="{{route('edit-admin-user').'/'.$users->id}}">
                                        <button class="btn-xs btn-danger" name="criteria" ><i class="fa fa-edit"></i>
                                        </button>
                                        </a>
                                    <a href="{{route('delete-admin-user').'/'.$users->id}}">
                                        <button class="btn-xs btn-primary" name="criteria"><i class="fa fa-trash"></i>
                                        </button>

                                    </a>

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                           </table>
                            {{ $usersData->links() }}
                        </div>

                    </div>
                </div>
            </div>

        </section>
    </div>

@endsection
