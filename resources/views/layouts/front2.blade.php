<!doctype html>
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

    <style>

        .card.card-signup {
            margin-bottom: 60px;
        }


        #testimonial4{
            overflow: hidden;
            min-height: 375px;
            position: relative;
            background: #9c27b0;
        }
        #testimonial4 .carousel-inner{
            width: 75%;
            margin: auto;
        }
        #testimonial4 .carousel-inner:hover{
            cursor: -moz-grab;
            cursor: -webkit-grab;
        }
        #testimonial4 .carousel-inner:active{
            cursor: -moz-grabbing;
            cursor: -webkit-grabbing;
        }
        #testimonial4 .carousel-inner .item{
            overflow: hidden;
        }

        .testimonial4_indicators .carousel-indicators{
            left: 0;
            margin: 0;
            width: 100%;
            font-size: 0;
            height: 20px;
            bottom: 15px;
            padding: 0 5px;
            cursor: e-resize;
            overflow-x: auto;
            overflow-y: hidden;
            position: absolute;
            text-align: center;
            white-space: nowrap;
        }
        .testimonial4_indicators .carousel-indicators li{
            padding: 0;
            width: 10px;
            height: 10px;
            border: none;
            text-indent: 0;
            margin: 2px 3px;
            cursor: pointer;
            display: inline-block;
            background: #ffffff;
            -webkit-border-radius: 100%;
            border-radius: 100%;
        }
        .testimonial4_indicators .carousel-indicators .active{
            padding: 0;
            width: 10px;
            height: 10px;
            border: none;
            margin: 2px 3px;
            background-color: #000;
            -webkit-border-radius: 100%;
            border-radius: 100%;
        }
        .testimonial4_indicators .carousel-indicators::-webkit-scrollbar{
            height: 3px;
        }
        .testimonial4_indicators .carousel-indicators::-webkit-scrollbar-thumb{
            background: #eeeeee;
            -webkit-border-radius: 0;
            border-radius: 0;
        }

        .testimonial4_control_button .carousel-control{
            top: 175px;
            opacity: 1;
            width: 40px;
            bottom: auto;
            height: 40px;
            font-size: 10px;
            cursor: pointer;
            font-weight: 700;
            overflow: hidden;
            line-height: 38px;
            text-shadow: none;
            text-align: center;
            position: absolute;
            background: transparent;
            border: 2px solid #ffffff;
            text-transform: uppercase;
            -webkit-border-radius: 100%;
            border-radius: 100%;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-transition: all 0.6s cubic-bezier(0.3,1,0,1);
            transition: all 0.6s cubic-bezier(0.3,1,0,1);
        }
        .testimonial4_control_button .carousel-control.left{
            left: 7%;
            right: auto;
        }
        .testimonial4_control_button .carousel-control.right{
            right: 7%;
            left: auto;
        }
        .testimonial4_control_button .carousel-control.left:hover,
        .testimonial4_control_button .carousel-control.right:hover{
            color: #000;
            background: #fff;
            border: 2px solid #fff;
        }

        .testimonial4_header{
            top: 0;
            left: 0;
            bottom: 0;
            width: 550px;
            display: block;
            margin: 30px auto;
            text-align: center;
            position: relative;
        }
        .testimonial4_header h4{
            color: #ffffff;
            font-size: 30px;
            font-weight: 600;
            position: relative;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .testimonial4_slide{
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 70%;
            margin: auto;
            padding: 20px;
            position: relative;
            text-align: center;
        }
        .testimonial4_slide img {
            top: 0;
            left: 0;
            right: 0;
            width: 50px;
            height: 50px;
            margin: auto;
            display: block;
            color: #f2f2f2;
            font-size: 18px;
            line-height: 46px;
            text-align: center;
            position: relative;
        }

        .testimonial4_slide p {
            color: #ffffff;
            font-size: 16px;
            margin: 40px 0 20px 0;
        }

        .testimonial4_slide h4 {
            color: #ffffff;
            font-size: 24px;
            font-weight: bold;
        }


        @media only screen and (max-width: 480px){
            .testimonial4_control_button .carousel-control{
                display: none;
            }
            .testimonial4_header{
                width: 95%;
            }
            .testimonial4_header h4{
                font-size: 20px;
            }
            .testimonial4_slide{
                width: 98%;
                padding: 5px;
            }
        }

        @media (min-width: 481px) and (max-width: 767px){
            .testimonial4_control_button .carousel-control.left{
                left: 2%;
            }
            .testimonial4_control_button .carousel-control.right{
                right: 2%;
            }
            .testimonial4_header{
                width: 95%;
            }
            .testimonial4_slide{
                width: 98%;
                padding: 5px;
            }
        }

        @media (min-width: 768px) and (max-width: 991px){
            .testimonial4_control_button .carousel-control.left{
                left: 5%;
            }
            .testimonial4_control_button .carousel-control.right{
                right: 5%;
            }
        }

        @-webkit-keyframes psBoxShadowEffect_2{
            0% {
                opacity: 0.3;
            }
            40% {
                opacity: 0.5;
                -webkit-box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px #ffffff, 0 0 0 10px rgba(255,255,255,0.5);
            }
            100% {
                -webkit-box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 5px 5px #ffffff, 0 0 0 5px rgba(255,255,255,0.5);
                -webkit-transform: scale(1.5);
                opacity: 0;
            }
        }
        @keyframes psBoxShadowEffect_2{
            0% {
                opacity: 0.3;
            }
            40% {
                opacity: 0.5;
                box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px #ffffff, 0 0 0 10px rgba(255,255,255,0.5);
            }
            100% {
                box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 5px 5px #ffffff, 0 0 0 5px rgba(255,255,255,0.5);
                transform: scale(1.5);
                opacity: 0;
            }
        }

        /*******************************************************/
        .wrapper { top: 0; right: 0; bottom: 0; left: 0; background: url(http://c.boylett.uk/images/wallpapers/002.jpg); background-size: 100% 100% }

        .food
        {
            position: relative;
            width: 620px;
            height: 394px;
            background: #FFF;
            border-radius: 2px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, .5);
        }

        .food > .cover
        {
            position: relative;
            height: 260px;
            background: transparent center no-repeat;
            background-size: 100% auto;
            border-radius: 2px 2px 0 0;
        }

        .food > .cover > label
        {
            position: absolute;
            top: 22px;
            left: -33px;
            height: 33px;
            padding: 0 30px 0 63px;
            line-height: 33px;
            vertical-align: middle;
            font-family: sans-serif;
            font-size: 13px;
            text-transform: uppercase;
            color: #FFF;
            text-shadow: 0 1px 2px #000;
            background: rgba(136, 86, 168, .6);
        }

        .food > .cover > label > i
        {
            position: absolute;
            top: 0;
            left: 0;
        }

        .food > .cover > label > i > svg
        {
            margin: 8px;
        }

        .food > .cover > .download
        {
            display: block;
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 47px;
            height: 47px;
            background: rgba(51, 193, 210, .6);
            border-radius: 100%;
        }

        .food > .cover > .download:hover { background: #33C1D2 }

        .food > .cover > .download > svg
        {
            margin: 12px 10px 0;
        }

        .food > .info
        {
            position: relative;
            height: 134px;
            overflow: hidden;
            border-radius: 0 0 2px 2px;
        }

        .food > .info > .recipe
        {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 134px;
            height: 134px;
            background: #8856A8;
            font-family: sans-serif;
            font-size: 14px;
            color: #FFF;
            text-transform: uppercase;
            text-decoration: none;
            text-align: center;
            border-radius: 0 0 0 2px;
        }

        .food > .info > .recipe:hover { background: #9967B9 }

        .food > .info > .recipe > i
        {
            display: block;
            margin: 38px 0 15px;
        }

        .food > .info > .content
        {
            position: absolute;
            top: 20px;
            right: 20px;
            bottom: 20px;
            left: 154px;
            font-family: sans-serif;
            font-size: 14px;
            color: #888;
        }

        .food > .info > .content strong { font-weight: normal; color: #333 }
        .food > .info > .content .pad-right { padding-right: 20px }
        .food > .info > .content .border-right { border-right: 1px solid #D9D9D9 }
        .food > .info > .content .consumers img, .food > .info > .content .consumers span { display: inline-block; width: 32px; height: 32px; margin: 0 2px 0 0; line-height: 32px; vertical-align: middle; border-radius: 100% }
        .food > .info > .content .consumers span { margin: 0 }

        .food > .info > .content h1
        {
            margin: 0 0 10px;
            font-size: 26px;
            font-weight: normal;
            color: #333;
        }

        .food > .info > .content .stars, .food > .info > .content .stars > em
        {
            display: block;
            width: 99px;
            height: 18px;
            margin: 0 auto 7px;
            text-align: left;
            background: url(http://c.boylett.uk/generic/image_png_00004.png);
        }

        .food > .info > .content .stars > em
        {
            width: 99px;
            height: 18px;
            margin: 0;
            background: url(http://c.boylett.uk/generic/image_png_00004.png);
            background-position: 0 -18px;
        }

        .info {
            max-width: 900px !important;
        }


    </style>

    @yield('custom_css')

</head>

<body class="index-page">
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

<div class="wrapper">
    <div class="header header-filter" style="background-image: url('assets/img/bg2.jpeg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="brand">
                        <h1>CosmoMag.</h1>
                        <h3>Une description.</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="main main-raised">
        <div class="section section-basic">
            <div class="container">

                <div class="row">

                    <div class="col-md-6">

                        <h1>blogueuses</h1>

                        <div class="team">

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="team-player">
                                        <img src="{{ asset('front_assets/assets/img/avatar.jpg') }}" alt="Thumbnail Image" class="img-raised img-circle">
                                        <h4 class="title">Gigi Hadid <br>
                                            <small class="text-muted">Model</small>
                                        </h4>
                                        <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="team-player">
                                        <img src="{{ asset('front_assets/assets/img/avatar.jpg') }}" alt="Thumbnail Image" class="img-raised img-circle">
                                        <h4 class="title">Gigi Hadid <br>
                                            <small class="text-muted">Model</small>
                                        </h4>
                                        <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="team-player">
                                        <img src="{{ asset('front_assets/assets/img/avatar.jpg') }}" alt="Thumbnail Image" class="img-raised img-circle">
                                        <h4 class="title">Gigi Hadid <br>
                                            <small class="text-muted">Model</small>
                                        </h4>
                                        <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <h1>actualités</h1>

                        <div class="team">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card card-signup">
                                        <form class="form" method="" action="">
                                            <div class="header header-primary text-center">
                                                <h4>Titre</h4>
                                                {{--<div class="social-line">
                                                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                                                        <i class="fa fa-facebook-square"></i>
                                                    </a>
                                                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                </div>--}}
                                            </div>
                                            <p class="text-divider">Or Be Classical</p>
                                            <div class="content">

                                                You can write here details about one of your team members. You can give more details about what they do. Feel free to add some

                                                <!-- If you want to add a checkbox to this form, uncomment this code

                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                        Subscribe to newsletter
                                                    </label>
                                                </div> -->
                                            </div>
                                            <div class="footer text-center">
                                                <a href="#pablo" class="btn btn-simple btn-primary btn-lg">Get Started</a>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="card card-signup">
                                        <form class="form" method="" action="">
                                            <div class="header header-primary text-center">
                                                <h4>Titre</h4>
                                                {{--<div class="social-line">
                                                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                                                        <i class="fa fa-facebook-square"></i>
                                                    </a>
                                                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                </div>--}}
                                            </div>
                                            <p class="text-divider">Or Be Classical</p>
                                            <div class="content">

                                                You can write here details about one of your team members. You can give more details about what they do. Feel free to add some

                                                <!-- If you want to add a checkbox to this form, uncomment this code

                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                        Subscribe to newsletter
                                                    </label>
                                                </div> -->
                                            </div>
                                            <div class="footer text-center">
                                                <a href="#pablo" class="btn btn-simple btn-primary btn-lg">Get Started</a>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="card card-signup">
                                        <form class="form" method="" action="">
                                            <div class="header header-primary text-center">
                                                <h4>Titre</h4>
                                                {{--<div class="social-line">
                                                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                                                        <i class="fa fa-facebook-square"></i>
                                                    </a>
                                                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                </div>--}}
                                            </div>
                                            <p class="text-divider">Or Be Classical</p>
                                            <div class="content">

                                                You can write here details about one of your team members. You can give more details about what they do. Feel free to add some

                                                <!-- If you want to add a checkbox to this form, uncomment this code

                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                                        Subscribe to newsletter
                                                    </label>
                                                </div> -->
                                            </div>
                                            <div class="footer text-center">
                                                <a href="#pablo" class="btn btn-simple btn-primary btn-lg">Get Started</a>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <h1>Produits</h1>

                    <div class="col-md-6">

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

                    <div class="col-md-6">

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

                    <div class="col-md-6">

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

                    <div class="col-md-6">

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

                </div>

                <div class="row">

                    <div class="food">
                        <div class="cover" style="background-image: url(https://1.bp.blogspot.com/-Y8H-0DWygcI/Uulo6hMuUNI/AAAAAAAALYA/xRbwoLi0qGc/s1600/unsplash_52d5bbef8a613_1.JPG)">
                            <label>
                                <i>
                                    <svg x="0px" y="0px" width="17px" height="17px">
                                        <g>
                                            <path d="M 7 1 C 7 1.5523 7.6716 2 8.5 2 C 9.3284 2 10 1.5523 10 1 C 10 0.4477 9.3284 0 8.5 0 C 7.6716 0 7 0.4477 7 1 ZM 7 2 C 7 2 0.6875 2.9375 0 7 C 0 7 -0.1875 9.6875 3 11 C 3 11 4.6875 10.9375 6 9 C 6 9 8.3125 12.8125 11 9 C 11 9 12.1875 10.875 14 11 C 14 11 16.75 10.0625 17 7 C 17 7 16.375 3 10.0625 1.9375 C 10.0625 1.9375 8.5 4.25 7 2 ZM 1 11 L 3 17 L 14 17 L 16 11 C 16 11 13.125 13 11 11 C 11 11 8.875 13.375 6 11 C 6 11 3 13.125 1 11 Z" fill="#ffffff"/>
                                        </g>
                                    </svg>
                                </i>
                                <font>Macarons</font>
                            </label>
                            <a href="#" class="download">
                                <svg x="0px" y="0px" width="27px" height="22px">
                                    <g>
                                        <path d="M 12.5625 0 C 12.0102 0 11.5625 0.4477 11.5625 1 L 11.565 8.69 L 9.0625 8.6875 L 12 16 L 14 16 L 17.0625 8.6875 L 14.5 8.69 L 14.5 1 C 14.5 0.4477 14.0523 0 13.5 0 L 12.5625 0 ZM 1 19 L 1 14 L 0 14 L 0 19 C 0 20.6569 1.3431 22 3 22 L 24 22 C 25.6569 22 27 20.6569 27 19 L 27 14 L 26 14 L 26 19 C 26 20.1046 25.1046 21 24 21 L 3 21 C 1.8954 21 1 20.1046 1 19 Z" fill="#ffffff"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="info">
                            <a href="#" class="recipe">
                                <i>
                                    <svg x="0px" y="0px" width="26px" height="28px">
                                        <g>
                                            <path d="M 8.5 20 L 8.5 21 L 17.5 21 L 17.5 20 L 8.5 20 ZM 8.5 16 L 8.5 17 L 17.5 17 L 17.5 16 L 8.5 16 ZM 8.5 12 L 8.5 13 L 17.5 13 L 17.5 12 L 8.5 12 ZM 20 0 C 19.4477 0 19 0.4477 19 1 L 19 6 C 19 6.5523 19.4477 7 20 7 C 20.5523 7 21 6.5523 21 6 L 21 1 C 21 0.4477 20.5523 0 20 0 ZM 13 0 C 12.4477 0 12 0.4477 12 1 L 12 6 C 12 6.5523 12.4477 7 13 7 C 13.5523 7 14 6.5523 14 6 L 14 1 C 14 0.4477 13.5523 0 13 0 ZM 6 0 C 5.4477 0 5 0.4477 5 1 L 5 6 C 5 6.5523 5.4477 7 6 7 C 6.5523 7 7 6.5523 7 6 L 7 1 C 7 0.4477 6.5523 0 6 0 ZM 15 4 L 18 4 L 18 3 L 15 3 L 15 4 ZM 8 4 L 11 4 L 11 3 L 8 3 L 8 4 ZM 3 4 L 4 4 L 4 3 L 3 3 C 1.3431 3 0 4.3431 0 6 L 0 25 C 0 26.6569 1.3431 28 3 28 L 23 28 C 24.6569 28 26 26.6569 26 25 L 26 6 C 26 4.3431 24.6569 3 23 3 L 22 3 L 22 4 L 23 4 C 24.1046 4 25 4.8954 25 6 L 25 25 C 25 26.1046 24.1046 27 23 27 L 3 27 C 1.8954 27 1 26.1046 1 25 L 1 6 C 1 4.8954 1.8954 4 3 4 Z" fill="#ffffff"/>
                                        </g>
                                    </svg>
                                </i>
                                <font>Details</font>
                            </a>
                            <div class="content">
                                <table width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td align="left" valign="middle" class="pad-right"><strong>Ingredients:</strong></td>
                                        <td align="left" valign="middle">sugar, egg whites, butter, salt cappuccino, cinnamon.</td>
                                        <td width="20" rowspan="2" class="border-right"> </td>
                                        <td width="140" rowspan="2" align="center" valign="middle">
                                            <h1>9.75</h1>
                                            <span class="stars">
                                                <em style="width: 91%"></em>
                                            </span>
                                            <br />
                                            <small>(320 ratings)</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="middle" class="pad-right"><strong>Consumers:</strong></td>
                                        <td align="left" valign="middle" class="consumers">
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/105584/profile/profile-80_5.jpg" />
                                            <img src="https://d13yacurqjgara.cloudfront.net/users/17164/avatars/small/img.jpg?1391351372" />
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/57185/profile/profile-80_3.jpg" />
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/profile/profile-80_21.jpg" />
                                            <span>(+20)</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
                        <div class="testimonial4_header">
                            <h4>what our clients are saying</h4>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#testimonial4" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonial4" data-slide-to="1"></li>
                            <li data-target="#testimonial4" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="testimonial4_slide">
                                    <img src="http://via.placeholder.com/100x100" class="img-circle img-responsive" />
                                    <p>Lorem ipsum dolor sit amet adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur.</p>
                                    <h4>Ben Hanna</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial4_slide">
                                    <img src="http://via.placeholder.com/100x100" class="img-circle img-responsive" />
                                    <p>Lorem ipsum dolor sit amet adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur.</p>
                                    <h4>Ben Hanna</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial4_slide">
                                    <img src="http://via.placeholder.com/100x100" class="img-circle img-responsive" />
                                    <p>Lorem ipsum dolor sit amet adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur.</p>
                                    <h4>Ben Hanna</h4>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#testimonial4" role="button" data-slide="prev">
                            <span class="fa fa-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#testimonial4" role="button" data-slide="next">
                            <span class="fa fa-chevron-right"></span>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="http://www.creative-tim.com">
                            Creative Tim
                        </a>
                    </li>
                    <li>
                        <a href="http://presentation.creative-tim.com">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="http://www.creative-tim.com/license">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                &copy; 2016, made with <i class="material-icons">favorite</i> by Creative Tim for a better web.
            </div>
        </div>
    </footer>
</div>

<!-- Sart Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple">Nice Button</button>
                <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  End Modal -->


</body>
<!--   Core JS Files   -->
<script src="{{ asset('front_assets/assets/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('front_assets/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('front_assets/assets/js/material.min.js') }}" type="text/javascript"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('front_assets/assets/js/nouislider.min.js') }}" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="{{ asset('front_assets/assets/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{{ asset('front_assets/assets/js/material-kit.js') }}" type="text/javascript"></script>

<script type="text/javascript">

    $().ready(function(){
        // the body of this function is in assets/material-kit.js
        materialKit.initSliders();
        window_width = $(window).width();

        if (window_width >= 992){
            big_image = $('.wrapper > .header');

            $(window).on('scroll', materialKitDemo.checkScrollForParallax);
        }

    });
</script>
</html>
