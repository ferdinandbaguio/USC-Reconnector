<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserSkill;
use App\Models\Achievement;
use Auth;
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
    	
        // dd($request->toArray());
        $data = $this->validate($request,[
            'user_id' => 'nullable',
            'skillName' => 'nullable',
            'skillPercent' => 'nullable'
        ]);

        $data['user_id'] = Auth::user()->id;

        UserSkill::create($data);

        return redirect()->back();
    }

    public function addAch(Request $request)
    {
        
        // dd($request->toArray());

        $data = $this->validate($request,[
            'user_id' => 'nullable',
            'achTitle' => 'nullable',
            'achYear' => 'nullable'
        ]);

        $data['user_id'] = Auth::user()->id;

        Achievement::create($data);

        return redirect()->back();
    }
}
