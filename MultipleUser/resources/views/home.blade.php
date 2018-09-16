@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(Auth::guard('web')->check())
                        <P
                                class="text-success">You are login as <strong>User</strong></P>
                    @else
                        <p class="text-danger">You are log out as <strong>User</strong></p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
