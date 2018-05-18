@extends('layouts.front_main')

@section('content')

    <!--Breadcumb area start here-->

    <section class="new-product-area-two section">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                    <div class="breadcumb-content">

                        <div class="breadcumb-title">

                            <h1>Contact Us</h1>

                        </div>

                        {{--<div class="breadcumb-link">

                            <ul>

                                <li><a href="index.html">Home</a></li>

                                <li>-</li>

                                <li><a href="#">Contact</a></li>

                            </ul>

                        </div>--}}

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--Breadcumb area end here-->

    <!--Google map area start here-->

    <div class="google-map">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 accurate">

                    <div class="map-area ">

                        <div id="map" class="map-full" style="width:100%; height:520px;"></div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--Google map area end here-->

    <!--Contact form area start here-->

    <section class="contact-area section">

        <div class="container">

            @include('layouts.flash_message')
            @include('layouts.validation_errors')

            <div class="row">

                <div class="clo-lg-4 md-4 col-sm-4 col-xs-12">

                    <div class="contact-info">

                        <h3>Confact Info</h3>

                        <div class="info-list">

                            <div class="single-info">

                                <div class="info-icon">

                                    <i class="fa fa-map-marker"></i>

                                </div>

                                <div class="info-con">

                                    <p> 29 Street,  Melbourne City, Australia #34 Road, House #10.</p>

                                </div>

                            </div>

                            <div class="single-info">

                                <div class="info-icon">

                                    <i class="fa fa-envelope-o"></i>

                                </div>

                                <div class="info-con">

                                    <p>infoallo.com</p>

                                </div>

                            </div>

                            <div class="single-info">

                                <div class="info-icon">

                                    <i class="fa fa-phone"></i>

                                </div>

                                <div class="info-con">

                                    <p>+ 9850678910</p>

                                </div>

                            </div>

                            <div class="single-info">

                                <div class="info-icon">

                                    <i class="fa fa-fax"></i>

                                </div>

                                <div class="info-con">

                                    <p>+ 9850678910</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                    <div class="contact-form">

                        <h3>Send Us Message</h3>

                        <div class="form-area row">

                            <form method="post" action="{{ route('send_msg') }}">

                                {{ csrf_field() }}

                                <fieldset>

                                    <div class="col-sm-6">

                                        <input type="text" name="name" required placeholder="Name*"/>

                                    </div>

                                    <div class="col-sm-6">

                                        <input type="email" name="email" required placeholder="E-mail*"/>

                                    </div>

                                </fieldset>

                                <fieldset>

                                    <div class="col-sm-12">

                                        <textarea name="message" required placeholder="Message*"></textarea>

                                    </div>

                                </fieldset>

                                <div class="col-sm-12">

                                    <button type="submit">Send Message</button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--Contact form area end here-->

@endsection

@section('custom_js')

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDtMZOcKcRbHdPs9JqUOnH25J-VrOqOVFA"></script>



    <script>

        function initialize() {

            var mapOptions = {

                zoom: 15,

                scrollwheel: false,

                center: new google.maps.LatLng(36.8442156,10.1970051),

                /*styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#acbbd8"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[

                        {"color":"#ede6dc"},{"lightness":20}

                    ]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#fff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#fff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffff83"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#d3cdc1"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#d3cdc1"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
*/
            };

            var map = new google.maps.Map(document.getElementById('map'),

                mapOptions);

            var marker = new google.maps.Marker({

                position: map.getCenter(),

                map: map

            });

        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>

@endsection