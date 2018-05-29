<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>CosmoMag | Admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    {{--<link href="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/node-waves/waves.css" rel="stylesheet" />--}}

    <!-- Animation library for notifications   -->
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('assets/css/light-bootstrap-dashboard.css') }}?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/datatables/datatables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
    {{--<link href="https://gurayyarar.github.io/AdminBSBMaterialDesign/css/style.css" rel="stylesheet" />
    <link href="https://gurayyarar.github.io/AdminBSBMaterialDesign/css/themes/all-themes.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />--}}

    @yield('custom_css')

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="{{ asset('assets/img/sidebar-5.jpg') }}">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        @if(Auth::guard('partenaire')->check())
            @include('layouts.partners_sidebar')
        @else
            @include('layouts.admin_sidebar')
        @endif

    </div>

    <div class="main-panel">

        @include('layouts.admin_form_errors')

        @include('layouts.admin_flash_messages')

        @include('layouts.admin_header')

        <div class="content">

            @yield('content')

        </div>


        @include('layouts.admin_footer')

    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src="{{ asset('assets/js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Charts Plugin -->
{{--<script src="{{ asset('assets/js/chartist.min.js') }}"></script>--}}

<!--  Notifications Plugin    -->
{{--<script src="{{ asset('assets/js/bootstrap-notify.js') }}"></script>--}}

<!--  Google Maps Plugin    -->
{{--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{ asset('assets/js/light-bootstrap-dashboard.js') }}?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/js/demo.js') }}"></script>

{{--<script type="text/javascript">
    $(document).ready(function(){

        $.notify({
            icon: 'pe-7s-gift',
            message: 'bkjbkj'

        },{
            type: 'info',
            timer: 4000
        });

    });
</script>--}}

<script src="{{ asset('assets/datatables/dataTables.min.js') }}" type="text/javascript"></script>

<script>

    $(document).ready(function() {
        $('#example').DataTable();
    } );

</script>

@yield('custom_js')



{{--@if(Session::has('message'))
    <div id="flash_msg">{{ Session::get('message') }}</div>
    <div id="flash_type">{{ Session::get('alert_type') }}</div>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-gift',
                message: $('#flash_msg').text()

            },{
                type: $('#flash_type').text(),
                timer: 4000
            });

        });
    </script>

@endif--}}

</html>
