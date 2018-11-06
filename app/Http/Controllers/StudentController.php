<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\User_Skill;
use App\Models\Achievement;
use App\Models\Group_Class;
use App\Models\Subject;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $achievements = Achievement::where('user_id',Auth::user()->id)->get();   
        $skills = User_Skill::where('user_id',Auth::user()->id)->get();
        return view('user.student.profile', compact('skills','achievements')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroySkill($id)
    {
        User_Skill::find($id)->delete();

        return redirect()->back();   
    }

    public function destroyAchv($id)
    {
        Achievement::find($id)->delete();

        return redirect()->back();   
    }

    public function viewStudentProfile($id){

        $data = User::where('id', '=', $id)->first();
        $skills = User_Skill::where('user_id', '=', $id)->get();
        $achv = Achievement::where('user_id', '=', $id)->get();

        return view('user.student.viewprofile')->with('data', $data)->with('skills', $skills)->with('achv', $achv);
    }

    public function searchClass(Request $request){
        $searchValue = $request->input('searchSubject');
        
        $data = Subject::where([['name','LIKE','%'.$searchValue.'%']])->get();

        //dd($data);

        return view('user.student.classList')->with('data',$data);
    }
}
