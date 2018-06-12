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
            @foreach($secondhandtickets as $secondhandticket)
                <tr>
                    <td>
                        <a href="secondhandtickets/{{ $secondhandticket->id }}">
                            {{$secondhandticket->name}}
                        </a>
                    </td>
                    <td>{{$secondhandticket->begintime}}</td>
                    <td>{{$secondhandticket->endtime}}</td>
                    <td>{{$secondhandticket->age}}</td>
                    <td>@role('user')
                        {{ Form::open(['method' => 'DELETE', 'route' => ['secondhandtickets.destroy', $secondhandticket->id]]) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                        @endrole
                    </td>
                    <td>@role('user')
                        {{ Form::open(['method' => 'GET', 'route' => ['secondhandtickets.edit', $secondhandticket->id]]) }}
                        {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
                        {{ Form::close() }}
                        @endrole
                    </td>
                </tr>
            @endforeach
        </table>
        @role('user')
        <a href="secondhandtickets/create">
            {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
        </a>
        @endrole
    </div>

@endsection