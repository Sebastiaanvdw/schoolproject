@extends('layouts.app')
@include('layouts.errors')

@section ('content')
    <div class="jumbotron">
        <div class="container">
        <h1>Create a vacancy</h1>

        {!! Form::open(['url' => 'vacancies', 'method' => 'POST']) !!}
        {!! Form::token() !!}
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', '', ['class' => 'form-control']) !!}
                {!! Form::label('body', 'Body') !!}
                {!! Form::text('body', '', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create', ['class' => 'form-control']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

