@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/alumnus/profile.css') }}">
@endsection

@section('content')

<!-- NEW -->
<div class="row fontRoboto mb-5">

  <!-- LEFT BOX -->
  <div class="col-md-4 p-4 align-self-start" style="background: url('/img/div_bgs/abg.jpg');">
    <div class="row">
      <div class="col-12">
        <img src="{{ asset('/img/homepage_images/Boy2.jpg') }}" width="100%">
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-12">
        <h5> {{Auth::user()->full_name}} </h5>
        <h6 class="text-muted"> {{Auth::user()->idnumber}} </h6>

        <p class="mt-3 mb-0"> Bachelor of Science in Information in Communication Technology </p>
        <p class="m-0"> Year level: {{Auth::user()->yearLevel}}  </p>
        <p class="m-0"> Birthday: February 31, 2018 </p>
        <p class="m-0"> Sex: {{Auth::user()->sex}} </p>
        <p class="m-0"> Batch Graduated: March 2018 </p>

      </div>
    </div>
  </div>
  <!-- LEFT BOX END -->

  <!-- RIGHT BOX -->
  <div class="col-md-8 p-4 pt-5 align-self-start" style="background-color: white;">
    <div class="row">
      <div class="col-md-5">
        <h5 class="text-muted"> Description </h5>
      </div>
    </div>
    <div class="row mt-1">
      <div class="col-md-12">
        <p> {{Auth::user()->description}} </p>
      </div>
    </div>

    <div class="row mt-2">
      <div class="col-12">
        <h5 class="text-muted"> Location <i class="fas fa-search-location"></i></h5> 
      </div>
    </div>
    <div class="row mt-1">
      <div class="col-md-12">
        <!-- This is only a test map for visual purposes only no back end -->
        <div id="map" class="w-100" style="background: url(/img/alt_imgs/GoogleMap.jpg); height: 300px;">
        </div>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlyUWOZTrGwtkrOFAV6-ejOmll5VuhUbE&callback=initMap">
        </script>
        <script>
          initMap();
          function initMap() {
            // The location of San Carlos
            var SanCarlosTalamban = {lat: 10.3304499, lng: 123.9073923};
            // The map, centered at San Carlos
            var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 16, center: SanCarlosTalamban});

            // The marker, positioned at San Carlos
            var iconPNG = {
                    url: "/img/others/mapPin.png", // url
                    scaledSize: new google.maps.Size(50, 50), // scaled size
                    };
            var marker = new google.maps.Marker({
              position: SanCarlosTalamban,
              animation: google.maps.Animation.BOUNCE,
              //icon: iconPNG,
              map: map
             });
            // The circle area by jonas
              var specifiedLoc = new google.maps.Circle({
                center: SanCarlosTalamban,
                radius: 220,
                strokeColor: "#616161",
                strokeOpacity: 0.5,
                strokeWeight: 2,
                fillColor: "#616161",
                fillOpacity: 0.4,
                scale:10
              });
              specifiedLoc.setMap(map);
              var infowindow = new google.maps.InfoWindow({
                content: "IT.Park Qualfon Building Telstra Pizza Resto Bar",
              });
              infowindow.open(map,marker);
          }
        </script>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-5">
        <h5 class="text-muted"> Skills
      </div>
    </div>
    <div class="row mt-1">
    	
			<div class="col-md-12">
				<p class="m-0">PHP</p>
				<div class="progress">
				  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"> 50% </div>
				</div>
			</div>
		
    </div>

    <div class="row mt-5">
      <div class="col-md-5">
        <h5 class="text-muted"> Achievements 
      </div>
    </div>
    <div class="row mt-1">
      <div class="col-md-12">
        
				<p><i class="fas fa-trophy" style="color: #EEEB4D"></i> Alumni of the Year(2019)</p>
				
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-12">
        <h5 class="text-muted">Job History </h5>
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
  <!-- RIGHT BOX END -->


</div>
<!-- NEW -->
@endsection