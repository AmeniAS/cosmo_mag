@extends('layouts.front_main')

@section('content')

    <!--New product area start here-->

    <section class="new-product-area-two section">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 accurate">

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

                                            {{--<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}

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
