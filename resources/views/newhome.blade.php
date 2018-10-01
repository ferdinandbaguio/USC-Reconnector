<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('img/logo/Logo.ico') }}" type="image/gif" sizes="16x16">

    <!-- Main bootstrap Core files -->
    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="{{ asset('css/font/fontawesome/css/all.css') }}">
    <!-- Customized css file -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/unique/newhome.css') }}">
    <!-- Title here -->
    <title>Welcome! | Reconnector</title>
  </head>


  <body>

    <div class="container-fluid FirstContainer p-0 ">
    </div>

    <div class="container-fluid SecondContainer p-0">

      <div class="container p-0 mt-3">
        <nav class="navbar navbar-expand-md w-100">
          <div class="container">
            <a class="navbar-brand mr-auto" href="/newhome">
              <img src="{{ asset('img/logo/studrec2.png') }}" class="logoPic" alt="Logo">
            </a>
            
            <a class="navbar-brand ml-auto" href="#loginModal" data-toggle="modal">
              <p class="fontRoboto mb-0 bellShake" style="color: #CECFD5; font-size: 17.5px;"><i class="fas fa-feather-alt"></i> Login/Sign In </p>
            </a>

          </div>
        </nav>

        <div class="container-fluid mt-5">
        <div class="row">
          <div class="col-12 mt-5">
          <img src="/img/logo/Logo.png" class="d-block mx-auto" width="180px">
          </div>
        </div>
        <div class="row">
        <div class="col-12">
          <h1 class="display-4 text-white text-center">Welcome to Student-Reconnector!</h1>
        </div>
        </div>
        <div class="row">
          <button type="button" class="btn btn-outline-light ml-auto mr-2">Jonas Gwapo</button>
          <button type="button" class="btn btn-outline-light mr-auto">Join us now!</button>
        </div>
        </div>
      </div>

      

    </div>


    <div class="container-fluid" style="height: 200px;">
      Jonas is not done :D
    </div>



    <!-- LOGIN MODAL start -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modalWidth" role="document">
    <div class="modal-content modalBg"> 
        <div class="modal-header mt-0 mb-0" style="border-bottom:0px;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <!-- Modal body start -->
        <div class="row">
        <div class="col-12 col-md mb-5">
            <center>
            <img src="{{ asset('img/logo/USC-Reconnector.png') }}" 
            style="width: auto;">
            <h1 class="signInHeader"> Sign In </h1>
            <form autocomplete="off" action="{{route('login.submit')}}" method="POST">
                {{ csrf_field() }}
                <div class="col-md-12">
                    <span data-feather="user" class="logFeather"> </span>
                    <input type="text" placeholder="ID Number" name="idnumber" id="loginInput">
                </div>
                <div class="col-md-12">
                    <span data-feather="lock" class="logFeather"> </span>
                    <input type="password" placeholder="Password" name="password" id="loginInput">
                </div>
                <div>
                    <input type="submit" value="Login" id="loginButton" class="mt-5" ><br>
                </div>
                <div>
                    <input type="button" value="Join Us" id="loginButton" class="mt-5"
                    onclick="window.location='/request/create';" ><br>
                </div>
            </form>
            </center>
        </div> <!-- col-12 col-md mb-5 -->
        </div> <!-- row -->
        </div> <!-- modal-body -->
        <!-- Modal body end -->
        <!--<div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
    </div> <!-- modal-content modalBg -->
    </div> <!-- modal-dialog modal-lg modalWidth -->
    </div> <!-- modal fade -->
    <!-- LOGIN MODAL end  --> 

    

    
    

















    <!-- Optional JavaScript -->


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
  </html>