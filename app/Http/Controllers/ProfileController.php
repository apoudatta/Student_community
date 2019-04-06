<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();
        $users = DB::table('student_infos')->where('user_id',$id)->first();

        //print_r($users);exit;
        //echo $users;exit;
        if (empty($users)) {
            return view('profile.profileCreate');
        } else {
            //echo $users->user_id;exit;
            return redirect()->action('ProfileController@edit', $users->user_id);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile_pic = $request->file('profile_pic');
        $name=$profile_pic->getClientOriginalName();
        $img_file = $profile_pic->move(public_path().'/upload_images/', $name);
        $input = array(
                    'user_id' => session('user_id'),
                    'dept_id' => $request->input('department'),
                    'batch_id' => $request->input('batch'),
                    'roll' => $request->input('roll'),
                    'semester' => $request->input('semester'),
                    'reg_num' => $request->input('reg_num'),
                    'blood_group' => $request->input('blood_group'),
                    'profile_pic' => $name,
                    'created_at' => now()
                    );
        //print_r($input);exit;
        $data = DB::table('student_infos')->insert($input);
        if ($data == TRUE) {
            $request->session()->flash('success', 'Insert successful!');
        }
        return redirect()->action('ProfileController@create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //echo "string - ".$id;exit;
        $users = DB::table('student_infos')->where('user_id',$id)->first();
        //print_r($users);exit;
        return view('profile.profileUpdate',['users' => $users]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!empty($profile_pic = $request->file('profile_pic'))) {
            $name=$profile_pic->getClientOriginalName();
            $img_file = $profile_pic->move(public_path().'/upload_images/', $name);
        } else {
            $name = $request->input('profile_pic_old');
        }

        $input = array(
                    //'user_id' => $id,
                    'dept_id' => $request->input('department'),
                    'batch_id' => $request->input('batch'),
                    'roll' => $request->input('roll'),
                    'semester' => $request->input('semester'),
                    'reg_num' => $request->input('reg_num'),
                    'blood_group' => $request->input('blood_group'),
                    'profile_pic' => $name,
                    'updated_at' => now()
                );
        //print_r($input);exit;
        $data = DB::table('student_infos')
            ->where('user_id', $id)
            ->update($input);
        //var_dump($data);exit;
        if ($data == TRUE) {
            $request->session()->flash('success', 'Update successful!');
        } else {
            $request->session()->flash('error', 'Update Unsuccessful!');
        }
        return redirect()->action('ProfileController@edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
