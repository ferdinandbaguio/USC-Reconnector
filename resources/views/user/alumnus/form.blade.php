@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/alumnus/form.css') }}">

@endsection
<!-- in_array('highest_educational_attainment',$)?'checked':'' ) -->
@section('content')
<style type="text/css">
	.page2onwards{
		display: none;
	}
</style>
<div class="container">
<center><h1>Department of Computer and Information Sciences</h1></center>
</div>

<div class="container-fluid p-0 mb-4">

	@include('_inc.messages')
	<div class="row">
		<!-- FIRST PAGE -->
		<div class="col-12 col-md-6 p-4 mx-auto bg-light rounded formPage" page="1">
			<div class="row px-2">
				<div class="col-9 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
				<p class="m-auto text-white"> Educational Background </p>
				</div>
				<div class="col-3 col-md-5 py-2">
					Page 1
				</div>
				<div class="col-12" style="border-bottom: 1px solid gray;">
				</div>
			</div> 
			<!-- FORM START -->
			@if($form->id)
			{!! Form::model($form, ['route' => ['alumnus.form.update', $form->id], 'method' => 'patch']) !!}
			@else
			{!! Form::open(['url' => route('alumnus.form.store')]) !!}
			@endif

			<!-- HIGHEST EDUCATIONAL ATTAINMENT -->
			{!! Form::label(null, '1. Highest Educational Attainment') !!}
			<small class="text-danger">*Required</small>
			@foreach( $highestEducationalAttainment as $data)
			@if($data == 'College Graduate')
				<div>{!!	Form::radio('highest_educational_attainment', $data,null,['id' => 'collegegraduate']) !!} {{$data}}</div>
			@else
				<div>{!!	Form::radio('highest_educational_attainment', $data) !!} {{$data}}</div>
			@endif	
			@endforeach	 
			<!-- College Program Taken -->
			{!! Form::label(null, '2. College Program Taken') !!}
			<small class="text-danger">*Required</small>
			@foreach( $collegeProgramTaken as $data)
			<div>{!!	Form::radio('college_program_taken', $data) !!} {{$data}}</div>
			@endforeach


			<!-- Month and Year Graduated in College -->
			{!! Form::label(null, '3.  Month and Year Graduated in College') !!}
			<small class="text-danger">*Required</small>
			<div>{!! Form::select('month_year_graduated', $monthYearGraduated,null,['class' => 'selectClass']) !!}</div>

			<!-- Academic Awards received in College. -->
			{!! Form::label(null, '4.  Academic Awards received in College') !!}
			<div>{!! Form::select('academic_awards_received', $academicAwardsreceived) !!}</div>
			<!-- Other Awards received in College. -->
			{!! Form::label('other_awards', '4.1  Other Awards received in College.') !!}
			{!! Form::text('other_awards', null, ['class' => 'form-control', 'placeholder' => '']) !!}
			<!-- Professional Examinations Passed. -->
			{!! Form::label('professional_examinations_passed', '5.  Professional Examinations Passed') !!}
					<p>(Please indicate the year the test was taken)</p>
			{!! Form::text('professional_examinations_passed', null, ['class' => 'form-control', 'placeholder' => '']) !!}

			<button type="button" class="btn btn-sm btn-warning text-white mt-3 nextButtonOne" onclick="showPage($('#collegegraduate').is(':checked') ? 	3 : 2)" disabled="disabled">Next</button>
		</div> 
		<!-- END FIRST PAGE -->

		<!-- SECOND PAGE -->
		<div class="col-12 col-md-6 p-4 mx-auto bg-light rounded formPage page2onwards" page="2">
			<div class="row px-2">
				<div class="col-9 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
				<p class="m-auto text-white"> Educational Background </p>
				</div>
				<div class="col-3 col-md-5 py-2">
					Page 2
				</div>
				<div class="col-12" style="border-bottom: 1px solid gray;">
				</div>
			</div> 
			
														<!-- Educational Background (Further Studies) -->
			<h4>Educational Background (Further Studies)</h4>

			<!-- MA/MS/PhD program pursued/finished * -->
			{!! Form::label(null, '1.1  MA/MS/PhD program pursued/finished') !!}
			<small class="text-danger">*Required</small>
			{!! Form::text('program_pursued', null, ['class' => 'form-control', 'placeholder' => '']) !!}

			<!--  Name of Graduate School -->
			{!! Form::label(null, '1.2  Name of Graduate School') !!}
			<small class="text-danger">*Required</small>
			{!! Form::text('name_of_graduate_school', null, ['class' => 'form-control', 'placeholder' => '']) !!}

			<!-- Address of Graduate School *. -->
			{!! Form::label(null, '1.3  Address of Graduate School') !!}
			<small class="text-danger">*Required</small>
			{!! Form::text('address_of_graduate_school', null, ['class' => 'form-control', 'placeholder' => '']) !!}

			<!-- What made you pursue advance studies? * -->
			{!! Form::label(null, ' 1.4 What made you pursue advance studies?') !!}
			<small class="text-danger">*Required</small>
			@foreach( $pursueAdvanceStudies as $data)
				<div>{!! Form::checkbox('advance_studies[]', $data,isset($advancestudies_fm) ? $advancestudies_fm : null) !!} {{$data}}</div>
			@endforeach
			{!! Form::label(null, 'If other, please specifiy') !!}<br>
			{!! Form::text('advance_studies[]',null,['class' => 'form-control advance_studies']) !!}
			
			
			<button type="button" class="btn btn-sm btn-outline-danger mt-3 " onclick="showPage(getPreviousPage())">Previous</button>
			<button type="button" class="btn btn-sm btn-warning text-white mt-3 nextButtonTwo" onclick="showPage(3)" disabled="disabled">Next</button>
		</div> 
		<!-- END SECOND PAGE -->

		<!-- THIRD PAGE -->
		<div class="col-12 col-md-6 p-4 mx-auto bg-light rounded formPage page2onwards" page="3">
				<div class="row px-2">
					<div class="col-9 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
					<p class="m-auto text-white"> Employment Data </p>
					</div>
					<div class="col-3 col-md-5 py-2">
					Page 3
					</div>
					<div class="col-12" style="border-bottom: 1px solid gray;">
					</div>
				</div> 
				<!--  Are you presently employed? * -->
				{!! Form::label(null, '6. Are you presently employed?') !!}
				<small class="text-danger">*Required</small>
				@foreach(  $presentlyEmployed as $data)
				<div>{!!	Form::radio('is_presently_employed', $data,null,['class' => 'isEmployed']) !!} {{$data}}</div>
				@endforeach

				<button type="button" class="btn btn-sm btn-outline-danger mt-3" onclick="showPage(getPreviousPage())">Previous</button>
				<button type="button" class="btn btn-sm btn-warning text-white mt-3 nextButtonThree" onclick="showPage(isEmployed())" disabled="disabled">Next</button>
		</div> 
		<!-- END THIRD PAGE -->

		<!-- FOURTH PAGE -->
		<div class="col-12 col-md-6 p-4 mx-auto bg-light rounded formPage page2onwards" page="4">
			<div class="row px-2">
				<div class="col-9 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
				<p class="m-auto text-white">Employment Data<br>Status: Employed </p>
				</div>
				<div class="col-3 col-md-5 py-2">
					Page 4
				</div>
				<div class="col-12" style="border-bottom: 1px solid gray;">
				</div>
			</div> 
			<p>If you are presently employed, kindly answer the following questions.</p>

										<!-- YES EMPLOYED DATA -->
			<!--   In what industry are you currently working? * -->
			{!! Form::label(null, '7.  In what industry are you currently working? ') !!}
			<small class="text-danger">*Required</small>
			@foreach(  $industryCurrentlyWorking as $data)
			<div>{!!	Form::radio('industry_currently_working', $data) !!} {{$data}}</div>
			@endforeach

			<!--   Please indicate your job level. * -->
			{!! Form::label('job_level', '8. Please indicate your job level') !!}
			<small class="text-danger">*Required</small>
			@foreach(  $jobLevel as $data)
			<div>{!!	Form::radio('job_level', $data) !!} {{$data}}</div>
			@endforeach

			<!-- What is your present job position?. -->
			{!! Form::label(null, '9.  What is your present job position?') !!}
			<small class="text-danger">*Required</small>
			{!! Form::text('present_job_position', null, ['class' => 'form-control', 'placeholder' => '']) !!}

			<!-- If your current job is NOT related to your degree, please explain why. -->
			{!! Form::label(null, '10.  If your current job is NOT related to your degree, please explain why') !!}
			{!! Form::text('job_not_related_to_degree', null, ['class' => 'form-control', 'placeholder' => '']) !!}

			<!--  How many months have you been employed in your present job?  -->
			{!! Form::label(null, '11.  How many months have you been employed in your present job?') !!}
			<small class="text-danger">*Required</small>
			@foreach(  $monthsEmployed as $data)
			<div>{!!	Form::radio('months_employed', $data) !!} {{$data}}</div>
			@endforeach

			<!-- Name of your Present Company or Organization  -->
			{!! Form::label(null, '12.  Name of your Present Company or Organization ') !!}
			<small class="text-danger">*Required</small>
			{!! Form::text('name_of_company', null, ['class' => 'form-control', 'placeholder' => '']) !!}

			<!-- Address of your Present Company or Organization *. -->
			{!! Form::label(null, '12.1  Address of your Present Company or Organization') !!}
			<small class="text-danger">*Required</small>
			{!! Form::text('address_of_company', null, ['class' => 'form-control', 'placeholder' => '']) !!}

			<!--  Is the job you have now, your first job after college? -->
			{!! Form::label(null, '13.  Is the job you have now, your first job after college?') !!}
			<small class="text-danger">*Required</small>
			@foreach(  $isFirstJobAfterCollege as $data)
			<div>
			{!!	Form::radio('is_first_job', $data,null,['class' => 'yesNo']) !!} {{$data}}
			</div>
			@endforeach

			<button type="button" class="btn btn-sm btn-outline-danger mt-3" onclick="showPage(getPreviousPage())">Previous</button>
			<button type="button" class="btn btn-sm btn-warning text-white mt-3 nextButtonFour" onclick="showPage(yesNo())" disabled="disabled">Next</button>
	
		</div>
	<!-- END FOURTH PAGE -->
	
	<!-- FIFTH PAGE -->
	<div class="col-12 col-md-6 p-4 mx-auto bg-light rounded formPage page2onwards" page="5">
				<div class="row px-2">
					<div class="col-9 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
					<p class="m-auto text-white"> Employment Data</p>
					</div>
					<div class="col-3 col-md-5 py-2">
					Page 5
					</div>
					<div class="col-12" style="border-bottom: 1px solid gray;">
					</div>
				</div> 
			<!-- YES -->
		
			<!-- 23. What are your reason(s) for staying on the job? You may choose more than one answer. * -->
			{!! Form::label(null, '14. What are your reason(s) for staying on the job? You may choose more than one answer') !!}
			<small class="text-danger">*Required</small>
			@foreach( $reasonYes as $data)
			<div>{!! Form::checkbox('reasonsYes[]', $data,isset($reasonsYes_fm) ? $reasonsYes_fm: null) !!} {{$data}}</div>
			@endforeach
			{!! Form::label(null, 'If other, please specifiy') !!}<br>
			{!! Form::text('reasonsYes[]',null,['class' => 'form-control reasonsYes']) !!}
			<!-- End of YES -->

				<button type="button" class="btn btn-sm btn-outline-danger mt-3" onclick="showPage(getPreviousPage())">Previous</button>
				<button type="button" class="btn btn-sm btn-warning text-white mt-3 nextButtonFive" onclick="showPage(10)" disabled="disabled">Next</button>
		</div> 
	<!-- END FIFTH PAGE -->
	<!-- SIXTH PAGE -->
	<div class="col-12 col-md-6 p-4 mx-auto bg-light rounded formPage page2onwards" page="6">
				<div class="row px-2">
					<div class="col-9 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
					<p class="m-auto text-white"> Employment Data</p>
					</div>
					<div class="col-3 col-md-5 py-2">
					Page 6
					</div>
					<div class="col-12" style="border-bottom: 1px solid gray;">
					</div>
				</div> 
				<!-- NO -->
			<h2>NO</h2>
			<!-- 23.  What were your reason(s) for changing jobs? You may choose more than one answer. -->
			{!! Form::label('reasonsNo', '14. What were your reason(s) for changing jobs? You may choose more than one answer. ') !!}
			@foreach( $reasonNo as $data)
			<div>{!! Form::checkbox('reasonsNo[]', $data,isset($reasonsNo_fm) ? $reasonsNo_fm: null) !!} {{$data}}</div>
			@endforeach
			{!! Form::label(null, 'If other, please specifiy') !!}<br>
			{!! Form::text('reasonsNo[]',null,['class' => 'form-control reasonsNo']) !!}
				<button type="button" class="btn btn-sm btn-outline-danger mt-3" onclick="showPage(getPreviousPage())">Previous</button>
				<button type="button" class="btn btn-sm btn-warning text-white mt-3 nextButtonSix" onclick="showPage(9)" disabled="disabled">Next</button>
		</div> 
	<!-- END SIXTH PAGE -->
	<!-- SEVENTH PAGE -->
	<div class="col-12 col-md-6 p-4 mx-auto bg-light rounded formPage page2onwards" page="7">
				<div class="row px-2">
					<div class="col-9 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
					<p class="m-auto text-white"> Employment Data<br>Status: Unemployed(Now) </p>
					</div>
					<div class="col-3 col-md-5 py-2">
					Page 7
					</div>
					<div class="col-12" style="border-bottom: 1px solid gray;">
					</div>
				</div> 
												<!-- NOT EMPLOYED NOW DATA -->
				<!--  Please state the reason(s) why you are not employed now. You may choose more than one answer.  -->
				<h2>NOT EMPLOYED NOW</h2>
				{!! Form::label('reasonUnemployedNow', '7. Please state the reason(s) why you are not employed now. You may choose more than one answer. ') !!}
				@foreach( $reasonUnemployedNow as $data)
				<div>{!! Form::checkbox('reasonUnemployedNow[]', $data,isset($reasonUnemployedNow_fm) ? $reasonUnemployedNow_fm: null) !!} {{$data}}</div>
				@endforeach
				{!! Form::label(null, 'If other, please specifiy') !!}<br>
				{!! Form::text('reasonUnemployedNow[]',null,['class' => 'form-control reasonUnemployedNow']) !!}
				<button type="button" class="btn btn-sm btn-outline-danger mt-3" onclick="showPage(getPreviousPage())">Previous</button>
				<button type="button" class="btn btn-sm btn-warning text-white mt-3 nextButtonSeven" onclick="showPage(9)" disabled="disabled">Next</button>
		</div> 
	<!-- END SEVENTH PAGE -->
	<!-- EIGHTH PAGE -->
		<div class="col-12 col-md-6 p-4 mx-auto bg-light rounded formPage page2onwards" page="8">
				<div class="row px-2">
					<div class="col-9 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
					<p class="m-auto text-white"> Employment Data <br>Status: Unemployed(Never)</p>
					</div>
					<div class="col-3 col-md-5 py-2">
					Page 8
					</div>
					<div class="col-12" style="border-bottom: 1px solid gray;">
					</div>
				</div> 
												<!-- NEVER EMPLOYED DATA -->
				<!--  Please state the reason(s) why you are not employed now. You may choose more than one answer.  -->
			
				{!! Form::label('reasonUnemployedNever', '7. Please state the reason(s) why you are not employed now. You may choose more than one answer. ') !!}
				@foreach( $reasonUnemployedNever as $data)
				<div>{!! Form::checkbox('reasonUnemployedNever[]', $data,isset($reasonUnemployedNever_fm) ? $reasonUnemployedNever_fm: null) !!} {{$data}}</div>
				@endforeach
				{!! Form::label(null, 'If other, please specifiy') !!}<br>
				{!! Form::text('reasonUnemployedNever[]',null,['class' => 'form-control reasonUnemployedNever']) !!}
				<button type="button" class="btn btn-sm btn-outline-danger mt-3" onclick="showPage(getPreviousPage())">Previous</button>
				<button type="button" class="btn btn-sm btn-warning text-white mt-3 nextButtonEight" onclick="showPage(11)" disabled="disabled">Next</button>
		</div> 
	<!-- END EIGHTH PAGE -->
	<!-- NINTH PAGE -->
	<div class="col-12 col-md-6 p-4 mx-auto bg-light rounded formPage page2onwards" page="9">
				<div class="row px-2">
					<div class="col-9 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
					<p class="m-auto text-white"> Employment Data (First Full-Time Job) </p>
					</div>
					<div class="col-3 col-md-5 py-2">
					Page 9
					</div>
					<div class="col-12" style="border-bottom: 1px solid gray;">
					</div>
				</div> 
				<!--   Was your first job after college related to your course/program? -->
				{!! Form::label('isFirstJobRelated', '15. Was your first job after college related to your course/program?') !!}
				@foreach($isFirstJobRelated as $data)
				<div>{!!	Form::radio('isFirstJobRelated', $data) !!} {{$data}}</div>
				@endforeach

				<!--  What was your job position in your first work after college?l -->
				{!! Form::label('isJobpositionFirstworkAfterCollege', '16. What was your job position in your first work after college?') !!}
				{!! Form::text('isJobpositionFirstworkAfterCollege',null, ['class' => 'form-control']) !!}

				<!--  Name of the company / organization you first worked in -->
				{!! Form::label(null, '17. Name of the company / organization you first worked in ') !!}
				{!! Form::text('firstCompanyworked',null, ['class' => 'form-control']) !!}


				<button type="button" class="btn btn-sm btn-outline-danger mt-3" onclick="showPage(getPreviousPage())">Previous</button>
				<button type="button" class="btn btn-sm btn-warning text-white mt-3 nextButtonNine" onclick="showPage(10)" disabled="disabled">Next</button>
		</div> 
	<!-- END NINTH PAGE -->
	<!-- TENTH PAGE -->
			<div class="col-12 col-md-6 p-4 mx-auto bg-light rounded formPage page2onwards" page="10">
				<div class="row px-2">
					<div class="col-8 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
					<p class="m-auto text-white"> Employment Data</p>
					</div>
					<div class="col-4 col-md-5 py-2">
					Page 10
					</div>
					<div class="col-12" style="border-bottom: 1px solid gray;">
					</div>
				</div> 
					<!--  How long did it take you to land on your first job after graduating from college?  -->
			{!! Form::label(null, '18. How long did it take you to land on your first job after graduating from college? ') !!}
			<small class="text-danger">*Required</small>
			@foreach(  $monthsEmployedfirstjobAfterGraduate as $data)
			<div>{!!	Form::radio('monthsEmployedfirstjobAfterGraduate', $data) !!} {{$data}}</div>
			@endforeach

			<!-- What type of job roles have you experienced since you graduated from college? You may choose more than one answer. * -->
			{!! Form::label(null, '19. What type of job roles have you experienced since you graduated from college? You may choose more than one answer') !!}
			<small class="text-danger">*Required</small>
			@foreach( $jobRolesExperienced as $data)
			<div>{!! Form::checkbox('jobRolesExperienced[]', $data,isset($jobRolesExperienced_fm) ? $jobRolesExperienced_fm: null) !!} {{$data}}</div>
			@endforeach
			{!! Form::label(null, 'If other, please specifiy') !!}<br>
			{!! Form::text('jobRolesExperienced[]',null,['class' => 'form-control jobRolesExperienced']) !!}
			<!--  What concepts learned in college did you find useful in your current and previous jobs? You may choose more than one answer. -->
			{!! Form::label('conceptsLearned', '20.What concepts learned in college did you find useful in your current and previous jobs? You may choose more than one answer') !!}
			<small class="text-danger">*Required</small>
			@foreach( $conceptsLearned as $data)
			<div>{!! Form::checkbox('conceptsLearned[]', $data, isset($conceptsLearned_fm) ? $conceptsLearned_fm: null) !!} {{$data}}</div>
			@endforeach
			{!! Form::label(null, 'If other, please specifiy') !!}<br>
			{!! Form::text('conceptsLearned[]',null,['class' => 'form-control conceptsLearned']) !!}
			<!-- What programming languages, framework, and technologies have you used in doing your job? Please enumerate them on the blank space below. (For example: Android, J2EE, Joomla, Oracle, etc.) . -->
			{!! Form::label('programmingLanguages', '21.   What programming languages, framework, and technologies have you used in doing your job? Please enumerate them on the blank space below. (For example: Android, J2EE, Joomla, Oracle, etc) ') !!}
			<small class="text-danger">*Required</small>
			{!! Form::text('programmingLanguages', null, ['class' => 'form-control']) !!}

				<button type="button" class="btn btn-sm btn-outline-danger mt-3" onclick="showPage(getPreviousPage())">Previous</button>
				<button type="button" class="btn btn-sm btn-warning text-white mt-3 nextButtonTen" onclick="showPage(11)" disabled="disabled">Next</button>
		</div> 
	<!-- END TENTH PAGE -->

	<!-- ELEVENTH PAGE -->
	<!-- ABOUT THE UNDERGRADUATE PROGRAM PAGE -->
	<div class="col-12 col-md-6 p-4 mx-auto bg-light rounded formPage page2onwards" page="11">		
			<div class="row px-2">
				<div class="col-8 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
				<p class="m-auto text-white"> About the Undergraduate Program </p>
				</div>
				<div class="col-4 col-md-5 py-2">
					Page 11
				</div>
				<div class="col-12" style="border-bottom: 1px solid gray;">
				</div>
			</div> 


			<!-- Please recall your reasons for choosing your undergraduate course. You may choose more than one answer.  -->
			{!! Form::label('reasonsUndergraduateCourse', '22. Please recall your reasons for choosing your undergraduate course. You may choose more than one answer. ') !!}
			<small class="text-danger">*Required</small>
			@foreach( $reasonsUndergraduateCourse as $data)
			<div>{!! Form::checkbox('reasonsUndergraduateCourse[]',$data,isset($reasonsUndergraduateCourse_fm) ? $reasonsUndergraduateCourse_fm: null) !!} {{$data}}</div>
			@endforeach
			{!! Form::label(null, 'If other, please specifiy') !!}<br>
			{!! Form::text('reasonsUndergraduateCourse[]',null,['class' => 'form-control reasonsUndergraduateCourse']) !!}

			<!-- Please rate how the Department of Computer and Information Sciences has developed you for each of the following graduate attributes: -->
			{!! Form::label(null, '23.  Please rate how the Department of Computer and Information Sciences has developed you for each of the following graduate attributes ') !!}
			<small class="text-danger">*Required</small>
			<!-- Knowledge for Solving Computing Problems -->
			<div><strong style="color:#3B666E;">Knowledge for Solving Computing Problems</strong><strong class="text-danger"> *</strong></div>
			Unacceptable
			@foreach(  $rate as $data)
			{!!	Form::radio('knowledge_for_solving_computing_problems', $data) !!} {{$data}}
			@endforeach
			Outstanding
			<!-- Problem Analysis -->
			<div><strong style="color:#3B666E;">Problem Analysis</strong><strong class="text-danger"> *</strong></div>
			Unacceptable
			@foreach(  $rate as $data)
			{!!	Form::radio('problem_analysis', $data) !!} {{$data}}
			@endforeach
			Outstanding
			<!-- Design / Development of Solutions -->
			<div><strong style="color:#3B666E;">Design / Development of Solutions</strong><strong class="text-danger"> *</strong></div>
			Unacceptable
			@foreach(  $rate as $data)
			{!!	Form::radio('development_of_solutions', $data) !!} {{$data}}
			@endforeach
			Outstanding
			<!-- Modern Tool Usage -->
			<div><strong style="color:#3B666E;">Modern Tool Usage</strong><strong class="text-danger"> *</strong></div>
			Unacceptable
			@foreach(  $rate as $data)
			{!!	Form::radio('modern_tool_usage', $data) !!} {{$data}}
			@endforeach
			Outstanding
			<!-- Individual and Team Work -->
			<div><strong style="color:#3B666E;">Individual and Team Work</strong><strong class="text-danger"> *</strong></div>
			Unacceptable
			@foreach(  $rate as $data)
			{!!	Form::radio('individual_and_team_work', $data) !!} {{$data}}
			@endforeach
			Outstanding
			<!-- Communication -->
			<div><strong style="color:#3B666E;">Communication</strong><strong class="text-danger"> *</strong></div>
			Unacceptable
			@foreach(  $rate as $data)
			{!!	Form::radio('communication', $data) !!} {{$data}}
			@endforeach
			Outstanding
			<!-- Computing Professionalism and Society -->
			<div><strong style="color:#3B666E;">Computing Professionalism and Society</strong><strong class="text-danger"> *</strong></div>
			Unacceptable
			@foreach(  $rate as $data)
			{!!	Form::radio('computing_professionalism_and_society', $data) !!} {{$data}}
			@endforeach
			Outstanding
			<!-- Ethics -->
			<div><strong style="color:#3B666E;">Ethics</strong><strong class="text-danger"> *</strong></div>
			Unacceptable
			@foreach(  $rate as $data)
			{!!	Form::radio('ethics', $data) !!} {{$data}}
			@endforeach
			Outstanding
			<!-- Life-long Learning -->
			<div><strong style="color:#3B666E;">Life-long Learning</strong><strong class="text-danger"> *</strong></div>
			Unacceptable
			@foreach(  $rate as $data)
			{!!	Form::radio('lifelong_learning', $data) !!} {{$data}}
			@endforeach
			Outstanding

			<br><br>
			<!-- How relevant was your studying in USC in your current career in terms of:-->
			{!! Form::label(null, '24. How relevant was your studying in USC in your current career in terms of: ') !!}
			<small class="text-danger">*Required</small>
			<!-- Knowledge / Competencies -->
			<div><strong style="color:#3B666E;">Knowledge / Competencies</strong><strong class="text-danger"> *</strong></div>
			Not Relevant
			@foreach(  $ratev2 as $data)
			{!!	Form::radio('knowledge_competencies', $data) !!} {{$data}}
			@endforeach
			Very Relevant
			<!-- Personal Character and Values -->
			<div><strong style="color:#3B666E;">Personal Character and Values</strong><strong class="text-danger"> *</strong></div>
			Not Relevant
			@foreach(  $ratev2 as $data)
			{!!	Form::radio('personal_character_and_values', $data) !!} {{$data}}
			@endforeach
			Very Relevant
			<!-- Community Involvement -->
			<div><strong style="color:#3B666E;">Community Involvement</strong><strong class="text-danger"> *</strong></div>
			Not Relevant
			@foreach(  $ratev2 as $data)
			{!!	Form::radio('community_involvement', $data) !!} {{$data}}
			@endforeach
			Very Relevant
			<br><br>	
			<!-- How relevant is your undergraduate program/course to your current job? -->
			{!! Form::label(null, '25.  How relevant is your undergraduate program/course to your current job? ') !!}
			<small class="text-danger">*Required</small>
			<br>	Not Relevant
			@foreach(  $ratev2 as $data)
			{!!	Form::radio('relevant_undergraduate_program_course_to_current_job', $data) !!} {{$data}}
			@endforeach
			Very Relevant
			<br><br>
			<!-- In retrospect during your time as a USC student, please rate the following facets in terms of its strength.  -->
			{!! Form::label(null, '26. In retrospect during your time as a USC student, please rate the following facets in terms of its strength.  ') !!}
			<!-- Undergraduate course / curriculum-->
			<div><strong style="color:#3B666E;">Undergraduate course / curriculum</strong><strong class="text-danger"> *</strong></div>
			Weak
			@foreach(  $ratev2 as $data)
			{!!	Form::radio('curriculum', $data) !!} {{$data}}
			@endforeach
			Strong
			<!-- Student Workload-->
			<div><strong style="color:#3B666E;"> Student Workload</strong><strong class="text-danger"> *</strong></div>
			Weak
			@foreach(  $ratev2 as $data)
			{!!	Form::radio('workload', $data) !!} {{$data}}
			@endforeach
			Strong
			<!-- Facilities-->
			<div><strong style="color:#3B666E;">Facilities</strong><strong class="text-danger"> *</strong></div>
			Weak
			@foreach(  $ratev2 as $data)
			{!!	Form::radio('facilities', $data) !!} {{$data}}
			@endforeach
			Strong
			<!--Teaching Quality-->
			<div><strong style="color:#3B666E;">Teaching Quality</strong><strong class="text-danger"> *</strong></div>
			Weak
			@foreach(  $ratev2 as $data)
			{!!	Form::radio('teaching', $data) !!} {{$data}}
			@endforeach
			Strong
			<!-- Research Quality-->
			<div><strong style="color:#3B666E;">Research Quality</strong><strong class="text-danger"> *</strong></div>
			Weak 
			@foreach(  $ratev2 as $data)
			{!!	Form::radio('research', $data) !!} {{$data}}
			@endforeach
			Strong
			<!-- Labor Market Relevance-->
			<div><strong style="color:#3B666E;">Labor Market Relevance</strong><strong class="text-danger"> *</strong></div>
			Weak
			@foreach(  $ratev2 as $data)
			{!!	Form::radio('labor_market_relevance', $data) !!} {{$data}}
			@endforeach
			Strong
			<!-- OJT or Internship Hands on Experience-->
			<div><strong style="color:#3B666E;">OJT or Internship Hands on Experience</strong><strong class="text-danger"> *</strong></div>
			Weak
			@foreach(  $ratev2 as $data)
			{!!	Form::radio('OJT', $data) !!} {{$data}}
			@endforeach
			Strong
			<!-- Social and Community Involvement-->
			<div><strong style="color:#3B666E;">Social and Community Involvement</strong><strong class="text-danger"> *</strong></div>
			Weak
			@foreach(  $ratev2 as $data)
			{!!	Form::radio('social_and_community_involvement', $data) !!} {{$data}}
			@endforeach
			Strong
			<br><br>
			<!--Finally, kindly write down your suggestions on the BSCS/BSIT/BSITC/ACT curriculum, other strength/weaknesses concerning your course and other activities to improve the training of ICT professionals.. -->
			{!! Form::label(null, '27. Finally, kindly write down your suggestions on the BSCS/BSIT/BSITC/ACT curriculum, other strength/weaknesses concerning your course and other activities to improve the training of ICT professionals..) ') !!}
	
			{!! Form::text('suggestions', null, ['class' => 'form-control mt-3']) !!}


			<button type="button" class="btn btn-sm btn-outline-danger mt-3 " onclick="showPage(getPreviousPage())">Previous</button>
			<button class="btn btn-sm mt-3 {{ $form->id ? 'btn-outline-info' : 'btn-outline-success' }} nextButtonEleven">
						{{ $form->id ? 'Update' : 'Submit' }}
			</button>
	</div> 
	<!-- END ELEVENTH PAGE -->
		{!! Form::close() !!}
</div>

<!-- jQuery script -->
<script src="/js/extra/jquery-3.3.1.slim.min.js"></script>

<!-- Customize / Self made scripts should be the last one -->
<script src="/js/unique/alumnus/form.js"></script>


@endsection