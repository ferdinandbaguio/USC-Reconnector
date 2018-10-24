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
        $data = $request->only('idnumber','lastName','firstName','middleName','address','email','contactNo','sex','civilStatus','birthdate','userType');
        User::create($data);
        return redirect()->route('login')->with('message', 'Registeration successful!!');
    }

}
