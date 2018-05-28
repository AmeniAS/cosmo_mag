@extends('layouts.front_main')

@section('custom_css')

    <style>

        .gallery {
            /*width: 900px;*/
            min-height: 600px;
            margin: auto;
            border-radius: 3px;
            overflow: hidden;
            position: relative;
        }
        .img-c {
            width: 200px;
            height: 200px;
            float: left;
            position: relative;
            overflow: hidden;
        }

        .img-w {
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            cursor: pointer;
            transition: transform ease-in-out 300ms;
        }

        .img-w img {
            display: none;
        }

        .img-c {
            transition: width ease 400ms, height ease 350ms, left cubic-bezier(0.4, 0, 0.2, 1) 420ms, top cubic-bezier(0.4, 0, 0.2, 1) 420ms;
        }

        .img-c:hover .img-w {
            transform: scale(1.08);
            transition: transform cubic-bezier(0.4, 0, 0.2, 1) 450ms;
        }

        .img-c.active {
            width: 100% !important;
            height: 100% !important;
            position: absolute;
            z-index: 2;
        //transform: translateX(-50%);
        }

        .img-c.postactive {
            position: absolute;
            z-index: 2;
            pointer-events: none;
        }

        .img-c.active.positioned {
            left: 0 !important;
            top: 0 !important;
            transition-delay: 50ms;
        }

    </style>

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

    {{--<style>

        .profile-img{
            width:160px;
            height:160px;
            float:left;
            padding:0;
            margin-top:-130px;
            overflow:hidden;
            /*border:3px solid #eee;*/
            margin-left:130px;
            background:#333;
            text-align:center;
            line-height:160px;
            color:#fff !important;
            font-size:2em;
            -webkit-transition:  all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition:  all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out ;

        }


        .site-name{
            color:#fff;
            font-size:2.4em;
            float:left;
            margin-top:-65px !important;
            margin-left:15px;
            font-family: 'Open Sans Condensed', sans-serif, sans-serif;

        }
        .site-description{
            color:#fff;
            font-size:1.3em;
            float:left;
            margin-top:-30px !important;
            margin-left:15px;
        }

        .slider, .carousel{
            max-height:360px;
            overflow:hidden;
        }

        @media (max-width: 768px) {
            .profile-img{
                max-width: 100px;
                max-height:100px;
                float:left;
                margin-top:-65px;
                margin-left:15px;
                -webkit-transition:  all 0.3s ease-in-out;
                -moz-transition: all 0.3s ease-in-out;
                -o-transition:  all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out ;
            }

            .navbar{
                border-radius:0;
                margin-bottom:0;
                border:none;
            }

        }

        @media (max-width: 490px) {
            .site-name{
                color:#fff;
                font-size:1.5em;
                float:left;
                line-height:20px;
                margin-top:-100px !important;
                margin-left:125px;
            }
            .site-description{
                color:#fff;
                font-size:1.3em;
                float:left;
                margin-top:-80px !important;
                margin-left:125px;
            }
        }

    </style>--}}

@endsection

