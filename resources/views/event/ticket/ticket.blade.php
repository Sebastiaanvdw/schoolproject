@extends('layouts.app')

@section('content')
    <table style="border: solid">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Begin time</th>
            <th>End time</th>
            <th>Age </th>
        </tr>
        @foreach($tickets as $ticket)
            <tr>
                <td>{{ $ticket->id }}</td>
                <td>{{ $ticket->name }}</td>
                <td>{{ $ticket->beigintime }}</td>
                <td>{{ $ticket->endtime }}</td>
                <td>{{ $ticket->age }}</td>
            </tr>
        @endforeach
    </table>
@endsection