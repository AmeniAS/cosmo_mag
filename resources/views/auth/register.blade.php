<!DOCTYPE html>
<html lang="en">
<head>
    <title>CosmoMag | Register - Member</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('login_tpl/login/images/icons/favicon.ico') }}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_tpl/login/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_tpl/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_tpl/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_tpl/login/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_tpl/login/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_tpl/login/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_tpl/login/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_tpl/login/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_tpl/login/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_tpl/login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login_tpl/login/css/main.css') }}">
    <!--===============================================================================================-->
</head>
<body style="background-color: #999999;">

<div class="limiter">
    <div class="container-login100">
        <div class="login100-more" style="background-image: url({{ asset('login_tpl/login/images/bg-01.jpg') }});"></div>

        <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('register') }}">

                {{ csrf_field() }}

					<span class="login100-form-title p-b-59">
						Créer un compte "Membre"
					</span>

                {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>--}}

                <div class="wrap-input100 validate-form validate-input {{ $errors->has('name') ? 'alert-validate' : '' }}" data-validate="{{ $errors->has('name') ? $errors->first('name') : 'Name is required' }}">
                    <span class="label-input100">Nom et prénom</span>
                    <input class="input100" type="text" name="name" value="{{ old('name') }}" placeholder="Nom et prénom...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-form validate-input {{ $errors->has('email') ? 'alert-validate' : '' }}" data-validate="{{ $errors->has('email') ? $errors->first('email') : 'Valid email is required: ex@abc.xyz' }}">
                    <span class="label-input100">E-mail</span>
                    <input class="input100" type="text" name="email" value="{{ old('email') }}" placeholder="E-mail...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-form validate-input {{ $errors->has('password') ? 'alert-validate' : '' }}" data-validate="{{ $errors->has('password') ? $errors->first('password') : 'Password is required' }}">
                    <span class="label-input100">Mot de passe</span>
                    <input class="input100" type="password" name="password" placeholder="Mot de passe...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-form validate-input {{ $errors->has('password_confirmation') ? 'alert-validate' : '' }}" data-validate="{{ $errors->has('password_confirmation') ? $errors->first('password_confirmation') : 'Password confirmation is required' }}">
                    <span class="label-input100">Confirmer mot de passe</span>
                    <input class="input100" type="password" name="password_confirmation" placeholder="Mot de passe...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-form validate-input {{ $errors->has('birthdate') ? 'alert-validate' : '' }}" data-validate="{{ $errors->has('birthdate') ? $errors->first('birthdate') : 'Birth date is required' }}">
                    <span class="label-input100">Date de naissance</span>
                    <input class="input100" type="date" name="birthdate" value="{{ old('birthdate') }}" placeholder="Date de naissance...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-form validate-input {{ $errors->has('phone') ? 'alert-validate' : '' }}" data-validate="{{ $errors->has('phone') ? $errors->first('phone') : 'Phone is required' }}">
                    <span class="label-input100">Numéro de téléphone</span>
                    <input class="input100" type="number" name="phone" value="{{ old('phone') }}" placeholder="Numéro de téléphone...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-form validate-input {{ $errors->has('address') ? 'alert-validate' : '' }}" data-validate="{{ $errors->has('address') ? $errors->first('address') : 'Address is required' }}">
                    <span class="label-input100">Adresse</span>
                    <input class="input100" type="text" name="address" value="{{ old('address') }}" placeholder="Adresse...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-form validate-input {{ $errors->has('image') ? 'alert-validate' : '' }}" data-validate="{{ $errors->has('image') ? $errors->first('image') : 'Image is required' }}">
                    <span class="label-input100">Image</span>
                    <input class="input100" type="file" name="image" placeholder="Image...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-form validate-input {{ $errors->has('referer_code') ? 'alert-validate' : '' }}" data-validate="{{ $errors->has('referer_code') ? $errors->first('referer_code') : 'Referer code is required' }}">
                    <span class="label-input100">Code d'affiliation</span>
                    <input class="input100" type="text" name="referer_code" value="{{ old('referer_code') }}" placeholder="Code d'affiliation...">
                    <span class="focus-input100"></span>
                </div>

                {{--<div class="flex-m w-full p-b-33">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
                        </label>
                    </div>


                </div>--}}

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Confirmer
                        </button>
                    </div>

                    <a href="{{ url('/login') }}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                        Login
                        <i class="fa fa-long-arrow-right m-l-5"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="{{ asset('login_tpl/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('login_tpl/login/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('login_tpl/login/vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('login_tpl/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('login_tpl/login/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('login_tpl/login/vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('login_tpl/login/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('login_tpl/login/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('login_tpl/login/js/main.js') }}"></script>

</body>
</html>