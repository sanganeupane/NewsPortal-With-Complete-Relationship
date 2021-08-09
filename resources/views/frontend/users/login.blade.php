@extends('frontend.master.master')
@section('login')
    <h1>UserLogin page</h1>



    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Login Users Userpage</h3>
                @include('backend.layouts.message')

                <hr>
                <form action="{{route('login')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="username">Username</label>
                        <a style="color:red;">{{$errors->first('username')}}</a>
                        <input type="text" name="username" class="form-control" placeholder="Username sangaaaa user" value="{{old('username')}}"  id="username">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <a style="color:red;">{{$errors->first('password')}}</a>
                        <input type="password" name="password" class="form-control" placeholder="Password" value="{{old('password')}}"  id="password">
                    </div>
                    <br>
                    <div class ="form-group">
                        <button class="btn btn-danger">Add</button>
                    </div>
                </form>


            </div>
        </div>
    </div>

@endsection
