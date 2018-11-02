<?php

namespace App\Http\Controllers;
use App\Rules\VerifyOldPassword;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function showChangePass($id){
        
        return view('authenticate.passwords.changepassword')->with('id');

    }

    public function changePassword(Request $request,$id){

        $request->validate([
                'old_password' => ['required',new VerifyOldPassword],
                'new_password' => 'required|min:6|different:old_password',
                'new_password_confirmation' => 'required|same:new_password'
            ],

            [
                'new_password_confirmation.same' => 'Passwords do not match',
                'new_password.different' => 'Password must be different'
            ]
            );

            $user = Auth::user()->update(['password'=>$request->new_password_confirmation]);

            Auth::logout();
            return redirect()->route('login')->with('changepassword_success','Successfully change password pls re-login');  
    }

}
