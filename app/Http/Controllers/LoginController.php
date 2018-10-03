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
            return redirect(route('home'));
        }
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    
}
