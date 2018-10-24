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
				<h5 class="font-weight-bold text-muted"> Description </h5>
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
				<p class="m-0"></p>
				<div class="progress">
				  <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"> 50% </div>
				</div>
			</div>

		</div>

		<div class="row mt-5">
			<div class="col-md-5">
				<h5 class="font-weight-bold text-muted"> Achievements </h5>
			</div>
		</div>
		<div class="row mt-1">
			<div class="col-md-12">		
				<p><i class="fas fa-trophy" style="color: #EEEB4D"></i> Best Student (2018)</p>		
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

	

</div>
@endsection