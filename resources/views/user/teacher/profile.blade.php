@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/teacher/profile.css') }}">
@endsection

@section('content')
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
				<h5 class="font-weight-bold"> {{Auth::user()->full_name}} </h5>
				<h6 class="text-muted"> {{Auth::user()->idnumber}} </h6>

				<p class="mt-3 mb-0"> @if(isset(Auth::user()->position)){{Auth::user()->position}}@endif </p>
				<p class="mb-0"> @if(isset(Auth::user()->department->name)){{Auth::user()->department->name}}@endif </p>
			</div>
		</div>

		<div class="row mt-3">
      <button class="btn btn-sm mx-auto editProfBtn text-white" id="editProfBtn">Edit Profile <i class="far fa-edit"></i></button>
    </div>
	</div>
	<!-- LEFT BOX END-->

	<!-- RIGHT BOX -->
	<div class="col-md-8 p-4 pt-5" style="background-color: white;">
		<div class="row">
			<div class="col-md-5">
				<h5 class="font-weight-bold text-muted"> Description <a href="#descModal" data-toggle="modal"> <i class="far fa-edit text-muted"></i> </a></h5>
			</div>
		</div>
		<div class="row mt-1">
			<div class="col-md-12">
				@if (Auth::user()->description == '')
		        <div class="row">
		          <div class="col pt-0">
		            <small class="text-muted"> No data to show.</small>
		          </div>
		        </div>
		    	@endif
				<p> {{Auth::user()->description}} </p>
				<div class="editDescHolder">
		        <a href="#descModal" data-toggle="modal" class="editDescBtn"> Edit <i class="far fa-edit"></i> </a>
		        </div>
			</div>
		</div>


		<div class="row mt-4">
			<div class="col-md-5">
				<h5 class="font-weight-bold text-muted"> Achievements </h5>
			</div>
		</div>
		@if (count($achievements) < 1)
        <div class="row">
          <div class="col">
            <small class="text-muted"> No data to show.</small>
          </div>
        </div>
    	@endif
		<div class="row mt-1">
			<div class="col-md-12">
				@foreach($achievements as $row)
				<p><i class="fas fa-trophy" style="color: #EEEB4D"></i> {{$row->achTitle}} ({{$row->achYear}}) 
					<a href="{{URL::to('/deleteTAchv/'.$row->id) }}" class="text-danger deleteAchvHolder" onclick="return confirm('Are you sure you want to delete {{$row->achTitle}}?');"><i class="far fa-times-circle"></i></a>
				</p>
				@endforeach
			</div>
			
			<div class="col-md-12 mt-2 achvBtnHolder">
				<button type="button" class="btn btn-sm addAchvBtn" data-toggle="modal" data-target="#addAchvModal">
					<i class="fas fa-plus-circle"></i> Add an achievement
				</button>
			</div>		
		</div>
		

		<!-- <div class="row mt-5">
			<div class="col-md-5">
				<h5 class="font-weight-bold text-muted"> Most recent classes handled </h5>
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
		</div> -->

	</div>
	<!-- RIGHT BOX END-->

	<!-- EDIT DESCRIPTION MODAL -->
	<div class="modal fade" id="descModal" tabindex="-1" role="dialog" aria-labelledby="descModal" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">

	      <div class="modal-body mt-4">
	      	{!! Form::open(['route' => 'teacher.description.update', 'method' => 'PATCH']) !!}
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


	<!-- ADD ACHIEVEMENT MODAL -->
	<div class="modal fade" id="addAchvModal" tabindex="-1" role="dialog" aria-labelledby="addAchvModal" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">

	      <div class="modal-body mt-4">
	        <form method="POST" action="{{route('teacher.achievement.add')}}" id="addAchvForm">
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


<!-- jQuery script -->
<script src="/js/extra/jquery-3.3.1.slim.min.js"></script>

<!-- Custom scripts  -->
<script src="/js/unique/teacher/slideToggle.js"></script>

</div>
@endsection