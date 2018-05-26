@extends('layouts.front_main')

@section('content')

    <!--support area start here-->
    <section class="support-area pd-t80 pd-b80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="single-support pd-50">
                        <div class="suport-icon mr-r20 mr-t5">
                            <img src="{{ asset('front_asset/images/ico/1.png') }}" alt=""/>
                        </div>
                        <div class="content-support">
                            <a href="{{ route('login') }}"><h4>MEMBRE </h4></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="single-support pd-50">
                        <div class="suport-icon mr-r20 mr-t5">
                            <img src="{{ asset('front_asset/images/ico/2.png') }}" alt=""/>
                        </div>
                        <div class="content-support">
                            <a href="{{ route('bloggers.login') }}"><h4>BLOGGEUSE</h4></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="single-support pd-50">
                        <div class="suport-icon mr-r20 mr-t5">
                            <img src="{{ asset('front_asset/images/ico/3.png') }}" alt=""/>
                        </div>
                        <div class="content-support">
                            <h4>PARTENAIRE</h4>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--support area end here-->

@endsection