@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/student/profile.css') }}">
@endsection

@section('content')
<div class="row fontRoboto mb-5">

	<div class="col-md-4 p-4 align-self-start" style="background: url('/img/div_bgs/abg.jpg');">
		<div class="row">
			<div class="col-12">
				<img src="/img/homepage_images/Girl2.jpg" width="100%">
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-12">
				<h5 class="font-weight-bold"> Romea X. Yapzar </h5>
				<h6 class="text-muted"> 15112441 </h6>

				<p class="mt-3 mb-0"> Bachelor of Science in Information in Communication Technology </p>
				<p class="m-0"> 4th Year </p>
				<p class="m-0"> Birthday: February 31, 2018 </p>
			</div>
		</div>
	</div>

	<div class="col-md-8 p-4 pt-5 align-self-start" style="background-color: white;">
		<div class="row">
			<div class="col-md-5">
				<h5 class="font-weight-bold text-muted"> Description <a href="#"> <i class="far fa-edit text-muted"></i> </a></h5>
			</div>
		</div>
		<div class="row mt-1">
			<div class="col-md-12">
				<p> I am a girl. I live in a house. I can graduate. I am a girl. I live in a house. I can graduate. I am a girl. I live in a house. I can graduate. I am a girl. I live in a house. I can graduate. I am a girl. I live in a house. I can graduate. I am a girl. I live in a house. I can graduate. </p>
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
				<a href="#" class="text-muted"> <i class="fas fa-plus-circle"></i> Add More</a>
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
				<a href="#" class="text-muted"> <i class="fas fa-plus-circle"></i> Add More</a>
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

</div>
@endsection