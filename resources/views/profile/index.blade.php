@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>

                    <div class="panel-body">
                        Hello, {{ Auth::user()->name }}, here is your profile.
                        <hr>
                        <h3>Your Bio</h3>
                        {{$profile->bio}}
                        <br>
                        <br>
                        <a class="btn btn-primary" href="{{url('profile/edit')}}">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
