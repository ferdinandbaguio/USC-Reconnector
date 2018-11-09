<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\JobPost;
use App\Models\Filter;
use App\Models\User;
use Auth;
use DB;
class HomeController extends Controller
{
    public function latestPost(){
        $latestjobpost = JobPost::orderBy('created_at', 'desc')->first();
        $jobposts = JobPost::orderBy('created_at', 'desc')->limit(20)->get();
        $latestannouncement = Announcement::orderBy('created_at', 'desc')->first();
        $announcements = Announcement::orderBy('created_at', 'desc')->limit(10)->get();

        //return $latestannouncement;
        return view('home')->with('latestjobpost', $latestjobpost)
                            ->with('jobposts',$jobposts)
                            ->with('announcements',$announcements)
                            ->with('latestannouncement', $latestannouncement);
    }               


    public function imageView($id){
        $image = JobPost::where('id', $id)->value('image');

        return view('imgView')->with('image',$image);
    }

    
}
