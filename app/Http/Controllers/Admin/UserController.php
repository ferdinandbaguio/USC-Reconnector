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
        return view('user.admin.crud.users.students')->with('users',$users);
    }
    public function alumni()
    {
        $users = User::where('userType', '=', 'Alumnus')->get();
        return view('user.admin.crud.users.alumni')->with('users',$users);
    }
    public function teachers()
    {
        $users = User::where('userType', '=', 'Teacher')->get();
        return view('user.admin.crud.users.teachers')->with('users',$users);
    }
    public function admins()
    {
        $users = User::where('userType', '=', 'Admin')->get();
        return view('user.admin.crud.users.admins')->with('users',$users);
    }
}
