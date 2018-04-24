<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('front_assets/assets/img/kit/free/apple-icon.png') }}">
    <link rel="icon" href="{{ asset('front_assets/assets/img/kit/free/favicon.png') }}">
    <title>
        CosmoMag
    </title>

    {{--<link href="{{ asset('css/bs.css') }}" rel="stylesheet" />--}}

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{ asset('front_assets/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front_assets/assets/css/material-kit.css') }}" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('front_assets/assets/css/demo.css') }}" rel="stylesheet" />


    {{--

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('front_assets/assets/css/material-kit.css') }}?v=2.0.2">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('front_assets/assets/assets-for-demo/demo.css') }}" rel="stylesheet" />--}}
    <!-- iframe removal -->

    <style>

        /*.panel.panel--styled {
            background: #F4F2F3;
        }
        .panelTop {
            padding: 30px;
        }

        .panelBottom {
            border-top: 1px solid #e7e7e7;
            padding-top: 20px;
        }
        .btn-add-to-cart {
            background: #FD5A5B;
            color: #fff;
        }
        .btn.btn-add-to-cart.focus, .btn.btn-add-to-cart:focus, .btn.btn-add-to-cart:hover  {
            color: #fff;
            background: #FD7172;
            outline: none;
        }
        .btn-add-to-cart:active {
            background: #F9494B;
            outline: none;
        }


        span.itemPrice {
            font-size: 24px;
            color: #FA5B58;
        }


        !*----------------------
        ##star Rating Styles
        ----------------------*!
        .stars {
            padding-top: 10px;
            width: 100%;
            display: inline-block;
        }
        span.glyphicon {
            padding: 5px;
        }
        .glyphicon-star-empty {
            color: #9d9d9d;
        }
        .glyphicon-star-empty, .glyphicon-star {
            font-size: 18px;
        }
        .glyphicon-star {
            color: #FD4;
            transition: all .25s;
        }
        .glyphicon-star:hover {
            transform: rotate(-15deg) scale(1.3);
        }
*/


    </style>

    @yield('custom_css')
</head>

