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

<body>    
  @include('_layouts.navigation')
  <div class="container-fluid contentContainer">
  <div class="container">
      @include('_inc.messages')
      @yield('content')
  </div>
  </div>

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
  </div>
  </div>
  
  
  <!-- Script check if aria value is true -->
  <script type="text/javascript">
    function deToggle(){
      var ariaValue = document.getElementById('classCollapse').getAttribute("aria-expanded");
      if(ariaValue==="true"){
        document.getElementById('classCollapse').click()
      }
    }
  </script>

  <!-- Feather Icon -->
  <script src="https://unpkg.com/feather-icons"></script>
  <script>
      feather.replace();
  </script>

  {{-- Scripts --}}
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>