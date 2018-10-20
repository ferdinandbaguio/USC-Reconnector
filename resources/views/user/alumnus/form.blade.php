@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/alumnus/form.css') }}">
@endsection
<!-- in_array('highest_educational_attainment',$)?'checked':'' ) -->
@section('content')
<h1>USC Department of Computer and Information Sciences - Graduate Tracer Study (GTS) as of 2018</h1>

																<!-- Educational Background -->
<h4>Educational Background</h4>
@if($form->id)
		{!! Form::model($form, ['route' => ['alumnus.form.update', $form->id], 'method' => 'patch']) !!}
@else
		{!! Form::open(['url' => route('alumnus.form.store')]) !!}
@endif


<!-- Highest Educational Attainment  -->
{!! Form::label('highest_educational_attainment', '1. Highest Educational Attainment ') !!}
@foreach( $highestEducationalAttainment as $data)
<div>{!!	Form::radio('highest_educational_attainment', $data) !!} {{$data}}</div>
@endforeach

<!-- College Program Taken -->
{!! Form::label('college_program_taken', '2. College Program Taken') !!}
@foreach( $collegeProgramTaken as $data)
<div>{!!	Form::radio('college_program_taken', $data) !!} {{$data}}</div>
@endforeach

 <!-- Month and Year Graduated in College -->
{!! Form::label('month_year_graduated', '3.  Month and Year Graduated in College') !!}
<div>{!! Form::select('month_year_graduated', $monthYearGraduated) !!}</div>

<!-- Academic Awards received in College. -->
{!! Form::label('academic_awards_received', '4.  Academic Awards received in College') !!}
<div>{!! Form::select('academic_awards_received', $academicAwardsreceived) !!}</div>

<!-- Other Awards received in College. -->
{!! Form::label('other_awards', '4.1  Other Awards received in College.') !!}
{!! Form::text('other_awards', null, ['class' => 'form-control', 'placeholder' => '']) !!}
<!-- Other Awards received in College. -->
{!! Form::label('professional_examinations_passed', '5.  Professional Examinations Passed') !!}
		<p>(Please indicate the year the test was taken)</p>
{!! Form::text('professional_examinations_passed', null, ['class' => 'form-control', 'placeholder' => '']) !!}

											<!-- Educational Background (Further Studies) -->
<h4>Educational Background (Further Studies)</h4>

<!-- MA/MS/PhD program pursued/finished * -->
{!! Form::label('program_pursued', '6  MA/MS/PhD program pursued/finished *.') !!}
{!! Form::text('program_pursued', null, ['class' => 'form-control', 'placeholder' => '']) !!}

<!--  Name of Graduate School -->
{!! Form::label('name_of_graduate_school', '7  Name of Graduate School *') !!}
{!! Form::text('name_of_graduate_school', null, ['class' => 'form-control', 'placeholder' => '']) !!}

<!-- Address of Graduate School *. -->
{!! Form::label('address_of_graduate_school', '8  Address of Graduate School *') !!}
{!! Form::text('address_of_graduate_school', null, ['class' => 'form-control', 'placeholder' => '']) !!}

<!-- What made you pursue advance studies? * -->
{!! Form::label('advance_studies', ' 9 What made you pursue advance studies?') !!}
@foreach( $pursueAdvanceStudies as $data)
<div>{!! Form::checkbox('advance_studies[]', $data,isset($advancestudies_fm) ? $advancestudies_fm : null) !!} {{$data}}</div>
@endforeach
<!-- {!! Form::text('advance_studies', '', ['class' => 'form-control', 'placeholder' => '']) !!} -->

