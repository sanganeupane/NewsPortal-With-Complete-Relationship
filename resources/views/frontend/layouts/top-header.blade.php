@section('top-header')

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
    <header id="header">
        <section id="navArea">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">News Portal</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav main_nav">
                        <li class="active"><a href="{{route('index')}}"><span class="fa fa-home desktop-home"></span><span
                                    class="mobile-show">Home</span></a></li>

                        @foreach($categoryData as $category)
                            <li class="dropdown">
                                <a href="{{route('category').'/'.$category->id}}">

                                    {{$category->cat_name}}
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    @foreach($category->catId as $subCat)
                                        <li>
                                            <a href="{{route('subcategory').'/'.$subCat->id}}">
                                                {{$subCat->sub_cat_name}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
        </section>
    </header>
    <section id="newsSection">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="latest_newsarea"><span>Latest News</span>
                    <ul id="ticker01" class="news_sticker">




                        @foreach($postData as $post)

                            <li><a href="{{route('post').'/'.$post->id}}"><img src="{{url('uploads/post/'.$post->image)}}" alt="">{{$post->title}}</a></li>


                        @endforeach





                    </ul>

                    <div class="social_area">
                        <ul class="social_nav">
                            <li class="facebook"><a href="#"></a></li>
                            <li class="twitter"><a href="#"></a></li>
                            <li class="youtube"><a href="#"></a></li>
                            <li class="mail"><a href="#"></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
