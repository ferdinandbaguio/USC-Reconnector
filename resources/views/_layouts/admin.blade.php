<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/logo/Logo.ico') }}" type="image/gif" sizes="16x16">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ Auth::user()->firstName }} {{ Auth::user()->lastName }} | {{Auth::user()->userType}}</title>

    <!-- GLOBAL MAINLY STYLES-->
    <link rel="stylesheet" href="{{ asset('css/extra/vendors/themify-icons/css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/extra/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" />

    <!-- PLUGINS STYLES-->
    @yield('styles')
    
    <!-- THEME STYLES-->
    <link rel="stylesheet" href="{{ asset('css/extra/main.min.css') }}" />
</head>

<body class="fixed-navbar fixed-layout">
    
    <div class="page-wrapper">

        {{-- Header --}}
        @include('_inc/admin/header')

        {{-- Side Bar --}}
        @include('_inc/admin/sidebar')

        {{-- Content --}}
        <div class="content-wrapper">
            <div class="page-heading">
                <h1 class="page-title">
                    @yield('title')
                </h1>
                <hr>
            </div>
            <div class="page-content fade-in-up">
                @include('_inc.messages')
                @yield('content')
            </div>
            <footer class="page-footer">
                <div class="font-13">2018 © <b>Student | Reconnector</b> - All rights reserved.</div>
                <a class="px-4" href="admin" target="_blank">Check us out!</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>

    </div>

    {{-- Config Panel --}}
    {{-- @include('_inc/admin/config_panel') --}}

    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->

    <!-- CORE PLUGINS-->
    <script type="text/javascript" src="{{ asset('js/extra/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/extra/vendors/popper.js/dist/umd/popper.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/extra/vendors/metisMenu/dist/metisMenu.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/extra/vendors/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    
    <!-- PAGE LEVEL PLUGINS-->
    @yield('scripts')

    <!-- CORE SCRIPTS-->
    <script type="text/javascript" src="{{ asset('js/extra/admin_app.js') }}"></script>
</body>

</html>