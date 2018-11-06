<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GraduateTracerStudy extends Model
{
    protected $fillable = [
            'user_id',

        	'highest_educational_attainment',	
	        'college_program_taken',			       
	        'month_year_graduated',			       
	        'academic_awards_received' ,		      
            'other_awards',		                  
            'professional_examinations_passed',	  
            // Educational Background (Further Studies)
            'program_pursued',		              
            'name_of_graduate_school',	            
            'address_of_graduate_school',	       
            'advance_studies',                      
            'is_presently_employed',                
            //Employment Data (Status: Employed)
            'industry_currently_working',          
            'job_level',                            
            'present_job_position',                 
            'job_not_related_to_degree',         
            'months_employed',                      
            'name_of_company',                      
            'address_of_company',                  
            //YES
            'is_first_job',                          
                             
            //Reason YES
            'reasonsYes',                            
            //Reason No
            'reasonsNo',                             
            'isFirstJobRelated',                    
            'isJobpositionFirstworkAfterCollege',
            'firstCompanyworked',    
            
            //extends
            'monthsEmployedfirstjobAfterGraduate',   
            'jobRolesExperienced',                   
            'conceptsLearned',                      
            'programmingLanguages',                  
            //About the Undergraduate Program
            //30. Please recall your reasons for choosing your undergraduate course. You may choose more than one answer. *
            'reasonsUndergraduateCourse',          
            //31. Please rate how the Department of Computer and Information Sciences has developed you for each of the following graduate attributes: *
            'knowledge_for_solving_computing_problems',
            'problem_analysis',                    
            'development_of_solutions', 
            'modern_tool_usage',                 
            'individual_and_team_work',            
            'communication',
            'computing_professionalism_and_society',
            'ethics',
            'lifelong_learning',
            //32. How relevant was your studying in USC in your current career in terms of: 
            'knowledge_competencies',
            'personal_character_and_values',
            'community_involvement',
            //33. How relevant is your undergraduate program/course to your current job? *
            'relevant_undergraduate_program_course_to_current_job',
            //34. In retrospect during your time as a USC student, please rate the following facets in terms of its strength. *
            'curriculum',
            'workload',
            'facilities',
            'teaching',
            'research',
            'labor_market_relevance',
            'OJT',
            'social_and_community_involvement',
            //35. Finally, kindly write down your suggestions on the BSCS/BSIT/BSITC/ACT curriculum, other strength/weaknesses concerning your course and other activities to improve the training of ICT professionals.
            'suggestions',
            'reasonUnemployedNow',
            'reasonUnemployedNever',

            'advance_studies_text',
            'reasonUnemployedNow_text',
            'reasonUnemployedNever_text',
            'reasonsYes_text',
            'reasonsNo_text',
            'jobRolesExperienced_text',
            'conceptsLearned_text',
            'reasonsUndergraduateCourse_text'
    ];

    public function graduateTracer()
    {
    	return $this->belongsTo('App\Models\User','user_id');
    }
}

