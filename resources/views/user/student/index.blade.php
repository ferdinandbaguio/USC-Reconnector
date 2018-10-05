<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="{{ asset('css/font/roboto.css') }}">
  <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/extra/vendors/font-awesome/css/font-awesome.min.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/unique/student/profile.css') }}">

  <title>{{ Auth::user()->firstName }} {{ Auth::user()->lastName }} | {{Auth::user()->userType}}</title>
</head>

<body>

  <!-- Top Navigation Bar start -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top w-100">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo/USC-Reconnector.png') }}" style="width: auto;" alt="Oops! Something is not right">
      </a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topNavBarToggler" 
      aria-controls="topNavBarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-angle-double-down"></i>
      </button>

      <div class="collapse navbar-collapse" id="topNavBarToggler">
      <ul class="navbar-nav mr-auto d-md-none d-lg-none">
        <li class="nav-item">
          <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> Link </a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#"> Disabled </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>Class</a>
          <div class="dropdown-menu" style="transition: 0.4s ease-in-out !important;" aria-labelledby="dropdown04">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <hr>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link signOutBtn" href="/login"><i class="fas fa-walking"></i> Sign Out </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Top Navigation Bar end -->

  <!-- Side Navigation Bar start-->
  <div class="sideDiv d-md-block d-lg-block d-none" onmouseleave="deToggle()">
    <div class="container-fluid">
    
      <div class="row mt-3 rowSide">
        <div class="col-12">
            <h3 class="text-white sideHeading"></i></h3>
        </div>
      </div>
    </div>
    
    <div class="container-fluid">
      <a href="#" class="text-white" id="hyperlink">
      <div class="row hyperlink rowSide">
        <div class="col-8 mt-3"> 
            <h6 class="sideHeading">Home</h6>
        </div>
        <div class="col-4 mt-2">
          <i class="fas fa-home text-white" style="font-size:33px;"></i>
        </div>
      </div>
      </a>

      <a href="#" class="text-white" id="hyperlink">
      <div class="row mt-4 hyperlink rowSide">
        <div class="col-8 mt-3">
            <h6 class="sideHeading">Profile</h6>
        </div>
        <div class="col-4 mt-2">
          <i class="fas fa-address-card text-white" style="font-size:33px;"></i>
        </div>
      </div>
      </a>

      <a class="text-white" data-toggle="collapse" href="#classDropdown" id="classCollapse" aria-expanded="false">
      <div class="row mt-4 hyperlink test rowSide">
        <div class="col-8 mt-3">
            <h6 class="sideHeading">Class <i class="fas fa-caret-down"></i></h6>
        </div>
        <div class="col-4 mt-2">
          <i class="fas fa-boxes text-white" style="font-size:33px;"></i>
        </div>
      </div>
      </a>
      <div class="col-12 collapse" id="classDropdown">
        <div class="container-fluid">
          <ul class="list-unstyled text-white">
            <a href="" id="hyperlink"><li>Class List</li></a>
            <a href="" id="hyperlink"><li>Class Announcements</li></a>
            <a href="" id="hyperlink"><li>Class 1</li></a>
            <a href="" id="hyperlink"><li>Class 2</li></a>
          </ul>
        </div>
      </div>

      <a href="#" class="text-white" id="hyperlink">
      <div class="row mt-4 hyperlink rowSide">
        <div class="col-8 mt-3">
            <h6 class="sideHeading">Communication</h6>
        </div>
        <div class="col-4 mt-2">
          <i class="fas fa-american-sign-language-interpreting text-white" style="font-size:33px;"></i>
        </div>
      </div>
      </a>

    </div><!-- Container fluid end -->
  </div><!-- Side div end -->
  <!-- Side Navigation Bar end-->

  <!-- Page Content start --> 
  <div class="container-fluid contentContainer">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-8 py-4 rounded-top" style="background:url('/img/div_bgs/picbg.jpg');">  
        <div class="col-5 col-md-3 mx-auto">
          <img src="/img/homepage_images/Boy.jpg" class="d-block mx-auto rounded-circle img-thumbnail shadow-lg" width="auto" height="auto" />
        </div>
      </div>
      <div class="col-md-1">

      </div>
      <div class="col-md-3 mt-2">

      </div>
    </div>
    <!-- Basic Information -->
    <div class="row mt-5">
    <div class="col-md-8 border-bottom shadow-lg divInfoBg">
      <div class="row p-3"> 
        <h4 class="fontRoboto"><i class="fas fa-chalkboard-teacher align-middle"></i> Basic Information </h4>
      </div>
      <div class="row px-3">
        <h3 class="fontRoboto" style="font-weight:bold"> Romeo X. Yap III </h3>
      </div>
      <div class="row px-3">
        <h4 class="fontRoboto">Student at University of San Carlos</h4>
      </div>
      <div class="row px-3">
        <h5 class="fontRoboto">Course: Bachelor of Science in Information and Communication Technology</h5>
      </div>
      <div class="row px-3">
        <p class="text-muted" class="fontRoboto">Student ID: 18105978</p>
      </div>
    </div>
    </div>
    <!-- Basic Information END-->

    <!-- Student status -->
    <div class="row mt-5">
    <div class="col-md-8 divInfoBg border-bottom shadow-lg pb-2" >
      <div class="row p-3"> 
        <h4 class="fontRoboto font-bold"><i class="fas fa-bong"></i> Student Status </h4>
      </div>
      <div class="row px-3">
        <h5 class="fontRoboto">Student Type: Continuing</h5>
      </div>
      <div class="row px-3">
        <h5 class="fontRoboto">Year Level: 4th Year</h5>
      </div>
      <div class="row px-3">
        <h5 class="fontRoboto">Foreign: No</h5>
      </div>
      <div class="row px-3">
        <h5 class="fontRoboto">Faculty Evaluation: Completed (1st Semester 2018)</h5>
      </div>
      <div class="row px-3">
        <h5 class="fontRoboto">For Graduation: Yes</h5>
      </div>
    </div>
    </div>
    <!-- Student status END-->

    <!-- Dashboard -->
    <div class="row mt-5">
    <div class="col-md-8 pb-5 dashboardBg">
      <div class="row pt-3 pl-3"> 
        <h4 class="fontRoboto text-white"><i class="fas fa-columns"></i> Dashboard </h4>
      </div>
      <div class="row pl-3 mb-3"> 
        <h6 class="fontRoboto font-italic text-white"> Private to you </h6>
      </div>
      <div class="row px-3">
        <div class="col-6 py-2 px-4 bg-light border-right">
          <div class="row">
            <h2 class="fontRoboto"> 100.00 </h2>
          </div>
          <div class="row">
            <h5 class="fontRoboto"> Total Units </h5>
          </div>
        </div>
        <div class="col-6 py-2 px-4 bg-light">
          <div class="row">
            <h2 class="fontRoboto"> 72.00 </h2>
          </div>
          <div class="row">
            <h5 class="fontRoboto"> Units Passed </h5>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- Dashboard END -->

  </div><!-- container -->
  </div><!-- container-fluid contentContainer -->
  <!-- Page Content end -->
  
  <!-- Footer start -->
  <footer>
  <div class="container pt-5">
    <div class="row">
      <div class="col-12 col-md">
        <img src="//txt-dynamic.static.1001fonts.net/txt/dHRmLjMyLmZlZmJmYi5TbTl1WVhNZ1IzZGhjRzgsLjAA/blackchancery.regular.png" style="width: auto;">
        <small class="d-block mb-3 text-white">© 2017-2018</small>
      </div>

      <div class="col-6 col-md">
        <h5 class="text-white"> Features <span data-feather="activity" class="logFeather"></span></h5>
        <ul class="list-unstyled text-small" id="footerUl">
          <li><a class="text-white" href="#">Student Profile</a></li>
          <li><a class="text-white" href="#">Announcement</a></li>
          <li><a class="text-white" href="#">Alumni Tracking/Graduate Tracer</a></li>
          <li><a class="text-white" href="#">Stuff for developers</a></li>
          <li><a class="text-white" href="#">Another one</a></li>
          <li><a class="text-white" href="#">Boom boom Nancy</a></li>
        </ul>
      </div>

      <div class="col-6 col-md">
        <h5 class="text-white"> Contact <span data-feather="activity" class="logFeather"></h5>
        <ul class="list-unstyled text-small" id="footerUl">
          <li><a class="text-white" href="#">School</a></li>
          <li><a class="text-white" href="#">Departments</a></li>
          <li><a class="text-white" href="#">Contact</a></li>
          <li><a class="text-white" href="#">Contact</a></li>
        </ul>
      </div>

      <div class="col-6 col-md">
        <h5 class="text-white"> About <span data-feather="activity" class="logFeather"></h5>
        <ul class="list-unstyled text-small" id="footerUl">
          <li><a class="text-white" href="#">Developers</a></li>
          <li><a class="text-white" href="#">Development Tools</a></li>
          <li><a class="text-white" href="#">Privacy</a></li>
          <li><a class="text-white" href="#">Terms</a></li>
        </ul>
      </div>

      </div>
      <div class="row">
      <div class="col-md-12 mt-4 text-center">
        <ul class="list-unstyled">
          <li class="list-inline-item"><a href=""><i data-feather="facebook" class="socialIcons"></i></a></li>
          <li class="list-inline-item"><a href=""><i data-feather="twitter" class="socialIcons"></i></a></li>
          <li class="list-inline-item"><a href=""><i data-feather="instagram" class="socialIcons"></i></a></li>
          <li class="list-inline-item"><a href=""><i data-feather="chrome" class="socialIcons"></i></a></li>
        </ul>
      </div>
      </div>
  </div>
  </footer>
  <!-- Footer end -->

  {{-- Scripts --}}
  <script src="{{ asset('js/extra/feather.min.js') }}">
    feather.replace();
  </script>
  
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/unique/arid.min.js') }}"></script>
  <script src="{{ asset('js/extra/popper.min.js') }}"></script>
  <script src="{{ asset('js/extra/jquery-3.3.1.slim.min.js') }}"></script>

</body>
</html>