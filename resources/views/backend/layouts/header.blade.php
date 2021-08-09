@section('header')
    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{$title}}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{url('backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('backend/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('backend/plugins/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('backend/bootstrap/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('backend/bootstrap/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />

</head>
<body class="skin-blue">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo"><b>Admin</b></a>
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{url('backend/bootstrap/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image"/>
                            <span class="hidden-xs">
                                {{Auth::guard('admin')->user()->username}}

                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-primary btn-small ">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{route('admin-logout')}}" class="btn btn-danger btn-small ">Logout</a>
                                </div>

                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
@endsection
