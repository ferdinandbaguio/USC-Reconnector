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
				<img src="/img/homepage_images/Girl2.jpg" width="100%">
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-12">
				<h5 class="font-weight-bold"> {{Auth::user()->full_name}} </h5>
				<h6 class="text-muted"> {{Auth::user()->idnumber}} </h6>

				<p class="mt-3 mb-0"> DCIS Faculty Member </p>
				<p class="mb-0"> 5 years of service </p>
			</div>
		</div>
	</div>
	<!-- LEFT BOX END-->

	<!-- RIGHT BOX -->
	<div class="col-md-8 p-4 pt-5 align-self-start rounded-bottom" style="background-color: white;">
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


		<div class="row mt-4">
			<div class="col-md-5">
				<h5 class="font-weight-bold text-muted"> Achievements </h5>
			</div>
		</div>
		<div class="row mt-1">
			<div class="col-md-12">
				<p><i class="fas fa-trophy" style="color: #EEEB4D"></i> Best Teacher (2019)</p>				
			</div>		
		</div>

		<div class="row mt-5">
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
		</div>

	</div>
	<!-- RIGHT BOX END-->

	




</div>
@endsection