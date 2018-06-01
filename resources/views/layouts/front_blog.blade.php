<!--Blog area start here-->

<section class="blog-area-two">

    <div class="container-fluid">

        <div class="row">

            <div class="blog-two-slider">

                @foreach($latest_articles as $article)
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 accurate">

                        {{--{{ dd($latest_articles) }}--}}

                        <div class="single-blog text-center">

                            <figure>

                                <img src="{{ asset($article->image) }}" alt=""/>

                                <div class="blog-con">

                                    <div class="bg-pos">

                                        <a href="{{ route('articles.show', $article->id) }}"><h3>{{ $article->title }}</h3></a>

                                        <ul class="list-inline">

                                            <li><a href="#">{{ $article->created_at }}</a></li>

                                            <li><a href="#"><i class="fa fa-comment-o"></i><span>03</span></a></li>

                                            <li><a href="#"><i class="fa fa-heart-o"></i><span>33</span></a></li>

                                        </ul>

                                    </div>

                                </div>

                            </figure>

                        </div>

                    </div>
                @endforeach

                {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 accurate">

                    <div class="single-blog text-center">

                        <figure>

                            <img src="{{ asset('front_asset/images/blog/4.jpg') }}" alt=""/>

                            <div class="blog-con">

                                <div class="bg-pos">

                                    <a href="#"><h3>2017 Fashion Strome</h3></a>

                                    <ul class="list-inline">

                                        <li><a href="#">22/05/2017</a></li>

                                        <li><a href="#"><i class="fa fa-comment-o"></i><span>03</span></a></li>

                                        <li><a href="#"><i class="fa fa-heart-o"></i><span>33</span></a></li>

                                    </ul>

                                </div>

                            </div>

                        </figure>

                    </div>

                </div>--}}

                {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 accurate">

                    <div class="single-blog text-center">

                        <figure>

                            <img src="{{ asset('front_asset/images/blog/5.jpg') }}" alt=""/>

                            <div class="blog-con">

                                <div class="bg-pos">

                                    <a href="#"><h3>2017 Fashion Strome</h3></a>

                                    <ul class="list-inline">

                                        <li><a href="#">22/05/2017</a></li>

                                        <li><a href="#"><i class="fa fa-comment-o"></i><span>03</span></a></li>

                                        <li><a href="#"><i class="fa fa-heart-o"></i><span>33</span></a></li>

                                    </ul>

                                </div>

                            </div>

                        </figure>

                    </div>

                </div>--}}

                {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 accurate">

                    <div class="single-blog text-center">

                        <figure>

                            <img src="{{ asset('front_asset/images/blog/6.jpg') }}" alt=""/>

                            <div class="blog-con">

                                <div class="bg-pos">

                                    <a href="#"><h3>2017 Fashion Strome</h3></a>

                                    <ul class="list-inline">

                                        <li><a href="#">22/05/2017</a></li>

                                        <li><a href="#"><i class="fa fa-comment-o"></i><span>03</span></a></li>

                                        <li><a href="#"><i class="fa fa-heart-o"></i><span>33</span></a></li>

                                    </ul>

                                </div>

                            </div>

                        </figure>

                    </div>

                </div>--}}

                {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 accurate">

                    <div class="single-blog text-center">

                        <figure>

                            <img src="{{ asset('front_asset/images/blog/8.jpg') }}" alt=""/>

                            <div class="blog-con">

                                <div class="bg-pos">

                                    <a href="#"><h3>2017 Fashion Strome</h3></a>

                                    <ul class="list-inline">

                                        <li><a href="#">22/05/2017</a></li>

                                        <li><a href="#"><i class="fa fa-comment-o"></i><span>03</span></a></li>

                                        <li><a href="#"><i class="fa fa-heart-o"></i><span>33</span></a></li>

                                    </ul>

                                </div>

                            </div>

                        </figure>

                    </div>

                </div>--}}

                {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 accurate">

                    <div class="single-blog text-center">

                        <figure>

                            <img src="{{ asset('front_asset/images/blog/9.jpg') }}" alt=""/>

                            <div class="blog-con">

                                <div class="bg-pos">

                                    <a href="#"><h3>2017 Fashion Strome</h3></a>

                                    <ul class="list-inline">

                                        <li><a href="#">22/05/2017</a></li>

                                        <li><a href="#"><i class="fa fa-comment-o"></i><span>03</span></a></li>

                                        <li><a href="#"><i class="fa fa-heart-o"></i><span>33</span></a></li>

                                    </ul>

                                </div>

                            </div>

                        </figure>

                    </div>

                </div>--}}

                {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 accurate">

                    <div class="single-blog text-center">

                        <figure>

                            <img src="{{ asset('front_asset/images/blog/7.jpg') }}" alt=""/>

                            <div class="blog-con">

                                <div class="bg-pos">

                                    <a href="#"><h3>2017 Fashion Strome</h3></a>

                                    <ul class="list-inline">

                                        <li><a href="#">22/05/2017</a></li>

                                        <li><a href="#"><i class="fa fa-comment-o"></i><span>03</span></a></li>

                                        <li><a href="#"><i class="fa fa-heart-o"></i><span>33</span></a></li>

                                    </ul>

                                </div>

                            </div>

                        </figure>

                    </div>

                </div>--}}

            </div>

        </div>

    </div>

</section>

<!--Blog area end here-->