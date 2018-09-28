<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admincast bootstrap 4 &amp; angular 5 admin template, Шаблон админки | Dashboard</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link rel="stylesheet" href="{{ asset('css/extra/vendors/themify-icons/css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/extra/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" />
    <!-- PLUGINS STYLES-->
    <link rel="stylesheet" href="{{ asset('css/extra/vendors/jvectormap/jquery-jvectormap-2.0.3.css') }}" />
    <!-- THEME STYLES-->
    <link rel="stylesheet" href="{{ asset('css/extra/main.min.css') }}" />
</head>

<body class="fixed-navbar">

    @yield('content')

    {{-- Config Panel --}}
    @include('_inc/config_panel');

    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script type="text/javascript" src="{{ asset('js/extra/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/extra/vendors/metisMenu/dist/metisMenu.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/extra/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/extra/vendors/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script type="text/javascript" src="{{ asset('js/extra/vendors/chart.js/dist/Chart.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/extra/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/extra/vendors/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/extra/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- CORE SCRIPTS-->
    <script type="text/javascript" src="{{ asset('js/extra/app.min.js') }}"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript" src="{{ asset('js/scripts/dashboard_1_demo.js') }}"></script>
</body>

</html>