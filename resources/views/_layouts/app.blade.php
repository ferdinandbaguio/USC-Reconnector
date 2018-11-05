<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('img/logo/Logo.ico') }}" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('css/unique/alumnus/topsidenav.css') }}">

    <!-- Not working css, commented for now -->
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('css/font/fontawesome/css/all.css') }}">
    <!-- CDN Links for FONT ROBOTO -->

    <style type="text/css">
    @font-face {font-family: 'Roboto';src: url('{{ asset('css/font/Roboto/Roboto-Light.ttf')}}');}
    </style>

    <!-- ONLINE CDN FOR FONTAWESOME & FONT -------
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet"> -->
    

    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}">
    
    <!-- Yielded css for specific pages -->
    @yield('header')

    <title>{{ Auth::user()->firstName }} {{ Auth::user()->lastName }} | {{Auth::user()->userType}}</title>
</head>

<body>

  @include('_inc.navigation')

  
  <div class="container-fluid contentContainer">
  <div class="container">
      
      @yield('content')
  </div>
  </div>

  {{-- Side Navigation --}}
  <div class="sideDiv d-md-block d-lg-block d-none rounded-bottom">
    <div class="container-fluid pt-5">
      <a href="{{ route('home') }}" class="text-white" id="hyperlink">
        <div class="row hyperlink rowSide mt-5">
          <div class="col-8 mt-3"> 
            <h6 class="fontRoboto">Home</h6>
          </div>
          <div class="col-4 mt-2">
            <i class="fas fa-home text-white" style="font-size:33px;"></i>
          </div>
        </div>
      </a>
      @if(Auth::user()->userType == "Alumnus")
      <a href="/alumnus/profile" class="text-white" id="hyperlink">
      @endif
      @if(Auth::user()->userType == "Student")
      <a href="{{route('student.profile')}}" class="text-white" id="hyperlink">
      @endif
      @if(Auth::user()->userType == "Teacher")
      <a href="{{route('teacher.profile')}}" class="text-white" id="hyperlink">
      @endif
        <div class="row mt-4 hyperlink rowSide">
          <div class="col-8 mt-3">
            <h6 class="fontRoboto">Profile</h6>
          </div>
          <div class="col-4 mt-2">
            <i class="fas fa-address-card text-white" style="font-size:33px;"></i>
          </div>
        </div>
      </a>
      @if(Auth::user()->userType == "Alumnus")
      <a href=" {{ route('alumnus.jobs') }}" class="text-white" id="hyperlink">
        <div class="row mt-4 hyperlink test rowSide">
            <div class="col-8 mt-3 sideNavLink">
              <h6 class="fontRoboto">Jobs
            </div>
            <div class="col-4 mt-2">
              <i class="fas fa-hand-holding-usd text-white" style="font-size:33px;"></i>
            </div>
        </div>
      </a>
      @endif

      @if(Auth::user()->userType == "Student" || Auth::user()->userType == "Teacher")
      <a class="text-white" href="/student/class" id="hyperlink">
        <div class="row mt-4 hyperlink test rowSide">
            <div class="col-8 mt-3">
              <h6 class="fontRoboto">Class</h6>
            </div>
            <div class="col-4 mt-2">
              <i class="fas fa-boxes text-white" style="font-size:33px;"></i>
            </div>
        </div>
      </a>


      <!-- <div class="col-12 collapse p-0" id="classDropdown">
        <div class="container-fluid">
          <ul class="list-unstyled text-white fontRoboto">
            <a href="/student/class" class="text-white"><li>ENG 21</li></a>
            <a href="/student/class" class="text-white"><li>PSHYCOLOGY ENCONOMIC 5</li></a>
            <a href="/student/class" class="text-white"><li>ICT 210</li></a>
            <a href="/student/class" class="text-white"><li>NSTP 32</li></a>
            <a href="#addClassModal" class="text-white" data-toggle="modal"><li><i class="fas fa-plus"></i> Add a class</li></a>
          </ul>
        </div>
      </div> -->
      @endif

      <a href="{{ route('alumnus.communicate') }}" class="text-white" id="hyperlink">
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
  {{-- End Side Navigation --}}
  


  {{-- Scripts --}}
  <!-- Jonas Customized JS -->
  <script src="{{ asset('js/app.js') }}"></script>


</body>
</html>