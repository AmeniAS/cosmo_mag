@extends('layouts.front_main')

@section('content')


    <!--New product area start here-->
    <section class="new-product-area section-two">
        <div class="container">
            <div class="row mr-b30">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="product-heading">
                        <h1>Nouveauté</h1>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 text-right">
                    <ul class="tab-nav" role="tablist">
                        <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab"
                                                                  data-toggle="tab">Tout</a></li>
                        <li role="presentation"><a href="#men" aria-controls="men" role="tab"
                                                   data-toggle="tab">Maquillage</a></li>
                        <li role="presentation"><a href="#women" aria-controls="women" role="tab"
                                                   data-toggle="tab">Soins</a></li>
                        <li role="presentation"><a href="#electronics" aria-controls="electronics" role="tab"
                                                   data-toggle="tab">Coffrets</a></li>
                        <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab"
                                                   data-toggle="tab">Accessories</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="all">
                            <div class="row accurate">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 accurate">
                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 accurate">
                                        <div class="product-single">
                                            @include('front_views.partials.single_product', ['single_product' => $products[0]])
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 accurate">
                                        <div class="product-single">
                                            @include('front_views.partials.single_product', ['single_product' => $products[1]])
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 accurate">
                                    <div class="product-banner-slider">
                                        <div class="single-banner">
                                            <div class="product-img">
                                                <img src="{{ $products[2]->image }}" alt=""/>
                                            </div>
                                            <div class="product-banner-con">
                                                <h1>{{ $products[2]->name }}</h1>
                                                <p>{{ $products[2]->brand->name }}</p>
                                                <a class="btn1" href="#">Read MOre</a>
                                            </div>

                                        </div>
                                        <div class="single-banner">
                                            <div class="product-img">
                                                <img src="{{ $products[3]->image }}" alt=""/>
                                            </div>
                                            <div class="product-banner-con">
                                                <h1>{{ $products[3]->name }}</h1>
                                                <p>{{ $products[3]->brand->name }}</p>
                                                <a class="btn1" href="#">Read MOre</a>
                                            </div>

                                        </div>
                                        <div class="single-banner">
                                            <div class="product-img">
                                                <img src="{{ $products[4]->image }}" alt=""/>
                                            </div>
                                            <div class="product-banner-con">
                                                <h1>{{ $products[4]->name }}</h1>
                                                <p>{{ $products[4]->brand->name }}</p>
                                                <a class="btn1" href="#">Read MOre</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 accurate">
                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 accurate">
                                        <div class="product-single">
                                            @include('front_views.partials.single_product', ['single_product' => $products[5]])
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 accurate">
                                        <div class="product-single">
                                            @include('front_views.partials.single_product', ['single_product' => $products[6]])
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row accurate">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 accurate">
                                    <div class="product-single">
                                        @include('front_views.partials.single_product', ['single_product' => $products[7]])
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 accurate">
                                    <div class="product-single">
                                        @include('front_views.partials.single_product', ['single_product' => $products[8]])
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 accurate">
                                    <div class="product-single">
                                        @include('front_views.partials.single_product', ['single_product' => $products[9]])
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 accurate">
                                    <div class="product-single">
                                        @include('front_views.partials.single_product', ['single_product' => $products[10]])
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="men">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 accurate">
                                <div class="product-single">
                                    @include('front_views.partials.single_product', ['single_product' => $products[11]])
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="women">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 accurate">
                                <div class="product-single">
                                    @include('front_views.partials.single_product', ['single_product' => $products[12]])
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="electronics">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 accurate">
                                <div class="product-single">
                                    @include('front_views.partials.single_product', ['single_product' => $products[13]])
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="accessories">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 accurate">
                                <div class="product-single">
                                    @include('front_views.partials.single_product', ['single_product' => $products[14]])
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 accurate">
                                <div class="product-single">
                                    @include('front_views.partials.single_product', ['single_product' => $products[15]])
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 accurate">
                                <div class="product-single">
                                    @include('front_views.partials.single_product', ['single_product' => $products[16]])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--New product area end here-->

    <div style="width: 300px; margin: 0 auto">
        {{ $products->links('layouts.pagination_tpl') }}
    </div>