<body class="index-page">
{{--<nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="front_index.html">Cosmo Mag </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ">
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">apps</i> Components
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="#" class="dropdown-item">
                            <i class="material-icons">layers</i> All Components
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="material-icons">content_paste</i> Documentation
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                        <i class="material-icons">cloud_download</i> Download
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Like us on Facebook">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>--}}

<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="http://www.creative-tim.com">
                <div class="logo-container">
                    <div class="logo">
                        <img src="{{ asset('front_assets/assets/img/logo.png') }}" alt="Creative Tim Logo" rel="tooltip" title="<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>" data-placement="bottom" data-html="true">
                    </div>
                    <div class="brand">
                        Creative Tim
                    </div>


                </div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-index">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="components-documentation.html" target="_blank">
                        <i class="material-icons">dashboard</i> Components
                    </a>
                </li>
                <li>
                    <a href="http://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-freebie" target="_blank">
                        <i class="material-icons">unarchive</i> Upgrade to PRO
                    </a>
                </li>
                <li>
                    <a rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->




<div class="page-header header-filter" data-parallax="true" style=" background-image: {{ asset('front_assets/assets/img/kit/profile_city.jpg') }}; ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Cosmo Mag.</h1>
                <h4>Une description à propos du site.</h4>
                <br>
                {{--<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
                    <i class="fa fa-play"></i> Watch video
                </a>--}}
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="container">

        @yield('content')

        <div class="section text-center">
            <div class="row">

                <div class="col-md-6">

                    <h1>blogueuses</h1>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="team-player">
                                <div class="card card-plain">
                                    <div class="col-md-6  mr-auto">
                                        <img src="{{ asset('front_assets/assets/img/kit/faces/avatar.jpg') }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                                    </div>
                                    <h4 class="card-title">Gigi Hadid
                                        <br>
                                        <small class="card-description text-muted">Model</small>
                                    </h4>
                                    <div class="card-body">
                                        <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                    </div>
                                    <div class="card-footer justify-content-center">
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="team-player">
                                <div class="card card-plain">
                                    <div class="col-md-6  mr-auto">
                                        <img src="{{ asset('front_assets/assets/img/kit/faces/avatar.jpg') }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                                    </div>
                                    <h4 class="card-title">Gigi Hadid
                                        <br>
                                        <small class="card-description text-muted">Model</small>
                                    </h4>
                                    <div class="card-body">
                                        <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                    </div>
                                    <div class="card-footer justify-content-center">
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="team-player">
                                <div class="card card-plain">
                                    <div class="col-md-6  mr-auto">
                                        <img src="{{ asset('front_assets/assets/img/kit/faces/avatar.jpg') }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                                    </div>
                                    <h4 class="card-title">Gigi Hadid
                                        <br>
                                        <small class="card-description text-muted">Model</small>
                                    </h4>
                                    <div class="card-body">
                                        <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                    </div>
                                    <div class="card-footer justify-content-center">
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{--<div class="col-sm-3 ">
                            <h4>Circle Image</h4>
                            <img src="{{ asset('front_assets/assets/img/kit/faces/avatar.jpg') }}" alt="Circle Image" class="rounded-circle img-fluid">
                        </div>

                        <div class="col-sm-3 ">
                            <h4>Circle Image</h4>
                            <img src="{{ asset('front_assets/assets/img/kit/faces/avatar.jpg') }}" alt="Circle Image" class="rounded-circle img-fluid">
                        </div>

                        <div class="col-sm-3 ">
                            <h4>Circle Image</h4>
                            <img src="{{ asset('front_assets/assets/img/kit/faces/avatar.jpg') }}" alt="Circle Image" class="rounded-circle img-fluid">
                        </div>

                        <div class="col-sm-3 ">
                            <h4>Circle Image</h4>
                            <img src="{{ asset('front_assets/assets/img/kit/faces/avatar.jpg') }}" alt="Circle Image" class="rounded-circle img-fluid">
                        </div>

                        <div class="col-sm-3 ">
                            <h4>Circle Image</h4>
                            <img src="{{ asset('front_assets/assets/img/kit/faces/avatar.jpg') }}" alt="Circle Image" class="rounded-circle img-fluid">
                        </div>

                        <div class="col-sm-3 ">
                            <h4>Circle Image</h4>
                            <img src="{{ asset('front_assets/assets/img/kit/faces/avatar.jpg') }}" alt="Circle Image" class="rounded-circle img-fluid">
                        </div>--}}

                    </div>

                </div>

                <div class="col-md-6">

                    <h1>actualités</h1>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="card card-nav-tabs">
                                <div class="card-header card-header-primary">
                                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                    {{--<img src="{{ asset('images/welcome_card.jpg') }}" alt="" width="250px" class="img-responsive">--}}
                                    <h4>Titre</h4>
                                </div>
                                <div class="card-body ">
                                    <div class="tab-content text-center">
                                        <div class="tab-pane" id="profile">
                                            <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                                        </div>
                                        <div class="tab-pane" id="messages">
                                            <p> I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                                        </div>
                                        <div class="tab-pane active show" id="settings">
                                            <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="card card-nav-tabs">
                                <div class="card-header card-header-primary">
                                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                    {{--<img src="{{ asset('images/welcome_card.jpg') }}" alt="" width="250px" class="img-responsive">--}}
                                    <h4>Titre</h4>
                                </div>
                                <div class="card-body ">
                                    <div class="tab-content text-center">
                                        <div class="tab-pane" id="profile">
                                            <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                                        </div>
                                        <div class="tab-pane" id="messages">
                                            <p> I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                                        </div>
                                        <div class="tab-pane active show" id="settings">
                                            <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>


                <div class="col-md-12">

                    <h1>Produits</h1>

                    <div class="row">

                        <div class="col-md-4">

                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{ asset('images/welcome_card.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{ asset('images/welcome_card.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{ asset('images/welcome_card.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{ asset('images/welcome_card.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{ asset('images/welcome_card.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{ asset('images/welcome_card.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>

                        </div>



                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card">
                        <div class="item">
                            <img class="card-img-top" src="http://placehold.it/350x350" alt="Card image cap">
                        </div>
                        <div class="border-effect bg-warning"></div>
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <div class="card-footer">
                            <div class="col-md-4 text-center">
                                <button class="btn btn-lg btn-add-to-cart"><span class="glyphicon glyphicon-shopping-cart"></span>   Add to Cart</button>
                            </div>
                            <div class="col-md-4 text-left">
                                <h5>Price <span class="itemPrice">$24.99</span></h5>
                            </div>
                            <div class="col-md-4">
                                <div class="stars">
                                    <div id="stars" class="starrr"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default  panel--styled">
                        <div class="panel-body">
                            <div class="col-md-12 panelTop">
                                <div class="col-md-4">
                                    <img class="img-responsive" src="http://placehold.it/350x350" alt=""/>
                                </div>
                                <div class="col-md-8">
                                    <h2>Product Name</h2>
                                    <p>Lorem ipsum dolor sit amet, altera propriae iudicabit eos ne. Vel ut accusam tacimates, prima oratio ius ea. Et duo alii verterem principes, te quo putent melius fabulas, ei scripta eligendi appareat duo.</p>
                                </div>
                            </div>

                            <div class="col-md-12 panelBottom">
                                <div class="col-md-4 text-center">
                                    <button class="btn btn-lg btn-add-to-cart"><span class="glyphicon glyphicon-shopping-cart"></span>   Add to Cart</button>
                                </div>
                                <div class="col-md-4 text-left">
                                    <h5>Price <span class="itemPrice">$24.99</span></h5>
                                </div>
                                <div class="col-md-4">
                                    <div class="stars">
                                        <div id="stars" class="starrr"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card" style="">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="http://placehold.it/350x350" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Sunglass</h4>
                                <p class="card-text">Some quick example text.</p>
                            </div>
                        </div>
                        <div class="card-footer text-muted mt-2">
                  <span class="float-left">
                    <del class="grey">$99</del>
                    <span class="ml-1">$49</span>
                  </span>
                            <span class="float-right"><i class="fa fa-heart-o"></i> Like</span>
                        </div>
                    </div>

                </div>

            </div>

        </div>









        <div class="section text-center">
            <div class="row">
                <div class="col-md-8  mr-auto">
                    <h2 class="title">Let&apos;s talk product</h2>
                    <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn&apos;t scroll to get here. Add a button if you want the user to see more.</h5>
                </div>
            </div>
            <div class="features">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-info">
                                <i class="material-icons">chat</i>
                            </div>
                            <h4 class="info-title">Free Chat</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                                <i class="material-icons">verified_user</i>
                            </div>
                            <h4 class="info-title">Verified Users</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="material-icons">fingerprint</i>
                            </div>
                            <h4 class="info-title">Fingerprint</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section text-center">
            <h2 class="title">Here is our team</h2>
            <div class="team">
                <div class="row">
                    <div class="col-md-4">
                        <div class="team-player">
                            <div class="card card-plain">
                                <div class="col-md-6  mr-auto">
                                    <img src="{{ asset('front_assets/assets/img/kit/faces/avatar.jpg') }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                                </div>
                                <h4 class="card-title">Gigi Hadid
                                    <br>
                                    <small class="card-description text-muted">Model</small>
                                </h4>
                                <div class="card-body">
                                    <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                        <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-player">
                            <div class="card card-plain">
                                <div class="col-md-6  mr-auto">
                                    <img src="{{ asset('front_assets/assets/img/kit/faces/christian.jpg') }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                                </div>
                                <h4 class="card-title">Christian Louboutin
                                    <br>
                                    <small class="card-description text-muted">Designer</small>
                                </h4>
                                <div class="card-body">
                                    <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                        <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-player">
                            <div class="card card-plain">
                                <div class="col-md-6  mr-auto">
                                    <img src="{{ asset('front_assets/assets/img/kit/faces/kendall.jpg') }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                                </div>
                                <h4 class="card-title">Kendall Jenner
                                    <br>
                                    <small class="card-description text-muted">Model</small>
                                </h4>
                                <div class="card-body">
                                    <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                        <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-contacts">
            <div class="row">
                <div class="col-md-8  mr-auto">
                    <h2 class="text-center title">Work with us</h2>
                    <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Your Name</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Your Email</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                            <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4  mr-auto text-center">
                                <button class="btn btn-primary btn-raised">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer ">
    <div class="container">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="#">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="#">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="#">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="#">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
        </div>
    </div>
</footer>
<!--   Core JS Files   -->
<script src="{{ asset('front_assets/assets/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('front_assets/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('front_assets/assets/js/bootstrap-material-design.js') }}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
<script src="{{ asset('front_assets/assets/js/plugins/moment.min.js') }}"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{ asset('front_assets/assets/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('front_assets/assets/js/plugins/nouislider.min.js') }}"></script>
<!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="{{ asset('front_assets/assets/js/material-kit.js') }}?v=2.0.2"></script>
<!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
<script src="{{ asset('front_assets/assets/assets-for-demo/js/material-kit-demo.js') }}"></script>

@yield('custom_js')

</body>

</html>