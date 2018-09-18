<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Carolinian;

class LoginController extends Controller
{
    public function login(Request $request){

        if( $alumni = Carolinian::where('idNumber',$request->idnumber)->where('userType','=','Alumni')->count() > 0){
            return view('users.alumni.profile');
        }
        if( $student = Carolinian::where('idNumber',$request->idnumber)->where('userType','=','Student')->count() > 0){
            return view('users.student.profile');
        }
        if( $teacher = Carolinian::where('idNumber',$request->idnumber)->where('userType','=','Teacher')->count() > 0){
            return view('users.student.profile');
        }
        if( $admin = Carolinian::where('idNumber',$request->idnumber)->where('userType','=','Admin')->count() > 0){
            return redirect('/carolinians');
        }
        if( $coordinator = Carolinian::where('idNumber',$request->idnumber)->where('userType','=','Coordinator')->count() > 0){
            return redirect('/carolinians');
        }if ( $chair = Carolinian::where('idNumber',$request->idnumber)->where('userType','=','Chair')->count() > 0) {
            return redirect('/carolinians');
        }else{
            return redirect()->back();
        }
       
        
        // if(Auth::Carolinian->userType == 'Student'){
        // return view('users.student.profile');
        //  }else{
        // return view('users.admin.profile');
        //  }
        // return redirect()->back();
    	// if(Auth::attempt([

    	// 	'idnumber' => $request->idnumber,
    	// 	'passsword' => $request->password
    	// ])){
    	// 	$user = Carolinian::where('idnumber',
    	// 		$request->idnumber)->get();

     //        dd($request->all());

    	// 	if($user->is_admin()){
    	// 		return redirect()->route('admin');
    	// 	}

    	// 	return redirect()->route('home');
    	// }

    	// return redirect()->back();
    	
    }
}
