<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserRegistrationController extends Controller
{
    public function index(Request $request)
    {
        $dept_id = Auth::user()->department_id;
        $users = User::where('userStatus', '=', 'Pending')->where('department_id', '=', $dept_id)->get();
        if(isset($request->status)){
            $status = $request->status;
            if($status == 'Denied'){
                $users = User::where('userStatus', '=', 'Denied')->get();
                return view('user.admin.requests.registration')->with('users', $users);
            }
        }
        return view('user.admin.requests.registration')->with('users', $users);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {  
        if(!isset($request->action)){
            $user = User::findOrFail($request->id);
            $user->update($request->all());

            return redirect()->back()->with('success', 'Edited User '.$request->id.': Successful!');
        }
        $user = User::findOrFail($request->id)->update(['userStatus' => $request->action]);
        return redirect()->back()->with('success', 'User #'.$request->id.' '.$request->action.': Successful!');
    }

    public function destroy(Request $request)
    {
        User::destroy($request->id);
        return redirect()->back()->with('success', 'User Deleted: Successful!');
    }
}
