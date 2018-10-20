@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/student/profile.css') }}">
@endsection

@section('content')
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
				<h5 class="font-weight-bold"> {{Auth::user()->full_name}} </h5>
				<h6 class="text-muted"> {{Auth::user()->idnumber}} </h6>

				<p class="mt-3 mb-0"> Bachelor of Science in Information in Communication Technology </p>
				<p class="m-0"> Year level: {{Auth::user()->yearLevel}}  </p>
				<p class="m-0"> Birthday: February 31, 2018 </p>
				<p class="m-0"> Sex: {{Auth::user()->sex}} </p>
			</div>
		</div>
	</div>
	<!-- LEFT BOX END -->

	<!-- RIGHT BOX -->
	<div class="col-md-8 p-4 pt-5 align-self-start" style="background-color: white;">
		<div class="row">
			<div class="col-md-5">
				<h5 class="font-weight-bold text-muted"> Description <a href="#descModal" data-toggle="modal"> <i class="far fa-edit text-muted"></i> </a></h5>
			</div>
		</div>
		<div class="row mt-1">
			<div class="col-md-12">
				<p> {{Auth::user()->description}} </p>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-md-5">
				<h5 class="font-weight-bold text-muted"> Skills </h5>
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
				<h5 class="font-weight-bold text-muted"> Achievements </h5>
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
			<div class="col-md-5">
				<h5 class="font-weight-bold text-muted"> Most recent courses taken </h5>
			</div>
		</div>
		<div class="row mt-1">
			<div class="col-md-5">
				<ul class="list-group list-group-flush">
				  <li class="list-group-item"><i class="fas fa-book" style="color: #574B14"></i> ENG 21</li>
				  <li class="list-group-item"><i class="fas fa-book" style="color: #574B14"></i> ENG 21</li>
				  <li class="list-group-item"><i class="fas fa-book" style="color: #574B14"></i> ENG 21</li>
				  <li class="list-group-item"><i class="fas fa-book" style="color: #574B14"></i> ENG 21</li>
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
	        		<?php echo "Hello";?>
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
	        <form method="POST" action="/addSkill">
	        	{{csrf_field()}}
	        	<div class="form-group">
	        		<label><i class="fas fa-football-ball" style="color: #3CAEC1"></i> Title of Skill</label>
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
	        <form>
	        	<div class="form-group">
	        		<label><i class="fas fa-trophy" style="color: #EEEB4D"></i> Title of Achievement</label>
	        		<input type="text" class="form-control" placeholder="Achievement Title">
	        	</div>
	        	<div class="form-group">
	        		<label>Date Acquired</label>
	        		<input type="text" class="form-control" placeholder="Example: 2009">
	        	</div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	        <button type="button" class="btn addAchvBtn">
				<i class="fas fa-plus-circle"></i> Add achievement
			</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- ADD ACHIEVEMENT MODAL END -->

</div>
@endsection