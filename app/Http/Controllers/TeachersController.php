<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $friends = DB::table('teachers_info')
                ->join('users', 'teachers_info.user_id', '=', 'users.id')
                ->select('teachers_info.*', 'users.name')
                ->get();
        return view('teachers.teachers',['friends' => $friends]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = DB::table('teachers_info')->where('user_id', session('user_id'))->first();
        if (empty($users)) {
           return view('teachers.teachersUpdate',['users' => '']);
        } else {
            return view('teachers.teachersUpdate',['users' => $users]);
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
        if (!empty($profile_pic = $request->file('profile_pic'))) {
            $name=session('user_id').'_'.$profile_pic->getClientOriginalName();
            $img_file = $profile_pic->move(public_path().'/upload_images/', $name);
        } else {
            $name = $request->input('profile_pic_old');
        }
        $input = array(
                    'user_id' => session('user_id'),
                    'dept_id' => $request->input('department'),
                    'designation' => $request->input('designation'),
                    'blood_group' => $request->input('blood_group'),
                    'profile_pic' => $name,
                    'created_at' => now(),
                    'updated_at' => now()
                );

        $data = DB::table('teachers_info')
                ->updateOrInsert( ['user_id' => session('user_id')], $input );

        if ($data == TRUE) {
            $request->session()->flash('success', 'Update successful!');
        } else {
            $request->session()->flash('error', 'Update Unsuccessful!');
        }
        return redirect()->action('TeachersController@create');
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
        //
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
