<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = Course::all();
        return view('courses/index')->with('courses',$courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('courses.create');
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
            'coursename' =>' required',
            'coursecode' => 'required',
            'coursedescription' => 'required'
        ]);

        //create course
        $course = new Course;
        $course->coursename = $request->input('coursename');
        $course->coursecode = $request->input('coursecode');
        $course->coursedescription = $request->input('coursedescription');
        $course->admin_id = auth()->guard('admin')->user()->id;
        $course->save();

        return redirect('/admin')->with('success','Course Created');
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
        $course = Course::find($id);
        return view ('courses.show')->with('course',$course);
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
        $course = Course::find($id);
        return view ('courses.edit')->with('course',$course);
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
        //
        $this->validate($request,[
            'coursename' =>' required',
            'coursecode' => 'required',
            'coursedescription' => 'required'
        ]);

        //create course
        $course = Course::find($id);
        $course->coursename = $request->input('coursename');
        $course->coursecode = $request->input('coursecode');
        $course->coursedescription = $request->input('coursedescription');
        $course->save();

        return redirect('/admin')->with('success','Course Updated');
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
        $course = Course::find($id);
        $course->delete();
        return redirect('/admin');
    }
}
