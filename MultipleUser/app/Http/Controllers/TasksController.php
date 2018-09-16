<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks/index')->with('tasks',$tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'taskname' =>' required',
            'taskdescription' => 'required',
            'taskduetime' => 'required',
            'self-markingopen' => 'required',
            'self-markingclose' => 'required',
            'peer-markingopen' => 'required',
            'peer-markingclose' => 'required',
            'taskstatus' => 'required',
        ]);

        //create course
        $course = new Course;
        $course->coursename = $request->input('coursename');
        $course->coursecode = $request->input('coursecode');
        $course->coursedescription = $request->input('coursedescription');
        $course->admin_id = auth()->guard('admin')->user()->id;
        $course->save();

        return redirect('/courses/{{$course->id}}')->with('success','Task Created');
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
