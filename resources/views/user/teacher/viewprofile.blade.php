@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/teacher/profile.css') }}">
@endsection

@section('content')

@if(isset($data))
<div class="row fontRoboto mb-5">

	<!-- LEFT BOX -->
	<div class="col-md-4 p-4 align-self-start" style="background: url('/img/div_bgs/abg.jpg');">
		<div class="row">
			<div class="col-12">
				<img src="/img/homepage_images/Girl2.jpg" width="100%">
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-12">
				<h5 class="font-weight-bold"> {{$data->firstName}} {{$data->middleName}} {{$data->lastName}} </h5>
				<h6 class="text-muted"> {{$data->idnumber}} </h6>

				<p class="mt-3 mb-0"> INSERT BACKEND </p>
				<p class="mb-0">INSERT BACKEND  5 years of service </p>
			</div>
		</div>
	</div>
	<!-- LEFT BOX END-->

	<!-- RIGHT BOX -->
	<div class="col-md-8 p-4 pt-5" style="background-color: white;">
		<div class="row">
			<div class="col-md-5">
				<h5 class="font-weight-bold text-muted"> Description </h5>
			</div>
		</div>
		<div class="row mt-1">
			<div class="col-md-12">
				<p> {{$data->description}} </p>
			</div>
		</div>


		<div class="row mt-4">
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
				<p><i class="fas fa-trophy" style="color: #EEEB4D"></i> {{$row->achTitle}} ({{$row->achYear)</p>				
			</div>	
			@endforeach	
		</div>

	</div>
	<!-- RIGHT BOX END-->
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