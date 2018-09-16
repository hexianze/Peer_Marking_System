@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<a href="/admin" class="btn btn-primary">Go back</a>
<h2>Course Name:{{$course->coursename}}</h2>

<small>Written on {{$course->created_at}}</small>
<hr>
<h4>Course Code:{{$course->coursecode}}</h4>
<h4>
    Course Description:{{$course->coursedescription}}
</h4>
<hr>
@if(!Auth::guest())
    @if(Auth::admin()->id ==$course->admin_id)
<a href="/courses/{{$course->id}}/edit" class="btn btn-primary" >Edit Course</a>
<hr>
{!! Form::open(['action'=>['CoursesController@destroy',$course->id],'method'=>'POST','class'=>'float-right']) !!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('DELETE',['class'=>'btn btn-danger'])}}
{!! Form::close() !!}
    @endif
 @endif
<a href="/tasks/create" class="btn btn-primary">Create Task</a>
@endsection