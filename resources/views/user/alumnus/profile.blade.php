@extends('_layouts.alumnus')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/alumnus/profile.css') }}">
@endsection

@section('content')
<div class="row mt-3 mb-5" style="box-shadow:2px 2px 2px;">
  <!-- Alumni Profile Details -->
      <div class="col-sm-2 col-md-4 py-4" style="background:url('/img/div_bgs/abg.jpg');">
        <div class="card border border-light position-absolute align-middle">
          <img class="card-img-top mx-auto" src="/img/homepage_images/Girl.jpg" alt="Card image" style="width: 150px;">
          <div class="card-body">
          <h4 class="card-title fontRoboto"> {{Auth::user()->full_name}} </h4>
          <p class="card-text">Location: <em> IT.Park Qualfon Building Telstra Pizza Resto Bar </em></p>
          </div>
        </div>
      </div>
  <!-- Alumni Profile Details END-->

  <!-- Alumni Map Location -->
  <div class="col-md-8 p-0">
    <!-- This is only a test map for visual purposes only no back end -->
    <div id="map" class="w-100 bg-dark">
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

<div class="row" style="position: relative;">
  <div class="col-md-8"> <!-- Job archive/history separator -->
  <!-- JOB INFORMATION -->
  <div class="row mb-5" style="box-shadow:2px 2px 2px;">
  <div class="col-md-12 border-bottom shadow-lg divInfoBg">
    <div class="row p-3"> 
      <h5 class="fontRoboto"><i class="fas fa-user-md"></i> Personal Information (Alumnus)</h5>
    </div>
    <div class="row px-3 mb-3">
      <div class="col-sm-12 col-md-6 p-0">
        <h6  class="d-inline"> Name:</h6> <p class="fontRoboto d-inline">{{Auth::user()->full_name}}</p>
      </div>
      <div class="col-sm-12 col-md-6 p-0">
        <h6 class="d-inline"> ID Number:</h6> <p class="fontRoboto d-inline"> {{Auth::user()->idnumber}} </p>
      </div>
    </div>
    <div class="row px-3 mb-3">
      <div class="col-sm-12 col-md-6 p-0">
        <h6 class="d-inline"> Course Taken: </h6> <p class="fontRoboto d-inline">Bachelor in Information and Communication Technology</p>
      </div>
      <div class="col-sm-12 col-md-6 p-0">
        <h6 class="d-inline"> Batch Graduated:</h6> <p class="fontRoboto d-inline"> March 2018 </p>
      </div>
    </div> 
    <div class="row px-3 mb-3">
      <div class="col-sm-12 col-md-6 p-0">
        <h6 class="d-inline"> Email:</h6> <p class="fontRoboto d-inline"> jonasgwapo@gmail.com </p>
      </div>
      <div class="col-sm-12 col-md-6 p-0">
        <h6 class="d-inline"> Phone Number:</h6> <p class="fontRoboto d-inline"> 0901001010 </p>
      </div>
    </div>

    <div class="row px-3 mb-3">
      <div class="col-sm-12 col-md-6 p-0">
        <h6 class="d-inline"> Date of Birth:</h6> <p class="fontRoboto d-inline"> 20134497 </p>
      </div>
      <div class="col-sm-12 col-md-6 p-0">
        <h6 class="d-inline"> Gender:</h6> <p class="fontRoboto d-inline"> Not Specified </p>
      </div>
    </div>
  </div>
  </div>
  </div>

  <div class="col-md-1">
  </div>

  <!-- Job archive/history container-->
  <div class="col-md-3 mb-3 divInfoBg d-block archiveContainer" style="box-shadow:2px 2px 2px;"> 
    <div class="row mt-3">
      <div class="col-md-12">
        <h5 class="fontRoboto"><i class="fas fa-file-archive"></i> Job History </h5>
      </div>
    </div>

    <div class="row mt-2">
      <div class="col-md-12">
        <ul class="list-unstyled">
          <li> <img src="/img/company_logo/lexmark-logo.png" class="align-middle rounded-circle" width="20px">
            <a href="/alumnus/jobs" class="linkSize"> Lexmark (August 2018)</a></li>
          <li> <img src="/img/company_logo/globe.jpg" class="rounded-circle" width="20px">
            <a href="/alumnus/jobs" class="linkSize"> Globe (January 2018)</a></li>
          <li> <img src="/img/company_logo/beats.png" class="align-middle rounded-circle" width="20px">
            <a href="/alumnus/jobs" class="linkSize"> Beats (July 2018)</a></li>
          <li> <img src="/img/company_logo/lexmark-logo.png" class="align-middle rounded-circle" width="20px">
            <a href="/alumnus/jobs" class="linkSize"> Lexmark (August 2018)</a></li>
          <li> <img src="/img/company_logo/globe.jpg" class="rounded-circle" width="20px">
            <a href="/alumnus/jobs" class="linkSize"> Globe (January 2018)</a></li>
          <li> <img src="/img/company_logo/beats.png" class="align-middle rounded-circle" width="20px">
            <a href="/alumnus/jobs" class="linkSize"> Beats (July 2018)</a></li>
          <li class="mt-2"><a href="/alumnus/jobs" class="linkSize">See more...</a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection