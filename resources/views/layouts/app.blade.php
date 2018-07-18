<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- GLOBAL MAINLY STYLES-->
    <link href="dist/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="dist/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="dist/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />

    <!-- THEME STYLES-->
    <link href="dist/assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>
<body class="fixed-navbar">
        @yield('header')
               		
        @include('partials.side-nav')
        @yield('content')

</body>
</html>