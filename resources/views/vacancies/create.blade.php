@extends('layouts.app')

@section ('content')
    <div class="grid-container">
        <div class="edit_container">
        <h1 class="edit_header">Create a vacancy</h1>

        {!! Form::open(['url' => 'vacancies', 'method' => 'POST']) !!}
        {!! Form::token() !!}
            <div class="edit_container">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', '', ['class' => 'form_title']) !!}
                {!! Form::label('occupation_id', 'Occupation') !!}
                {!! Form::select('occupation_id', $occupations, $vacancy->occupation_id, ['class' => 'form_occupation']) !!}
                {!! Form::label('description', 'Description') !!}
                {!! Form::textarea('description', '', ['class' => 'form_description']) !!}
            </div>
            @include('layouts.errors')
            <div>
                {!! Form::submit('Create', ['class' => 'edit_button2']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="back">
        <a href="{{ url('vacancies') }}" class="back_button">Back</a>
    </div>
@endsection

