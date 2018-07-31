<?php

namespace App\Http\Controllers;

use App\Carolinian;
use Illuminate\Http\Request;
use App\Http\Requests\CarolinianRequest;
class CarolinianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->uType == 'Admin'){
            $carolinians = Carolinian::where('usertype' ,'=', 'Admin')->get();
            return view('carolinians.index',compact('carolinian','carolinians'));
        }else if(request()->uType == 'Alumni'){
            $carolinians = Carolinian::where('usertype' ,'=', 'Alumni')->get();
            return view('carolinians.index',compact('carolinian','carolinians'));
        }else if(request()->uType == 'Teacher'){
            $carolinians = Carolinian::where('usertype' ,'=', 'Teacher')->get();
            return view('carolinians.users.teacher.index',compact('carolinian','carolinians'));
        }else{
            $carolinians = Carolinian::where('usertype' ,'=', 'Student')->get();
            return view('carolinians.users.student.index',compact('carolinian','carolinians'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carolinians.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  Carolinian::create([
        //     'firstname' => 'test',
        //     'middlename' => 'test',
        //     'lastname' => 'test',
        //     'password' => 'test',
        //     'description' => 'test',
        //     'strength' => 'test',
        //     'weakness' => 'test',
        //     'usertype' => 'test'
        //     'course_id' => '1'
        // ]);   
        //  return view('carolinians.users.admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carolinian  $carolinian
     * @return \Illuminate\Http\Response
     */
    public function show(Carolinian $carolinian)
    {
        $carolinians = Carolinian::where('id' ,'=', $carolinian->id)->first();
        return view('carolinians.show',compact('carolinian','carolinians'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carolinian  $carolinian
     * @return \Illuminate\Http\Response
     */
    public function edit(Carolinian $carolinian)
    {
        return view('carolinians.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carolinian  $carolinian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carolinian $carolinian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carolinian  $carolinian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carolinian $carolinian)
    {
        $carolinian->delete();
        return redirect()->back();
    }
}
