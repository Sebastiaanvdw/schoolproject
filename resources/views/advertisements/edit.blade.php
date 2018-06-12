@extends('layouts.app')
@include('layouts.errors')

@section ('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Edit a advertisement</h1>

            {!! Form::open(['url' => 'advertisements/'.$advertisement->id, 'method' => 'PATCH']) !!}
            {!! Form::token() !!}
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', $advertisement->title, ['class' => 'form-control']) !!}
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', $advertisement->description, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Edit', ['class' => 'form-control']) !!}
            </div>
            {!! Form::close() !!}
            <div class="form-group">
                <a href="{{ url('advertisements') }}">Back</a>
            </div>
        </div>
    </div>
@endsection

