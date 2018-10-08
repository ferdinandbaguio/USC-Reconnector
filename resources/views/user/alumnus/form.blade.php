@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/alumnus/form.css') }}">
@endsection

@section('content')
	<div class="container-fluid p-0" id="employmentChecker">
              <div class="row mt-4 mb-3">
                <label class="mx-auto"> Are you presently employed?: </label>
              </div>
              <div class="row">
                <div class="col-md-5 mx-auto mt-2">
                  <input type="button" value="Yes, I am employed" id="employedNowBtn" class="btn w-100 text-white py-4 chsStatBtn">
                </div>
              </div>
              <div class="row">
                <div class="col-md-5 mx-auto mt-4">
                  <input type="button" value="No, I'm not employed now" id="notEmployedNowBtn" class="btn w-100 text-white py-4 chsStatBtn">
                </div>
              </div>
              <div class="row">
                <div class="col-md-5 mx-auto mt-4">
                  <input type="button" value="No, I was never employed" id="neverEmployedBtn" class="btn w-100 text-white py-4 chsStatBtn">
                </div>
              </div>           
    </div>	


<!-- CONTAINER FOR EMPLOYED IN THE PRESENT -->
<div class="container-fluid p-0" id="employedNow" style="display: none;">

	<div class="row" id="enGenInfo"><!-- GENERAL INFORMATION ROW -->
	<div class="col-12 col-md-6 p-4 mx-auto bg-light rounded">

	  	<div class="row px-2">
		    <div class="col-10 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
		      <p class="m-auto text-white"> General Infomation (Status:Employed) </p>
		    </div>
		    <div class="col-12" style="border-bottom: 1px solid gray;">
		    </div>
		</div> 

	  	 <!-- Form Start for General Infomation(Employed) -->
		<form method="POST" action="" id="employedForm">
		<div class="form-group mt-4">
		  <label>Permanent address</label>
		  <input type="text" class="form-control" placeholder="Enter address">
		</div>
		<div class="form-group">
		  <label>Email Address</label>
		  <input type="email" class="form-control" placeholder="Enter email">
		</div>
		<div class="form-group">
		  <label>Contact Number</label>
		  <input type="text" class="form-control" placeholder="Enter input">
		</div>
		<div class="form-group">
		  <label>Civil Status</label>
		  <input type="text" class="form-control" placeholder="Enter input">
		</div>
		<div class="form-group">
		  <label>Birthday</label>
		  <input type="date" class="form-control">
		</div>
		<div class="form-group">
		  <label>Highest Educational Attainment</label>
		  <select class="form-control">
		  	<option>Testing pani</option>
		  	<option>Highschool</option>
		  	<option>Elementary</option>
		  	<option>Nursery</option>
		  </select>
		</div>
		<div class="form-group">
		  <label>Highest Educational Attainment</label>
		  <select class="form-control">
		  	<option>Testing pani</option>
		  	<option>Tourism</option>
		  	<option>Accountancy</option>
		  	<option>Librarian</option>
		  </select>
		</div>
		<div class="form-group">
		  <label>Month and Year Graduated in College</label>
		  <input type="month" class="form-control">
		</div>


		<button type="button" class="btn btn-danger text-white" id="backToEmploymentChecker"> Previous </button>
		<button type="button" class="btn btn-warning text-white" id="toEnData">Next</button>
	  	

	</div> 
	</div><!-- GENERAL INFORMATION ROW END-->

	<div class="row" id="enData"><!-- Employment Data ROW -->
	<div class="col-12 col-md-6 p-4 mx-auto bg-light rounded">

	  	<div class="row px-2">
		    <div class="col-10 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
		      <p class="m-auto text-white"> Employment Data </p>
		    </div>
		    <div class="col-12" style="border-bottom: 1px solid gray;">
		    </div>
		</div> 

	  	 <!-- Form Start for Employment Data -->
		<div class="form-group mt-4">
		  <label>Permanent address</label>
		  <input type="text" class="form-control" placeholder="Enter address">
		</div>
		<div class="form-group">
		  <label>Email Address</label>
		  <input type="email" class="form-control" placeholder="Enter email">
		</div>
		<div class="form-group">
		  <label>Test Input</label>
		  <input type="text" class="form-control" placeholder="Enter input">
		</div>
		
		<button type="button" class="btn btn-danger text-white" id="backToEnGenInfo"> Previous </button>
		<button type="button" class="btn btn-warning text-white" id="toEnUnderGrad">Next</button>
	  	
	</div> 	
	</div><!-- Employment Data ROW END-->


	<div class="row" id="enUnderGrad"><!-- Undergraduate Program Details -->
	<div class="col-12 col-md-6 p-4 mx-auto bg-light rounded">

	  	<div class="row px-2">
		    <div class="col-10 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
		      <p class="m-auto text-white"> About the Undergraduate Program </p>
		    </div>
		    <div class="col-12" style="border-bottom: 1px solid gray;">
		    </div>
		</div> 

	  	 <!-- Form Start for Undergraduate Program -->
		<div class="form-group mt-4">
		  <label>Please recall your reasons for choosing your undergraduate course.</label>
		  <input type="text" class="form-control" placeholder="Enter address">
		</div>
		<div class="form-group">
		  <label>Please rate how the Department of Computer and Information Sciences</label>
		  <input type="text" class="form-control" placeholder="Enter email">
		</div>
		<div class="form-group">
		  <label>Test Input</label>
		  <input type="text" class="form-control" placeholder="Enter input">
		</div>
		
		<button type="button" class="btn btn-danger text-white" id="backToEnData"> Previous </button>
		<input type="submit" class="btn btn-success text-white" value="Submit">
	  	
		</form>
	</div> 	
	</div><!-- Undergraduate Program Details END-->

</div>
<!-- CONTAINER FOR EMPLOYED IN THE PRESENT -->




<!-- jQuery script -->
<script src="/js/extra/jquery-3.3.1.slim.min.js"></script>

<!-- Customize / Self made scripts should be the last one -->
<script src="/js/unique/alumnus/form.js"></script>


@endsection