<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GraduateTracerStudy;
use Auth;
use App\Models\User;

class GTSController extends Controller
{
    public function update (Request $request, $id) {
        
        $data = $this->validate($request, [
        	'user_id'                               => 'nullable', 
        	'highest_educational_attainment' 		=> 'nullable',
	        'college_program_taken'			        => 'nullable', 
	        'month_year_graduated' 			        => 'nullable', 
	        'academic_awards_received' 		        => 'nullable',
            'other_awards'		                    => 'nullable',
            'professional_examinations_passed'	    => 'nullable',
            // Educational Background (Further Studies)
            'program_pursued'		                => 'nullable',
            'name_of_graduate_school'	            => 'nullable',
            'address_of_graduate_school'	        => 'nullable',
            'advance_studies'                       => 'nullable',
            'is_presently_employed'                 => 'nullable',
            //Employment Data (Status: Employed)
            'industry_currently_working'            => 'nullable',
            'job_level'                             => 'nullable',
            'present_job_position'                  => 'nullable',
            'job_not_related_to_degree'             => 'nullable',
            'months_employed'                       => 'nullable',
            'name_of_company'                       => 'nullable',
            'address_of_company'                    => 'nullable',
            //YES
            'is_first_job'                          => 'nullable',

            //Reason YES
            'reasonsYes'                            => 'nullable',
            //Reason No
            'reasonsNo'                             => 'nullable',
            'isFirstJobRelated'                     => 'nullable',
            'isJobpositionFirstworkAfterCollege'    => 'nullable',
            
            //extends
            'monthsEmployedfirstjobAfterGraduate'   => 'nullable',
            'jobRolesExperienced'                   => 'nullable',
            'conceptsLearned'                       => 'nullable',
            'programmingLanguages'                  => 'nullable',
            //About the Undergraduate Program
            //30. Please recall your reasons for choosing your undergraduate course. You may choose more than one answer. *
            'reasonsUndergraduateCourse'            => 'nullable',
            //31. Please rate how the Department of Computer and Information Sciences has developed you for each of the following graduate attributes: *
            'knowledge_for_solving_computing_problems'=> 'nullable',
            'problem_analysis'                      => 'nullable',
            'development_of_solutions'  => 'nullable',
            'modern_tool_usage'                     => 'nullable',
            'individual_and_team_work'              => 'nullable',
            'communication'                         => 'nullable',
            'computing_professionalism_and_society' => 'nullable',
            'ethics'                                => 'nullable',
            'lifelong_learning'=> 'nullable',
            //32. How relevant was your studying in USC in your current career in terms of: 
            'knowledge_competencies'=> 'nullable',
            'personal_character_and_values'=> 'nullable',
            'community_involvement'=> 'nullable',
            //33. How relevant is your undergraduate program/course to your current job? *
            'relevant_undergraduate_program_course_to_current_job'=> 'nullable',
            //34. In retrospect during your time as a USC student, please rate the following facets in terms of its strength. *
            'curriculum'=> 'nullable',
            'workload'=> 'nullable',
            'facilities'=> 'nullable',
            'teaching'=> 'nullable',
            'research'=> 'nullable',
            'labor_market_relevance'=> 'nullable',
            'OJT'=> 'nullable',
            'social_and_community_involvement'=> 'nullable',
            //35. Finally, kindly write down your suggestions on the BSCS/BSIT/BSITC/ACT curriculum, other strength/weaknesses concerning your course and other activities to improve the training of ICT professionals.
            'suggestions'=> 'nullable',
        ]);
        
        $data['user_id'] = Auth::user()->id;
        
        $request->advance_studies ? $data['advance_studies'] = implode(', ', $request->advance_studies) : '';
        $request->reasonsYes ? $data['reasonsYes'] = implode(', ', $request->reasonsYes)  : '';
        $request->reasonsNo ? $data['reasonsNo'] = implode(', ', $request->reasonsNo) : '';
        $request->jobRolesExperienced ? $data['jobRolesExperienced'] = implode(', ', $request->jobRolesExperienced) : '';
        $request->conceptsLearned ? $data['conceptsLearned'] = implode(', ', $request->conceptsLearned) : '';
        $request->reasonsUndergraduateCourse ? $data['reasonsUndergraduateCourse'] = implode(', ', $request->reasonsUndergraduateCourse) : ''; 
        $request->reasonUnemployedNow ? $data['reasonUnemployedNow'] = implode(', ', $request->reasonUnemployedNow) : '';
        $request->reasonUnemployedNever ? $data['reasonUnemployedNever'] = implode(', ', $request->reasonUnemployedNever) : '';

    	GraduateTracerStudy::where('id', $id)->update($data);
        return redirect()->back();
    }
    
