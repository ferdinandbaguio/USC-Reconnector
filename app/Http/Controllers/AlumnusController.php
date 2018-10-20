<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GraduateTracerStudy;
class AlumnusController extends Controller
{
    public function alumnusProfile()
    {
        return view('user.alumnus.profile');
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
