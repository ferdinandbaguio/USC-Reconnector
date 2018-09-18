<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Main bootstrap Core files -->
  <link rel="stylesheet" href="{{ asset('dist/assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <!-- Customized css file -->
  <link rel="stylesheet" type="text/css" href="{{ asset('modify/css/alumni_profile.css') }}">
  <!-- Profile Name here -->
  <title>Julyet Bongbon | Alumni Profile</title>
</head>

<body onload="initMap()">    

  <!-- Top Navigation Bar start -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top w-100">
    <a class="navbar-brand" href="#"><img src="//txt-dynamic.static.1001fonts.net/txt/dHRmLjMyLmZlZmJmYi5TbTl1WVhNZ1IzZGhjRzgsLjAA/blackchancery.regular.png" style="width: auto;" alt="Oops! Something is not right"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topNavBarToggler" aria-controls="topNavBarToggler" aria-expanded="false" aria-label="Toggle navigation">
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
  </nav> <!-- Top Navigation Bar end -->

  <!-- Side Navigation Bar start-->
  <div class="sideDiv d-md-block d-lg-block d-none" onmouseleave="deToggle()">
    <div class="container-fluid">
      <div class="row mt-3 rowSide">
        <div class="col-12">
          <h3 class="text-white fontRoboto"></i></h3>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <a href="#" class="text-white" id="hyperlink">
        <div class="row hyperlink rowSide">
          <div class="col-8 mt-3"> 
            <h6 class="fontRoboto">Home</h6>
          </div>
          <div class="col-4 mt-2">
            <i class="fas fa-home text-white" style="font-size:33px;"></i>
          </div>
        </div>
      </a>
      <a href="#" class="text-white" id="hyperlink">
        <div class="row mt-4 hyperlink rowSide">
          <div class="col-8 mt-3">
            <h6 class="fontRoboto">Profile</h6>
          </div>
          <div class="col-4 mt-2">
            <i class="fas fa-address-card text-white" style="font-size:33px;"></i>
          </div>
        </div>
      </a>
      <a class="text-white" data-toggle="collapse" href="#classDropdown" id="classCollapse" aria-expanded="false">
        <div class="row mt-4 hyperlink test rowSide">
            <div class="col-8 mt-3">
              <h6 class="fontRoboto">Class <i class="fas fa-caret-down"></i></h6>
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
            <h6 class="fontRoboto">Communication</h6>
          </div>
          <div class="col-4 mt-2">
            <i class="fas fa-american-sign-language-interpreting text-white" style="font-size:33px;"></i>
          </div>
        </div>
      </a>
    </div><!-- container-fluid -->
  </div><!-- sideDiv d-md-block d-lg-block d-none -->
  <!-- Side Navigation Bar end-->

  <!-- Page Content start --> 
  <div class="container-fluid contentContainer">
  <div class="container">
    <div class="row mt-3 mb-5">

      <!-- Alumni Profile Details -->
      <div class="col-md-4 py-3 mb-3" style="background:url('/img/div_bgs/abg.jpg');">
        <div class="card border border-light">
          <img class="card-img-top mx-auto" src="/img/homepage_images/Girl.jpg" alt="Card image" style="width: 150px;">
          <div class="card-body">
          <h4 class="card-title fontRoboto">Romeo X. Yapzor</h4>
          <p class="card-text">Location: <em> IT.Park Qualfon Building Telstra Pizza Resto Bar </em></p>
          </div>
        </div>
      </div>
      <!-- Alumni Profile Details END-->

      <!-- Alumni Map Location -->
      <div class="col-md-8 alMapDiv">
        <!-- This is only a test map for visual purposes only no back end -->
        <div id="map" class="w-100 bg-dark" style="height: 400px;">
        </div>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlyUWOZTrGwtkrOFAV6-ejOmll5VuhUbE&callback=initMap">
        </script>
        <script>
          function initMap() {
            // The location of San Carlos
            var SanCarlosTalamban = {lat: 10.3304499, lng: 123.9073923};
            // The map, centered at San Carlos
            var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 17, center: SanCarlosTalamban});
            // The marker, positioned at San Carlos
            //var marker = new google.maps.Marker({position: SanCarlosTalamban, map: map});
          }
        </script>
      </div>
      <!-- Alumni Map Location END-->

    </div>

    <!-- JOB INFORMATION -->
    <div class="row mb-5">
    <div class="col-md-8 border-bottom shadow-lg divInfoBg">
      <div class="row p-3"> 
        <h4 class="fontRoboto"><i class="fas fa-user-md"></i> Job Information </h4>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Job Title:</h6>
        </div>
        <div class="col-12 p-0">
          <h3 class="fontRoboto">Secretary of the CEO</h3>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Salary:</h6>
        </div>
        <div class="col-12 p-0">
          <h4 class="fontRoboto">15,000 - 20,000</h4>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Date Employed:</h6>
        </div>
        <div class="col-12 p-0">
          <h4 class="fontRoboto">February 31, 1973</h4>
        </div>
      </div>
    </div>
    </div>
    <!-- JOB INFORMATION END-->

    <!-- COMPANY INFORMATION -->
    <div class="row mb-5">
    <div class="col-md-8 border-bottom shadow-lg divInfoBg">
      <div class="row p-3"> 
        <h4 class="fontRoboto"><i class="fas fa-building"></i> Company Information </h4>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Company Name:</h6>
        </div>
        <div class="col-12 p-0">
          <h3 class="fontRoboto">Chooks To Go</h3>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Country:</h6>
        </div>
        <div class="col-12 p-0">
          <h4 class="fontRoboto">Transylvania Hong Kong</h4>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Address:</h6>
        </div>
        <div class="col-12 p-0">
          <h4 class="fontRoboto">IT.Park Qualfon Building Telstra Pizza Resto Bar</h4>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Description:</h6>
        </div>
        <div class="col-12 p-0">
          <p class="fontRoboto">This company is full of workers</p>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Services Offered:</h6>
        </div>
          <div class="col-12 p-0">
          <ul>
          <li> Free Food </li>
          <li> Break Time </li>
          <li> Increased Salary </li>
          </ul>
        </div>
      </div>
    </div>
    </div>
    <!-- COMPANY INFORMATION END -->

  </div><!-- container -->
  </div><!-- container-fluid contentContainer -->
  <!-- Page Content END --> 
  
  
  <!-- Script check if aria value is true -->
  <script type="text/javascript">
    function deToggle(){
      var ariaValue = document.getElementById('classCollapse').getAttribute("aria-expanded");
      if(ariaValue==="true"){
        document.getElementById('classCollapse').click()
      }
    }
  </script>

  <!-- Data feather icons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <script>
      feather.replace();
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>