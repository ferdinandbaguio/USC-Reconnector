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
        // Delete Schedule
        if(isset($request->action)){
            if($request->action == "Delete Schedule 1"){
                if($request->gsid1 == "")
                    return redirect()->back()->with('warning', 'Nothing to Delete...');
                $id = Group_Schedule::select('id')->where('schedule_id', '=', $request->gsid1)->get();
                Schedule::destroy($request->gsid1);
                Group_Schedule::destroy($id[0]);
            }
            elseif($request->action == "Delete Schedule 2"){
                if($request->gsid2 == "")
                    return redirect()->back()->with('warning', 'Nothing to Delete...');
                $id = Group_Schedule::select('id')->where('schedule_id', '=', $request->gsid2)->get();
                Schedule::destroy($request->gsid2);
                Group_Schedule::destroy($id[0]);
            }
            elseif($request->action == "Delete Schedule 3"){
                if($request->gsid3 == "")
                    return redirect()->back()->with('warning', 'Nothing to Delete...');
                $id = Group_Schedule::select('id')->where('schedule_id', '=', $request->gsid3)->get();
                Schedule::destroy($request->gsid3);
                Group_Schedule::destroy($id[0]);
            }
            return redirect()->back()->with('success', 'Deleted Schedule: Successful!');
        }
        $request = $request->all();
        // Update Group Class
            $gc['id'] = $request['id'];
            $gc['status'] = $request['status'];
            $gc['subject_id'] = $request['subject_id'];
            $gc['teacher_id'] = $request['teacher_id'];
            $gcToUpdate = Group_Class::findOrFail($gc['id']);
            $gcToUpdate->update($gc);
        // Update Schedule 1
            $gs1['semester_id'] = $request['semester_id1'];
            $gs1['day'] = $request['day1'];
            $gs1['class_start'] = $request['class_start1'];
            $gs1['class_end'] = $request['class_end1'];
            // If the Instance exists at the database = Update
            if($request['gsid1'] != ""){
                $gsToUpdate1 = Schedule::findOrFail($request['gsid1']);
                $gsToUpdate1->update($gs1);
            }
            // If the Instance does not exist at the database = Create
            elseif($gs1['semester_id'] != "" && $gs1['day'] != "" && $gs1['class_start'] != "" && $gs1['class_end'] != ""){
                Schedule::create($gs1);
                $schedRecent = DB::table('schedules')->orderBy('created_at', 'desc')->first();
                $gsCreate['group_class_id'] = $gc['id'];
                $gsCreate['schedule_id'] = $schedRecent->id;
                Group_Schedule::create($gsCreate);
            }
        // Update Schedule 2
            $gs2['semester_id'] = $request['semester_id2'];
            $gs2['day'] = $request['day2'];
            $gs2['class_start'] = $request['class_start2'];
            $gs2['class_end'] = $request['class_end2'];
            if($request['gsid2'] != ""){
                $gsToUpdate2 = Schedule::findOrFail($request['gsid2']);
                $gsToUpdate2->update($gs2);
            }
            elseif($gs2['semester_id'] != "" && $gs2['day'] != "" && $gs2['class_start'] != "" && $gs2['class_end'] != ""){
                Schedule::create($gs2);
                $schedRecent = DB::table('schedules')->orderBy('created_at', 'desc')->first();
                $gsCreate['group_class_id'] = $gc['id'];
                $gsCreate['schedule_id'] = $schedRecent->id;
                Group_Schedule::create($gsCreate);
            }
        // Update Schedule 3
            $gs3['semester_id'] = $request['semester_id3'];
            $gs3['day'] = $request['day3'];
            $gs3['class_start'] = $request['class_start3'];
            $gs3['class_end'] = $request['class_end3'];
            if($request['gsid3'] != ""){
                $gsToUpdate3 = Schedule::findOrFail($request['gsid3']);
                $gsToUpdate3->update($gs3);
            }
            elseif($gs3['semester_id'] != "" && $gs3['day'] != "" && $gs3['class_start'] != "" && $gs3['class_end'] != ""){
                Schedule::create($gs3);
                $schedRecent = DB::table('schedules')->orderBy('created_at', 'desc')->first();
                $gsCreate['group_class_id'] = $gc['id'];
                $gsCreate['schedule_id'] = $schedRecent->id;
                Group_Schedule::create($gsCreate);
            }
        return redirect()->back()->with('success', 'Edited Class '.$request['id'].': Successful!');
    }
    public function destroyClass(Request $request)
    {
        try{
            $grpschedulesToDelete = Group_Schedule::select('id')->where('group_class_id', '=', $request->id)->get();
            $schedulesToDelete = Group_Schedule::select('schedule_id')->where('group_class_id', '=', $request->id)->get();
            for($i = 0; $i < count($schedulesToDelete); $i++){
                $STD[$i] = $schedulesToDelete[$i]['schedule_id'];
            }
            Group_Class::destroy($request->id);
            Schedule::destroy($STD);
            Group_Schedule::destroy($grpschedulesToDelete);

            return redirect()->back()->with('success', 'Deleted Class: Successful!');
        }
        catch(Exception $e){
            return redirect()->back()->with('error', 'Something went wrong: '.$e);
        }
    }
}