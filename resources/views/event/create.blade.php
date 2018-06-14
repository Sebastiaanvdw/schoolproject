@extends('layouts.app')
@include('layouts.errors')

@section('content')
    <div class="jumbotron">
        <div class="container">
            {!! Form::open(['url' => 'event', 'method' => 'POST']) !!}
            {!! Form::token() !!}
            <div class="form-group">
                {{FORM::label('name', 'Name')}}
                {!! Form::text('name', '', ['class' => 'form-control']) !!}

                {{FORM::label('location', 'Location')}}
                {!! Form::text('location', '', ['class' => 'form-control']) !!}

                {{FORM::label('date', 'Date')}}
                {!! Form::date('date', '', ['class' => 'form-control']) !!}

                {{FORM::label('starttime', 'Start time')}}
                {!! Form::text('starttime', '', ['class' => 'form-control']) !!}

                {{FORM::label('endtime', 'End time')}}
                {!! Form::text('endtime', '', ['class' => 'form-control']) !!}

                {{FORM::label('agerestriction', 'Age restriction')}}
                {!! Form::number('agerestriction', '', ['placeholder' => '0 = No age restriction', 'class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create', ['class' => 'form-control']) !!}
            </div>
            {!! Form::close() !!}
            <div class="form-group">
                <a href="{{ url('event') }}">Back</a>
            </div>
        </div>
    </div>
@endsection