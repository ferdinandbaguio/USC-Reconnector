<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{

    public function index(){
        return view('authenticate.landingpage');
    }
	public function login(Request $request)
    {
        $credentials = $request->only('idnumber', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            if(auth()->user()->userStatus == 'Approved' && auth()->user()->userType != 'Admin'){
                return redirect(route('home'));
            }else if(auth()->user()->userStatus == 'Approved' && auth()->user()->userType == 'Admin'){
                return redirect(route('admins'));
            }else{
                return $this->logout();
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
