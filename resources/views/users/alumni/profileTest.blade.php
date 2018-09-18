@extends('_layouts.alumnus')

@section('content')
<div class="row mt-3 mb-5">

      <!-- Alumni Profile Details -->
      <div class="col-md-4 py-3 mb-3" style="background:url('/img/div_bgs/abg.jpg');">
        <div class="card border border-light">
          <img class="card-img-top mx-auto" src="/img/homepage_images/Girl.jpg" alt="Card image" style="width: 150px;">
          <div class="card-body">
          <h4 class="card-title fontRoboto">Romeo X. Yapzor</h4>
          <p class="card-text">Location: <em> IT.Park Qualfon Building Telstra Pizza Resto Bar </em></p>
          </div>
        </div>
      </div>
      <!-- Alumni Profile Details END-->

      <!-- Alumni Map Location -->
      <div class="col-md-8 alMapDiv">
        <!-- This is only a test map for visual purposes only no back end -->
        <div id="map" class="w-100 bg-dark" style="height: 400px;">
        </div>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlyUWOZTrGwtkrOFAV6-ejOmll5VuhUbE&callback=initMap">
        </script>
        <script>
          function initMap() {
            // The location of San Carlos
            var SanCarlosTalamban = {lat: 10.3304499, lng: 123.9073923};
            // The map, centered at San Carlos
            var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 17, center: SanCarlosTalamban});
            // The marker, positioned at San Carlos
            //var marker = new google.maps.Marker({position: SanCarlosTalamban, map: map});
          }
        </script>
      </div>
      <!-- Alumni Map Location END-->

    </div>

    <!-- JOB INFORMATION -->
    <div class="row mb-5">
    <div class="col-md-8 border-bottom shadow-lg divInfoBg">
      <div class="row p-3"> 
        <h4 class="fontRoboto"><i class="fas fa-user-md"></i> Job Information </h4>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Job Title:</h6>
        </div>
        <div class="col-12 p-0">
          <h3 class="fontRoboto">Secretary of the CEO</h3>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Salary:</h6>
        </div>
        <div class="col-12 p-0">
          <h4 class="fontRoboto">15,000 - 20,000</h4>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Date Employed:</h6>
        </div>
        <div class="col-12 p-0">
          <h4 class="fontRoboto">February 31, 1973</h4>
        </div>
      </div>
    </div>
    </div>
    <!-- JOB INFORMATION END-->

    <!-- COMPANY INFORMATION -->
    <div class="row mb-5">
    <div class="col-md-8 border-bottom shadow-lg divInfoBg">
      <div class="row p-3"> 
        <h4 class="fontRoboto"><i class="fas fa-building"></i> Company Information </h4>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Company Name:</h6>
        </div>
        <div class="col-12 p-0">
          <h3 class="fontRoboto">Chooks To Go</h3>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Country:</h6>
        </div>
        <div class="col-12 p-0">
          <h4 class="fontRoboto">Transylvania Hong Kong</h4>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Address:</h6>
        </div>
        <div class="col-12 p-0">
          <h4 class="fontRoboto">IT.Park Qualfon Building Telstra Pizza Resto Bar</h4>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Description:</h6>
        </div>
        <div class="col-12 p-0">
          <p class="fontRoboto">This company is full of workers</p>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Services Offered:</h6>
        </div>
          <div class="col-12 p-0">
          <ul>
          <li> Free Food </li>
          <li> Break Time </li>
          <li> Increased Salary </li>
          </ul>
        </div>
      </div>
    </div>
    </div>
    @endsection