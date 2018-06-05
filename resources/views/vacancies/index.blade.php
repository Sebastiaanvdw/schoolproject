@extends('layouts.app')
@include('layouts.errors')

@section('content')
        <div class="container">
            <table class="table">
                <tr>
                    <th>Title:</th>
                    <th>Occupation:</th>
                    <th>Description:</th>
                </tr>
                @foreach($vacancies as $vacancy)
                    <tr>
                        <td>
                            <a href="vacancies/{{ $vacancy->id }}">
                                {{$vacancy->title}}
                            </a>
                        </td>
                        <td>{{$vacancy->occupation}}</td>
                        <td>{{$vacancy->description}}</td>
                        <td>@role('user')
                            {{ Form::open(['method' => 'DELETE', 'route' => ['vacancies.destroy', $vacancy->id]]) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                            @endrole
                        </td>
                        <td>@role('user')
                            {{ Form::open(['method' => 'GET', 'route' => ['vacancies.edit', $vacancy->id]]) }}
                            {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
                            {{ Form::close() }}
                            @endrole
                        </td>
                    </tr>
                @endforeach
            </table>
            @role('user')
            <a href="vacancies/create">
                {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
            </a>
            @endrole
        </div>

@endsection