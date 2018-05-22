<!--Header area start here-->

<header>

    <div class="header-top-two">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <div class="top-contact">

                        <p><i class="fa fa-map-marker"></i> 69 house, Tunis Tunisia</p>

                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <div class="heiglight text-right">

                        <ul>

                            @if(!(Auth::guard('blogger')->check() || Auth::guard('web')->check() || Auth::guard('admin')->check() ))
                                <li><a href="{{ route('your-account') }}"><i class="fa fa-user"></i>Votre espace</a></li>
                            @endif

                            @if(Auth::guard('admin')->check())
                                <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-user"></i>Dashboard</a></li>
                            @endif

                            @if(Auth::guard('blogger')->check() || Auth::guard('web')->check())

                                @if(Auth::guard('blogger')->check())
                                    <li><a href="{{ route('bloggers.profile') }}"><i class="fa fa-user"></i>Account</a></li>
                                @else
                                    <li><a href="{{ route('members.profile') }}"><i class="fa fa-user"></i>Account</a></li>
                                @endif
                            @endif

                            {{--<li><a href="#"><i class="fa fa-heart-o"></i>Wishlist</a></li>--}}

                            @if(Auth::guard('web')->check())

                                @include('layouts.front_header_cart')

                            @endif

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="main-header-two">

        <div class="container">

            <div class="row">

                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12">

                    <div class="logo-area">

                        <a href="{{ url('/') }}"><img src="{{ asset('images/logo3.png') }}" alt=""/></a>

                    </div>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-10 col-xs-12">

                    <div class="search-box af">

                        <div class="input-group">

                            <div class="input-group-btn search-panel">

                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">

                                    <span id="search_concept">Produit</span> <span class="caret"></span>

                                </button>

                                <ul class="dropdown-menu" role="menu">

                                    <li><a href="#contains">Produit</a></li>

                                    <li><a href="#its_equal">Marque</a></li>

                                    <li><a href="#greather_than">Article</a></li>

                                    {{--<li><a href="#less_than">Girls </a></li>

                                    <li class="divider"></li>

                                    <li><a href="#all">Kids</a></li>--}}

                                </ul>

                            </div>

                            <input type="hidden" name="search_param" value="all" id="search_param">

                            <input type="text" class="form-control" name="x" placeholder="Search Here ...">

                            <span class="input-group-btn">

                                <button class="btn btn-default search-btn" type="button"><span class="glyphicon glyphicon-search"></span></button>

                            </span>

                        </div>

                    </div>

                    @include('layouts.front_header_menu')

                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 hot-line-area">

                    <div class="hot-line">

                        <i class="fa fa-phone"></i>

                        <p>Hot Line: + 0568 099 99</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="mobile-menu-area">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="mobile-menu">

                        <nav id="dropdown">

                            <ul>

                                <li><a href="#">Démarche GOSMOMAG</a></li>

                                <li><a href="{{ route('categories.index') }}">Gatégories</a></li>

                                <li><a href="{{ route('categories.index') }}">Marques</a></li>

                                <li><a href="#">Blogueurs</a></li>

                                <li><a href="#">Beauté</a></li>

                                <li><a href="#">Événements</a></li>

                                <li>

                                    <a href="#">page</a>

                                    {{--<ul>

                                        <li><a href="#">Home 1</a></li>

                                    </ul>--}}

                                </li>

                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>

                        </nav>

                    </div>

                </div>

            </div>

        </div>

    </div>
</header>

<!--Header area end here-->