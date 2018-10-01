<?php

namespace App\Http\Controllers\User\Admin\CRUD;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function students()
    {
        $users = User::where('userType', '=', '')->get();
        return route('ShowStudents')->with('users',$users);
    }
}
