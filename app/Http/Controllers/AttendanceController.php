<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendance = DB::table('attendance')
                ->join('users', 'attendance.teacher_id', '=', 'users.id')
                ->select('attendance.*', 'users.name')
                ->get();
        // echo "<pre>";
        // print_r($attendance);exit;
        return view('attendance.list',['attendance' => $attendance]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher = DB::table('teachers_info')
                ->join('users', 'teachers_info.user_id', '=', 'users.id')
                ->select('teachers_info.user_id', 'users.name')
                ->get();

        $students = DB::table('student_infos')
                ->join('users', 'student_infos.user_id', '=', 'users.id')
                ->select('student_infos.user_id', 'users.name')
                ->get();

        return view('attendance.upload',['teacher' => $teacher, 'students' => $students]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (session('designation') == 'Teacher') {
            $status = 1;
        } else {
            $status = 0;
        }
        $input = array(
                    
                    'dept_id' => $request->input('department'),
                    'batch_id' => $request->input('batch'),
                    'teacher_id' => $request->input('teacher'),
                    'subject_name' => $request->input('subject'),
                    'attendances' => implode(',', $request->input('attendances')),
                    'date_of_atdns' => $request->input('date_of_atdns'),
                    'status' => $status,
                    'upload_by' => session('name'),
                    'created_at' => now()
                    );
        // echo "<pre>";
        // print_r($input);exit;
        $data = DB::table('attendance')->insert($input);
        if ($data == TRUE) {
            $request->session()->flash('success', 'Insert successful!');
        }
        return redirect()->action('AttendanceController@create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('attendance.view',['attendance' => $attendance]);
        return view('attendance.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