@endsection


{{--
@extends('layouts.front_main')

@section('content')

<!--New product area start here-->

<section class="new-product-area-two section">

    <div class="container">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="heading-product">

                            <h1>What’s New In</h1>

                            <p>2017 Collection</p>

                        </div>

                    </div>

                    <div class="col-md-12 col-sm-6 col-xs-12">

                        <div class="filter product-menu">

                            <ul>

                                <li class="button is-checked" data-filter="*">All</li>

                                <li class="button" data-filter=".new-collection">New Collection</li>

                                <li class="button" data-filter=".featured">Featured</li>

                                <li class="button" data-filter=".most-popuplar">Most Popuplar</li>

                                <li class="button" data-filter=".on-sale">On Sale</li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-md-12 col-sm-6 col-xs-12">

                        <div class="ads-banner">

                            <figure>

                                <img src="{{ asset('front_asset/images/ads/1.jpg') }}" alt=""/>

                                <div class="ads-content af">

                                    <h2>New Bello</h2>

                                    <p>Travel Bag</p>

                                </div>

                                <div class="price-box"><p>only</p><strong>$69</strong></div>

                            </figure>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 accurate">

                <div class="grid accurate row">

                    @foreach($products as $new_product)

                        <div class="grid-item new-collection col-lg-4 col-md-4 col-sm-6 col-xs-12">

                            <div class="single-product">

                                <figure>

                                    <a href="{{ route('products.show', $new_product->id) }}">
                                        <img class="img-responsive normal" src="{{ asset('storage/' . $new_product->image) }}" style="height: 212px;" height="270px" alt=""/>
                                    </a>

                                    <a href="{{ route('products.show', $new_product->id) }}">
                                        <img class="img-responsive hover" src="{{ asset('storage/' . $new_product->image) }}" style="height: 212px;" height="270px" alt=""/>
                                    </a>

                                    <span class="product-position color1">New</span>

                                    <ul>

                                        --}}
{{--<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}{{--


                                        @if(Auth::guard('blogger')->check() || Auth::guard('web')->check())

                                            @if(Auth::guard('blogger')->check())

                                                @if(Auth::guard('blogger')->user()->hasVavoriteProduct($new_product->id))
                                                    <li><a href="{{ route('products.toggleFavorite', $new_product->id) }}"><i class="fa fa-heart"></i></a></li>
                                                @else
                                                    <li><a href="{{ route('products.toggleFavorite', $new_product->id) }}"><i class="fa fa-heart-o"></i></a></li>
                                                @endif

                                            @else

                                                @if(Auth::user()->hasVavoriteProduct($new_product->id))
                                                    <li><a href="{{ route('products.toggleFavorite', $new_product->id) }}"><i class="fa fa-heart"></i></a></li>
                                                @else
                                                    <li><a href="{{ route('products.toggleFavorite', $new_product->id) }}"><i class="fa fa-heart-o"></i></a></li>
                                                @endif

                                            @endif

                                        @else

                                            <li><a href="{{ route('products.toggleFavorite', $new_product->id) }}"><i class="fa fa-heart-o"></i></a></li>

                                        @endif

                                        <li><a href="{{ route('products.show', $new_product->id) }}"><i class="fa fa-eye"></i></a></li>

                                    </ul>

                                </figure>

                                <div class="product-content">

                                    <h4>
                                        <a href="{{ route('products.show', $new_product->id) }}">
                                            {{ $new_product->name }}
                                        </a>
                                    </h4>

                                    <p>{{ $new_product->id }}</p>

                                    <span class="price">{{ $new_product->price }} Dt</span>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

            <div style="width: 300px; margin: 0 auto">
                {{ $products->links('layouts.pagination_tpl') }}
            </div>

        </div>

    </div>

</section>

<!--New product area end here-->

@endsection
--}}
