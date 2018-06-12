@extends('layouts.app')
@include('layouts.errors')

@section('content')
    <div class="container">
        <table class="table">
            <tr>
                <th>Name:</th>
                <th>Begin date and time:</th>
                <th>End date and time:</th>
                <th>Age:</th>
            </tr>
            @foreach($tickets as $ticket)
                <tr>
                    <td>
                        <a href="tickets/{{ $ticket->id }}">
                            {{$ticket->name}}
                        </a>
                    </td>
                    <td>{{$ticket->begintime}}</td>
                    <td>{{$ticket->endtime}}</td>
                    <td>{{$ticket->age}}</td>
                    <td>@role('user')
                        {{ Form::open(['method' => 'DELETE', 'route' => ['tickets.destroy', $ticket->id]]) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                        @endrole
                    </td>
                    <td>@role('user')
                        {{ Form::open(['method' => 'GET', 'route' => ['tickets.edit', $ticket->id]]) }}
                        {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
                        {{ Form::close() }}
                        @endrole
                    </td>
                </tr>
            @endforeach
        </table>
        @role('user')
        <a href="tickets/create">
            {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
        </a>
        @endrole
    </div>

@endsection