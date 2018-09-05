<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{asset('dist/assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dist/assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dist/assets/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('dist/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{asset('dist/assets/css/main.min.css')}}" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>
<body class="fixed-navbar">
         <!-- START HEADER-->
         <div class="page-wrapper">
	        <header class="header">
	            <div class="page-brand">
	                <a class="link" href="index.html">
	                    <span class="brand">Student-
	                        <span class="brand-tip">Reconnector</span>
	                    </span>
	                    <span class="brand-mini">USC</span>
	                </a>
	            </div>
	            <div class="flexbox flex-1">
                    <!-- START TOP-LEFT TOOLBAR-->
                     @include('partials.top-left-toolbar')
                    <!-- END TOP-LEFT TOOLBAR-->
	               <!-- START TOP-RIGHT TOOLBAR-->
                    @include('partials.top-right-toolbar')
                   <!-- END TOP-RIGHT TOOLBAR-->  
	              
	 
	            </div>
	        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        @include('partials.side-nav')
         <!-- END SIDEBAR-->
        <div class="content-wrapper">
        
        @yield('content')

        <footer class="page-footer">
                <div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
                <a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>

    </div>

    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="{{asset('dist/assets/vendors/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('dist/assets/vendors/popper.js/dist/umd/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('dist/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('dist/assets/vendors/metisMenu/dist/metisMenu.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('dist/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
   
    <!-- CORE SCRIPTS-->
    <script src="{{asset('dist/assets/js/app.min.js')}}" type="text/javascript"></script>
  
    		
        

</body>
</html>