<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduateTracerStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduate_tracer_studies', function (Blueprint $table) {
            //Educational Background
            $table->increments('id');
            
            $table->string('highest_educational_attainment')->nullable();
            $table->string('college_program_taken')->nullable();
            $table->string('month_year_graduated')->nullable();
            $table->string('academic_awards_received')->nullable();
            $table->string('other_awards')->nullable();
            $table->string('professional_examinations_passed')->nullable();

            //Educational Background (Further Studies)
            $table->string('program_pursued')->nullable();
            $table->string('name_of_graduate_school')->nullable();
            $table->string('address_of_graduate_school')->nullable();

            $table->string('advance_studies')->nullable();
            //Employment Data
            $table->string('is_presently_employed')->nullable();
            //Employment Data (Status: Employed)
            $table->string('industry_currently_working')->nullable();
            $table->string('job_level')->nullable();
            $table->string('present_job_position')->nullable();
            $table->string('job_not_related_to_degree')->nullable();
            $table->string('months_employed')->nullable();
            $table->string('name_of_company')->nullable();
            $table->string('address_of_company')->nullable();
            // Employment Data (Status: Unemployed (Now))
            $table->longText('reasonUnemployedNow')->nullable();
           
            // Employment Data (Status: Unemployed (Never))
            $table->longText('reasonUnemployedNever')->nullable();
           
            //YES
            $table->string('is_first_job')->nullable();

            //Reason YES
            $table->string('reasonsYes')->nullable();
            //Reason No
            $table->string('reasonsNo')->nullable();
            $table->string('isFirstJobRelated')->nullable();
            $table->string('isJobpositionFirstworkAfterCollege')->nullable();
            
            //extends
            $table->string('monthsEmployedfirstjobAfterGraduate')->nullable();
            $table->longText('jobRolesExperienced')->nullable();
            $table->longText('conceptsLearned')->nullable();
            $table->string('programmingLanguages')->nullable();
            //About the Undergraduate Program
            //30. Please recall your reasons for choosing your undergraduate course. You may choose more than one answer. *
            $table->longText('reasonsUndergraduateCourse')->nullable();
            //31. Please rate how the Department of Computer and Information Sciences has developed you for each of the following graduate attributes: *
            $table->string('knowledge_for_solving_computing_problems')->nullable();
            $table->string('problem_analysis')->nullable();
            $table->string('development_of_solutions')->nullable();
            $table->string('modern_tool_usage')->nullable();
            $table->string('individual_and_team_work')->nullable();
            $table->string('communication')->nullable();
            $table->string('computing_professionalism_and_society')->nullable();
            $table->string('ethics')->nullable();
            $table->string('lifelong_learning')->nullable();
            //32. How relevant was your studying in USC in your current career in terms of: 
            $table->string('knowledge_competencies')->nullable();
            $table->string('personal_character_and_values')->nullable();
            $table->string('community_involvement')->nullable();
            //33. How relevant is your undergraduate program/course to your current job? *
            $table->string('relevant_undergraduate_program_course_to_current_job')->nullable();
            //34. In retrospect during your time as a USC student, please rate the following facets in terms of its strength. *
            $table->string('curriculum')->nullable();
            $table->string('workload')->nullable();
            $table->string('facilities')->nullable();
            $table->string('teaching')->nullable();
            $table->string('research')->nullable();
            $table->string('labor_market_relevance')->nullable();
            $table->string('OJT')->nullable();
            $table->string('social_and_community_involvement')->nullable();
            //35. Finally, kindly write down your suggestions on the BSCS/BSIT/BSITC/ACT curriculum, other strength/weaknesses concerning your course and other activities to improve the training of ICT professionals.
            $table->string('suggestions')->nullable();
        



            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graduate_tracer_studies');
    }
}
