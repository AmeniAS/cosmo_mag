@extends('layouts.front_main')

@section('content')

    <section class="breadcumb-area af jarallax" style="background: url(images/breadcumb/1.jpg);">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                    <div class="breadcumb-content">

                        <img class="img-responsive img-circle" src="{{ asset('storage/'.$user->image) }}" width="200" height="200" style="margin: 0 auto; height: 200px">

                        <div class="breadcumb-title">

                            <h1>{{ $user->name }}</h1>

                        </div>

                        <div class="breadcumb-link">

                            <ul>

                                <li><a href="#">{{ $user->email }}</a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="contact-area section">

        <div class="container">

            @include('layouts.flash_message')

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

                                    <p> {{ $user->address }}</p>

                                </div>

                            </div>

                            <div class="single-info">

                                <div class="info-icon">

                                    <i class="fa fa-envelope-o"></i>

                                </div>

                                <div class="info-con">

                                    <p>{{ $user->email }}</p>

                                </div>

                            </div>

                            <div class="single-info">

                                <div class="info-icon">

                                    <i class="fa fa-phone"></i>

                                </div>

                                <div class="info-con">

                                    <p>{{ $user->phone }}</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                    <div class="contact-form">

                        <h3>Modifier les infos</h3>

                        <div class="form-area row">

                            <form method="post" action="{{ route('members.edit_profile') }}">

                                {{ csrf_field() }}

                                <fieldset>

                                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">Numéro de téléphone</label>

                                        <div class="col-sm-6">

                                            <input type="text" name="phone" value="{{ $user->phone }}" placeholder="Numéro de téléphone"/>
                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">E-mail</label>

                                        <div class="col-sm-6">

                                            <input type="email" name="email" value="{{ $user->email }}" placeholder="E-mail"/>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>

                                </fieldset>

                                <fieldset>

                                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">Adresse</label>

                                        <div class="col-sm-6">

                                            <input type="text" name="address" value="{{ $user->address }}" placeholder="Adresse"/>
                                            @if ($errors->has('address'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('address') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>

                                </fieldset>

                                <div class="col-sm-12">

                                    <button>Modifier</button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

                <div class="clo-lg-4 md-4 col-sm-4 col-xs-12">

                    <div class="contact-info">

                        <h3>Points</h3>

                        <div class="info-list">

                            <div class="single-info">

                                <div class="info-icon">

                                    <i class="fa fa-check"></i>

                                </div>

                                <div class="info-con">

                                    <p> {{ $user->code }}</p>

                                </div>

                            </div>

                            <div class="single-info">

                                <div class="info-icon">

                                    <i class="fa fa-star"></i>

                                </div>

                                <div class="info-con">

                                    <p> {{ $user->points }}</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



@endsection

@section('custom_js')

@endsection
