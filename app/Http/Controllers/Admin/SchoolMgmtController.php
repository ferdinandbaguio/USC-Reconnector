<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\Year;
use App\Models\User;
use App\Models\School;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Schedule;
use App\Models\Semester;
use App\Models\Department;
use App\Models\Group_Class;
use Illuminate\Http\Request;
use App\Models\Student_Class;
use App\Models\Group_Schedule;

use App\Http\Controllers\Controller;

class SchoolMgmtController extends Controller
{
    public function classes()
    {
        $grpclasses = Group_Class::all();
        $subjects = Subject::all();
        $semesters = Semester::all();
        $years = Year::all();
        $teachers = User::where('userType', '=', 'Teacher')->where('userStatus', '=', 'Approved')->get();
        return view('user.admin.crud.schoolmgmt.classes')->with('grpclasses', $grpclasses)
                                                         ->with('subjects', $subjects)
                                                         ->with('teachers', $teachers)
                                                         ->with('semesters', $semesters)
                                                         ->with('years', $years);
    }
    public function school()
    {
        $schools = School::all();
        $courses = Course::all();
        $departments = Department::all();
        return view('user.admin.crud.schoolmgmt.school')->with('schools', $schools)
                                                        ->with('courses', $courses)
                                                        ->with('departments', $departments);
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
    public function storeSubject(Request $request)
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
            $path = $request['picture']->storeAs('public/subject_img', $filenameToStore);
            // Store Image to Database
            $subj['picture'] = $filenameToStore;
        }
        else{
            $subj['picture'] = "Subject_Default.jpeg";
        }
        $subj['code'] = $request['code'];
        $subj['name'] = $request['name'];
        $subj['description'] = $request['description'];
        Subject::create($subj);

