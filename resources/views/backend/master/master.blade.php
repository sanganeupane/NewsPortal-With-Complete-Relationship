@include('backend\layouts\header')
@include('backend.layouts.sideBar')
@include('backend\layouts\footer')



@yield('header')
@yield('sideBar')
@yield('content')
{{--@yield('add-admin-user')--}}
{{--@yield('show-admin-users')--}}

{{--@yield('about')--}}
{{--@yield('contact')--}}
@yield('footer')
