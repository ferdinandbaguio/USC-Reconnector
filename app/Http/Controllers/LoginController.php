<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{

    public function index(){
        return view('authenticate.login');
    }
	public function login(Request $request)
    {
        $credentials = $request->only('idnumber', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            
            if(auth()->user()->userStatus == 'Approved'){
                $userType = Auth::user()->userType;

                switch ($userType) {
                    case 'Student':
                        return view('user.student.index');
                        break;
                    case 'Alumnus':
                        return redirect(route('lecar'));
                        break;
                    case 'Teacher':
                        return view('user.teacher.index');
                        break;
                    case 'Coordinator':
                        return view('user.admin.index');
                        break;
                    case 'Chair':
                        return view('user.admin.index');
                        break;
                    case 'Admin':
                        return view('user.admin.index');
                        break;
                }
            }else{
                Auth::logout();
                return redirect()->route('login');
            }
        }
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    
}
