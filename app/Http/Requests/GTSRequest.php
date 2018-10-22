<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GTSRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id'                               => 'nullable', 
        	'highest_educational_attainment' 		=> 'required',
	        'college_program_taken'			        => 'required', 
	        'month_year_graduated' 			        => 'required', 
	        'academic_awards_received' 		        => 'nullable',
            'other_awards'		                    => 'nullable',
            'professional_examinations_passed'	    => 'nullable',
            // Educational Background (Further Studies)
            'program_pursued'		                => 'required_if:highest_educational_attainment,MA/MS Graduate,MA/MS (with units),PhD Graduate,PhD (with units)',
            'name_of_graduate_school'	            => 'required_if:highest_educational_attainment,MA/MS Graduate,MA/MS (with units),PhD Graduate,PhD (with units)',
            'address_of_graduate_school'	        => 'required_if:highest_educational_attainment,MA/MS Graduate,MA/MS (with units),PhD Graduate,PhD (with units)',
            'advance_studies'                       => 'required_if:highest_educational_attainment,MA/MS Graduate,MA/MS (with units),PhD Graduate,PhD (with units)',
            'is_presently_employed'                 => 'required',
            //Employment Data (Status: Employed)
            'industry_currently_working'            => 'required_if:is_presently_employed,Yes',
            'job_level'                             => 'required_if:is_presently_employed,Yes',
            'present_job_position'                  => 'required_if:is_presently_employed,Yes',
            'job_not_related_to_degree'             => 'required_if:is_presently_employed,Yes',
            'months_employed'                       => 'required_if:is_presently_employed,Yes',
            'name_of_company'                       => 'required_if:is_presently_employed,Yes',
            'address_of_company'                    => 'required_if:is_presently_employed,Yes',
            //YES
            'is_first_job'                          => 'required_if:is_presently_employed,Yes',

            //Reason YES
            'reasonsYes'                            => 'required_if:is_first_job,Yes',
            //Reason No
            'reasonsNo'                             => 'required_if:is_first_job,No',
            'isFirstJobRelated'                     => 'required_if:is_first_job,No',
            'isJobpositionFirstworkAfterCollege'    => 'required_if:is_first_job,No',
            'nameofCompanyfirstWorkedin'            => 'required_if:is_first_job,No',
            //extends
            'monthsEmployedfirstjobAfterGraduate'   => 'required_if:is_presently_employed,Yes,No, I\'m not employed now',
            'jobRolesExperienced'                   => 'required_if:is_presently_employed,Yes,No, I\'m not employed now',
            'conceptsLearned'                       => 'required_if:is_presently_employed,Yes,No, I\'m not employed now',
            'programmingLanguages'                  => 'required_if:is_presently_employed,Yes,No, I\'m not employed now',
            //About the Undergraduate Program
            //30. Please recall your reasons for choosing your undergraduate course. You may choose more than one answer. *
            'reasonsUndergraduateCourse'            => 'required',
            //31. Please rate how the Department of Computer and Information Sciences has developed you for each of the following graduate attributes: *
            'knowledge_for_solving_computing_problems'=> 'required',
            'problem_analysis'                      => 'required',
            'development_of_solutions'              => 'required',
            'modern_tool_usage'                     => 'required',
            'individual_and_team_work'              => 'required',
            'communication'                         => 'required',
            'computing_professionalism_and_society' => 'required',
            'ethics'                                => 'required',
            'lifelong_learning'                     => 'required',
            //32. How relevant was your studying in USC in your current career in terms of: 
            'knowledge_competencies'                => 'required',
            'personal_character_and_values'         => 'required',
            'community_involvement'                 => 'required',
            //33. How relevant is your undergraduate program/course to your current job? *
            'relevant_undergraduate_program_course_to_current_job'=> 'required',
            //34. In retrospect during your time as a USC student, please rate the following facets in terms of its strength. *
            'curriculum'                            => 'required',
            'workload'                              => 'required',
            'facilities'                            => 'required',
            'teaching'                              => 'required',
            'research'                              => 'required',
            'labor_market_relevance'                => 'required',
            'OJT'                                   => 'required',
            'social_and_community_involvement'      => 'required',
            //32. Finally, kindly write down your suggestions on the BSCS/BSIT/BSITC/ACT curriculum, other strength/weaknesses concerning your course and other activities to improve the training of ICT professionals.
            'suggestions'                           => 'required',
            'reasonUnemployedNow'                   => 'required_if:is_presently_employed,No,I\'m not employed now',
            'reasonUnemployedNever'                 => 'required_if:is_presently_employed,No, I was never employed'
        ];
    }
}
