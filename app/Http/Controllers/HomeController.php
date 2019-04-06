<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::id();

        if (Auth::user()->designation == 'Teacher') {
           $users = DB::table('teachers_info')->where('user_id',$user_id)->first();
        } else {
            $users = DB::table('student_infos')->where('user_id',$user_id)->first();
        }

        if (!empty($users)) {
            $profile_pic = $users->profile_pic;
        } else {
            $profile_pic = 'demo.jpg';
        }
        $session_data = array(
                            'user_id' => Auth::id(),
                            'name' => Auth::user()->name,
                            'designation' => Auth::user()->designation,
                            'profile_pic' => $profile_pic
                            );
        session($session_data);
        // Retrieve a piece of data from the session...
        //echo $value = session('profile_pic');    
        return view('home');
    }
}
