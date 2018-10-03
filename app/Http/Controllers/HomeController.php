<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\JobPost;
use Auth;
class HomeController extends Controller
{
    public function latestPost(){
        $latestjobpost = JobPost::orderBy('created_at', 'desc')->first();
        $latestannouncement = Announcement::orderBy('created_at', 'desc')->first();
        // dd($latestjobpost);
        $jobposts = JobPost::orderBy('created_at', 'desc')->limit(10)->get();
        $announcements = Announcement::orderBy('created_at', 'desc')->limit(10)->get();
        $test = compact(['jobposts','announcements','latestjobpost','latestannouncement']);
        // return view('home',['data'=> $test]);
        return view('home',compact(['jobposts','announcements','latestjobpost','latestannouncement']));
    }

    
}
