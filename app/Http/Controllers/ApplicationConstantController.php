<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationConstantController extends Controller
{
    public static function getGTSConstants(){
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
            '1' =>'Please Choose' ,
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
            'None' =>'None' ,
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

        return compact(
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
            'reasonUnemployedNever_fm' );
    }
    
}
