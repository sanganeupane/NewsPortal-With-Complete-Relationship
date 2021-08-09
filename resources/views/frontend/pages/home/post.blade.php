

@extends('frontend.master.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
                <tbody>
                <div class="panel-body">

                    <td><h1>{{$post->title}}</h1></td><hr>

                    <td>
                        <img src="{{url('uploads/post/'.$post->image)}}" width="100%" height="100%" alt="">
                    </td>
                    <hr>

                    <td><h4>{{$post->description}}</h4></td><br>
                    <td>Posted By: {{$post->postedBy->name}}</td><br>
{{--                    <td>{{$post->catId->cat_name}}</td>--}}
{{--                    <td>{{$post->subCatId->sub_cat_name}}</td>--}}

                </div>
                </tbody>
{{--            </table>--}}
        </div>
    </div>
</div>
@endsection



