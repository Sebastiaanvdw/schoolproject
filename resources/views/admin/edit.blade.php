@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit profile</div>

                    <div class="card-body">
                        {!! Form::open(['url' => 'admin/'.$user->id, 'method' => 'PATCH']) !!}
                        {!! Form::token() !!}

                        <div class="form-group">
                            {{ Form::label('name', 'Name')}}
                            {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}

                            {{ Form::label('email', 'Email')}}
                            {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}

                            {{ Form::label('verified', 'Verified')}}<br>
                            <label>{!! Form::radio('verified', 1, $user->verified, ['class' => 'form-control']) !!} Yes</label><br>
                            <label>{!! Form::radio('verified', 0, !$user->verified, ['class' => 'form-control']) !!} No</label>

                        </div>

                        <div class="form-group">
                            {!! Form::submit('Save', ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