<!-- Employment Data -->
<h4>Employment Data</h4>
<!--  Are you presently employed? * -->
{!! Form::label('is_presently_employed', '10. Are you presently employed?') !!}
@foreach(  $presentlyEmployed as $data)
<div>{!!	Form::radio('is_presently_employed', $data) !!} {{$data}}</div>
@endforeach


												<!-- Employment Data (Status: Employed) -->
				<div><center><h4>Employment Data (Status: Employed</h4></center></div>

<p>If you are presently employed, kindly answer the following questions.</p>

<!--   In what industry are you currently working? * -->
{!! Form::label('industry_currently_working', '11.  In what industry are you currently working? ') !!}
@foreach(  $industryCurrentlyWorking as $data)
<div>{!!	Form::radio('industry_currently_working', $data) !!} {{$data}}</div>
@endforeach

<!--   Please indicate your job level. * -->
{!! Form::label('job_level', '12.   Please indicate your job level. ') !!}
@foreach(  $jobLevel as $data)
<div>{!!	Form::radio('job_level', $data) !!} {{$data}}</div>
@endforeach

<!-- What is your present job position?. -->
{!! Form::label('present_job_position', '13  What is your present job position?') !!}
{!! Form::text('present_job_position', null, ['class' => 'form-control', 'placeholder' => '']) !!}

<!-- If your current job is NOT related to your degree, please explain why. -->
{!! Form::label('job_not_related_to_degree', '14  If your current job is NOT related to your degree, please explain why.') !!}
{!! Form::text('job_not_related_to_degree', null, ['class' => 'form-control', 'placeholder' => '']) !!}

<!--  How many months have you been employed in your present job?  -->
{!! Form::label('months_employed', '15  How many months have you been employed in your present job?  ') !!}
@foreach(  $monthsEmployed as $data)
<div>{!!	Form::radio('months_employed', $data) !!} {{$data}}</div>
@endforeach



<!-- Name of your Present Company or Organization  -->
{!! Form::label('name_of_company', '16  Name of your Present Company or Organization ') !!}
{!! Form::text('name_of_company', null, ['class' => 'form-control', 'placeholder' => '']) !!}

<!-- Address of your Present Company or Organization *. -->
{!! Form::label('address_of_company', '17  Address of your Present Company or Organization') !!}
{!! Form::text('address_of_company', null, ['class' => 'form-control', 'placeholder' => '']) !!}

<!--  Is the job you have now, your first job after college? -->
{!! Form::label('is_first_job', '18  Is the job you have now, your first job after college?') !!}
@foreach(  $isFirstJobAfterCollege as $data)
<div>{!!	Form::radio('is_first_job', $data) !!} {{$data}}</div>
@endforeach


<!-- YES -->
<h2>YES</h2>
<!-- 23. What are your reason(s) for staying on the job? You may choose more than one answer. * -->
{!! Form::label('reasonsYes', '19. What are your reason(s) for staying on the job? You may choose more than one answer. *') !!}
@foreach( $reasonYes as $data)
<div>{!! Form::checkbox('reasonsYes[]', $data,isset($reasonsYes_fm) ? $reasonsYes_fm: null) !!} {{$data}}</div>
@endforeach
<h2>End of YES</h2>
<!-- End of YES -->

<!-- NO -->
<h2>NO</h2>
<!-- 23.  What were your reason(s) for changing jobs? You may choose more than one answer. -->
{!! Form::label('reasonsNo', '20. What are your reason(s) for staying on the job? You may choose more than one answer. *') !!}
@foreach( $reasonNo as $data)
<div>{!! Form::checkbox('reasonsNo[]', $data,isset($reasonsNo_fm) ? $reasonsNo_fm: null) !!} {{$data}}</div>
@endforeach

<!--   Was your first job after college related to your course/program? -->
{!! Form::label('isFirstJobRelated', '21. Was your first job after college related to your course/program?') !!}
@foreach($isFirstJobRelated as $data)
<div>{!!	Form::radio('isFirstJobRelated', $data) !!} {{$data}}</div>
@endforeach

<!--  What was your job position in your first work after college?l -->
{!! Form::label('isJobpositionFirstworkAfterCollege', '22. What was your job position in your first work after college?') !!}
{!! Form::text('isJobpositionFirstworkAfterCollege',null, ['class' => 'form-control']) !!}

<!--  Name of the company / organization you first worked in -->
{!! Form::label('nameofCompanyfirstWorkedin', '23. Name of the company / organization you first worked in ') !!}
{!! Form::text('nameofCompanyfirstWorkedin',null, ['class' => 'form-control']) !!}
<h2>End of NO</h2>
<!-- End of NO -->

<!--  How long did it take you to land on your first job after graduating from college?  -->
{!! Form::label('monthsEmployedfirstjobAfterGraduate', '24. How long did it take you to land on your first job after graduating from college? ') !!}
@foreach(  $monthsEmployedfirstjobAfterGraduate as $data)
<div>{!!	Form::radio('monthsEmployedfirstjobAfterGraduate', $data) !!} {{$data}}</div>
@endforeach

<!-- What type of job roles have you experienced since you graduated from college? You may choose more than one answer. * -->
{!! Form::label('jobRolesExperienced', '25. What type of job roles have you experienced since you graduated from college? You may choose more than one answer. *') !!}
@foreach( $jobRolesExperienced as $data)
<div>{!! Form::checkbox('jobRolesExperienced[]', $data,isset($jobRolesExperienced_fm) ? $jobRolesExperienced_fm: null) !!} {{$data}}</div>
@endforeach

<!--  What concepts learned in college did you find useful in your current and previous jobs? You may choose more than one answer. -->
{!! Form::label('conceptsLearned', '26.What concepts learned in college did you find useful in your current and previous jobs? You may choose more than one answer.') !!}
@foreach( $conceptsLearned as $data)
<div>{!! Form::checkbox('conceptsLearned[]', $data, isset($conceptsLearned_fm) ? $conceptsLearned_fm: null) !!} {{$data}}</div>
@endforeach

<!-- What programming languages, framework, and technologies have you used in doing your job? Please enumerate them on the blank space below. (For example: Android, J2EE, Joomla, Oracle, etc.) . -->
{!! Form::label('programmingLanguages', '27.   What programming languages, framework, and technologies have you used in doing your job? Please enumerate them on the blank space below. (For example: Android, J2EE, Joomla, Oracle, etc.) ') !!}
{!! Form::text('programmingLanguages', null, ['class' => 'form-control']) !!}


														<!-- About the Undergraduate Program -->
														<div><center><h4> About the Undergraduate Program</h4></center></div>

<!-- Please recall your reasons for choosing your undergraduate course. You may choose more than one answer.  -->
{!! Form::label('reasonsUndergraduateCourse', '28. Please recall your reasons for choosing your undergraduate course. You may choose more than one answer. ') !!}
@foreach( $reasonsUndergraduateCourse as $data)
<div>{!! Form::checkbox('reasonsUndergraduateCourse[]',$data,isset($reasonsUndergraduateCourse_fm) ? $reasonsUndergraduateCourse_fm: null) !!} {{$data}}</div>
@endforeach

<!-- Please rate how the Department of Computer and Information Sciences has developed you for each of the following graduate attributes: -->
{!! Form::label('name', '29.  Please rate how the Department of Computer and Information Sciences has developed you for each of the following graduate attributes ') !!}
<!-- Knowledge for Solving Computing Problems -->
<div><strong>Knowledge for Solving Computing Problems</strong></div>
Unacceptable
@foreach(  $rate as $data)
{!!	Form::radio('knowledge_for_solving_computing_problems', $data) !!} {{$data}}
@endforeach
Outstanding
<!-- Problem Analysis -->
<div><strong>Problem Analysis</strong></div>
Unacceptable
@foreach(  $rate as $data)
{!!	Form::radio('problem_analysis', $data) !!} {{$data}}
@endforeach
Outstanding
<!-- Design / Development of Solutions -->
<div><strong>Design / Development of Solutions</strong></div>
Unacceptable
@foreach(  $rate as $data)
{!!	Form::radio('development_of_solutions', $data) !!} {{$data}}
@endforeach
Outstanding
<!-- Modern Tool Usage -->
<div><strong>Modern Tool Usage</strong></div>
Unacceptable
@foreach(  $rate as $data)
{!!	Form::radio('modern_tool_usage', $data) !!} {{$data}}
@endforeach
Outstanding
<!-- Individual and Team Work -->
<div><strong>Individual and Team Work</strong></div>
Unacceptable
@foreach(  $rate as $data)
{!!	Form::radio('individual_and_team_work', $data) !!} {{$data}}
@endforeach
Outstanding
<!-- Communication -->
<div><strong>Communication</strong></div>
Unacceptable
@foreach(  $rate as $data)
{!!	Form::radio('communication', $data) !!} {{$data}}
@endforeach
Outstanding
<!-- Computing Professionalism and Society -->
<div><strong>Computing Professionalism and Society</strong></div>
Unacceptable
@foreach(  $rate as $data)
{!!	Form::radio('computing_professionalism_and_society', $data) !!} {{$data}}
@endforeach
Outstanding
<!-- Ethics -->
<div><strong>Ethics</strong></div>
Unacceptable
@foreach(  $rate as $data)
{!!	Form::radio('ethics', $data) !!} {{$data}}
@endforeach
Outstanding
<!-- Life-long Learning -->
<div><strong>Life-long Learning</strong></div>
Unacceptable
@foreach(  $rate as $data)
{!!	Form::radio('lifelong_learning', $data) !!} {{$data}}
@endforeach
Outstanding

<br>
<!-- How relevant was your studying in USC in your current career in terms of:-->
{!! Form::label('name', '30. How relevant was your studying in USC in your current career in terms of: ') !!}
<!-- Knowledge / Competencies -->
<div><strong>Knowledge / Competencies</strong></div>
Not Relevant
@foreach(  $ratev2 as $data)
{!!	Form::radio('knowledge_competencies', $data) !!} {{$data}}
@endforeach
Very Relevant
<!-- Personal Character and Values -->
<div><strong>Personal Character and Values</strong></div>
Not Relevant
@foreach(  $ratev2 as $data)
{!!	Form::radio('personal_character_and_values', $data) !!} {{$data}}
@endforeach
Very Relevant
<!-- Community Involvement -->
<div><strong>Community Involvement</strong></div>
Not Relevant
@foreach(  $ratev2 as $data)
{!!	Form::radio('community_involvement', $data) !!} {{$data}}
@endforeach
Very Relevant
<br>
<!-- How relevant is your undergraduate program/course to your current job? -->
{!! Form::label('relevant_undergraduate_program_course_to_current_job', '11.1  How relevant is your undergraduate program/course to your current job? ') !!}
<br>	Not Relevant
@foreach(  $ratev2 as $data)
{!!	Form::radio('relevant_undergraduate_program_course_to_current_job', $data) !!} {{$data}}
@endforeach
Very Relevant

<!-- In retrospect during your time as a USC student, please rate the following facets in terms of its strength.  -->
{!! Form::label(null, '31. In retrospect during your time as a USC student, please rate the following facets in terms of its strength.  ') !!}
<!-- Undergraduate course / curriculum-->
<div><strong>Undergraduate course / curriculum</strong></div>
Weak
@foreach(  $ratev2 as $data)
{!!	Form::radio('curriculum', $data) !!} {{$data}}
@endforeach
Strong
<!-- Student Workload-->
<div><strong> Student Workload</strong></div>
Weak
@foreach(  $ratev2 as $data)
{!!	Form::radio('workload', $data) !!} {{$data}}
@endforeach
Strong
<!-- Facilities-->
<div><strong>Facilities</strong></div>
Weak
@foreach(  $ratev2 as $data)
{!!	Form::radio('facilities', $data) !!} {{$data}}
@endforeach
Strong
<!--Teaching Quality-->
<div><strong>Teaching Quality</strong></div>
Weak
@foreach(  $ratev2 as $data)
{!!	Form::radio('teaching', $data) !!} {{$data}}
@endforeach
Strong
<!-- Research Quality-->
<div><strong>Research Quality</strong></div>
Weak 
@foreach(  $ratev2 as $data)
{!!	Form::radio('research', $data) !!} {{$data}}
@endforeach
Strong
<!-- Labor Market Relevance-->
<div><strong>Labor Market Relevance</strong></div>
Weak
@foreach(  $ratev2 as $data)
{!!	Form::radio('labor_market_relevance', $data) !!} {{$data}}
@endforeach
Strong
<!-- OJT or Internship Hands on Experience-->
<div><strong>OJT or Internship Hands on Experience</strong></div>
Weak
@foreach(  $ratev2 as $data)
{!!	Form::radio('OJT', $data) !!} {{$data}}
@endforeach
Strong
<!-- Social and Community Involvement-->
<div><strong>Social and Community Involvement</strong></div>
Weak
@foreach(  $ratev2 as $data)
{!!	Form::radio('social_and_community_involvement', $data) !!} {{$data}}
@endforeach
Strong

<!--Finally, kindly write down your suggestions on the BSCS/BSIT/BSITC/ACT curriculum, other strength/weaknesses concerning your course and other activities to improve the training of ICT professionals.. -->
{!! Form::label('suggestions', '32. Finally, kindly write down your suggestions on the BSCS/BSIT/BSITC/ACT curriculum, other strength/weaknesses concerning your course and other activities to improve the training of ICT professionals..) ') !!}
{!! Form::text('suggestions', null, ['class' => 'form-control']) !!}


															<!-- Employment Data (Status: Unemployed) -->
<div><center><h4>Employment Data (Status: Unemployed (Now))</h4></center></div>
<!--  Please state the reason(s) why you are not employed now. You may choose more than one answer.  -->
{!! Form::label('reasonUnemployedNow', '33. Please state the reason(s) why you are not employed now. You may choose more than one answer. ') !!}
@foreach( $reasonUnemployedNow as $data)
<div>{!! Form::checkbox('reasonUnemployedNow[]', $data,isset($reasonUnemployedNow_fm) ? $reasonUnemployedNow_fm: null) !!} {{$data}}</div>
@endforeach

	<!-- Employment Data (Status: Unemployed) -->
	<div><center><h4>Employment Data (Status: Unemployed (Never))</h4></center></div>
<!--  Please state the reason(s) why you are not employed now. You may choose more than one answer.  -->
{!! Form::label('reasonUnemployedNever', '34. Please state the reason(s) why you are not employed now. You may choose more than one answer. ') !!}
@foreach( $reasonUnemployedNever as $data)
<div>{!! Form::checkbox('reasonUnemployedNever[]', $data,isset($reasonUnemployedNever_fm) ? $reasonUnemployedNever_fm: null) !!} {{$data}}</div>
@endforeach


<button class="btn btn-sm {{ $form->id ? 'btn-outline-info' : 'btn-outline-success' }}">
                    {{ $form->id ? 'Update' : 'Submit' }}
</button>


{!! Form::close() !!}

















	<!-- <div class="container-fluid p-0" id="employmentChecker">
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
    </div>	 -->


<!-- CONTAINER FOR EMPLOYED IN THE PRESENT -->
<!-- <div class="container-fluid p-0" id="employedNow" style="display: none;"> -->

	<!-- <div class="row" id="enGenInfo">GENERAL INFORMATION ROW -->
	<!-- <div class="col-12 col-md-6 p-4 mx-auto bg-light rounded">

	  	<div class="row px-2">
		    <div class="col-10 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
		      <p class="m-auto text-white"> General Infomation (Status:Employed) </p>
		    </div>
		    <div class="col-12" style="border-bottom: 1px solid gray;">
		    </div>
		</div>  -->

	  	 <!-- Form Start for General Infomation(Employed) -->
		<!-- <form method="POST" action="" id="employedForm">
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
	</div>GENERAL INFORMATION ROW END -->

	<!-- <div class="row" id="enData">Employment Data ROW -->
	<!-- <div class="col-12 col-md-6 p-4 mx-auto bg-light rounded">

	  	<div class="row px-2">
		    <div class="col-10 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
		      <p class="m-auto text-white"> Employment Data </p>
		    </div>
		    <div class="col-12" style="border-bottom: 1px solid gray;">
		    </div>
		</div>  -->

	  	 <!-- Form Start for Employment Data -->
		<!-- <div class="form-group mt-4">
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
		 -->
		<!-- <button type="button" class="btn btn-danger text-white" id="backToEnGenInfo"> Previous </button>
		<button type="button" class="btn btn-warning text-white" id="toEnUnderGrad">Next</button>
	  	
	</div> 	 -->
	<!-- </div>Employment Data ROW END -->


	<!-- <div class="row" id="enUnderGrad">Undergraduate Program Details -->
	<!-- <div class="col-12 col-md-6 p-4 mx-auto bg-light rounded"> -->

	  <!-- // 	<div class="row px-2">
		//     <div class="col-10 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
		//       <p class="m-auto text-white"> About the Undergraduate Program </p>
		//     </div>
		//     <div class="col-12" style="border-bottom: 1px solid gray;">
		//     </div>
		// </div>  -->

	  	 <!-- Form Start for Undergraduate Program -->
		<!-- <div class="form-group mt-4">
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
	</div> 	 -->
	<!-- </div>Undergraduate Program Details END -->

<!-- </div> -->
<!-- CONTAINER FOR EMPLOYED IN THE PRESENT -->




<!-- jQuery script -->
<!-- <script src="/js/extra/jquery-3.3.1.slim.min.js"></script> -->

<!-- Customize / Self made scripts should be the last one -->
<!-- <script src="/js/unique/alumnus/form.js"></script> -->


@endsection