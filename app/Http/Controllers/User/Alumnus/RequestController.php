<?php

namespace App\Http\Controllers\User\Alumnus;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('request.alumni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'idnumber' => 'required',
            'sex' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'employmentStatus' => 'required',
        ]);

        $user = new User;

        $user->idnumber = $request->input('idnumber');
        $user->sex = $request->input('sex');
        $user->firstName = $request->input('firstName');
        if(null !== $request->input('middleName'))
            $user->middleName = $request->input('middleName');
        $user->lastName = $request->input('lastName');
        $user->employmentStatus = $request->input('employmentStatus');

        $user->password = $request->input('idnumber');
        $user->userType = "Alumni";
        // $user->password = $request->input('idnumber');
        // $user->description = "Empty";
        // $user->yearLevel = 0;
        // $user->updateStatus = "Outdated";
        // $user->position = "None";

        // $user->role_id = null;
        // $user->course_id = null;
        // $user->department_id = null;

        $user->save();

        return redirect('/request/create')->with('success','Your request has been successfully submitted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
