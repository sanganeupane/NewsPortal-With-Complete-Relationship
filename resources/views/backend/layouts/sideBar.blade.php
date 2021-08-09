@section('sideBar')
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{url('uploads/admins/'.Auth::guard('admin')->user()->image)}}" class="img-circle"
                         alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p>{{Auth::guard('admin')->user()->username}}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                    <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i
                        class="fa fa-search"></i></button>
              </span>
                </div>
            </form>
            <ul class="sidebar-menu">
                <li class="header">News Portal </li>
                <li class="active treeview">
                    <a href="{{route('admin')}}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-dashboard"></i>
                    </a>
                    <a href="{{route('add-admin-user')}}">
                        <i class="fa fa-plus"></i> <span>Add-user</span> <i class="fa fa-success"></i>
                    </a>
                    <a href="{{route('show-admin-users')}}">
                        <i class="fa fa-users"></i> <span>Users</span> <i class="fa fa-danger"></i>
                    </a>


                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false">
                        <i class="fa fa-plus"></i> <span>Category</span> <i class="fa fa-danger"></i>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li> <a href="{{route('add-category')}}">Add category</a></li>
                        <li><a href="{{route('show-category')}}">show Category</a></li>

                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false">
                        <i class="fa fa-eye"></i> <span>Sub_Category</span> <i class="fa fa-danger"></i>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{route('add-subcategory')}}">Add Sub_Category</a></li>
                        <li><a href="{{route('show-subcategory')}}">show Sub-Category</a></li>

                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false">
                        <i class="fa fa-folder-open"></i> <span>Post</span> <i class="fa fa-danger"></i>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{route('add-post')}}">Add Post</a></li>
                        <li><a href="{{route('show-post')}}">show Sub-post</a></li>

                    </ul>
                </li>
                <a href="{{route('photography')}}">
                    <i class="fa fa-image"></i> <span>Add-photography</span> <i class="fa fa-success"></i>
                </a>
            </ul>
        </section>
    </aside>

@endsection
