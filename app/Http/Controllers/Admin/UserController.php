<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\User;
use App\Models\Course;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function students()
    {
        $dept_id = Auth::user()->department_id;
        $courses = Course::all('id', 'code');
        $departments = Department::all('id', 'code');
        $users = User::where('userType', '=', 'Student')->where('userStatus', '=', 'Approved')->where('department_id', '=', $dept_id)->get();
        return view('user.admin.crud.users.students')->with('users',$users)->with('courses', $courses)->with('departments', $departments);
    }
    public function alumni()
    {
        $dept_id = Auth::user()->department_id;
        $departments = Department::all('id', 'code');
        $users = User::where('userType', '=', 'Alumnus')->where('userStatus', '=', 'Approved')->where('department_id', '=', $dept_id)->get();
        return view('user.admin.crud.users.alumni')->with('users',$users)->with('departments', $departments);
    }
    public function teachers()
    {
        $dept_id = Auth::user()->department_id;
        $departments = Department::all('id', 'code');
        $users = User::where('userType', '=', 'Teacher')->where('userStatus', '=', 'Approved')->where('department_id', '=', $dept_id)->get();
        return view('user.admin.crud.users.teachers')->with('users',$users)->with('departments', $departments);
    }
    public function coordinators()
    {
        $dept_id = Auth::user()->department_id;
        $departments = Department::all('id', 'code');
        $users = User::where('userType', '=', 'Coordinator')->where('userStatus', '=', 'Approved')->where('department_id', '=', $dept_id)->get();
        return view('user.admin.crud.users.coordinators')->with('users',$users)->with('departments', $departments);
    }
    public function chairs()
    {
        $dept_id = Auth::user()->department_id;
        $departments = Department::all('id', 'code');
        $users = User::where('userType', '=', 'Chair')->where('userStatus', '=', 'Approved')->where('department_id', '=', $dept_id)->get();
        return view('user.admin.crud.users.chairs')->with('users',$users)->with('departments', $departments);
    }
    public function admins()
    {
        $dept_id = Auth::user()->department_id;
        $departments = Department::all('id', 'code');
        $users = User::where('userType', '=', 'Admin')->where('userStatus', '=', 'Approved')->where('department_id', '=', $dept_id)->get();
        return view('user.admin.crud.users.admins')->with('users',$users)->with('departments', $departments);
    }
    public function store(Request $request)
    {
        $request = $request->all();
        
        if(!isset($request['picture'])){
            $pictureMaleValues = ['default_male.png', 
                                'default_male1.png', 
                                'default_male2.png'];
            $pictureFemaleValues = ['default_female.png', 
                                    'default_female1.png', 
                                    'default_female2.png'];
            $random = rand(0, 2);

            if($request['sex'] == 'Male'){
                $request['picture'] = $pictureMaleValues[$random];
            }
            else if($request['sex'] == 'Female'){
                $request['picture'] = $pictureFemaleValues[$random];
            }

            $request['password'] = bcrypt($request['idnumber']);
        }
        else{
            // Get Image
            $filenameWithExt = $request['picture']->getClientOriginalName();
            // Get Image Name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Image Extention
            $extension = $request['picture']->getClientOriginalExtension();
            // Rename Image
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            // Save Path of Image
            $path = $request['picture']->storeAs('public/user_img', $filenameToStore);
            // Store Image to Database
            $request['picture'] = $filenameToStore;
        }

        try{
            User::create($request);
            return redirect()->back()->with('success', 'Created User: Successful!');
        }
        catch(Exception $e){
            return redirect()->back()->with('error', 'Something went wrong: '.$e);
        }
    }
    public function update(Request $request)
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
            $path = $request['picture']->storeAs('public/user_img', $filenameToStore);
            // Store Image to Database
            $request['picture'] = $filenameToStore;
        }
        try{
            $user = User::findOrFail($request['id']);
            $user->update($request);
            return redirect()->back()->with('success', 'Edited User '.$request['id'].': Successful!');
        }
        catch(Exception $e){
            return redirect()->back()->with('error', 'Something went wrong: '.$e);
        }
    }
    public function destroy(Request $request)
    {
        try{
            User::destroy($request->id);
            return redirect()->back()->with('success', 'Deleted User: Successful!');
        }
        catch(Exception $e){
            return redirect()->back()->with('error', 'Something went wrong: '.$e);
        }
    }   
}
