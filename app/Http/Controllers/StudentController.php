<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\User_Skill;
use App\Models\Achievement;
use App\Models\Group_Class;
use App\Models\Student_Class;
use App\Models\Filter;
use App\Models\Announcement;
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

        return redirect()->back()->with('deletedSkill', 'Skill deleted');   
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
        if(!isset($_GET['searchSubject'])){
        return redirect()->back();
        }
        else{
        $searchValue = $request->input('searchSubject');
        
        $data = Group_Class::
                            join('subjects', 'subject_id', '=', 'subjects.id')
                            ->join('users', 'teacher_id', '=', 'users.id')
                            ->select('group_classes.*', 'subjects.name', 'users.firstName')
                            ->where([['subjects.name','LIKE','%'.$searchValue.'%']])
                            ->orWhere([['group_classes.id','LIKE','%'.$searchValue.'%']])
                            ->orWhere([['users.firstName','LIKE','%'.$searchValue.'%']])
                            ->orWhere([['users.middleName','LIKE','%'.$searchValue.'%']])
                            ->orWhere([['users.lastName','LIKE','%'.$searchValue.'%']])
                            ->get();
        //dd($data);

        $checkPending = -1;
        //return $checkStatus;
        foreach ($data as $row) {
            $checkStatus = Student_Class::where('student_id','=', Auth::user()->id)->where('group_class_id','=', $row->id)->first();
                if($checkStatus != null){
                    if($checkStatus->status == 'Pending'){
                         $checkPending = $row->id;
                    }else if ($checkStatus->status == 'Approved') {
                        $checkPending = -2;
                    }{

                    }
                }
        }

        return view('user.student.classList')->with('data',$data)->with('checkPending',$checkPending);
        }
    }

    public function joinClass(Request $request){
        //dd($request->all());
        $data = $this->validate($request,[
            'group_class_id' => 'required',
        ]);

        $data['student_id'] = Auth::user()->id;
        $data['status'] = "Pending";


        Student_Class::create($data);

        return redirect()->back()->with('success', 'Request to join class successfull, please wait for approval');
    }
    public function listOfClasses(){

        $data = Student_Class::where('status','=','Approved')->where('student_id','=', Auth::user()->id)->get();
        return view('user.student.class')->with('data',$data);
    }
    public function viewClass($id){
        $classes = Student_Class::where('status','=','Approved')->where('student_id','=', Auth::user()->id)->get();
        $classDetails = Group_Class::where('id','=', $id)->first();
        $students = Student_Class::where('group_class_id','=',$id)->where('status','=','Approved')->get();
        $posts = Filter::where('group_class_id','=', $id)->orderBy('created_at', 'desc')->get();
        
        return view('user.student.viewClass')->with('classes',$classes)
                                            ->with('classDetails',$classDetails)
                                            ->with('students',$students)
                                            ->with('posts',$posts);                  
    }

}
