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

                    @foreach($new_products as $new_product)

                    <div class="grid-item new-collection col-lg-4 col-md-4 col-sm-6 col-xs-12">

                        <div class="single-product">

                            <figure>

                                <a href="{{ route('products.show', $new_product->id) }}">
                                    <img class="img-responsive normal" src="{{ asset($new_product->image) }}" style="height: 212px;" height="270px" alt=""/>
                                </a>

                                <a href="{{ route('products.show', $new_product->id) }}">
                                    <img class="img-responsive hover" src="{{ asset($new_product->image) }}" style="height: 212px;" height="270px" alt=""/>
                                </a>

                                <span class="product-position color1">New</span>

                                <ul>

                                    {{--<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}

                                    @if(Auth::guard('blogger')->check() || Auth::guard('web')->check())
                                        @if(Auth::guard($guard_name)->user()->hasVavoriteProduct($new_product->id))
                                            <li><a href="{{ route('products.toggleFavorite', $new_product->id) }}"><i class="fa fa-heart"></i></a></li>
                                        @else
                                            <li><a href="{{ route('products.toggleFavorite', $new_product->id) }}"><i class="fa fa-heart-o"></i></a></li>
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

                                <span class="price">$30</span>

                            </div>

                        </div>

                    </div>

                    @endforeach

                    {{--<div class="grid-item featured col-lg-4 col-md-4 col-sm-6 col-xs-12">

                        <div class="single-product">

                            <figure>

                                <img class="normal" src="{{ asset('front_asset/images/product/18.jpg') }}" alt=""/>

                                <img class="hover" src="{{ asset('front_asset/images/product/18h.jpg') }}" alt=""/>

                                <span class="product-position color1">New</span>

                                <ul>

                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>

                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>

                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>

                                </ul>

                            </figure>

                            <div class="product-content">

                                <h4>NeoArt Jacket</h4>

                                <p>Men Wear</p>

                                <span class="price">$30</span>

                            </div>

                        </div>

                    </div>

                    <div class="grid-item most-popuplar col-lg-4 col-md-4 col-sm-6 col-xs-12">

                        <div class="single-product">

                            <figure>

                                <img class="normal" src="{{ asset('front_asset/images/product/19.jpg') }}" alt=""/>

                                <img class="hover" src="{{ asset('front_asset/images/product/19h.jpg') }}" alt=""/>

                                <span class="product-position color1">New</span>

                                <ul>

                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>

                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>

                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>

                                </ul>

                            </figure>

                            <div class="product-content">

                                <h4>NeoArt Jacket</h4>

                                <p>Men Wear</p>

                                <span class="price">$30</span>

                            </div>

                        </div>

                    </div>

                    <div class="grid-item on-sale col-lg-4 col-md-4 col-sm-6 col-xs-12">

                        <div class="single-product">

                            <figure>

                                <img class="normal" src="{{ asset('front_asset/images/product/20.jpg') }}" alt=""/>

                                <img class="hover" src="{{ asset('front_asset/images/product/20h.jpg') }}" alt=""/>

                                <span class="product-position color1">New</span>

                                <ul>

                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>

                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>

                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>

                                </ul>

                            </figure>

                            <div class="product-content">

                                <h4>NeoArt Jacket</h4>

                                <p>Men Wear</p>

                                <span class="price">$30</span>

                            </div>

                        </div>

                    </div>

                    <div class="grid-item new-collection col-lg-4 col-md-4 col-sm-6 col-xs-12">

                        <div class="single-product">

                            <figure>

                                <img class="normal" src="{{ asset('front_asset/images/product/25.jpg') }}" alt=""/>

                                <img class="hover" src="{{ asset('front_asset/images/product/25h.jpg') }}" alt=""/>

                                <span class="product-position color1">New</span>

                                <ul>

                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>

                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>

                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>

                                </ul>

                            </figure>

                            <div class="product-content">

                                <h4>NeoArt Jacket</h4>

                                <p>Men Wear</p>

                                <span class="price">$30</span>

                            </div>

                        </div>

                    </div>

                    <div class="grid-item new-collection col-lg-4 col-md-4 col-sm-6 col-xs-12">

                        <div class="single-product">

                            <figure>

                                <img class="normal" src="{{ asset('front_asset/images/product/22.jpg') }}" alt=""/>

                                <img class="hover" src="{{ asset('front_asset/images/product/22h.jpg') }}" alt=""/>

                                <span class="product-position color1">New</span>

                                <ul>

                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>

                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>

                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>

                                </ul>

                            </figure>

                            <div class="product-content">

                                <h4>NeoArt Jacket</h4>

                                <p>Men Wear</p>

                                <span class="price">$30</span>

                            </div>

                        </div>

                    </div>--}}

                </div>

            </div>

        </div>

    </div>

</section>

<!--New product area end here-->