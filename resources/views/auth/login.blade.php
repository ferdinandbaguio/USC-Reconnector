@extends('layouts.app_login')

@section('content')
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
            <img src="//txt-dynamic.static.1001fonts.net/txt/dHRmLjMyLmZlZmJmYi5TbTl1WVhNZ1IzZGhjRzgsLjAA/blackchancery.regular.png" 
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
@endsection
