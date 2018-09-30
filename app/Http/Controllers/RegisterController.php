<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function create (Request $request) {
    	$data = $this->validate($request, [
        	
        	'idnumber' 			=> 'required',
	        'password'			=> 'nullable', 
	        'gender' 			=> 'required', 
	        'firstname' 		=> 'required',
	        'middlename'		=> 'required',
	        'lastname' 			=> 'required', 
	        'employmentStatus' 	=> 'required',
	        'role' 				=> 'required',
	        'status' 			=> 'required'
    	]);

    	$data['password'] = $data['idnumber'];

    	User::create($data);
 
 	}   
}
