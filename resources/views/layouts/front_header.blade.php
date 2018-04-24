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

                            <li><a href="#"><i class="fa fa-user"></i>Account</a></li>

                            <li><a href="#"><i class="fa fa-heart-o"></i>Wishlist</a></li>

                            @include('layouts.front_header_cart')

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

                        <a href="#"><img src="{{ asset('front_asset/images/logo/logo.png') }}" alt=""/></a>

                    </div>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-10 col-xs-12">

                    <div class="search-box af">

                        <div class="input-group">

                            <div class="input-group-btn search-panel">

                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">

                                    <span id="search_concept">All</span> <span class="caret"></span>

                                </button>

                                <ul class="dropdown-menu" role="menu">

                                    <li><a href="#contains">Men</a></li>

                                    <li><a href="#its_equal">Women</a></li>

                                    <li><a href="#greather_than">Boys</a></li>

                                    <li><a href="#less_than">Girls </a></li>

                                    <li class="divider"></li>

                                    <li><a href="#all">Kids</a></li>

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

                                <li><a href="#">Men</a></li>

                                <li><a href="#">Women</a></li>

                                <li><a href="#">Boys</a></li>

                                <li><a href="#">Girls</a></li>

                                <li><a href="#">Kids</a></li>

                                <li><a href="#">Accessories</a></li>

                                <li>

                                    <a href="#">page</a>

                                    <ul>

                                        <li><a href="#">Home 1</a></li>

                                    </ul>

                                </li>

                                <li><a href="#">Contact</a></li>
                            </ul>

                        </nav>

                    </div>

                </div>

            </div>

        </div>

    </div>
</header>

<!--Header area end here-->