@section('content')

    <section class="breadcumb-area af jarallax" style="background: url(images/breadcumb/1.jpg);">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                    <div class="breadcumb-content">

                        <img class="img-responsive img-circle" src="{{ asset( auth()->guard('blogger')->user()->image) }}" width="200" style="margin: 0 auto;">

                        <div class="breadcumb-title">

                            <h1>{{ auth()->guard('blogger')->user()->name }}</h1>

                        </div>

                        <div class="breadcumb-link">

                            <ul>

                                <li><a href="#">{{ auth()->guard('blogger')->user()->email }}</a></li>

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

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 accurate support-list">

                    <div class="single-support pd-50">

                        <div class="suport-icon mr-r20 mr-t5">

                            {{--<img src="images/icon/5.png" alt=""/>--}}

                        </div>

                        <div class="content-support">

                            <h4><a href="{{ route('media_images.create') }}">Images</a></h4>

                            <p>Ajouter une image</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 accurate support-list">

                    <div class="single-support pd-50">

                        <div class="suport-icon mr-r20 mr-t5">

                            {{--<img src="images/icon/6.png" alt=""/>--}}

                        </div>

                        <div class="content-support">

                            <h4><a href="{{ route('media_videos.create') }}">Videos</a></h4>

                            <p>Créer une video</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 accurate support-list">

                    <div class="single-support pd-50">

                        <div class="suport-icon mr-r20 mr-t5">

                            {{--<img src="images/icon/7.png" alt=""/>--}}

                        </div>

                        <div class="content-support">

                            <h4><a href="{{ route('bloggers.favorite_products') }}">Produits Favoris</a></h4>

                            <p>Liste des Produits</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 accurate support-list">

                    <div class="single-support pd-50">

                        <div class="suport-icon mr-r20 mr-t5">

                            {{--<img src="images/icon/7.png" alt=""/>--}}

                        </div>

                        <div class="content-support">

                            <h4><a href="{{ route('articles.create') }}">Articles</a></h4>

                            <p>Créer un article</p>

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

                        <h1>Images <small><a href="#">Gérer les images</a></small></h1>

                    </div>

                </div>

            </div>

            {{--<div class="row">

                <div class="gallery">

                    @foreach($blogger_images as $image)

                        <div class="img-w">
                            <img src="{{ $image->path }}" alt="" />
                        </div>

                    @endforeach

                </div>

            </div>--}}

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

                        <h1>Video</h1>

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

    <section class="best-product section">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                    <div class="blog-heading">

                        <h1>Produits favoris</h1>

                    </div>

                </div>

            </div>

            <div class="row">

                @foreach(auth()->guard('blogger')->user()->product_favorites->slice(0, 3) as $favorite)

                    <div class="col-md-4">

                        <a href="{{ route('products.show', $favorite->product->id) }}">
                            <img class="img-responsive normal" src="{{ asset($favorite->product->image) }}" style="height: 212px;" height="270px" alt=""/>
                        </a>

                        <a href="{{ route('products.show', $favorite->product->id) }}">
                            <h3>{{ $favorite->product->name }}</h3>
                        </a>

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

                    {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="single-blog">

                            <figure>

                                <img src="{{ asset('front_asset/images/blog/1.jpg') }}" alt=""/>

                                <div class="date">

                                    <span>Jan</span>

                                    <span>22</span>

                                </div>

                            </figure>

                            <article>

                                <h4>Within the construction industry  areamen as their overdrar.</h4>

                                <p>Podcasting operational change to inside of maximise workflows framework.</p>

                                <a href="#" class="btn3">Read More <i class="fa fa-angle-right"></i></a>

                            </article>

                        </div>

                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="single-blog">

                            <figure>

                                <img src="{{ asset('front_asset/images/blog/2.jpg') }}" alt=""/>

                                <div class="date">

                                    <span>Jan</span>

                                    <span>22</span>

                                </div>

                            </figure>

                            <article>

                                <h4>Within the construction industry  areamen as their overdrar.</h4>

                                <p>Podcasting operational change to inside of maximise workflows framework.</p>

                                <a href="#" class="btn3">Read More <i class="fa fa-angle-right"></i></a>

                            </article>

                        </div>

                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="single-blog">

                            <figure>

                                <img src="{{ asset('front_asset/images/blog/3.jpg') }}" alt=""/>

                                <div class="date">

                                    <span>Jan</span>

                                    <span>22</span>

                                </div>

                            </figure>

                            <article>

                                <h4>Within the construction industry  areamen as their overdrar.</h4>

                                <p>Podcasting operational change to inside of maximise workflows framework.</p>

                                <a href="#" class="btn3">Read More <i class="fa fa-angle-right"></i></a>

                            </article>

                        </div>

                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="single-blog">

                            <figure>

                                <img src="{{ asset('front_asset/images/blog/4.jpg') }}" alt=""/>

                                <div class="date">

                                    <span>Jan</span>

                                    <span>22</span>

                                </div>

                            </figure>

                            <article>

                                <h4>Within the construction industry  areamen as their overdrar.</h4>

                                <p>Podcasting operational change to inside of maximise workflows framework.</p>

                                <a href="#" class="btn3">Read More <i class="fa fa-angle-right"></i></a>

                            </article>

                        </div>

                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="single-blog">

                            <figure>

                                <img src="{{ asset('front_asset/images/blog/2.jpg') }}" alt=""/>

                                <div class="date">

                                    <span>Jan</span>

                                    <span>22</span>

                                </div>

                            </figure>

                            <article>

                                <h4>Within the construction industry  areamen as their overdrar.</h4>

                                <p>Podcasting operational change to inside of maximise workflows framework.</p>

                                <a href="#" class="btn3">Read More <i class="fa fa-angle-right"></i></a>

                            </article>

                        </div>

                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="single-blog">

                            <figure>

                                <img src="{{ asset('front_asset/images/blog/3.jpg') }}" alt=""/>

                                <div class="date">

                                    <span>Jan</span>

                                    <span>22</span>

                                </div>

                            </figure>

                            <article>

                                <h4>Within the construction industry  areamen as their overdrar.</h4>

                                <p>Podcasting operational change to inside of maximise workflows framework.</p>

                                <a href="#" class="btn3">Read More <i class="fa fa-angle-right"></i></a>

                            </article>

                        </div>

                    </div>--}}

                </div>

            </div>

        </div>

    </section>

    {{--<div class="row" style="background: url({{ asset('images/transparent.jpg') }}); text-align: center">
        <div class="col-md-offset-4 col-md-4">
            <div class="box1">
                <img src="{{ asset('images/male-user.jpg') }}" class="img-circle img-thumbnail" style="max-width: 200px" />

                <div style="background: white">
                    <h3>HitendraZ</h3>
                    <h4 style="color:#A9ABA6">{ Web Designer }</h4>
                </div>


            </div>
        </div>
    </div>--}}
    {{--<header id="header">

        <div class="slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="http://placehold.it/1200x400/F34336/F34336&text=WORDPRESS THEME DEVELOPER">
                    </div>
                </div>

            </div>
        </div><!--slider-->

        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="profile-img" href="#"><img class="img-responsive img-circle" src="{{ asset('images/male-user.jpg') }}"></a>
                <span class="site-name"><b>Roland</b> Maruntelu</span>
                <span class="site-description">worpress theme developer</span>
            </div>

        </nav>

    </header><!--/#HEADER-->--}}

    {{--<section id=timeline>
        <h1>A Flexbox Timeline</h1>
        <p class="leader">All cards must be the same height and width for space calculations on large screens.</p>
        <div class="demo-card-wrapper">
            <div class="demo-card demo-card--step1">
                <div class="head">
                    <div class="number-box">
                        <span>01</span>
                    </div>
                    <h2><span class="small">Subtitle</span> Technology</h2>
                </div>
                <div class="body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                    <img src="http://placehold.it/1000x500" alt="Graphic">
                </div>
            </div>

            <div class="demo-card demo-card--step2">
                <div class="head">
                    <div class="number-box">
                        <span>02</span>
                    </div>
                    <h2><span class="small">Subtitle</span> Confidence</h2>
                </div>
                <div class="body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                    <img src="http://placehold.it/1000x500" alt="Graphic">
                </div>
            </div>

            <div class="demo-card demo-card--step3">
                <div class="head">
                    <div class="number-box">
                        <span>03</span>
                    </div>
                    <h2><span class="small">Subtitle</span> Adaptation</h2>
                </div>
                <div class="body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                    <img src="http://placehold.it/1000x500" alt="Graphic">
                </div>
            </div>

            <div class="demo-card demo-card--step4">
                <div class="head">
                    <div class="number-box">
                        <span>04</span>
                    </div>
                    <h2><span class="small">Subtitle</span> Consistency</h2>
                </div>
                <div class="body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                    <img src="http://placehold.it/1000x500" alt="Graphic">
                </div>
            </div>

            <div class="demo-card demo-card--step5">
                <div class="head">
                    <div class="number-box">
                        <span>05</span>
                    </div>
                    <h2><span class="small">Subtitle</span> Conversion</h2>
                </div>
                <div class="body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                    <img src="http://placehold.it/1000x500" alt="Graphic">
                </div>
            </div>

        </div>
    </section>--}}

    {{--<div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="row">

                <button class="btn btn-primary col-md-4">Video</button>
                <button class="btn btn-primary col-md-4">Video</button>
                <button class="btn btn-primary col-md-4">Video</button>

            </div>



        </div>

    </div>--}}

@endsection

@section('custom_js')

    <script>

        $(function() {
            $(".img-w").each(function() {
                $(this).wrap("<div class='img-c'></div>")
                let imgSrc = $(this).find("img").attr("src");
                $(this).css('background-image', 'url(' + imgSrc + ')');
            })


            $(".img-c").click(function() {
                let w = $(this).outerWidth()
                let h = $(this).outerHeight()
                let x = $(this).offset().left
                let y = $(this).offset().top


                $(".active").not($(this)).remove()
                let copy = $(this).clone();
                copy.insertAfter($(this)).height(h).width(w).delay(500).addClass("active")
                $(".active").css('top', y - 8);
                $(".active").css('left', x - 8);

                setTimeout(function() {
                    copy.addClass("positioned")
                }, 0)

            })




        })

        $(document).on("click", ".img-c.active", function() {
            let copy = $(this)
            copy.removeClass("positioned active").addClass("postactive")
            setTimeout(function() {
                copy.remove();
            }, 500)
        })

    </script>

    <script>

        var quadimages = document.querySelectorAll("#quad figure");
        for(i=0; i<quadimages.length; i++) {
            quadimages[i].addEventListener('click', function(){ this.classList.toggle("expanded"); quad.classList.toggle("full") });
        }

    </script>

@endsection
