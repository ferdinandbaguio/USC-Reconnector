<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DescriptionController extends Controller
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

    public function store(Request $request)
    {
            
    }

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
    public function update(Request $request)
    {
        $request = $request->all();
    
        $user = User::findOrFail($request['id']);
    
        $user->update($request);
    
        return redirect()->back()->with('success','You have updated your description');
    }

}
