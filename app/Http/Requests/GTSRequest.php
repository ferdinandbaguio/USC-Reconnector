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
            // 'advance_studies'                       => 'required_if:highest_educational_attainment,MA/MS Graduate,MA/MS (with units),PhD Graduate,PhD (with units)',
            'is_presently_employed'                 => 'required',
            //Employment Data (Status: Employed)
            'industry_currently_working'            => 'required_if:is_presently_employed,Yes',
            'job_level'                             => 'required_if:is_presently_employed,Yes',
            'present_job_position'                  => 'required_if:is_presently_employed,Yes',
            'months_employed'                       => 'required_if:is_presently_employed,Yes',
            'name_of_company'                       => 'required_if:is_presently_employed,Yes',
            'address_of_company'                    => 'required_if:is_presently_employed,Yes',
            //YES
            'is_first_job'                          => 'required_if:is_presently_employed,Yes',

            //Reason YES
            'reasonsYes'                            => 'sometimes|required_if:is_first_job,Yes',
            //Reason No
            'reasonsNo'                             => 'required_if:is_first_job,No',
            'isFirstJobRelated'                     => 'required_if:is_first_job,No',
            'isJobpositionFirstworkAfterCollege'    => 'required_if:is_first_job,No',
            'firstCompanyworked'                    => 'required_if:is_first_job,No',
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
          
            'reasonUnemployedNow'                   => 'required_if:is_presently_employed,No,I\'m not employed now',
            'reasonUnemployedNever'                 => 'required_if:is_presently_employed,No, I was never employed',

            'advance_studies_text'                  => 'nullable', 
            'reasonUnemployedNow_text'              => 'nullable', 
            'reasonUnemployedNever_text'            => 'nullable', 
            'reasonsYes_text'                       => 'nullable', 
            'reasonsNo_text'                        => 'nullable', 
            'jobRolesExperienced_text'              => 'nullable', 
            'conceptsLearned_text'                  => 'nullable', 
            'reasonsUndergraduateCourse_text'       => 'nullable'
        
        ];
    }
    public function messages(){
        return [
            'highest_educational_attainment.required' 		=> '1. Highest Educational Attainment is required',
	        'college_program_taken.required'			        => '2. College Program Taken is required', 
	        'month_year_graduated.required' 			        => '3. Month and Year Graduated in College is required', 
	        'academic_awards_received.required' 		        => '4. Academic Awards received in College is required',

            // Educational Background (Further Studies)
            'program_pursued.required_if'		                => '1.1 MA/MS/PhD program pursued/finished is required',
            'name_of_graduate_school.required_if'	            => '1.2 Name of Graduate School  is required',
            'address_of_graduate_school.required_if'	        => '1.3 Address of Graduate School  is required',
            // 'advance_studies.required_if'                       => '1.4 What made you pursue advance studies? is required',
            'is_presently_employed.required'                 => '6. Are you presently employed? is required',
            //Employment Data (Status: Employed)
            'industry_currently_working.required_if'            => '7. In what industry are you currently working?  is required',
            'job_level.required_if'                             => '8. Please indicate your job level.  is required',
            'present_job_position.required_if'                  => '9. What is your present job position? is required',
            'job_not_related_to_degree.required_if'             => '10. If your current job is NOT related to your degree, please explain why. is required',
            'months_employed.required_if'                       => '11. How many months have you been employed in your present job?  is required',
            'name_of_company.required_if'                       => '12. Name of your Present Company or Organization  is required',
            'address_of_company.required_if'                    => '12.1 Address of your Present Company or Organization is required',
            //YES
            'is_first_job.required_if'                          => '13. Is the job you have now, your first job after college? is required',

            //Reason YES
            'reasonsYes.required_if'                            => '14. What are your reason(s) for staying on the job? You may choose more than one answer. (is required)',
            //Reason No
            'reasonsNo.required_if'                             => '14. What were your reason(s) for changing jobs? You may choose more than one answer.  is required',
            'isFirstJobRelated.required_if'                     => '15. Was your first job after college related to your course/program? is required',
            'isJobpositionFirstworkAfterCollege.required_if'    => '16. What was your job position in your first work after college? is required',
            'firstCompanyworked.required_if'                    => '17. Name of the company / organization you first worked in  is required',
            //extends
            'monthsEmployedfirstjobAfterGraduate.required_if'   => '18. How long did it take you to land on your first job after graduating from college?  is required',
            'jobRolesExperienced.required_if'                   => '19. What type of job roles have you experienced since you graduated from college? You may choose more than one answer. is required',
            'conceptsLearned.required_if'                       => '20.What concepts learned in college did you find useful in your current and previous jobs? You may choose more than one answer. is required',
            'programmingLanguages.required_if'                  => '21. What programming languages, framework, and technologies have you used in doing your job? Please enumerate them on the blank space below. (For example: Android, J2EE, Joomla, Oracle, etc.)  is required',
            //About the Undergraduate Program
            //30. Please recall your reasons for choosing your undergraduate course. You may choose more than one answer. *
            'reasonsUndergraduateCourse.required'            => '22. Please recall your reasons for choosing your undergraduate course. You may choose more than one answer.  is required',
            //31. Please rate how the Department of Computer and Information Sciences has developed you for each of the following graduate attributes: *
            'knowledge_for_solving_computing_problems.required'=> '23. Knowledge for Solving Computing Problems  is required',
            'problem_analysis.required'                      => '23. Problem Analysis is required',
            'development_of_solutions.required'              => '23. Design / Development of Solutions is required',
            'modern_tool_usage.required'                     => '23. Modern Tool Usage is required',
            'individual_and_team_work.required'              => '23. Individual and Team Work is required',
            'communication.required'                         => '23. Communication is required',
            'computing_professionalism_and_society.required' => '23. Computing Professionalism and Society is required',
            'ethics.required'                                => '23. Ethics is required',
            'lifelong_learning.required'                     => '23. Life-long Learning is required',
            //32. How relevant was your studying in USC in your current career in terms of: 
            'knowledge_competencies.required'                => '24. Knowledge / Competencies is required',
            'personal_character_and_values.required'         => '24. Personal Character and Values is required',
            'community_involvement.required'                 => '24. Community Involvement is required',
            //33. How relevant is your undergraduate program/course to your current job? *
            'relevant_undergraduate_program_course_to_current_job.required'=> '25. How relevant is your undergraduate program/course to your current job?  is required',
            //34. In retrospect during your time as a USC student, please rate the following facets in terms of its strength. *
            'curriculum.required'                            => '26. Undergraduate course / curriculum is required',
            'workload.required'                              => '26. Student Workload is required',
            'facilities.required'                            => '26. Facilities is required',
            'teaching.required'                              => '26. Teaching Quality is required',
            'research.required'                              => '26. Research Quality is required',
            'labor_market_relevance.required'                => '26. Labor Market Relevance is required',
            'OJT.required'                                   => '26. OJT or Internship Hands on Experience is required',
            'social_and_community_involvement.required'      => '26. Social and Community Involvement is required',
            //32. Finally, kindly write down your suggestions on the BSCS/BSIT/BSITC/ACT curriculum, other strength/weaknesses concerning your course and other activities to improve the training of ICT professionals.
          
            'reasonUnemployedNow.required_if'                   => '7. Please state the reason(s) why you are not employed now. You may choose more than one answer.  is required',
            'reasonUnemployedNever.required_if'                 => '7. Please state the reason(s) why you are not employed now. You may choose more than one answer.  is required'
        ];
    }
}
