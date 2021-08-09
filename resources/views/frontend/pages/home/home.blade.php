@extends('frontend/master/master')
@section('home')

    <section id="sliderSection">

        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">

                <div class="slick_slider">
                    @foreach($postData as $post)
                        <div class="single_iteam">

                            <a href=""> <img
                                    src="{{url('uploads/post/'.$post->image)}}"
                                    alt=""></a>
                            <div class="slider_article">
                                <h2><a class="slider_tittle" href="">
                                        <li><a href="#">
                                                {{$post->title}}
                                            </a>
                                        </li>
                                    </a>
                                </h2>
                                <p>{{$post->description}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
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
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="left_content">

                    <div class="single_post_content">
                        <h2><span>नुवाकोट समाचार</span></h2>
                        <div class="single_post_content_left">
                            <ul class="business_catgnav  wow fadeInDown">
                                <li>
                                    <figure class="bsbig_fig"><a href="#" class="featured_img">
                                            <img
                                                alt="" src="images/featured_img1.jpg"> <span class="overlay"></span>
                                        </a>
                                        <figcaption><a href="#">
                                                @foreach($nuwakoteData as $post)
                                                    {{$post->title}}


                                                @endforeach
                                            </a></figcaption>
                                        <p>


                                            @foreach($nuwakotData as $post)
                                                {{$post->description}}

                                            @endforeach
                                        </p>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                        <div class="single_post_content_right">
                            <ul class="sport_nav">
                                <li>
                                    @foreach($nuwakotData as $post)

                                        <div class="media wow fadeInDown"><a href="#"
                                                                             class="media-left">
                                                <img alt="" src="{{url('uploads/post/'.$post->image)}}"> </a>
                                            <div class="media-body"><a href="#" class="catg_title">
                                                    {{$post->description}}

                                                </a></div>
                                        </div>
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="fashion_technology_area">
                        <div class="fashion">
                            <div class="single_post_content">
                                <h2><span>Sports</span></h2>
                                <ul class="business_catgnav wow fadeInDown">
                                    <li>

                                        @foreach($sportData as $post)

                                            <figure class="bsbig_fig"><a href="#"
                                                                         class="featured_img">
                                                    <img alt="" src="{{url('uploads/post/'.$post->image)}}"> <span
                                                        class="overlay"></span>
                                                </a>
                                                <figcaption><a
                                                        href="#">
                                                        {{$post->title}}
                                                    </a></figcaption>
                                                <p>
                                                    {{$post->description}}
                                                    ...</p>
                                            </figure>
                                        @endforeach
                                    </li>
                                </ul>
                                <ul class="spost_nav">
                                    <li>
                                        @foreach($sportData as $post)
                                            <div class="media wow fadeInDown"><a href="#"
                                                                                 class="media-left"> <img alt=""
                                                                                                          src="{{url('uploads/post/'.$post->image)}}">
                                                </a>
                                                <div class="media-body"><a href="pages/single_page.html"
                                                                           class="catg_title">
                                                        {{$post->description}}
                                                    </a></div>
                                            </div>
                                        @endforeach

                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="technology">
                            <div class="single_post_content">
                                <h2><span>Technology</span></h2>
                                <ul class="business_catgnav">
                                    <li>
                                        @foreach($technologyData as $post)

                                            <figure class="bsbig_fig wow fadeInDown"><a href="#"
                                                                                        class="featured_img">
                                                    <img alt="" src="{{url('uploads/post/'.$post->image)}}"
                                                         height="200px">
                                                    <span class="overlay"></span> </a>
                                                <figcaption><a href="#">{{$post->title}}</a></figcaption>
                                                <p> {{$post->description}} </p>
                                            </figure>
                                        @endforeach
                                    </li>
                                </ul>
                                <ul class="spost_nav">
                                    <li>
                                        @foreach($technologyData as $post)

                                            <div class="media wow fadeInDown"><a href="#"
                                                                                 class="media-left"> <img alt=""
                                                                                                          src="{{url('uploads/post/'.$post->image)}}">
                                                </a>
                                                <div class="media-body"><a href="#" class="catg_title">
                                                        {{$post->description}}</a></div>
                                            </div>
                                        @endforeach
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="single_post_content">
                        <h2><span>Photography</span></h2>
                        <ul class="photograph_nav  wow fadeInDown">
                            @foreach($photographyData as $post)

                            <li>
                                <div class="photo_grid">

                                        <figure class="effect-layla"><a class="fancybox-buttons" data-fancybox-group="button" href="" title="Photography Title 1"> <img src="{{url('uploads/photography/'.$post->image)}}" alt=""/></a></figure>

                                </div>

                            </li>

                            @endforeach
                        </ul>
                    </div>

                    <div class="single_post_content">
                        <h2><span>Games</span></h2>
                        <div class="single_post_content_left">
                            <ul class="business_catgnav  wow fadeInDown">
                                <li>
                                    <figure class="bsbig_fig"><a href="#" class="featured_img">
                                            <img
                                                alt="" src="images/featured_img1.jpg"> <span class="overlay"></span>
                                        </a>
                                        <figcaption><a href="#">
                                                @foreach($nuwakotData as $post)
                                                    {{$post->title}}

                                                @endforeach
                                            </a></figcaption>
                                        <p>
                                            @foreach($nuwakotData as $post)
                                                {{$post->description}}

                                            @endforeach
                                        </p>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                        <div class="single_post_content_right">
                            <ul class="sport_nav">
                                <li>
                                    @foreach($nuwakotData as $post)

                                        <div class="media wow fadeInDown"><a href="#"
                                                                             class="media-left">
                                                <img alt="" src="{{url('uploads/post/'.$post->image)}}"> </a>
                                            <div class="media-body"><a href="#" class="catg_title">
                                                    {{$post->description}}

                                                </a></div>
                                        </div>
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4">
                <aside class="right_content">
                    <div class="single_sidebar">
                        <h2><span>Popular Post</span></h2>
                        <ul class="spost_nav">
                            <li>
                                <div class="media wow fadeInDown"><a href="pages/single_page.html" class="media-left">
                                        <img
                                            alt="" src="images/post_img1.jpg"> </a>
                                    <div class="media-body"><a href="pages/single_page.html" class="catg_title"> Aliquam
                                            malesuada diam eget turpis varius 1</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media wow fadeInDown"><a href="pages/single_page.html" class="media-left">
                                        <img
                                            alt="" src="images/post_img2.jpg"> </a>
                                    <div class="media-body"><a href="pages/single_page.html" class="catg_title"> Aliquam
                                            malesuada diam eget turpis varius 2</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media wow fadeInDown"><a href="pages/single_page.html" class="media-left">
                                        <img
                                            alt="" src="images/post_img1.jpg"> </a>
                                    <div class="media-body"><a href="pages/single_page.html" class="catg_title"> Aliquam
                                            malesuada diam eget turpis varius 3</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="media wow fadeInDown"><a href="pages/single_page.html" class="media-left">
                                        <img
                                            alt="" src="images/post_img2.jpg"> </a>
                                    <div class="media-body"><a href="pages/single_page.html" class="catg_title"> Aliquam
                                            malesuada diam eget turpis varius 4</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="single_sidebar">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab"
                                                                      data-toggle="tab">Category</a></li>
                            <li role="presentation"><a href="#video" aria-controls="profile" role="tab"
                                                       data-toggle="tab">Video</a>
                            </li>
                            <li role="presentation"><a href="#comments" aria-controls="messages" role="tab"
                                                       data-toggle="tab">Comments</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="category">

                                <ul>

                                    @foreach($categoryData as $category)
                                        <li class="cat-item">

                                            <a href="">

                                                {{$category->cat_name}}
                                            </a>

                                        </li>
                                        @endforeach

                                </ul>


                            </div>
                            <div role="tabpanel" class="tab-pane" id="video">
                                <div class="vide_area">
                                    <iframe width="100%" height="250"
                                            src=""
                                            frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="comments">
                                <ul class="spost_nav">
                                    <li>
                                        <div class="media wow fadeInDown"><a href="pages/single_page.html"
                                                                             class="media-left"> <img alt=""
                                                                                                      src="images/post_img1.jpg">
                                            </a>
                                            <div class="media-body"><a href="pages/single_page.html" class="catg_title">
                                                    Aliquam malesuada diam eget turpis varius 1</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"><a href="pages/single_page.html"
                                                                             class="media-left"> <img alt=""
                                                                                                      src="images/post_img2.jpg">
                                            </a>
                                            <div class="media-body"><a href="pages/single_page.html" class="catg_title">
                                                    Aliquam malesuada diam eget turpis varius 2</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"><a href="pages/single_page.html"
                                                                             class="media-left"> <img alt=""
                                                                                                      src="images/post_img1.jpg">
                                            </a>
                                            <div class="media-body"><a href="pages/single_page.html" class="catg_title">
                                                    Aliquam malesuada diam eget turpis varius 3</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media wow fadeInDown"><a href="pages/single_page.html"
                                                                             class="media-left"> <img alt=""
                                                                                                      src="images/post_img2.jpg">
                                            </a>
                                            <div class="media-body"><a href="pages/single_page.html" class="catg_title">
                                                    Aliquam malesuada diam eget turpis varius 4</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="single_sidebar wow fadeInDown">
                        <h2><span>Sponsor</span></h2>
                        <a class="sideAdd" href="#"> <img src="{{url('frontend/assets/css/images/123.jpg')}}" alt=""></a>
                    </div>


                    <div class="single_sidebar wow fadeInDown">
                        <h2><span>Category Archive</span></h2>
                        <select class="catgArchive">
                            <option disabled selected >Select Category</option>
                            @foreach($categoryData as $category)
                                <li class="cat-item">
                                    <option >
                                        <a href="">

                                            {{$category->cat_name}}
                                        </a>
                                    </option>
                                </li>
                            @endforeach
                        </select>
                    </div>

                    <div class="single_sidebar wow fadeInDown">
                        <h2><span>Links</span></h2>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Rss Feed</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Life &amp; Style</a></li>
                        </ul>
                    </div>

                </aside>
            </div>
        </div>
    </section>


@endsection