    public function store (Request $request) {
        
        $data = $this->validate($request, [
        	'user_id'                               => 'nullable', 
        	'highest_educational_attainment' 		=> 'nullable',
	        'college_program_taken'			        => 'nullable', 
	        'month_year_graduated' 			        => 'nullable', 
	        'academic_awards_received' 		        => 'nullable',
            'other_awards'		                    => 'nullable',
            'professional_examinations_passed'	    => 'nullable',
            // Educational Background (Further Studies)
            'program_pursued'		                => 'nullable',
            'name_of_graduate_school'	            => 'nullable',
            'address_of_graduate_school'	        => 'nullable',
            'advance_studies'                       => 'nullable',
            'is_presently_employed'                 => 'nullable',
            //Employment Data (Status: Employed)
            'industry_currently_working'            => 'nullable',
            'job_level'                             => 'nullable',
            'present_job_position'                  => 'nullable',
            'job_not_related_to_degree'             => 'nullable',
            'months_employed'                       => 'nullable',
            'name_of_company'                       => 'nullable',
            'address_of_company'                    => 'nullable',
            //YES
            'is_first_job'                          => 'nullable',

            //Reason YES
            'reasonsYes'                            => 'nullable',
            //Reason No
            'reasonsNo'                             => 'nullable',
            'isFirstJobRelated'                     => 'nullable',
            'isJobpositionFirstworkAfterCollege'    => 'nullable',
            
            //extends
            'monthsEmployedfirstjobAfterGraduate'   => 'nullable',
            'jobRolesExperienced'                   => 'nullable',
            'conceptsLearned'                       => 'nullable',
            'programmingLanguages'                  => 'nullable',
            //About the Undergraduate Program
            //30. Please recall your reasons for choosing your undergraduate course. You may choose more than one answer. *
            'reasonsUndergraduateCourse'            => 'nullable',
            //31. Please rate how the Department of Computer and Information Sciences has developed you for each of the following graduate attributes: *
            'knowledge_for_solving_computing_problems'=> 'nullable',
            'problem_analysis'                      => 'nullable',
            'development_of_solutions'  => 'nullable',
            'modern_tool_usage'                     => 'nullable',
            'individual_and_team_work'              => 'nullable',
            'communication'                         => 'nullable',
            'computing_professionalism_and_society' => 'nullable',
            'ethics'                                => 'nullable',
            'lifelong_learning'                 => 'nullable',
            //32. How relevant was your studying in USC in your current career in terms of: 
            'knowledge_competencies'                => 'nullable',
            'personal_character_and_values'             => 'nullable',
            'community_involvement'                 => 'nullable',
            //33. How relevant is your undergraduate program/course to your current job? *
            'relevant_undergraduate_program_course_to_current_job'=> 'nullable',
            //34. In retrospect during your time as a USC student, please rate the following facets in terms of its strength. *
            'curriculum'=> 'nullable',
            'workload'=> 'nullable',
            'facilities'=> 'nullable',
            'teaching'=> 'nullable',
            'research'=> 'nullable',
            'labor_market_relevance'=> 'nullable',
            'OJT'=> 'nullable',
            'social_and_community_involvement'=> 'nullable',
            //32. Finally, kindly write down your suggestions on the BSCS/BSIT/BSITC/ACT curriculum, other strength/weaknesses concerning your course and other activities to improve the training of ICT professionals.
            'suggestions'=> 'nullable'
        ]);
        
        $data['user_id'] = Auth::user()->id;
        $request->advance_studies ? $data['advance_studies'] = implode(', ', $request->advance_studies) : '';
        $request->reasonsYes ? $data['reasonsYes'] = implode(', ', $request->reasonsYes)  : '';
        $request->reasonsNo ? $data['reasonsNo'] = implode(', ', $request->reasonsNo) : '';
        $request->jobRolesExperienced ? $data['jobRolesExperienced'] = implode(', ', $request->jobRolesExperienced) : '';
        $request->conceptsLearned ? $data['conceptsLearned'] = implode(', ', $request->conceptsLearned) : '';
        $request->reasonsUndergraduateCourse ? $data['reasonsUndergraduateCourse'] = implode(', ', $request->reasonsUndergraduateCourse) : '';
        $request->reasonUnemployedNow ? $data['reasonUnemployedNow'] = implode(', ', $request->reasonUnemployedNow) : '';
        $request->reasonUnemployedNever ? $data['reasonUnemployedNever'] = implode(', ', $request->reasonUnemployedNever) : '';
        
    	GraduateTracerStudy::create($data);
        return redirect()->back();
    }
    public function edit ($id) {

        $form = GraduateTracerStudy::find($id)->first();

        $advancestudies_fm = explode(', ', $form->advance_studies);
        $reasonsYes_fm = explode(', ', $form->reasonsYes);
        $reasonsNo_fm = explode(', ', $form->reasonsNo);
        $jobRolesExperienced_fm = explode(', ', $form->jobRolesExperienced);
        $conceptsLearned_fm = explode(', ', $form->conceptsLearned);
        $reasonsUndergraduateCourse_fm = explode(', ', $form->reasonsUndergraduateCourse);
        $reasonUnemployedNow_fm = explode(', ', $form->reasonUnemployedNow);
        $reasonUnemployedNever_fm = explode(', ', $form->reasonUnemployedNever);
        
        // dd($advance_studies,$reasonsYes,$reasonsNo,$jobRolesExperienced,$conceptsLearned,$reasonsUndergraduateCourse,$reasonUnemployedNow,$reasonUnemployedNever);
        $highestEducationalAttainment = [
            'College Graduate',
            'MA/MS Graduate',
            'MA/MS (with units)',
            'PhD Graduate',
            'PhD (with units)'
        ];
        $collegeProgramTaken = [
            'BS Computer Science',
            'BS Information Technolog',
            'BS Information and Communications Technology',
            'Associate in Computer Technology - NT',
            'Associate in Computer Technology - DT',
            'Associate in Computer Technology - MT'
        ];

        $monthYearGraduated = [
            //2012
            'October 2012' =>  'October 2012',
            //2013
            'March 2013' => 'March 2013',
            'Summer 2013' => 'Summer 2013',
            'October 2013' => 'October 2013',
            //2014
            'March 2014' => 'March 2014',
            'Summer 2014' => 'Summer 2014',
            'Octorber 2014' => 'Octorber 2014',
            //2015
            'March 2015' => 'March 2015',
            'Summber 2015' => 'Summber 2015',
            'October 2015' => 'October 2015',
            //2016
            'March 2016' => 'March 2016',
            'Summer 2016' => 'Summer 2016',
            'October 2016' => 'October 2016',
            //2017
            'March 2017' => 'March 2017',
            'Summber 2017' => 'Summber 2017',
            'October 2017' => 'October 2017',
            //2018
            'March 2018' => 'March 2018'
        ];


        
        $academicAwardsreceived= [
            'Summa Cum Laude' => 'Summa Cum Laude',
            'Magna Cum Laude' => 'Magna Cum Laude',
            'Cum Laude' => 'Cum Laude'
        ];

        
        $pursueAdvanceStudies = [
            'For promotion' => 'For promotion',
            'For professional development' => 'For professional development',
            'Iba pa:' => 'Iba pa:'
        ];
        $presentlyEmployed = [
            'Yes',
            'No, I\'m not employed now',
            'No, I was never employed'
        ];
        $industryCurrentlyWorking = [
            'Academe',
            'Employed in a local ICT industry',
            'Employed in a local non-ICT related company',
            'Employed abroad in an ICT industry',
            'Employed abroad in a non-ICT related company',
            'Self-employed'
        ];

        $jobLevel = [
            'Staff Position',
            'Managerial Position'
        ];

        $monthsEmployed  = [
            'Less than 6 months',
            '6 months to 1 year',
            '1 year to 2 years',
            'More than 2 years'
        ];

        $isFirstJobAfterCollege = [
            'Yes',
            'No'
        ];

        $reasonYes = [
            'Salaries and benefits' => 'Salaries and benefits',
            'Career challenge' => 'Career challenge',
            'Related to my special skil' => 'Related to my special skil',
            'Related to program of study' => 'Related to program of study',
            'Proximity to residence' => 'Proximity to residence',
            'Peer influence' => 'Peer influence',
            'Family influence' => 'Family influence',
            'Iba pa:' => 'Iba pa:'
        ];

        $reasonNo= [
            'Salaries and benefits' => 'Salaries and benefits',
            'Career challenge' => 'Career challenge',
            'Related to my special skil' => 'Related to my special skil',
            'Proximity to residence' => 'Proximity to residence',
            'Iba pa:' => 'Iba pa:'
        ];

        $monthsEmployedfirstjobAfterGraduate = [
            'Less than 6 months',
            '6 months to 1 year',
            '1 year to 2 years',
            'More than 2 years'
        ];
        $jobRolesExperienced  = [
            'Computer Programmer' => 'Computer Programmer',
            'Applications Software Developer' => 'Applications Software Developer',
            'Computing R&D Professional' => 'Computing R&D Professional',
            'Software Design Engineer' => 'Software Design Engineer',
            'Systems Software Developer' => 'Systems Software Developer',
            'Graphics Designer' => 'Graphics Designer',
            'Web Developer' => 'Web Developer',
            'IT Support' => 'IT Support',
            'Network Administrator' => 'Network Administrator',
            'Network Engineer' => 'Network Engineer',
            'Database Administrator' => 'Database Administrator',
            'Systems Integrator' => 'Systems Integrator',
            'Systems Analyst' => 'Systems Analyst',
            'Information Security Administrator' => 'Information Security Administrator',
            'Project Leader' => 'Project Leader',
            'Quality Assurance Specialist' => 'Quality Assurance Specialist',
            'Tech Support Specialist' => 'Tech Support Specialist',
            'Multi-media Editor' => 'Multi-media Editor',
            'Software Tester' => 'Software Tester',
            'Technical Writer' => 'Technical Writer',
            'Computer Technician' => 'Computer Technician',
            'Technopreneur' => 'Technopreneur',
            'Creative Director' => 'Creative Director',
            'Iba pa:' => 'Iba pa:'
        ];
        $conceptsLearned = [
            'Data Structures',
            'File Organization',
            'Object-Oriented Programming',
            'Network Technology',
            'Database Management',
            'Web Applications Development',
            'Software Engineering',
            'Operating Systems',
            'Quality Assurance / Software Testing',
            'Artificial Intelligence',
            'Mobile Technology',
            'Computer Graphics / Multimedia Systems',
            'Information and Systems Management',
            'Presentation Skill',
            'Research Methods',
            'Iba pa:',

        ];
        $reasonsUndergraduateCourse = [
            'Good grades in high school related to the subject',
            'Influence of parents or relatives',
            'Peer influence',
            'Scholarship offering',
            'Out of convenience',
            'Strong passion for the profession',
            'Vast opportunity for employment after graduation',
            'Preparatory course for advanced studies',
            'School administrator recommendation',
            'Influenced by promotion and advertising',
            'Intuitive or “out of the blue” choice',
            'Influence by high school teachers',
            'Curiosity about the program',
            'Good paying job or good financial return',
            'Vocation',
            'Examination results',
            'No particular choice or no better idea on what course to take',
            'Iba pa:'
        ];
        $rate = [
            '1',
            '2',
            '3',
            '4',
            '5',
        ];

        $ratev2 = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6'
        ];

