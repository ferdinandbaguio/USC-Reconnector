@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/student/profile.css') }}">
@endsection

@section('content')

@if(isset($data))
<div class="row fontRoboto mb-5">

	<!-- LEFT BOX -->
	<div class="col-md-4 p-4 align-self-start" style="background: url('/img/div_bgs/abg.jpg');">
		<div class="row">
			<div class="col-12">
				<img src="/storage/user_img/{{$data->picture}}" class="bg-light" width="100%">
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-12">
				<h5 class="font-weight-bold"> {{$data->fullname}} </h5>
				<h6 class="text-muted"> {{$data->idnumber}} </h6>

				<p class="mt-3 mb-0"> @if(isset($data->course->name)){{$data->course->name}}@endif </p>
				<p class="m-0"> Year level: {{$data->yearLevel}}  </p>
				<p class="m-0"> Birthday: {{$data->birthdate}} </p>
				<p class="m-0"> Sex: {{$data->sex}} </p>
			</div>
		</div>
	</div>
	<!-- LEFT BOX END -->

	<!-- RIGHT BOX -->
	<div class="col-md-8 p-4 pt-5" style="background-color: white;">
		<div class="row">
			<div class="col-md-5">
				<h5 class="font-weight-bold text-muted"> Description </h5>
			</div>
		</div>
		@if($data->description == '')
		<div class="row">
		  <div class="col">
		    <small class="text-muted"> No data to show.</small>
		  </div>
		</div>
		@endif
		<div class="row mt-1">
			<div class="col-md-12">
				<p> {{$data->description}} </p>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-md-5">
				<h5 class="font-weight-bold text-muted"> Skills </h5>
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
				<p class="m-0">{{$row->skillName}}</p>
				<div class="progress">
				  <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="{{$row->skillPercent}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$row->skillPercent}}%"> {{$row->skillPercent}}% </div>
				</div>
			</div>
		@endforeach
		</div>
		
		<div class="row mt-5">
			<div class="col-md-5">
				<h5 class="font-weight-bold text-muted"> Achievements </h5>
			</div>
		</div>
		@if (count($achv) < 1)
        <div class="row">
          <div class="col">
            <small class="text-muted"> No data to show.</small>
          </div>
        </div>
    	@endif
		<div class="row mt-1">
		@foreach($achv as $row)
			<div class="col-md-12">		
				<p><i class="fas fa-trophy" style="color: #EEEB4D"></i> {{$row->achTitle}} ({{$row->achYear}})</p>		
			</div>
		@endforeach
		</div>
		
	</div>
	<!-- RIGHT BOX END -->

</div>

@else
<div class="container-fluid rounded p-2">
	<div class="row fontRoboto">
			<div class="col-md-6 mx-auto">
				<img src="/img/logo/studrec3.png" style="transform: rotate(180deg);" width="100%">
			</div>
	</div>
	<div class="row mt-3">
		<div class="col text-center">
			<h1 class="display-5"> Error 404  </h1>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col text-center">
			<h1 class="display-2"> Something is wrong  </h1>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col text-center">
			<h1 class="display-6"> It's looking like you may have taken a wrong turn. </h1>
		</div>
	</div>
	<div class="row mt-4">
		<button type="button" class="btn btn-dark btn-lg mx-auto" onclick="window.history.back();">Go Back</button>
	</div>
</div>
@endif

@endsection