<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carolinian;
use DB;

class RequestsController extends Controller
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
            'idNumber' => 'required',
            'gender' => 'required',
            'firstName' => 'required',
            'middleName' => 'required',
            'lastName' => 'required',
            'employmentStatus' => 'required',
        ]);

        $user = new Carolinian;

        $user->idNumber = $request->input('idNumber');
        $user->gender = $request->input('gender');
        $user->firstName = $request->input('firstName');
        $user->middleName = $request->input('middleName');
        $user->lastName = $request->input('lastName');
        $user->employmentStatus = $request->input('employmentStatus');

        $user->password = $request->input('idNumber');

        // $user->password = $request->input('idNumber');
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
