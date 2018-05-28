<!Doctype html>

<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CosmoMag{{ isset($page_title) ? ' | ' . $page_title : ''}}</title>

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front_asset/images/fav.png') }}">

    <!-- Place favicon.ico in the root directory -->

    <!-- all css here -->

    <!-- bootstrap v3.3.6 css -->

    <link rel="stylesheet" href="{{ asset('front_asset/css/bootstrap.min.css') }}">

    <!-- animate css -->

    <link rel="stylesheet" href="{{ asset('front_asset/css/animate.css') }}">

    <!-- jquery-ui.min css -->

    <link rel="stylesheet" href="{{ asset('front_asset/css/jquery-ui.min.css') }}">

    <!-- meanmenu css -->

    <link rel="stylesheet" href="{{ asset('front_asset/css/meanmenu.min.css') }}">

    <!-- owl.carousel css -->

    <link rel="stylesheet" href="{{ asset('front_asset/css/owl.carousel.min.css') }}">

    <!-- slick css -->

    <link rel="stylesheet" href="{{ asset('front_asset/css/slick.css') }}">

    <!-- magnific popup css -->

    <link rel="stylesheet" href="{{ asset('front_asset/css/magnific-popup.css') }}">

    <!-- font-awesome css -->

    <link rel="stylesheet" href="{{ asset('front_asset/css/font-awesome.min.css') }}">

    <!-- style css -->

    <link rel="stylesheet" href="{{ asset('front_asset/style.css') }}">

    <!-- responsive css -->

    <link rel="stylesheet" href="{{ asset('front_asset/css/responsive.css') }}">

    <!-- modernizr css -->

    <script src="{{ asset('front_asset/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <style>
        .main-menu nav ul li {
            font-size: 11px;
        }
    </style>

    @yield('custom_css')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116557441-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-116557441-1');
    </script>--}}
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116557441-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-116557441-1');
    </script>

</head>

<body>

<!--[if lt IE 8]>

<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser.
    Please <a href="#">upgrade your browser</a> to improve your experience.</p>

<![endif]-->

@include('layouts.front_header')

@yield('content')

{{--@include('layouts.front_slider')

@include('layouts.front_services')

@include('layouts.front_new_products')

@include('layouts.front_ads')

@include('layouts.front_best_products')

@include('layouts.front_blog')--}}

@include('layouts.front_clients')

@include('layouts.front_footer')

<form id="search_form" method="post" action="{{ route('search') }}" style="display: none">

    <div style="display: none">

        {{ csrf_field() }}
        <input type="text" value="produit" name="search_type" id="search_type"/>
        <input type="text" value="" name="keyword" id="keyword"/>

        {{--<input type="radio" id="contactChoice1"
               name="contact" value="email">
        <label for="contactChoice1">Email</label>

        <input type="radio" id="contactChoice2"
               name="contact" value="telephone">
        <label for="contactChoice2">Téléphone</label>

        <input type="radio" id="contactChoice3"
               name="contact" value="courrier">
        <label for="contactChoice3">Courrier</label>--}}
    </div>

</form>

<!-- all js here -->

<!-- jquery latest version -->

<script src="{{ asset('front_asset/js/vendor/jquery-1.12.0.min.js') }}"></script>

<!-- bootstrap js -->

<script src="{{ asset('front_asset/js/bootstrap.min.js') }}"></script>

<!-- owl.carousel js -->

<script src="{{ asset('front_asset/js/owl.carousel.min.js') }}"></script>

<!-- isotope js -->

<script src="{{ asset('front_asset/js/isotope.pkgd.min.js') }}"></script>

<!-- magnific popup js -->

<script src="{{ asset('front_asset/js/jquery.magnific-popup.min.js') }}"></script>

<!-- meanmenu js -->

<script src="{{ asset('front_asset/js/jquery.meanmenu.js') }}"></script>

<!-- jarallax js -->

<script src="{{ asset('front_asset/js/jarallax.min.js') }}"></script>

<!-- jquery-ui js -->

<script src="{{ asset('front_asset/js/jquery-ui.min.js') }}"></script>

<!-- wow js -->

<script src="{{ asset('front_asset/js/wow.min.js') }}"></script>

<!-- Touch Slider js -->

<script src="{{ asset('front_asset/js/touchslider.js') }}"></script>

<!-- slick js -->

<script src="{{ asset('front_asset/js/slick.min.js') }}"></script>

<!-- downCount JS -->

<script src="{{ asset('front_asset/js/jquery.downCount.js') }}"></script>

<!-- plugins js -->

<script src="{{ asset('front_asset/js/plugins.js') }}"></script>

<!-- main js -->

<script src="{{ asset('front_asset/js/main.js') }}"></script>

<script>

    $('#search_key').keypress(function(e) {
        if(e.which == 13) {
            $('#keyword').val($('#search_key').val());
            $('#search_form').submit();
        }
    });

    $('.x_search_type').click(function (e) {
        $('#search_type').val(e.target.id.substring(2));
        console.log($('#search_type').val());
    });

</script>

@yield('custom_js')

</body>

</html>

