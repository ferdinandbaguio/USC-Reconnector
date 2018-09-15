<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carolinian;
use Auth;
class LoginController extends Controller
{
    public function login(Request $request){

        

    	// if(Auth::attempt([

    	// 	'idnumber' => $request->idnumber,
    	// 	'passsword' => $request->password
    	// ])){
    	// 	$user = Carolinian::where('idnumber',
    	// 		$request->idnumber)->get();

     //        dd($request->all());

    	// 	if($user->is_admin()){
    	// 		return redirect()->route('dashboard');
    	// 	}

    	// 	return redirect()->route('home');
    	// }

    	return redirect()->back();
    	
    }
}
