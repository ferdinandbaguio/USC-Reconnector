<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function updateDesc(Request $request)
    {
    	$request = $request->all();

		$user = User::findOrFail($request['id']);

		$user->update($request);

		return redirect()->back();
    }


    public function addSkill(Request $request)
    {
    	$name = $request->input('skillName');

    	$data = array('name' =>$name);

    	DB::table('skills')->insert($data);  

    	return redirect()->back();
    }
}
