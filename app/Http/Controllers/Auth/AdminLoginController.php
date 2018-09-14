<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
	public function __construct(){
		$this->middleware('guest:admin');
	}
    
    public function login(Request $request){
    	// Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      // Attempt to log the user in
      if (Auth::guard('admin')->attempt(['idnumber' => $request->idnumber, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('admin'));
      } 
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('idnumber', 'remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

}
