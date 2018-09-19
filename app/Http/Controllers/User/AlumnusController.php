<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlumnusController extends Controller
{
    public function profile() {
        return view('users.alumni.profileTest');
    }
}
