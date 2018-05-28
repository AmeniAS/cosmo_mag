<!--Header area start here-->

<header>

    <div class="header-top-two">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <div class="top-contact">

                        <p><i class="fa fa-map-marker"></i> 2058 Riadh Landalous Ariana - Tunis </p>

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
                                    <li><a href="{{ route('bloggers.profile') }}"><i class="fa fa-user"></i>Votre Compte </a></li>
                                    <li><a href="{{ route('all.logout') }}"><i class="fa fa-lock"></i>Déconnexion </a></li>
                                    @include('layouts.front_header_notifications_blogger')
                                @else
                                    <li><a href="{{ route('members.profile') }}"><i class="fa fa-user"></i>Votre Compte</a></li>
                                    <li><a href="{{ route('all.logout') }}"><i class="fa fa-lock"></i>Déconnexion </a></li>
                                    @include('layouts.front_header_notifications')
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

                                    <li><a class="x_search_type" href="#Produit" id="x_produit">Produit</a></li>

                                    <li><a class="x_search_type" href="#Marque" id="x_marque">Marque</a></li>

                                    <li><a class="x_search_type" href="#Article" id="x_article">Article</a></li>

                                </ul>

                            </div>

                            <input type="hidden" name="search_param" value="all" id="search_param">

                            <input type="text" class="form-control" name="search_key" id="search_key" placeholder="Search Here ...">

                            <span class="input-group-btn">

                                <button class="btn btn-default search-btn" type="button" name="btn_search" id="btn_search"><span class="glyphicon glyphicon-search"></span></button>

                            </span>

                        </div>

                    </div>

                    @include('layouts.front_header_menu')

                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 hot-line-area">

                    <div class="hot-line">

                        <i class="fa fa-phone"></i>

                        <p>Telephone: 71 589 265 </p>

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

                                <li><a href="{{ route('demarche') }}">Démarche GOSMOMAG</a></li>

                                <li><a href="{{ route('categories.index') }}">Gatégories</a></li>

                                <li><a href="{{ route('categories.index') }}">Marques</a></li>

                                <li><a href="#">Blogueurs</a></li>

                                <li><a href="{{ route('beaute') }}">Beauté</a></li>

                                <li><a href="{{ url('/forums') }}">Forum</a></li>

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