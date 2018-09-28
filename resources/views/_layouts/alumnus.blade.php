<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('img/logo/Logo.ico') }}" type="image/gif" sizes="16x16">
    
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/font/roboto.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/unique/alumnus/profile.css') }}">

    {{-- App Name is 'Student - Reconnector' --}}
    <title>{{ config('app.name', 'Student - Reconnector') }}</title>
</head>

<body>

  @include('_inc.navigation')
  <div class="container-fluid contentContainer">
  <div class="container">
      @include('_inc.messages')
      @yield('content')
  </div>
  </div>

  {{-- Side Navigation --}}
  <div class="sideDiv d-md-block d-lg-block d-none" onmouseleave="deToggle()">
  <div class="container-fluid">
    <div class="row mt-5 rowSide">
    </div>
    <a href="/alumnus" class="text-white" id="hyperlink">
      <div class="row hyperlink rowSide">
        <div class="col-8 mt-3"> 
          <h6 class="fontRoboto">Home</h6>
        </div>
        <div class="col-4 mt-2">
          <i class="fas fa-home text-white" style="font-size:33px;"></i>
        </div>
      </div>
    </a>
    <a href="/alumnus/profile" class="text-white" id="hyperlink">
      <div class="row mt-4 hyperlink rowSide">
        <div class="col-8 mt-3">
          <h6 class="fontRoboto">Profile</h6>
        </div>
        <div class="col-4 mt-2">
          <i class="fas fa-address-card text-white" style="font-size:33px;"></i>
        </div>
      </div>
    </a>
    <a href="/alumnus/jobs" class="text-white" id="hyperlink">
      <div class="row mt-4 hyperlink test rowSide">
          <div class="col-8 mt-3 sideNavLink">
            <h6 class="fontRoboto">Jobs
          </div>
          <div class="col-4 mt-2">
            <i class="fas fa-hand-holding-usd text-white" style="font-size:33px;"></i>
          </div>
      </div>
    </a>
    <a href="/alumnus/communicate" class="text-white" id="hyperlink">
      <div class="row mt-4 hyperlink rowSide">
        <div class="col-8 mt-3">
          <h6 class="fontRoboto">Communication</h6>
        </div>
        <div class="col-4 mt-2">
          <i class="fas fa-american-sign-language-interpreting text-white" style="font-size:33px;"></i>
        </div>
      </div>
    </a>
    <div class="row mt-xs-0 rowSide">
    </div>
  </div>
  </div>
  {{-- End Side Navigation --}}
  
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