<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function students()
    {
        $courses = Course::all('id', 'code');
        $users = User::where('userType', '=', 'Student')->where('userStatus', '=', 'Approved')->get();
        return view('user.admin.crud.users.students')->with('users',$users)->with('courses', $courses);
    }
    public function alumni()
    {
        $users = User::where('userType', '=', 'Alumnus')->where('userStatus', '=', 'Approved')->get();
        return view('user.admin.crud.users.alumni')->with('users',$users);
    }
    public function teachers()
    {
        $users = User::where('userType', '=', 'Teacher')->where('userStatus', '=', 'Approved')->get();
        return view('user.admin.crud.users.teachers')->with('users',$users);
    }
    public function admins()
    {
        $users = User::where('userType', '=', 'Admin')->where('userType', '=', 'Coordinator')
                     ->where('userType', '=', 'Chair')->where('userStatus', '=', 'Approved')->get();
        return view('user.admin.crud.users.admins')->with('users',$users);
    }
    public function store(Request $request)
    {
        $pictureMaleValues = ['img/alt_imgs/default_male.png', 
                              'img/alt_imgs/default_male1.png', 
                              'img/alt_imgs/default_male2.png'];
        $pictureFemaleValues = ['img/alt_imgs/default_female.png', 
                                'img/alt_imgs/default_female1.png', 
                                'img/alt_imgs/default_female2.png'];
        
        try{
            $request = $request->all();
            $picture = array_rand($pictureMaleValues);

            if($request['sex'] == 'Male'){
                $request['picture'] = $pictureMaleValues[$picture];
            }
            else if($request['sex'] == 'Female'){
                $request['picture'] = $pictureFemaleValues[$picture];
            }

            $request['password'] = bcrypt($request['idnumber']);
            $request['userStatus'] = 'Approved';
            User::create($request);

            return redirect()->back()->with('success', 'Created User: Successful!');
        }
        catch(Exception $e){
            return redirect()->back()->with('error', 'Something went wrong: '.$e);
        }
    }
    public function update(Request $request)
    {  
        try{
            $request = $request->all();
            if(isset($request['picture'])){
                $request['picture']->move('img/users','u'.$request['id'].'.jpg');
                $picturePath = 'img/users/u'.$request['id'].'.jpg';
                $request['picture'] = $picturePath;
            }
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
