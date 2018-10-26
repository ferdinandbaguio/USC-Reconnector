<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/logo/LogoBlue.png') }}" type="image/gif" sizes="16x16">

    <!-- Main bootstrap Core files -->
    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="{{ asset('css/font/fontawesome/css/all.css') }}">
    <!-- Customized css file -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/unique/newhome.css') }}">
    <!-- Title here -->
    <title>Welcome | Reconnector</title>
    <style type="text/css">
      @font-face {font-family: 'Roboto';src: url('{{ asset('css/font/Roboto/Roboto-Light.ttf')}}');}
    </style>
    
  <!-- jQuery first, then Popper.js, then Bootstrap JS, then Customized JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </head>


  <body>
<!-- @json($errors->all()) -->
    <div class="container-fluid FirstContainer p-0 ">
    </div>
    <!-- NAVIGATION BAR AND WELCOMING -->
    <div class="container-fluid SecondContainer p-0">
      <div class="container p-0 mt-3">
        <nav class="navbar navbar-expand-md w-100">
          <div class="container">
              <img src="img/logo/studrec2.png" class="logoPic navbar-brand" alt="Logo">
            
            <a class="navbar-brand ml-md-auto" href="#loginModal" data-toggle="modal">
              <p class="mb-0 bellShake loginBtn"><i class="fas fa-feather-alt"></i> Login</p>
            </a>
           
            <a class="navbar-brand  ml-auto ml-md-0" href="#registerModal" data-toggle="modal" >
              <p class="mb-0 bellShake loginBtn"><i class="far fa-address-book"></i> Register</p>
            </a>
        
          </div>
        </nav>

        <div class="container-fluid mt-md-5">
          <div class="row pt-xl-5">
            <div class="col-12">
            <img src="/img/logo/LogoBlue.png" class="d-block mx-auto" width="240px">
            </div>
          </div>
          <div class="row px-sm-2">
            <h1 class="display-4 text-white mx-auto text-center numCount">Welcome to Student-Reconnector!</h1>
          </div>
        </div>
        
      </div>
    </div>
    <!-- NAVIGATION BAR AND WELCOMING END-->


    <!-- APPLICATION FEATURES -->
    <div class="container-fluid bgDivs pt-0">
      <div class="row">
        <h1 class="display-5 mt-5 text-center px-2 mx-auto">Application <label style="color:#70CFDA">Features<label></h1>
      </div>
      <div class="row pb-4">
        <div class="col-md-4 pt-5">
          <div class="row">
            <i class="fas fa-user-tie featureIcons mx-auto"></i>
          </div>
          <div class="row mt-4">
            <h5 class="mx-auto"> Profiling </h5>
          </div>
          <div class="row mt-2 w-75 mx-auto">
            <p class="mx-auto featMutedTxt" align="center">Profiling is one of our features. We have 3 kinds of profiling. Profile for the teacher, the students, and the alumni as well. Profiling is used to discover the important informations of each individuals.</p>
          </div>
        </div>

        <div class="col-md-4 pt-5">
          <div class="row">
            <i class="fas fa-comments mx-auto featureIcons"></i>
          </div>
          <div class="row mt-4">
            <h5 class="mx-auto"> Communication </h5>
          </div>
          <div class="row mt-2 w-75 mx-auto">
            <p class="mx-auto featMutedTxt" align="center">Communication is one of our features. We have group conversations such as a chat for the class, chat for alumni on the same graduation date/batch.</p>
          </div>
        </div>

        <div class="col-md-4 pt-5">
          <div class="row">
            <i class="fas fa-map-marked-alt mx-auto featureIcons"></i>
          </div>
          <div class="row mt-4">
            <h5 class="mx-auto"> Alumni Tracking </h5>
          </div>
          <div class="row mt-2 w-75 mx-auto">
            <p class="mx-auto featMutedTxt" align="center">Alumni Tracking is one of our features. Good informations such as knowing the alumni employment status and keep track of their job histories.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- APPLICATION FEATURES END-->


    <!-- COUNTS -->
    <div class="container-fluid pt-3" onscroll="isElementInViewport()" style="background: #207F8A">
      <div class="row py-5">
        <div class="col-md-3">
          <div class="row">
            <label class="display-3 text-white mx-auto counter"> <span class="count numCount">1029 </span></label>
          </div>
          <div class="row">
            <div class="col-4 mx-auto pt-3 borderBelowCount">
            <p class="text-white text-center numCount"> Accounts Approved </p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="row">
            <label class="display-3 text-white mx-auto counter"> <span class="count numCount">800 </span></label>
          </div>
          <div class="row">
            <div class="col-4 mx-auto pt-3 borderBelowCount">
            <p class="text-white text-center numCount"> Alumni Tracked </p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="row">
            <label class="display-3 text-white mx-auto counter"> <span class="count numCount">3029 </span></label>
          </div>
          <div class="row">
            <div class="col-4 mx-auto pt-3 borderBelowCount">
            <p class="text-white text-center numCount"> Job Offers </p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="row">
            <label class="display-3 text-white mx-auto counter"> <span class="count numCount">329 </span></label>
          </div>
          <div class="row">
            <div class="col-4 mx-auto pt-3 borderBelowCount">
            <p class="text-white text-center numCount"> Announcements </p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- COUNTS END -->
    

    <!-- FOOTER -->
    <footer class="container-fluid pt-5 pb-2" style="background: url(/img/div_bgs/abg.jpg);background-size: cover;">
        <div class="row pb-5">
          <div class="col-12 col-md-3 mb-5">
            <img src="img/logo/studrec3.png" class="d-block mx-auto" width="200px" alt="Logo">
          </div>

          <div class="col-6 col-md-3">
            <h3 class="footTxtColor mb-3"> About </h3>
            <ul class="list-unstyled">
              <li> <a href="" class="footTxtColor"> <i class="fas fa-angle-right"></i> Profiling Modules </a> </li>
              <li> <a href="" class="footTxtColor"> <i class="fas fa-angle-right"></i> Web Application </a> </li>
              <li> <a href="" class="footTxtColor"> <i class="fas fa-angle-right"></i> Alumni Tracking </a> </li>
              <li> <a href="" class="footTxtColor"> <i class="fas fa-angle-right"></i> The University </a> </li>
            </ul>
          </div>
          <div class="col-6 col-md-3">
            <h3 class="footTxtColor"> Tools </h3>
            <ul class="list-unstyled">
              <li> <a href="" class="footTxtColor"> <i class="fas fa-angle-right"></i> Laravel </a> </li>
              <li> <a href="" class="footTxtColor"> <i class="fas fa-angle-right"></i> JavaScript </a> </li>
              <li> <a href="" class="footTxtColor"> <i class="fas fa-angle-right"></i> Bootstrap 4 </a> </li>
            </ul>
          </div>
          <div class="col-6 col-md-3">
            <h3 class="footTxtColor"> Developers </h3>
            <ul class="list-unstyled">
              <li> <a href="" class="footTxtColor"> <i class="fas fa-angle-right"></i> Jonas Paquibot </a> </li>
              <li> <a href="" class="footTxtColor"> <i class="fas fa-angle-right"></i> Bryle Baguio </a> </li>
              <li> <a href="" class="footTxtColor"> <i class="fas fa-angle-right"></i> Lecarre Gavini </a> </li>
              <li> <a href="" class="footTxtColor"> <i class="fas fa-angle-right"></i> Melody Cuenco </a> </li>
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="container containerBelow">
            <div class="row mt-2">
                <i class="fab fa-facebook-square ml-md-auto ml-3 socialLogoSize"></i>
                <i class="fab fa-twitter socialLogoSize"></i>
                <i class="fab fa-instagram socialLogoSize"></i>
                <label class="mr-md-auto ml-3 mt-1"> <i class="far fa-copyright"></i>Copyright by Jonas The Maker 2018 </label>
            </div>
          </div>
        </div>
    </footer>

    <!-- FOOTER END-->

    <!-- CAROUSEL START -->
    <div id="carouselExampleIndicators" class="carousel slide w-100 mx-auto collapse" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-block w-100" style="background: url(/img/homepage_images/Pic5.jpg);background-position: center;background-size: cover; height:400px">
            </div>
            <div class="carousel-caption d-none d-md-block">
              <h5>JONAS GWAPO</h5>
              <p>JONAS GWAPO</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-block w-100" style="background: url(/img/homepage_images/Pic6.jpg);background-position: center;background-size: cover; height:400px">
            </div>
            <div class="carousel-caption d-none d-md-block">
              <h5>JONAS GWAPO</h5>
              <p>JONAS GWAPO</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="w-100" style="background: url(/img/homepage_images/Pic7.jpg);background-position: center;background-size: cover; height:400px">
            </div>
            <div class="carousel-caption d-none d-md-block">
              <h5>JONAS GWAPO</h5>
              <p>JONAS GWAPO</p>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- CAROUSEL END -->
    

    <!-- Modal -->

          @include('authenticate.login')        
          @include('authenticate.register')  

  </body>
  </html>
  <script>
  var msg = '{{Session::get('alert')}}';
  var exist = '{{Session::has('alert')}}';
  var msg2 = '{{Session::get('message')}}';
  var exist2 = '{{Session::has('message')}}';
  if(exist){
    alert(msg);
  }if(exist2){
    alert(msg2);
  }
</script>