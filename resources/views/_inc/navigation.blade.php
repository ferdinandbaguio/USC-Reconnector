

<!-- New Top Navigation Bar start -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top w-100">
    <a class="navbar-brand" href="/alumnus">
      <img src="{{ asset('img/logo/Logo.ico') }}" width="40" height="40">
      <img src="{{ asset('img/logo/USC-Reconnector.png') }}">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topNavBarToggler" aria-controls="topNavBarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-angle-double-down"></i>
    </button>
    <div class="collapse navbar-collapse" id="topNavBarToggler">
      <ul class="navbar-nav mr-auto d-md-none d-lg-none">
        <li class="nav-item">
          <a class="nav-link" href="/alumnus"> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/alumnus/profile"> Profile </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="alumnus/jobs"> Jobs </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></i>Communicate</a>
        </li>
      </ul>
      <hr>
      <ul class="navbar-nav mr-1">
        <li class="nav-item dropdown active">
          <a class="nav-link ownerLink" id="ownerLinkDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="/img/homepage_images/Girl.jpg" class="rounded-circle" width="20px"> 
            {{Auth::user()->full_name}} <i class="fas fa-caret-down"></i> 
          </a>
          <div class="dropdown-menu dropdown-menu-left" style="left:0" aria-labelledby="ownerLinkDropdown">
              <a class="dropdown-item" href="/login"><i class="fas fa-cog"></i> Settings </a>
              <a class="dropdown-item" href="/login"><i class="fas fa-bug"></i> Report Bugs </a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav lDivider">
        <li class="nav-item active p-0 m-0">
          <a class="nav-link signOutBtn" href="/login"> Sign Out <i class="fas fa-walking"></i> </a>
        </li>

        <!-- THE SIGN OUT WITH THE BACK END
        <li class="nav-item active">
            @if (Route::has('login'))
                    @auth
                        {!! Form::open(['url' => route('logout'), 'method' => 'POST']) !!}
                        <div class="nav-link active signOutBtn ml-2">
                            <i class="fas fa-walking"></i>
                            {!! Form::submit('Sign Out') !!}
                        </div>
                        {!! Form::close() !!}
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
            @endif
        </li>
        -->

      </ul>
      </div>
  </nav> <!-- Top Navigation Bar end -->

  
  <style type="text/css">
  .lDivider{
    border-left:1px solid gray;
  }
  @media (max-width: 767.98px) { 
  .lDivider{
    border-left:0px;
  }
   }
  </style>