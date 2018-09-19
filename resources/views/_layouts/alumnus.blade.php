<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font/roboto.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font/fontawesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/alumnus/profile.css') }}">

    {{-- App Name is 'Student - Reconnector' --}}
    <title>{{ config('app:name') }}</title>
</head>

<body>

  @include('_inc.navigation')
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
  
  {{-- Scripts --}}
  <script src="{{ asset('js/extra/feather.min.js') }}">
    feather.replace();
  </script>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/extra/popper.min.js') }}"></script>
  <script src="{{ asset('js/extra/jquery-3.3.1.slim.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/unique/arid.min.js') }}"></script>

</body>
</html>