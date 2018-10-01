<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function students()
    {
        $users = User::where('userType', '=', 'Student')->get();
        return route('ShowStudents')->with('users',$users);
    }
    public function alumni()
    {
        $users = User::where('userType', '=', 'Alumnus')->get();
        return route('ShowAlumni')->with('users',$users);
    }
    public function teachers()
    {
        $users = User::where('userType', '=', 'Teacher')->get();
        return route('ShowTeachers')->with('users',$users);
    }
    public function admins()
    {
        $users = User::where('userType', '=', 'Admin')->get();
        return route('ShowAdmins')->with('users',$users);
    }
}
