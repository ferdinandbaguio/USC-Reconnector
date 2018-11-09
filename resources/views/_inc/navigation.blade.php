<!-- New Top Navigation Bar start -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top w-100">
    <a class="navbar-brand py-0" href="#">
      <img src="{{ asset('img/logo/studrec2.png') }}" width="180" height="60" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topNavBarToggler" aria-controls="topNavBarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-angle-double-down"></i>
    </button>
    <div class="collapse navbar-collapse" id="topNavBarToggler">
      <ul class="navbar-nav mr-auto d-md-none d-lg-none">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}"> Home </a>
        </li>
        @if(Auth::user()->userType == "Alumnus")
        <li class="nav-item">
          <a class="nav-link" href="{{ route('alumnus.profile') }}"> Profile </a>
        </li>
        @endif
        @if(Auth::user()->userType == "Student")
        <li class="nav-item">
          <a class="nav-link" href="{{ route('student.profile') }}"> Profile </a>
        </li>
        @endif
        @if(Auth::user()->userType == "Teacher")
        <li class="nav-item">
          <a class="nav-link" href="{{ route('teacher.profile') }}"> Profile </a>
        </li>
        @endif
        @if(Auth::user()->userType == "Alumnus")
        <li class="nav-item">
          <a class="nav-link" href="{{ route('alumnus.jobs') }}"> Jobs </a>
        </li>
        @endif
        @if(Auth::user()->userType == "Teacher"||Auth::user()->userType == "Student")
        <li class="nav-item">
          <a class="nav-link" href="/student/class"> Class </a>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" href="#"></i>Communicate</a>
        </li>
      </ul>
      <hr>
      <ul class="navbar-nav mr-1">
        <li class="nav-item dropdown active">
          <a class="nav-link ownerLink" id="ownerLinkDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="/storage/user_img/{{Auth::user()->picture}}" class="rounded-circle bg-light" width="20px"> 
            {{Auth::user()->full_name}} <i class="fas fa-caret-down"></i> 
          </a>
          <div class="dropdown-menu dropdown-menu-left" style="left:0" aria-labelledby="ownerLinkDropdown">
              <a class="dropdown-item" href="{{ url('authenticate/passwords/changepassword/'.Auth::user()->id) }}"><i class="fas fa-bug"></i> Change Password </a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav lDivider">
			{!! Form::open(['url' => route('logout'), 'method' => 'POST', 'class' => 'logout', 'id' => 'logout-form']) !!}
			{!! Form::close() !!}

      <li class="nav-item">
				<a class="btn text-white signOutBtn pl-0" href="#" onclick="event.preventDefault();
         document.getElementById('logout-form').submit();" >Sign out <i class="fas fa-walking"></i> </a>
			</li>
			
		</ul>
      </div>
  </nav> <!-- Top Navigation Bar end -->
  
  
  <style type="text/css">
  .lDivider{
    border-left:1px solid #DFDFDF;
    padding-left: 10px;
  }
  @media (max-width: 767.98px) { 
  .lDivider{
    border-left:0px;
    padding-left: 0px;
  }
   }
  </style>