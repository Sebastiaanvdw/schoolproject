@extends('layouts.layout')
@include('layouts.errors')

@section('content')
    <div class="layout-container">
        <table class="table">
            <tr>
                <th>Ticket Name:</th>
                <th>Begin date and time:</th>
                <th>End date and time:</th>
                <th>Age restriction:</th>
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
                    <td>@role('verified-company')
                        {{ Form::open(['method' => 'GET', 'route' => ['tickets.edit', $ticket->id]]) }}
                        {{ Form::submit('Edit', ['class' => 'btn btn-edit']) }}
                        {{ Form::close() }}
                    </td>
                    <td>
                        {{ Form::open(['method' => 'DELETE', 'route' => ['tickets.destroy', $ticket->id]]) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-destroy']) }}
                        {{ Form::close() }}
                    </td>@endrole
                </tr>
            @endforeach
        </table>
        @role('verified-company')
<div class="container">
    <a href="tickets/create">
        {{ Form::submit('Create', ['class' => 'btn btn-create']) }}
    </a>
</div>
        @endrole
        <div class="form-group">
            <a href="{{ url('/') }}">Back</a>
        </div>
    </div>

@endsection