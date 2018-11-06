<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\JobPost;
use App\Models\Announcement;

class LoginController extends Controller
{

    public function index(){
        $accApproved = User::where('userStatus', '=', 'Approved')->get();
        $alumTracked = User::where('userType', '=', 'Alumnus')->where('updateStatus', '=', 'Updated')->get();
        $alumTracked2 =  User::where('userType', '=', 'Alumnus')->where('updateStatus', '=', 'Recent')->get();
        $jobOffers = JobPost::all();
        $announcements = Announcement::all();

        $counter1 = count($accApproved); 
        $counter2 = count($alumTracked)+count($alumTracked2);
        $counter3 = count($jobOffers);
        $counter4 = count($announcements);

        return view('authenticate.landingpage')->with('counter1', $counter1)
        ->with('counter2', $counter2)->with('counter3', $counter3)->with('counter4', $counter4);

        return view('authenticate.landingpage');
    }
	public function doLogin(LoginRequest $request)
    {
        $credentials = $request->validated();
        $auth = Auth::attempt($credentials);
        if ($auth) {
            // Authentication passed...

            if(auth()->user()->userStatus == 'Approved' && auth()->user()->userType != 'Admin'){
                return redirect(route('home'));
            }else if(auth()->user()->userStatus == 'Approved' && auth()->user()->userType == 'Admin'){
                return redirect(route('admins'));
            }else if(auth()->user()->userStatus == 'Pending'){
                $email = auth()->user()->email;
                $name = auth()->user()->full_name;

              
                return $this->logout()->with('alert',$name. ' your access request is still Pending you will be notified in your email '.$email);  
            }else if(auth()->user()->userStatus == 'Denied'){
                // dd("error Denied");
                return $this->logout()->with('alert','Your access request has been Denied');  
            }else{
                dd('uknown');
            }

        }else{
            dd('Error', $credentials,$auth);

        }

        // return redirect()->route('login')->withErrors(['password' => 'Incorrect Password']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    
}
