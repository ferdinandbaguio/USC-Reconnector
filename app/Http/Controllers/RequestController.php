<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RequestController extends Controller
{
	public function index (){
		$users = User::all();
		return view('test', compact('users')); 

	}
	 public function request (Request $request) {
    	$data = $this->validate($request, [
        	
        	'idnumber' 			=> 'required',
	        'password'			=> 'nullable', 
	        'gender' 			=> 'required', 
	        'firstname' 		=> 'required',
	        'middlename'		=> 'nullable',
	        'lastname' 			=> 'required', 
	        'employmentStatus' 	=> 'required',
	        'userStatus' 		=> 'required'
    	]);

    	$data['password'] = $data['idnumber'];

    	User::create($data);
 
 	}     
}