        $isFirstJobRelated = [
            'Yes',
            'No'
        ];
        $reasonUnemployedNow = [
            'No job opportunity',
            'Got married',
            'Health related reasons',
            'Pursued further study',
            'No interest in getting a new job',
            'Starting pay is too low',
            'Waiting for companies to call back',
            'Have plans to seek job out of the country',
            'Iba pa:'
        ];
        $reasonUnemployedNever = [
            'No job opportunity',
            'Got married',
            'Health related reasons',
            'Lack of work experience',
            'Pursued further study',
            'No interest in getting a new job',
            'Lack of professional eligibility requirements',
            'Starting pay is too low',
            'Have plans to seek job out of the country',
            'Iba pa:'
        ];
        $array = [
            '',
            '',
            '',
            '',
            '',
        ];
		return view('user.alumnus.form', compact(
            'highestEducationalAttainment',
            'collegeProgramTaken',
            'monthYearGraduated',
            'academicAwardsreceived',
            'pursueAdvanceStudies',
            'presentlyEmployed',
            'industryCurrentlyWorking',
            'jobLevel',
            'monthsEmployed',
            'isFirstJobAfterCollege',
            'isFirstJobRelated',
            'reasonYes',
            'reasonNo',
            'monthsEmployedfirstjobAfterGraduate',
            'jobRolesExperienced',
            'conceptsLearned',
            'rate',
            'ratev2',
            'reasonUnemployedNow',
            'reasonUnemployedNever',
            'reasonsUndergraduateCourse',
            'form',
            'advancestudies_fm',
            'reasonsYes_fm',
            'reasonsNo_fm',
            'jobRolesExperienced_fm',
            'conceptsLearned_fm' ,
            'reasonsUndergraduateCourse_fm',
            'reasonUnemployedNow_fm',
            'reasonUnemployedNever_fm' 
            
        )); 
        
    }
    
    public function alumnusForm()
    {
        $form = new GraduateTracerStudy;
        $highestEducationalAttainment = [
            'College Graduate',
            'MA/MS Graduate',
            'MA/MS (with units)',
            'PhD Graduate',
            'PhD (with units)'
        ];
        $collegeProgramTaken = [
            'BS Computer Science',
            'BS Information Technolog',
            'BS Information and Communications Technology',
            'Associate in Computer Technology - NT',
            'Associate in Computer Technology - DT',
            'Associate in Computer Technology - MT'
        ];

        $monthYearGraduated = [
            //2012
            'October 2012' =>  'October 2012',
            //2013
            'March 2013' => 'March 2013',
            'Summer 2013' => 'Summer 2013',
            'October 2013' => 'October 2013',
            //2014
            'March 2014' => 'March 2014',
            'Summer 2014' => 'Summer 2014',
            'Octorber 2014' => 'Octorber 2014',
            //2015
            'March 2015' => 'March 2015',
            'Summber 2015' => 'Summber 2015',
            'October 2015' => 'October 2015',
            //2016
            'March 2016' => 'March 2016',
            'Summer 2016' => 'Summer 2016',
            'October 2016' => 'October 2016',
            //2017
            'March 2017' => 'March 2017',
            'Summber 2017' => 'Summber 2017',
            'October 2017' => 'October 2017',
            //2018
            'March 2018' => 'March 2018'
        ];


        
        $academicAwardsreceived= [
            'Summa Cum Laude' => 'Summa Cum Laude',
            'Magna Cum Laude' => 'Magna Cum Laude',
            'Cum Laude' => 'Cum Laude'
        ];

        
        $pursueAdvanceStudies = [
            'For promotion',
            'For professional development',
            'Iba pa:'
        ];
        $presentlyEmployed = [
            'Yes',
            'No, I\'m not employed now',
            'No, I was never employed'
        ];
        $industryCurrentlyWorking = [
            'Academe',
            'Employed in a local ICT industry',
            'Employed in a local non-ICT related company',
            'Employed abroad in an ICT industry',
            'Employed abroad in a non-ICT related company',
            'Self-employed'
        ];

        $jobLevel = [
            'Staff Position',
            'Managerial Position'
        ];

        $monthsEmployed  = [
            'Less than 6 months',
            '6 months to 1 year',
            '1 year to 2 years',
            'More than 2 years'
        ];

        $isFirstJobAfterCollege = [
            'Yes',
            'No'
        ];

        $reasonYes = [
            'Salaries and benefits' => 'Salaries and benefits',
            'Career challenge' => 'Career challenge',
            'Related to my special skil' => 'Related to my special skil',
            'Related to program of study' => 'Related to program of study',
            'Proximity to residence' => 'Proximity to residence',
            'Peer influence' => 'Peer influence',
            'Family influence' => 'Family influence',
            'Iba pa:' => 'Iba pa:'
        ];

        $reasonNo= [
            'Salaries and benefits' => 'Salaries and benefits',
            'Career challenge' => 'Career challenge',
            'Related to my special skil' => 'Related to my special skil',
            'Proximity to residence' => 'Proximity to residence',
            'Iba pa:' => 'Iba pa:'
        ];

        $monthsEmployedfirstjobAfterGraduate = [
            'Less than 6 months',
            '6 months to 1 year',
            '1 year to 2 years',
            'More than 2 years'
        ];
        $jobRolesExperienced  = [
            'Computer Programmer' => 'Computer Programmer',
            'Applications Software Developer' => 'Applications Software Developer',
            'Computing R&D Professional' => 'Computing R&D Professional',
            'Software Design Engineer' => 'Software Design Engineer',
            'Systems Software Developer' => 'Systems Software Developer',
            'Graphics Designer' => 'Graphics Designer',
            'Web Developer' => 'Web Developer',
            'IT Support' => 'IT Support',
            'Network Administrator' => 'Network Administrator',
            'Network Engineer' => 'Network Engineer',
            'Database Administrator' => 'Database Administrator',
            'Systems Integrator' => 'Systems Integrator',
            'Systems Analyst' => 'Systems Analyst',
            'Information Security Administrator' => 'Information Security Administrator',
            'Project Leader' => 'Project Leader',
            'Quality Assurance Specialist' => 'Quality Assurance Specialist',
            'Tech Support Specialist' => 'Tech Support Specialist',
            'Multi-media Editor' => 'Multi-media Editor',
            'Software Tester' => 'Software Tester',
            'Technical Writer' => 'Technical Writer',
            'Computer Technician' => 'Computer Technician',
            'Technopreneur' => 'Technopreneur',
            'Creative Director' => 'Creative Director',
            'Iba pa:' => 'Iba pa:'
        ];
        $conceptsLearned = [
            'Data Structures' => 'Data Structures',
            'File Organization' => 'File Organization',
            'Object-Oriented Programming' => 'Object-Oriented Programming',
            'Network Technology' => 'Network Technology',
            'Database Management' => 'Database Management',
            'Web Applications Development' => 'Web Applications Development',
            'Software Engineering' => 'Software Engineering',
            'Operating Systems' => 'Operating Systems',
            'Quality Assurance / Software Testing' => 'Quality Assurance / Software Testing',
            'Artificial Intelligence' => 'Artificial Intelligence',
            'Mobile Technology' => 'Mobile Technology',
            'Computer Graphics / Multimedia Systems' => 'Computer Graphics / Multimedia Systems',
            'Information and Systems Management' => 'Information and Systems Management',
            'Presentation Skill' => 'Presentation Skill',
            'Research Methods' =>  'Research Methods',
            'Iba pa:' => 'Iba pa:',

        ];
        $reasonsUndergraduateCourse = [
            'Good grades in high school related to the subject' =>  'Good grades in high school related to the subject',
            'Influence of parents or relatives' =>  'Influence of parents or relatives',
            'Peer influence' =>  'Peer influence',
            'Scholarship offering' =>  'Scholarship offering',
            'Out of convenience' =>  'Out of convenience',
            'Strong passion for the profession' =>  'Strong passion for the profession',
            'Vast opportunity for employment after graduation' =>  'Vast opportunity for employment after graduation',
            'Preparatory course for advanced studies' =>  'Preparatory course for advanced studies',
            'School administrator recommendation' =>  'School administrator recommendation',
            'Influenced by promotion and advertising' =>  'Influenced by promotion and advertising',
            'Intuitive or “out of the blue” choice' =>  'Intuitive or “out of the blue” choice',
            'Influence by high school teachers' =>  'Influence by high school teachers',
            'Curiosity about the program' =>  'Curiosity about the program',
            'Good paying job or good financial return' =>  'Good paying job or good financial return',
            'Vocation' =>  'Vocation',
            'Examination results' =>  'Examination results',
            'No particular choice or no better idea on what course to take' =>  'No particular choice or no better idea on what course to take',
            'Iba pa:' =>  'Iba pa:'
        ];
        $rate = [
            '1',
            '2',
            '3',
            '4',
            '5',
        ];

        $ratev2 = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6'
        ];

        $isFirstJobRelated = [
            'Yes',
            'No'
        ];
        $reasonUnemployedNow = [
            'No job opportunity' => 'No job opportunity',
            'Got married' => 'Got married',
            'Health related reasons' => 'Health related reasons',
            'Pursued further study' => 'Pursued further study',
            'No interest in getting a new job' => 'No interest in getting a new job',
            'Starting pay is too low' => 'Starting pay is too low',
            'Waiting for companies to call back' => 'Waiting for companies to call back',
            'Have plans to seek job out of the country' => 'Have plans to seek job out of the country',
            'Iba pa:' => 'Iba pa:'
        ];
        $reasonUnemployedNever = [
            'No job opportunity' => 'No job opportunity',
            'Got married' => 'Got married',
            'Health related reasons' => 'Health related reasons',
            'Lack of work experience' => 'Lack of work experience',
            'Pursued further study' => 'Pursued further study',
            'No interest in getting a new job' => 'No interest in getting a new job',
            'Lack of professional eligibility requirements' => 'Lack of professional eligibility requirements',
            'Starting pay is too low' => 'Starting pay is too low',
            'Have plans to seek job out of the country' => 'Have plans to seek job out of the country',
            'Iba pa:' => 'Iba pa:'
        ];
        $array = [
            '',
            '',
            '',
            '',
            '',
        ];
		return view('user.alumnus.form', compact(
            'highestEducationalAttainment',
            'collegeProgramTaken',
            'monthYearGraduated',
            'academicAwardsreceived',
            'pursueAdvanceStudies',
            'presentlyEmployed',
            'industryCurrentlyWorking',
            'jobLevel',
            'monthsEmployed',
            'isFirstJobAfterCollege',
            'isFirstJobRelated',
            'reasonYes',
            'reasonNo',
            'monthsEmployedfirstjobAfterGraduate',
            'jobRolesExperienced',
            'conceptsLearned',
            'rate',
            'ratev2',
            'reasonUnemployedNow',
            'reasonUnemployedNever',
            'reasonsUndergraduateCourse',
            'form'
        )); 
    }

}
