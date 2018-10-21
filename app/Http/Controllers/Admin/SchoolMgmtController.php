<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\User;
use App\Models\Subject;
use App\Models\Schedule;
use App\Models\Semester;
use App\Models\Group_Class;
use Illuminate\Http\Request;
use App\Models\Group_Schedule;
use App\Http\Controllers\Controller;

class SchoolMgmtController extends Controller
{
    public function classes()
    {
        $subjects = Subject::all();
        $grpclasses = Group_Class::all();
        $semesters = Semester::all();
        $teachers = User::where('userType', '=', 'Teacher')->where('userStatus', '=', 'Approved')->get();
        return view('user.admin.crud.schoolmgmt.classes')->with('grpclasses', $grpclasses)
                                                         ->with('subjects', $subjects)
                                                         ->with('teachers', $teachers)
                                                         ->with('semesters', $semesters);
    }
    public function school()
    {
        return view('user.admin.crud.schoolmgmt.school');
    }
    public function storeClass(Request $request)
    {
        $schedule['day'] = $request->day;
        $schedule['class_start'] = $request->class_start;
        $schedule['class_end'] = $request->class_end;
        $schedule['semester_id'] = $request->semester_id;

        $group_class['teacher_id'] = $request->teacher_id;
        $group_class['subject_id'] = $request->subject_id;

        try{
            Schedule::create($schedule);
            Group_Class::create($group_class);
            $sched = DB::table('schedules')->orderBy('created_at', 'desc')->first();
            $grpclass = DB::table('group_classes')->orderBy('created_at', 'desc')->first();
            $gs['group_class_id'] = $grpclass->id;
            $gs['schedule_id'] = $sched->id;
            Group_Schedule::create($gs);

            return redirect()->back()->with('success', 'Created Class: Successful!');
        }
        catch(Exception $e){
            return redirect()->back()->with('error', 'Something went wrong: '.$e);
        }
    }
    public function updateClass(Request $request)
    {  
        $request = $request->all();
        if(isset($request['picture'])){
            // Get Image
            $filenameWithExt = $request['picture']->getClientOriginalName();
            // Get Image Name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Image Extention
            $extension = $request['picture']->getClientOriginalExtension();
            // Rename Image
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            // Save Path of Image
            $path = $request['picture']->storeAs('public/user_images', $filenameToStore);
            // Store Image to Database
            $request['picture'] = $filenameToStore;
        }
        try{
            $user = User::findOrFail($request['id']);
            $user->update($request);
            return redirect()->back()->with('success', 'Edited Class '.$request['id'].': Successful!');
        }
        catch(Exception $e){
            return redirect()->back()->with('error', 'Something went wrong: '.$e);
        }
    }
    public function destroyClass(Request $request)
    {
        try{
            Group_Class::destroy($request->id);
            return redirect()->back()->with('success', 'Deleted Class: Successful!');
        }
        catch(Exception $e){
            return redirect()->back()->with('error', 'Something went wrong: '.$e);
        }
    }   
}