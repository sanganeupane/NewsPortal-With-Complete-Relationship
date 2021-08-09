
@extends('frontend.master.master')
@section('content')





    <tbody>
@foreach($subcategoryData as $key=>$data)
    <tr><br>
{{--        <td><h3>{{++$key}}</h3></td><br>--}}
        <td><h1>{{$data->title}}</h1></td><br>
        <td>
            <img src="{{url('uploads/post/'.$data->image)}}" width="100%" height="100%" alt="">
        </td><br><br>
{{--        <td><h4>{{$data->description}}</h4></td><br>--}}
        <td>{{$data->catId->cat_name}}</td><br>
{{--        <td>{{$data->subCatId->sub_cat_name}}</td><br>--}}
        <td><h5>Posted By:{{$data->postedBy->name}}</h5></td><br>
    </tr>
@endforeach

</tbody>
@endsection
