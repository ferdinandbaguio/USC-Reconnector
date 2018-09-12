<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PLoginController extends Controller
{
    public function login(Request $request)
    {
    	if($request->username == 'Admin'){
    		return view('carolinians.index');
    	}
      	else if ($request->username == 'Teacher'){
      		return view('users.teacher.profile');
      	}
      	else if ($request->username == 'Alumni'){
      		return view('users.alumni.profile');	
      	}
      	else{
      		return view('users.student.profile');
      	}
    }
}
