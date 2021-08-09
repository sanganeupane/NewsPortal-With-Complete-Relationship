@extends('frontend.master.master')
@section('content')

    <section id="sliderSection">

        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">

                @foreach($categoryCatData as $key=>$data)


                    <tr>
                        <hr>
{{--                        <td><h3>{{++$key}}</h3></td>--}}
                        <br>
                        <td>
                            <div class="media-body">
                                <a href="{{route('post').'/'.$data->id}}" class="catg_title"><h1>{{$data->title}}</h1></a>
                            </div>

                        </td>
                        <br>

                        <td>
                            <img src="{{url('uploads/post/'.$data->image)}}" width="100%" height="100%" alt="">
                        </td>
                        <br><br>
{{--                        <td><h4>{{$data->description}}</h4></td>--}}
                        <br>
{{--                        <td>{{$data->catId->cat_name}}</td>--}}
                        <br>
                        <td>Related:{{$data->subCatId->sub_cat_name}}</td>
                        <br>
                        <td><h5>Posted By:{{$data->postedBy->name}}</h5></td>
                        <br>
                    </tr><br>
                @endforeach
            </div>
            <div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="latest_post">
                        <h2><span>Latest post</span></h2>
                        <div class="latest_post_container">
                            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                            <ul class="latest_postnav">


                                <li>
                                    @foreach($postData as $post)
                                        <div class="media">

                                            <a href="#" class="media-left"> <img alt=""
                                                                                 src="{{url('uploads/post/'.$post->image)}}"
                                                                                 width="28px"></a>
                                            <div class="media-body"><a href="{{route('post').'/'.$post->id}}"
                                                                       class="catg_title"> {{$post->title}}</a>
                                            </div>

                                        </div>
                                    @endforeach
                                </li>

                            </ul>
                            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

