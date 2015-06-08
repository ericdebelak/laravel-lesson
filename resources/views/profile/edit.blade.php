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
                        {!! \Form::model($profile, array('route' => array('profile.update'), 'method' => 'POST')) !!}
                        <?php echo \Form::label('bio', 'Bio');
                        echo \Form::text('bio', Input::old('bio'), array('class' => 'form-control')); ?>
                        <br>
                        <?php echo Form::submit('Update', array('class' => 'btn btn-primary')); ?>
                        {!! \Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
