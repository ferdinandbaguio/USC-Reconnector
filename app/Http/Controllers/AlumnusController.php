<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\User_Skill;
use App\Models\Achievement;
use App\GraduateTracerStudy;
class AlumnusController extends Controller
{
    public function alumnusProfile()
    {
        $achievements = Achievement::where('user_id',Auth::user()->id)->get();   
        $skills = User_Skill::where('user_id',Auth::user()->id)->get();
        return view('user.alumnus.profile', compact('skills','achievements')); 
    }

    public function alumnusJobs()
    {
        $jobs = GraduateTracerStudy::all();
        return view('user.alumnus.jobs', compact('jobs')); 
    }

    public function alumnusCommunicate()
    {
        return view('user.alumnus.communicate');
    }

    public function alumnusForm()
    {
        return view('user.alumnus.form'); 
    }

}
