<table class="table">
    <tr>
        <th>Ticket Name:</th>
        <th>Begin date and time:</th>
        <th>End date and time:</th>
        <th>Age restriction:</th>
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