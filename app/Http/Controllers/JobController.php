<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Job::where('userStatus' , '=' , 'Pending')->get();
		
		return view('test', compact('users')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
        	'companyName' 	=> 'required',
	        'address'		=> 'nullable', 
	        'jobTitle' 		=> 'required', 
	        'description' 	=> 'required',
	        'salaryRange'	=> 'nullable',
	        'contactNo'		=> 'required', 
	        'email' 	    => 'required',
            'image' 		=> 'nullable',
            'jobStatus' 	=> 'nullable'
        ]);
        $data['jobStatus'] = 'Pending';

        // dd($data);

        Job::create($data);
        
        return redirect()->back();
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
