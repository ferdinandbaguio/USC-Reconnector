<?php

namespace App\Http\Controllers\Admin;

use Excel;
use App\Models\User;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ExcelController extends Controller
{
    public function index()
    {
        $first = User::orderBy('created_at', 'desc')->first();
        $new_users = User::where('created_at', '=', $first->created_at)->get();
        return view('user.admin.requests.bulkregistration')->with('users', $new_users);
    }

    public function download()
    {
        $file = public_path()."/storage/BulkRegistrationTemplate.xlsx";
        $header = ['Content-Type: application/xlsx'];
        return Response::download($file, "BulkRegistrationTemplate.xlsx", $header);
    }

    // Exports the data into an excel file
    // then downloads it into the machine
    public function ExportUsers()
    {
        // return Excel::download(new UsersExport, 'users.csv');
        // return new UsersExport('Female');
        return new UsersExport();
    }

    public function ImportUsers(Request $request)
    {
        (new UsersImport)->import($request->uploaded_file);
        return redirect()->route('BulkRegistration');
    }

    public function Undo()
    {
        $first = User::orderBy('created_at', 'desc')->first();
        $new_users = User::where('created_at', '=', $first->created_at)->get();
        for($i = 0; $i < count($new_users); $i++){
            User::destroy($new_users[$i]->id);
        }
        return view('user.admin.requests.bulkregistration');
    }
}
