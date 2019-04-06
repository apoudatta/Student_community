<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')
                ->join('users', 'posts.user_id', '=', 'users.id')
                ->join('student_infos', 'posts.user_id', '=', 'student_infos.user_id')
                ->select('posts.*', 'users.name','student_infos.profile_pic')
                ->where('posts.upload_by','!=', 'Teacher')
                ->get();

        return view('post.allPost',['posts' => $posts]);
    }

    public function teacher_post()
    {
        $posts = DB::table('posts')
                ->join('users', 'posts.user_id', '=', 'users.id')
                ->join('teachers_info', 'posts.user_id', '=', 'teachers_info.user_id')
                ->select('posts.*', 'users.name','teachers_info.profile_pic')
                ->where('posts.upload_by', 'Teacher')
                ->get();

        return view('post.allPost',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo $request->input('post');
        $input = [
                'post'      => $request->input('post'),
                'upload_by' => session('designation'),
                'user_id'   => session('user_id'),
                'created_at'=> now()
            ];
        $data = DB::table('posts')->insert($input);
        if ($data == TRUE) {
            $request->session()->flash('success', 'Post Publish Success!');
        }
        return redirect()->action('PostController@create');
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
