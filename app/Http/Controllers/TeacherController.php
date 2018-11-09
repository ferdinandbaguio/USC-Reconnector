<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Achievement;
use App\Models\Announcement;
use App\Models\Group_Class;
use App\Models\Student_Class;
use App\Models\Filter;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achievements = Achievement::where('user_id',Auth::user()->id)->get();   
        return view('user.teacher.profile', compact('achievements')); 
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
    public function destroy($id)
    {
        //
    }
    
    public function destroyAchv($id)
    {
        Achievement::find($id)->delete();

        return redirect()->back();   
    }

    public function viewTeacherProfile($id){
        $data = User::where('id', '=', $id)->first();
        $achv = Achievement::where('user_id', '=', $id)->get();

        return view('user.teacher.viewprofile')->with('data', $data)->with('achv', $achv);
    }

    public function listOfClasses(){
        $data = Group_Class::where('teacher_id','=', Auth::user()->id)->get();

        return view('user.teacher.class')->with('data',$data);
    }
    public function viewClass($id){
        $classes = Group_Class::where('teacher_id','=', Auth::user()->id)->get();
        $classDetails = Group_Class::where('id','=', $id)->first();
        $students = Student_Class::where('group_class_id','=',$id)->where('status','=','Approved')->get();
        $posts = Filter::where('group_class_id','=', $id)->orderBy('created_at', 'desc')->get();
        
        return view('user.student.viewClass')->with('classes',$classes)
                                            ->with('classDetails',$classDetails)
                                            ->with('students',$students)
                                            ->with('posts',$posts);                  
    }

    public function classPost(Request $request){

        $announcement = $this->validate($request,[
            'title' => 'required',
            'announcement' => 'required',
            'image' => 'nullable'
        ]);
        $announcement['user_id'] = Auth::user()->id;
        $announcementCreate = Announcement::create($announcement);

        $announcementID = $announcementCreate->id;
        $filter['announcement_id'] = $announcementCreate->id;
        $filter['group_class_id'] = $request->input('group_class_id');
        Filter::create($filter);

        return redirect()->back();
    }

    public function updateClassPost(Request $request){
        $request = $request->all();

        $user = Announcement::findOrFail($request['id']);
    
        $user->update($request);
    
        return redirect()->back();
    }

    public function destroyClassPost($id){
        //dd($id);
        Announcement::find($id)->delete();

        return redirect()->back();
    }
}
