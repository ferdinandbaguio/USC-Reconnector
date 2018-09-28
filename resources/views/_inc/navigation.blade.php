<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top w-100">

<a class="navbar-brand" href="#">
    <img src="{{ asset('img/logo/Logo.ico') }}" width="40" height="40" 
    style="margin-right:10px;" alt="Logo">
    <img src="{{ asset('img/logo/USC-Reconnector.png') }}" style="width: auto;" alt="USC-Reconnector">
</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topNavBarToggler" 
    aria-controls="topNavBarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-angle-double-down"></i>
</button>

<div class="collapse navbar-collapse" id="topNavBarToggler">

    <hr>
    <ul class="navbar-nav ml-auto mr-1">
        <li class="nav-item dropdown active">
            <a class="nav-link ownerLink" id="dropdown03" data-toggle="dropdown" 
            aria-haspopup="true" aria-expanded="false">
                <img src="/img/homepage_images/Girl.jpg" class="rounded-circle" width="20px">
                </i> {{Auth::user()->full_name}} <i class="fas fa-caret-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-left" style="left:0" aria-labelledby="dropdown03">
                <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Settings </a>
                <a class="dropdown-item" href="#"><i class="fas fa-bug"></i> Report Bugs </a>
            </div>
        </li>
    </ul>
    <ul class="navbar-nav" style="border-left:1px solid gray">
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
    </ul>

</div>

</nav>