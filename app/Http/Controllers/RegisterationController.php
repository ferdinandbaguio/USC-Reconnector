<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
class RegisterationController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    { 
 
        $validated = $request->validated();
        
        $validated['idnumber'] = $validated['registeredIdnumber'];
        $validated['password'] = $validated['registeredIdnumber'];
        $validated['civilStatus'] = $validated['civilStatus'];
        $validated['userStatus'] = 'Pending';
        if($validated['userType'] == 'Alumnus'){
            $validated['updateStatus'] = 'Outdated';
            $validated['employmentStatus'] = 'Unemployed(Now)';
        }else{
            $validated['updateStatus'] = null;
            $validated['employmentStatus'] = null;
        }
        // Create Default Picture
            $pictureMaleValues = ['default_male.png', 'default_male1.png', 'default_male2.png'];
            $pictureFemaleValues = ['default_female.png', 'default_female1.png', 'default_female2.png'];
            $random = rand(0, 2);
            if($validated['sex'] == 'Male'){
                $validated['picture'] = $pictureMaleValues[$random];
            }
            else{
                $validated['picture'] = $pictureFemaleValues[$random];
            }
  
        // $validated = array_except($validated, 'register_idnumber');
        User::create($validated);
        return redirect()->route('login')->with('message', 'Registeration successful!!');
    }

}
