@extends('layouts.app')

@section ('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Edit a vacancy</h1>

            {!! Form::open(['url' => 'vacancies/'.$vacancy->id, 'method' => 'PATCH']) !!}
            {!! Form::token() !!}
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', $vacancy->title, ['class' => 'form-control']) !!}
                {!! Form::label('body', 'Body') !!}
                {!! Form::text('body', $vacancy->body, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Edit', ['class' => 'form-control']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

