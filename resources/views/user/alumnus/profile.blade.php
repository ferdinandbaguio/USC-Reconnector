@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/alumnus/profile.css') }}">
@endsection

@section('content')

<div class="row">
  <div class="alert alert-danger" role="alert">
  Setup your alumni details now to avoid feature restrictions in the website. <a href="{{ route('alumnus.form') }}">Click here!</a>
  </div>
</div>

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
        <h5 class="text-muted"> Description <a href="#descModal" data-toggle="modal"> <i class="far fa-edit text-muted"></i> </a></h5>
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
        <small>IT.Park Qualfon Building Telstra Pizza Resto Bar</small>
      </div>
    </div>
    <div class="row mt-1">
      <div class="col-md-12">
        <!-- This is only a test map for visual purposes only no back end -->
        <div id="map" class="w-100" style="/*background: url(/img/alt_imgs/GoogleMap.jpg);*/ height: 300px;">
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
            document.getElementById('map'), {zoom: 17, center: SanCarlosTalamban});
            // The marker, positioned at San Carlos
            //var marker = new google.maps.Marker({position: SanCarlosTalamban, map: map});
          }
        </script>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-5">
        <h5 class="text-muted"> Skills <i class="fas fa-bolt"></i></h5>
      </div>
    </div>
    <div class="row mt-1">
      <div class="col-md-12">
        <p class="m-0">Mathematics</p>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> 100% </div>
        </div>
      </div>
      <div class="col-md-12">
        <p class="m-0">Cooking</p>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 10%"> 10% </div>
        </div>
      </div>
      <div class="col-md-12">
        <p class="m-0">JavaScript</p>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"> 75% </div>
        </div>
      </div>
      <div class="col-md-12">
        <p class="m-0">PHP</p>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> 90% </div>
        </div>
      </div>
      <div class="col-md-12 mt-4">
        <button type="button" class="btn addSkillBtn" data-toggle="modal" data-target="#addSkillModal">
          <i class="fas fa-plus-circle"></i> Add a Skill
        </button>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-5">
        <h5 class="text-muted"> Achievements <i class="fas fa-trophy"></i></h5>
      </div>
    </div>
    <div class="row mt-1">
      <div class="col-md-12">
        <p><i class="fas fa-trophy" style="color: #EEEB4D"></i> Dean's Lister in First Year 1st Semester  </p>
        <p><i class="fas fa-trophy" style="color: #EEEB4D"></i> SAS Basketball Champion</p>
        <p><i class="fas fa-trophy" style="color: #EEEB4D"></i> Quiz Bowl 2nd Runner Up</p>
        <p><i class="fas fa-trophy" style="color: #EEEB4D"></i> Champion on E-sports Gaming </p>
      </div>
      <div class="col-md-12 mt-2">
        <button type="button" class="btn addAchvBtn" data-toggle="modal" data-target="#addAchvModal">
          <i class="fas fa-plus-circle"></i> Add an achievement
        </button>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-12">
        <h5 class="text-muted">Job History <i class="fas fa-file-archive"></i> </h5>
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

  <!-- EDIT DESCRIPTION MODAL -->
  <div class="modal fade" id="descModal" tabindex="-1" role="dialog" aria-labelledby="descModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body mt-4">
          {!! Form::open(['route' => 'UpdateDescription', 'method' => 'PATCH']) !!}
          @csrf         
            <div class="form-group">
              <label> Description </label>
              <input type="text" name="id" value="{{Auth::user()->id}}" hidden="">
              <textarea class="form-control" name="description" placeholder="Enter description. . .">{{Auth::user()->description}}</textarea>
            </div>          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" value="submit" name="updateDesc" class="btn btn-secondary">
        <i class="fas fa-sort-amount-up"></i> Update Description
      </button>
      {!! Form::close() !!}     
        </div>
      </div>
    </div>
  </div>
  <!-- EDIT DESCRIPTION MODAL END -->

  <!-- ADD SKILL MODAL -->
  <div class="modal fade" id="addSkillModal" tabindex="-1" role="dialog" aria-labelledby="addSkillModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body mt-4">
          <form method="POST" action="{{route('addSkill')}}">
            {{csrf_field()}}
            <div class="form-group">
              <label><i class="fas fa-football-ball" style="color: #3CAEC1"></i> Title of Skill</label>
              <input type="text" name="id" value="{{Auth::user()->id}}" hidden="">
              <input type="text" name="skillName" class="form-control" placeholder="Skill Title">
            </div>
            <div class="form-group">
              <label>Rate your skill</label>
              <center><output id="rangeValue">50</output>%</center>
              <input type="range" name="skillPercent" min="1" max="100" id="range" value="50" oninput="rangeValue.value = range.value">           
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn addSkillBtn">
        <i class="fas fa-plus-circle"></i> Add Skill
      </button>
      </form>
        </div>
      </div>
    </div>
  </div>
  <!-- ADD SKILL MODAL END -->


  <!-- ADD ACHIEVEMENT MODAL -->
  <div class="modal fade" id="addAchvModal" tabindex="-1" role="dialog" aria-labelledby="addAchvModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body mt-4">
          <form method="POST" action="{{route('addAch')}}">
            {{csrf_field()}}
            <div class="form-group">
              <label><i class="fas fa-trophy" style="color: #EEEB4D"></i> Title of Achievement</label>
              <input type="text" name="achTitle" class="form-control" placeholder="Achievement Title">
            </div>
            <div class="form-group">
              <label>Date Acquired</label>
              <input type="text" name="achYear" class="form-control" placeholder="Example: 2009">
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn addAchvBtn">
        <i class="fas fa-plus-circle"></i> Add achievement
      </button>
      </form>
        </div>
      </div>
    </div>
  </div>
  <!-- ADD ACHIEVEMENT MODAL END -->

</div>
<!-- NEW -->
@endsection