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
        <img src="/storage/user_img/{{Auth::user()->picture}}" class="bg-light" width="100%">
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-12">
        <h5> {{Auth::user()->full_name}} </h5>
        <h6 class="text-muted"> {{Auth::user()->idnumber}} </h6>

        <p class="mt-3 mb-0"> @if(isset(Auth::user()->course->name)){{Auth::user()->course->name}}@endif </p>
        <p class="m-0"> Year level: {{Auth::user()->yearLevel}}  </p>
        <p class="m-0"> Birthday: {{Auth::user()->birthdate}} </p>
        <p class="m-0"> Sex: {{Auth::user()->sex}} </p>

      </div>
    </div>

    <div class="row mt-3">
      <button class="btn btn-sm mx-auto editProfBtn text-white" id="editProfBtn">Edit Profile <i class="far fa-edit"></i></button>
    </div>
  </div>
  <!-- LEFT BOX END -->

  <!-- RIGHT BOX -->
  <div class="col-md-8 p-4 pt-5" style="background-color: white;">
    <div class="row">
      <div class="col-md-5">
        <h5 class="text-muted" style="font-weight: ;"> Description </h5>
      </div>
    </div>
    <div class="row mt-1">
      <div class="col-md-12">
        <p class="m-0"> {{Auth::user()->description}} </p>
        @if (Auth::user()->description == '')
        <div class="row">
          <div class="col">
            <small class="text-muted"> No data to show.</small>
          </div>
        </div>
        @endif
        <div class="editDescHolder">
        <a href="#descModal" data-toggle="modal" class="editDescBtn"> Edit <i class="far fa-edit"></i> </a>
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-12">
        <h5 class="text-muted"> Recent Job Location <i class="fas fa-search-location"></i></h5> 
        <!-- <small>IT.Park Qualfon Building Telstra Pizza Resto Bar</small> -->
      </div>
    </div>
    <div class="row mt-1">
      <div class="col-md-12">
        @if(!isset($recentJob))
        <div class="row">
          <div class="col">
            <small class="text-muted"> No data to show.</small>
          </div>
        </div>
        @else
        <div id="map" class="w-100" style="/*background: url(/img/alt_imgs/GoogleMap.jpg);*/ height: 300px;">
        </div>
        @endif
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-5">
        <h5 class="text-muted"> Skills
      </div>
    </div>
    @if (count($skills) < 1)
        <div class="row">
          <div class="col">
            <small class="text-muted"> No data to show.</small>
          </div>
        </div>
    @endif
    <div class="row mt-1">
    @foreach($skills as $row)	
			<div class="col-md-12">
				<p class="m-0">{{$row->skillName}}
          <a href="{{URL::to('/deleteASkill/'.$row->id) }}" class="text-danger deleteSkillHolder" onclick="return confirm('Are you sure you want to delete {{$row->skillName}}?');"><i class="far fa-times-circle"></i></a>
        </p>
				<div class="progress">
				  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="{{$row->skillPercent}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$row->skillPercent}}%"> {{$row->skillPercent}}% </div>
				</div>
			</div>
		@endforeach
      <div class="col-md-12 mt-4 skillBtnHolder">
        <button type="button" class="btn btn-sm addSkillBtn" data-toggle="modal" data-target="#addSkillModal">
          <i class="fas fa-plus-circle"></i> Add a Skill
        </button>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-5">
        <h5 class="text-muted"> Achievements 
      </div>
    </div>
    <div class="row mt-1">
      <div class="col-md-12">
        @foreach($achievements as $row)
				<p><i class="fas fa-trophy" style="color: #EEEB4D"></i> {{$row->achTitle}} ({{$row->achYear}}) 
          <a href="{{URL::to('/deleteAAchv/'.$row->id) }}" class="text-danger deleteSkillHolder" onclick="return confirm('Are you sure you want to delete {{$row->achTitle}}?');"><i class="far fa-times-circle"></i></a>
        </p>
				@endforeach
      </div>
      <div class="col-md-12 mt-2 achvBtnHolder">
        <button type="button" class="btn btn-sm addAchvBtn" data-toggle="modal" data-target="#addAchvModal">
          <i class="fas fa-plus-circle"></i> Add an achievement
        </button>
      </div>
    </div>
    @if(count($achievements) < 1)
        <div class="row">
          <div class="col">
            <small class="text-muted"> No data to show.</small>
          </div>
        </div>
    @endif

    <div class="row mt-5">
      <div class="col-md-12">
        <h5 class="text-muted">Job History </h5>
      </div>
    </div>

    <div class="row mt-2">
      <div class="col-md-12">
        <ul class="list-unstyled">
          @foreach($allJob as $row)
          <li><a href="/alumnus/jobs" class="linkSize"> {{$row->name}} </a></li>
          @endforeach
          @if(count($allJob) < 1)
          <div class="row">
            <div class="col">
              <small class="text-muted"> No data to show.</small>
            </div>
          </div>
          @endif
          <!-- <li class="mt-2"><a href="/alumnus/jobs" class="linkSize">See more...</a> </li> -->
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
	      	{!! Form::open(['route' => 'alumnus.description.update', 'method' => 'PATCH']) !!}
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
	        <form method="POST" action="{{route('alumnus.skill.add')}}" id="addSkillForm">
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
	        <button type="submit" class="btn addSkillBtn" id="addSkillBtnF">
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
	        <form method="POST" action="{{route('alumnus.achievement.add')}}" id="addAchvForm">
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
	        <button type="submit" class="btn addAchvBtn" id="addAchvBtnF">
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

