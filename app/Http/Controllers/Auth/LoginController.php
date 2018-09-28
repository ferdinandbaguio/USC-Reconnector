<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function index()
    {
        $role = Auth::user()->role;

        switch ($role) {
            case 'Student':
                return view('user.student.index');
                break;
            case 'Alumnus':
                return view('user.alumnus.index');
                break;
            case 'Teacher':
                return view('user.teacher.index');
                break;
            case 'Admin':
                return view('user.admin.index');
                break;
            default:
                return redirect('login');
                break;
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('idnumber', 'password');

        if (Auth::attempt($credentials)) {
            switch(auth()->user()->userType) {
                case 'Student':
                    return view('user.student.index');
                    break;
                case 'Alumnus':
                    return view('user.alumnus.index');
                    break;
                case 'Teacher':
                    return view('user.teacher.index');
                    break;
                case 'Admin':
                    return view('user.admin.index');
                    break;
                default:
                    dd('not yet approved!@');
                    return redirect()->back();
            }
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
