@extends('layouts.app')
@include('layouts.errors')

@section('content')
    <div class="container">
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Location</th>
            <th>Begin time</th>
            <th>End time</th>
            <th>Age restriction</th>
        </tr>
    @foreach($events as $event)
    <tr>
        <td><a href="{{ route('event.show', $event) }}"> {{ $event->name }}</a></td>
        <td>{{ $event->location }}</td>
        <td>{{ $event->date }}</td>
        <td>{{ $event->starttime }}</td>
        <td>{{ $event->endtime }}</td>
        <td>{{ $event->agerestriction }}</td>
    </tr>
    @endforeach
    </table>
        @role('verified-company')
        <a href="event/create">
            {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
        </a>
        @endrole
    </div>

@endsection