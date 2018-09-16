@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin_Dashboard</div>

                    <br>
                    @if(Auth::guard('admin')->check())
                        <P class="text-success">You are login as <strong>Admin</strong></P>
                    @else
                        <p class="text-danger">You are log out as <strong>Admin</strong></p>
                    @endif
                    <div class="card-body">
                        <a href="/courses/create" class="btn btn-primary">Create Course</a>
                        <br>
                        <br>
                        <h3>Your Courses</h3>
                        <table class="table table-striped">
                         <tr>
                             <td>Title</td>
                             <td></td>
                             <td></td>
                         </tr>
                             @foreach($courses as $course)
                                <tr>
                                    <td ><a href="/courses/{{$course->id}}"> {{$course->coursename}}</a></td>
                                    <td><a href="/courses/{{$course->id}}/edit" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action'=>['CoursesController@destroy',$course->id],'method' =>'POST','class'=>'pull-right'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                        {!! !Form::close() !!}
                                    </td>
                                </tr>
                              @endforeach


                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
