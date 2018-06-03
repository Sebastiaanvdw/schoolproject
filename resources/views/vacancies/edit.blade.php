@extends('layouts.app')
@include('layouts.errors')

@section ('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Edit a vacancy</h1>

            {!! Form::open(['url' => 'vacancies/'.$vacancy->id, 'method' => 'PATCH']) !!}
            {!! Form::token() !!}
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', $vacancy->title, ['class' => 'form-control']) !!}
                {!! Form::label('occupation', 'Occupation') !!}
                {!! Form::text('occupation', $vacancy->occupation, ['class' => 'form-control']) !!}
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', $vacancy->description, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Edit', ['class' => 'form-control']) !!}
            </div>
            {!! Form::close() !!}
            <div class="form-group">
                <a href="{{ url('vacancies') }}">Back</a>
            </div>
        </div>
    </div>
@endsection