        return redirect()->back()->with('success', 'Created Subject: Successful!');
    }
    public function storeSemester(Request $request)
    {
        $request = $request->all();

        $sem['name'] = $request['name'];
        $sem['year_id'] = $request['year_id'];
        Semester::create($sem);

        return redirect()->back()->with('success', 'Created Semester: Successful!');
    }
    public function storeYear(Request $request)
    {
        $request = $request->all();

        $year['name'] = $request['name'];
        Year::create($year);

        return redirect()->back()->with('success', 'Created Year: Successful!');
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
            $gc['room'] = $request['room'];
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
    public function updateSubject(Request $request)
    {
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
            $path = $request['picture']->storeAs('public/subject_img', $filenameToStore);
            // Store Image to Database
            $subj['picture'] = $filenameToStore;
        }
        $subj['id'] = $request['id'];
        $subj['code'] = $request['code'];
        $subj['name'] = $request['name'];
        $subj['description'] = $request['description'];
        $subject = Subject::find($subj['id']);
        $subject->update($subj);

        return redirect()->back()->with('success', 'Edited Subject: Successful!');
    }
    public function updateSemester(Request $request)
    {
        $sem['id'] = $request->id;
        $sem['name'] = $request->name;
        $sem['year_id'] = $request->year_id;

        $semester = Semester::find($sem['id']);
        $semester->update($sem);

        return redirect()->back()->with('success', 'Edited Semester: Successful!');
    }
    public function updateYear(Request $request)
    {
        $yearData['id'] = $request->id;
        $yearData['name'] = $request->name;

        $year = Year::find($yearData['id']);
        $year->update($yearData);

        return redirect()->back()->with('success', 'Edited Year: Successful!');
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
            if(isset($STD)){
                Schedule::destroy($STD);
            }
            Group_Schedule::destroy($grpschedulesToDelete);

            return redirect()->back()->with('success', 'Deleted Class: Successful!');
        }
        catch(Exception $e){
            return redirect()->back()->with('error', 'Something went wrong: '.$e);
        }
    }
    public function destroySubject(Request $request)
    {
        Subject::destroy($request->id);
        return redirect()->back()->with('success', 'Deleted Subject: Successful!');
    }
    public function destroySemester(Request $request)
    {
        Semester::destroy($request->id);
        return redirect()->back()->with('success', 'Deleted Semester: Successful!');
    }
    public function destroyYear(Request $request)
    {
        Year::destroy($request->id);
        return redirect()->back()->with('success', 'Deleted Year: Successful!');
    }
    public function studentClass(Request $request)
    {
        $students = User::where('userType', '=', 'Student')->where('userStatus', '=', 'Approved')->get();
        $stdclasses = Student_Class::where('group_class_id', '=', $request->id)->get();
        return view('user.admin.crud.schoolmgmt.studentclass')->with('stdclasses', $stdclasses)->with('students', $students)->with('id', $request->id);
    }
    public function storeStudent(Request $request)
    {
        $addToSC['student_id'] = $request->student_id;
        $addToSC['group_class_id'] = $request->group_class_id;
        $addToSC['status'] = 'Approved';
        Student_Class::create($addToSC);
        $students = User::where('userType', '=', 'Student')->where('userStatus', '=', 'Approved')->get();
        $stdclasses = Student_Class::where('group_class_id', '=', $request->group_class_id)->get();
        return view('user.admin.crud.schoolmgmt.studentclass')->with('stdclasses', $stdclasses)
                                                              ->with('students', $students)
                                                              ->with('id', $request->group_class_id);
    }
    public function removeStudent(Request $request)
    {
        Student_Class::where('student_id', '=', $request->student_id)->where('group_class_id', '=', $request->group_class_id)->delete();
        $students = User::where('userType', '=', 'Student')->where('userStatus', '=', 'Approved')->get();
        $stdclasses = Student_Class::where('group_class_id', '=', $request->group_class_id)->get();
        return view('user.admin.crud.schoolmgmt.studentclass')->with('stdclasses', $stdclasses)
                                                              ->with('students', $students)
                                                              ->with('id', $request->group_class_id);
    }
    public function storeSchool(Request $request)
    {
        $newSchoolInstance['code'] = $request['code'];
        $newSchoolInstance['name'] = $request['name'];
        $newSchoolInstance['description'] = $request['description'];
        School::create($newSchoolInstance);
        return redirect()->back()->with('success', 'Created School: Successful!');
    }
    public function storeDepartment(Request $request)
    {
        $newDepartmentInstance['school_id'] = $request['school_id'];
        $newDepartmentInstance['code'] = $request['code'];
        $newDepartmentInstance['name'] = $request['name'];
        $newDepartmentInstance['description'] = $request['description'];
        Department::create($newDepartmentInstance);
        return redirect()->back()->with('success', 'Created Department: Successful!');
    }
    public function storeCourse(Request $request)
    {
        $newCourseInstance['department_id'] = $request['department_id'];
        $newCourseInstance['code'] = $request['code'];
        $newCourseInstance['name'] = $request['name'];
        $newCourseInstance['description'] = $request['description'];
        Course::create($newCourseInstance);
        return redirect()->back()->with('success', 'Created Course: Successful!');
    }
    public function updateSchool(Request $request)
    {
        $updateSchool['id'] = $request['id'];
        $updateSchool['code'] = $request['code'];
        $updateSchool['name'] = $request['name'];
        $updateSchool['description'] = $request['description'];
        $schoolInstance = School::findOrFail($updateSchool['id']);
        $schoolInstance->update($updateSchool);
        return redirect()->back()->with('success', 'Edited School: Successful!');
    }
    public function updateDepartment(Request $request)
    {
        $updateDepartment['id'] = $request['id'];
        $updateDepartment['code'] = $request['code'];
        $updateDepartment['name'] = $request['name'];
        $updateDepartment['description'] = $request['description'];
        $updateDepartment['school_id'] = $request['school_id'];
        $departmentInstance = Department::findOrFail($updateDepartment['id']);
        $departmentInstance->update($updateDepartment);
        return redirect()->back()->with('success', 'Edited Department: Successful!');
    }
    public function updateCourse(Request $request)
    {
        $updateCourse['id'] = $request['id'];
        $updateCourse['code'] = $request['code'];
        $updateCourse['name'] = $request['name'];
        $updateCourse['description'] = $request['description'];
        $updateCourse['department_id'] = $request['department_id'];
        $courseInstance = Course::findOrFail($updateCourse['id']);
        $courseInstance->update($updateCourse);
        return redirect()->back()->with('success', 'Edited Course: Successful!');
    }
    public function destroySchool(Request $request)
    {
        $departments = Department::where('school_id', '=', $request->id)->get();
        for($i = 0; $i < count($departments); $i++){
            $courses = Course::where('department_id', '=', $departments[$i]->id)->get();
            for($j = 0; $j < count($courses); $j++){
                Course::destroy($courses[$j]->id);
            }
            Department::destroy($departments[$i]->id);
        }
        School::destroy($request->id);
        return redirect()->back()->with('success', 'Deleted School: Successful!');
    }
    public function destroyDepartment(Request $request)
    {
        $courses = Course::where('department_id', '=', $request->id)->get();
        for($i = 0; $i < count($courses); $i++){
            Course::destroy($courses[$i]->id);
        }
        Department::destroy($request->id);
        return redirect()->back()->with('success', 'Deleted Department: Successful!');
    }
    public function destroyCourse(Request $request)
    {
        Course::destroy($request->id);
        return redirect()->back()->with('success', 'Deleted Course: Successful!');
    }
}