<div class="container-fluid warningAlumnus">
  <div class="container fontRoboto">
    <div class="row">
      <div class="col-12 py-5">
        <center>
        <label>Setup your alumni details now to avoid feature restrictions in the website.</label>
        <a class="btn clickHereBtn p-2 px-4" href="{{ route('alumnus.form') }}">Click here!</a>
        <button class="btn closeHereBtn" id="closeHereBtn">Close</button>
        </center>
        </div>
      </div>
    </div>
</div>

<!-- jQuery script -->
<script src="/js/extra/jquery-3.3.1.slim.min.js"></script>

<!-- Custom scripts  -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlyUWOZTrGwtkrOFAV6-ejOmll5VuhUbE&callback=initMap"></script>
<script src="/js/unique/alumnus/slideToggle.js"></script>
<span id="loc1" class="d-none">@if(isset($recentJob->latitude)){!!$recentJob->latitude!!}@else
10.3304499
@endif</span>
<span id="loc2" class="d-none">@if(isset($recentJob->longitude)){!!$recentJob->longitude!!}@else
123.9073923
@endif</span>
<script>
initMap();
function initMap() {
            var alumLoc1 = $('#loc1').text();
            var alumLongit = $('#loc2').text();
            // The location of San Carlos
            var jobLocationAlumnus = {lat: alumLoc1, lng: alumLongit};
            // The map, centered at San Carlos
            var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 16, center: jobLocationAlumnus});

            // The marker, positioned at San Carlos
            var iconPNG = {
                    url: "/img/others/mapPin.png", // url
                    scaledSize: new google.maps.Size(50, 50), // scaled size
                    };
            var marker = new google.maps.Marker({
              position: jobLocationAlumnus,
              animation: google.maps.Animation.BOUNCE,
              //icon: iconPNG,
              map: map
             });
            // The circle area by jonas
              var specifiedLoc = new google.maps.Circle({
                center: jobLocationAlumnus,
                radius: 220,
                strokeColor: "#616161",
                strokeOpacity: 0.5,
                strokeWeight: 2,
                fillColor: "#616161",
                fillOpacity: 0.4,
                scale:10
              });
              specifiedLoc.setMap(map);        
          }
</script>
@endsection



