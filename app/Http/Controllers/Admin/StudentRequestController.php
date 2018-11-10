<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\Student_Class;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StudentRequestController extends Controller
{
    public function index()
    {
        // $dept_id = Auth::user()->department_id;
        // $users = User::where('userStatus', '=', 'Pending')->where('department_id', '=', $dept_id)->get();
        $student_classes = Student_Class::where('status', '=', 'Pending')->get();
        if(isset($request->currentStatus)){
            if($request->currentStatus == 'Denied'){
                $users = User::where('userStatus', '=', 'Denied')->get();
                return view('user.admin.requests.registration')->with('users', $users)->with('currentStatus', 'Denied');
            }
        }
        return view('user.admin.requests.studentrequest')->with('student_classes', $student_classes);
    }

    public function update(Request $request)
    {  
        Student_Class::findOrFail($request->id)->update(['status' => $request->action]);
        return redirect()->back()->with('success', 'Student Status Approve: Successful!');
    }

    public function destroy(Request $request)
    {
        Student_Class::destroy($request->id);
        return redirect()->back()->with('success', 'Student in Class Deleted: Successful!');
    }
}
