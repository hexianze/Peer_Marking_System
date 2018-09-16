@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<h1><a href="/courses/create" class="btn btn-primary">Create Course</a> </h1>
<h2>Course</h2>
@if (count($courses)>0)
    @foreach($courses as $course)
        <div class="card">
            <h3><a href="/courses/{{$course->id}}"> {{$course->coursename}}</a></h3>
            <small>Write on {{$course->created_at}} </small>
        </div>
        @endforeach
    @else
   <p>No course</p>
@endif
@endsection