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
        $validated['idnumber'] = $validated['register_idnumber'];
        $validated = array_except($validated, 'register_idnumber');
        User::create($validated);
        return redirect()->route('login')->with('message', 'Registeration successful!!');
    }

}
