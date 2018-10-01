<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserRegistrationController extends Controller
{
    public function index()
    {
        $users = User::where('userStatus', '=', 'Pending')->get();
        return view('user.admin.requests.users.index')->with('users',$users);
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        $status = request()->action;
        $user = User::find($id)->update(['userStatus' => $status]);
        return redirect()->back()->with('success', 'User '.$status.': Successful!');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back()->with('success', 'User Deleted: : Successful!');
    }
}
