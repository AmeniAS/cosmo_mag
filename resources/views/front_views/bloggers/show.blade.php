@extends('layouts.front_main')

@section('custom_css')

    <style>
        body {
            font-family: Avenir, sans-serif; margin: 0;
            /*background-color: #121;*/
        }
        div#quad {
            background-color: #000;
            font-size: 0; /*width: 75%;*/
            margin: 0 auto;
            box-shadow: 0 0 12px rgba(0,0,0,0.8);
        }
        div#quad figure {
            margin: 0; width: 50%;
            height: auto; transition: 1s;
            display: inline-block;
            position: relative; overflow: hidden;
        }
        div#quad figure:hover { cursor: pointer; z-index: 4; }
        div#quad figure img { width: 100%; height: auto; }
        div#quad figure:nth-child(1) { transform-origin: top left; }
        div#quad figure:nth-child(2) { transform-origin: top right; }
        div#quad figure:nth-child(3) { transform-origin: bottom left; }
        div#quad figure:nth-child(4) { transform-origin: bottom right; }
        div#quad figure figcaption {
            margin: 0; opacity: 0;
            background: rgba(0,0,0,0.3);
            color: #fff; padding: .3rem;
            font-size: 1.2rem;
            position: absolute;
            bottom: 0; width: 100%;
            transition: 1s 1s opacity;
        }
        .expanded { transform: scale(2); z-index: 5;  }
        div#quad figure.expanded figcaption { opacity: 1; }
        div.full figure:not(.expanded) { pointer-events: none; }
    </style>

@endsection

@section('content')

    <section class="breadcumb-area af jarallax" style="background: url(images/breadcumb/1.jpg);">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                    <div class="breadcumb-content">

                        <img class="img-responsive img-circle" src="{{ asset( $blogger->image) }}" width="200" style="margin: 0 auto;">

                        <div class="breadcumb-title">

                            <h1>{{ $blogger->name }}</h1>

                        </div>

                        <div class="breadcumb-link">

                            <ul>

                                <li><a href="#">{{ $blogger->email }}</a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="support-area-two">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 accurate support-list">

                    <div class="single-support pd-50">

                        <div class="suport-icon mr-r20 mr-t5">

                            {{--<img src="images/icon/5.png" alt=""/>--}}

                        </div>

                        <div class="content-support">

                            <h4>Images</h4>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 accurate support-list">

                    <div class="single-support pd-50">

                        <div class="suport-icon mr-r20 mr-t5">
                        </div>

                        <div class="content-support">

                            <h4>Vidéos</h4>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 accurate support-list">

                    <div class="single-support pd-50">

                        <div class="suport-icon mr-r20 mr-t5">

                        </div>

                        <div class="content-support">

                            <h4>Articles</h4>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="banner-area section">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                    <div class="blog-heading">

                        <h1>Images</h1>

                    </div>

                </div>

            </div>

            <div class="row">
                <div id="quad">

                    @foreach($blogger_images->take(4) as $image)

                        <figure>
                            <img src="{{ asset($image->path) }}" alt="rose-red-wine">
                            <figcaption>{{ $image->title }}</figcaption>
                        </figure>

                    @endforeach

                </div>
            </div>

        </div>

    </section>

    <section class="new-product-area section-two">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                    <div class="blog-heading">

                        <h1>Vidéos</h1>

                    </div>

                </div>

            </div>

            <div class="row">

                @foreach($blogger_videos as $video)

                    <div class="col-md-4">
                        <video width="320" height="240" controls>
                            <source src="{{ asset($video->url) }}" type="video/mp4">

                            Your browser does not support the video tag.
                        </video>
                    </div>

                @endforeach

            </div>

        </div>

    </section>

    <section class="new-product-area section-two">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                    <div class="blog-heading">

                        <h1>Articles</h1>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="blog-slider-three">

                    @foreach($articles as $article)
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="single-blog">

                                <figure>

                                    <img src="{{ asset($article->image) }}" alt=""/>

                                    <div class="date">

                                        <span>{{ $article->created_at->format('M') }}</span>

                                        <span>{{ $article->created_at->day }}</span>

                                    </div>

                                </figure>

                                <article>

                                    <h4>{{ $article->title }}</h4>

                                    <p>{{ \Illuminate\Support\Str::words($article->description, 25) }}</p>

                                    <a href="{{ route('articles.show', $article->id) }}" class="btn3">Read More <i class="fa fa-angle-right"></i></a>

                                </article>

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </section>

@endsection

@section('custom_js')

    <script>

        var quadimages = document.querySelectorAll("#quad figure");
        for(i=0; i<quadimages.length; i++) {
            quadimages[i].addEventListener('click', function(){ this.classList.toggle("expanded"); quad.classList.toggle("full") });
        }

    </script>

@endsection
