<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\User_Skill;
use App\Models\Achievement;
use App\GraduateTracerStudy;
use App\Models\Occupation;
class AlumnusController extends Controller
{
    public function alumnusProfile()
    {
        $achievements = Achievement::where('user_id',Auth::user()->id)->get();   
        $skills = User_Skill::where('user_id',Auth::user()->id)->get();
        $recentJob = Occupation::where('alumni_id',Auth::user()->id)->orderBy('id','desc')->first();
        $allJob = Occupation::orderBy('id','desc')->get();

        return view('user.alumnus.profile', compact('skills','achievements','recentJob','allJob')); 
    }

    public function alumnusJobs()
    {
        $jobs = Occupation::where('alumni_id',Auth::user()->id)->get();
        $latestJob = Occupation::orderBy('created_at', 'desc')->first();
        return view('user.alumnus.jobs', compact('jobs','latestJob')); 
    }

    public function alumnusCommunicate()
    {
        return view('user.alumnus.communicate');
    }

    public function alumnusForm()
    {
        return view('user.alumnus.form'); 
    }

    public function destroySkill($id)
    {
        User_Skill::find($id)->delete();

        return redirect()->back();   
    }

    public function destroyAchv($id)
    {
        Achievement::find($id)->delete();

        return redirect()->back();   
    }

}
