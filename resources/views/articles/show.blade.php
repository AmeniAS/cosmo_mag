@extends('layouts.front_main')

@section('content')

    <!--Breadcumb area start here-->

    {{--<section class="breadcumb-area af jarallax" style="background: url(images/breadcumb/1.jpg);">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                    <div class="breadcumb-content">

                        <div class="breadcumb-title">

                            <h1>{{ $article->title }}</h1>

                        </div>

                        --}}{{--<div class="breadcumb-link">

                            <ul>

                                <li><a href="index.html">Home</a></li>

                                <li>-</li>

                                <li><a href="#">Blog Details</a></li>

                            </ul>

                        </div>--}}{{--

                    </div>

                </div>

            </div>

        </div>

    </section>--}}

    <!--Breadcumb area end here-->

    <!--Single blog area start here-->

    <section class="single-blog-area section">

        <div class="container">

            <div class="row">

                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="blog-photo">

                                <figure>

                                    <img src="{{ $article->image }}" alt=""/>

                                    <div class="date">

                                        <span>{{ $article->created_at->format('M') }}</span>

                                        <span>{{ $article->created_at->day }}</span>

                                    </div>

                                </figure>

                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="blog-content">

                                <div class="heading">

                                    <h2>{{ $article->title }}</h2>

                                    <ul class="list-inline">

                                        <li>By <a href="#">{{ $article->blogger->name }}</a></li>

                                        <li>{{ $article->views_count }} vues</li>

                                    </ul>

                                </div>

                                <div class="post-content">

                                    <p>
                                        {{ $article->article_content }}
                                    </p>

                                </div>

                                {{--<div class="social-share">

                                    <h4>Did You Like This Post? Share it :</h4>

                                    <ul class="list-inline">

                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>

                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>

                                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>

                                    </ul>

                                </div>--}}

                            </div>

                        </div>

                        {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="comments">

                                <h3>Recent Comments</h3>

                                <div class="comment-list">

                                    <div class="user-photo">

                                        <img src="images/comment/1.jpg" alt=""/>

                                    </div>

                                    <div class="comment-con">

                                        <h4>Jessy Robot</h4>

                                        <span>February 20, 2016 @ 09:21</span>

                                        <p>We possess within us two minds. So far I have written ere  theronly of theewer conscious mind within us two mind wewDuis ntytonssre conwithin us two minds. </p>

                                        <a href="#"><i class="fa fa-share"></i>Reply</a>

                                    </div>

                                </div>

                                <div class="comment-list">

                                    <div class="user-photo">

                                        <img src="images/comment/2.jpg" alt=""/>

                                    </div>

                                    <div class="comment-con">

                                        <h4>David Fahim</h4>

                                        <span>February 20, 2016 @ 09:21</span>

                                        <p>We possess within us two minds. So far I have written ere  theronly of theewer conscious mind within us two mind wewDuis ntytonssre conwithin us two minds. </p>

                                        <a href="#"><i class="fa fa-share"></i>Reply</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="comment-box">

                                <h3>Leave Comment</h3>

                                <div class="comment-form row">

                                    <form>

                                        <fieldset>

                                            <div class="col-sm-6">

                                                <input type="text" placeholder="Name*"/>

                                            </div>

                                            <div class="col-sm-6">

                                                <input type="email" placeholder="E-mail*"/>

                                            </div>

                                        </fieldset>

                                        <fieldset>

                                            <div class="col-sm-12">

                                                <textarea placeholder="Message*"></textarea>

                                            </div>

                                        </fieldset>

                                        <div class="col-sm-12">

                                            <button>Send Message</button>

                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>--}}

                    </div>

                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                    <div class="sidbar-area">

                        {{--<div class="widget categori">

                            <div class="widget-title">

                                <h3>Categories</h3>

                            </div>

                            <div class="categori-content">

                                <ul>

                                    <li><a href="#"><i class="fa fa-angle-right"></i>LifeStyle</a></li>

                                    <li><a href="#"><i class="fa fa-angle-right"></i>T-Shirt</a></li>

                                    <li><a href="#"><i class="fa fa-angle-right"></i>Dress</a></li>

                                    <li><a href="#"><i class="fa fa-angle-right"></i>Sports Shoes</a></li>

                                    <li><a href="#"><i class="fa fa-angle-right"></i>Sunglass</a></li>

                                    <li><a href="#"><i class="fa fa-angle-right"></i>Travel Bag</a></li>

                                    <li><a href="#"><i class="fa fa-angle-right"></i>Accessories</a></li>

                                </ul>

                            </div>

                        </div>--}}

                        <div class="widget latest-post floatleft">

                            <div class="widget-title">

                                <h3>Articles populaires</h3>

                            </div>

                            {{--{{ dd(App\Article::orderBy('article_content', 'desc')->get()->slice(0, 4)->toArray()) }}--}}

                            @foreach(App\Article::orderBy('article_content', 'desc')->get()->slice(0, 4) as $popular_article)

                                <div class="latest-post-list">

                                    <div class="post-img">

                                        <a href="{{ route('articles.show', $popular_article->id) }}">
                                            <img src="{{ $popular_article->image }}" alt=""/>
                                        </a>

                                    </div>

                                    <div class="post-con">

                                        <a href="{{ route('articles.show', $popular_article->id) }}">{{ $popular_article->title }}</a>

                                        <span>{{ $popular_article->created_at->format('d M Y') }}</span>

                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--Single blog area end here-->

@endsection



{{--
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $article->title }}</div>

                    <div class="panel-body">

                        <img src="{{ $article->image }}" class="img-responsive">

                        <p>
                            {{ $article->article_content }}
                        </p>

                        <span>Nombre de visite : {{ $article->views_count }}</span>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
--}}
