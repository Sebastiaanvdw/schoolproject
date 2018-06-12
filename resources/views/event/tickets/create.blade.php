@extends('layouts.app')
@include('layouts.errors')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Create a Ticket</h1>

            {!! Form::open(['url' => 'tickets', 'method' => 'POST']) !!}
            {!! Form::token() !!}
            <div class="form-group">
                {{FORM::label('name', 'Name')}}
                {!! Form::text('name', '', ['class' => 'form-control']) !!}
                {{FORM::label('begintime', 'Begin date and time')}}
                {!! Form::dateTime('begintime', '', ['class' => 'form-control']) !!}
                {{FORM::label('endtime', 'End date and time')}}
                {!! Form::dateTime('endtime', '0000-00-00 00:00:00', ['class' => 'form-control']) !!}
                {{FORM::label('age', 'Age')}}
                {!! Form::number('age', '', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create', ['class' => 'form-control']) !!}
            </div>
            {!! Form::close() !!}
            <div class="form-group">
                <a href="{{ url('tickets') }}">Back</a>
            </div>
        </div>
    </div>
@endsection