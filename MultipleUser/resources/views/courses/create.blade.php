@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
@include('inc.message')
<h1>Create Course</h1>
{!! Form::open(['action' => 'CoursesController@store','method' => 'POST']) !!}

<div class="form-group">
    {{Form::label('coursename','CourseName')}}
    {{Form::text('coursename','',['class'=>'form-control','placeholder'=>'Course Name'])}}
</div>
<div class="form-group">
    {{Form::label('coursecode','CourseCode')}}
    {{Form::text('coursecode','',['class'=>'form-control','placeholder'=>'Course Code'])}}
</div>
<div class="form-group">
    {{Form::label('coursedescription','CourseDescription')}}
    {{Form::textarea('coursedescription','',['class'=>'form-control','placeholder'=>'Course Description'])}}
</div>
{{Form::submit('Submit',['class'=>'btn btn-info'])}}

{!! Form::close() !!}
@endsection
