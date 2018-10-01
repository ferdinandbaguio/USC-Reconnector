<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RequestController extends Controller
{
	public function index (){
		$users = User::where('userStatus' , '=' , 'Pending')->get();
		
		return view('test', compact('users')); 

	}
	 public function store (Request $request) {
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
