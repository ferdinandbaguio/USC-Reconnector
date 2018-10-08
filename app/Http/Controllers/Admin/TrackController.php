<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrackController extends Controller
{
    public function testmap()
    {
        return view('user.admin.tracking.testmap');
    }
    public function worldwide()
    {
        return view('user.admin.tracking.worldwide');
    }
    public function continental()
    {       
        return view('user.admin.tracking.nationwide');
    }
}
