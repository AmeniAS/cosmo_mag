<!DOCTYPE html>
<html lang="en">
<head>
    <title>CosmoMag | Login - Admin</title>
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
        <div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

        <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
            <form class="form-horizontal" method="POST" action="{{ route('admins.login.submit') }}">
                {{ csrf_field() }}
                <span class="login100-form-title p-b-59">
                    Login "Membre"
                </span>

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

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <a href="{{ route('admins.register') }}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                        Créer un compte
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
<script src="js/main.js"></script>
<script src="{{ asset('login_tpl/login/js/main.js') }}"></script>

</body>
</html>
