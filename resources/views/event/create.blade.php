@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <div class="container">
            {!! Form::open(['url' => 'create', 'method' => 'POST']) !!}
            {!! Form::token() !!}
            <div class="form-group">
                {{FORM::label('name', 'Name')}}
                {!! Form::text('name', '', ['class' => 'form-control']) !!}

                {{FORM::label('location', 'Location')}}
                {!! Form::text('location', '', ['class' => 'form-control']) !!}

                {{FORM::label('date', 'Date')}}
                {!! Form::date('date', '', ['class' => 'form-control']) !!}

                {{FORM::label('starttime', 'Start Time')}}
                {!! Form::dateTime('starttime', '', ['class' => 'form-control']) !!}

                {{FORM::label('endtime', 'End Time')}}
                {!! Form::dateTime('endtime', '', ['class' => 'form-control']) !!}

                {{FORM::label('agerestriction', 'Age restriction')}}
                {!! Form::number('agerestriction', '', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create', ['class' => 'form-control']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection