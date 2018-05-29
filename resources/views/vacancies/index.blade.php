@extends('layouts.app')
@include('layouts.errors')

@section('content')

    <div class="jumbotron">
        <div class="container">
            <table>
                <tr>
                    <th>Title:</th>
                    <th>Body:</th>
                </tr>
                @foreach($vacancies as $vacancy)
                    <tr>
                        <td>
                            <a href="vacancies/{{ $vacancy->id }}">
                                {{$vacancy->title}}
                            </a>
                        </td>
                        <td>{{$vacancy->body}}</td>
                        <td>{{ Form::open(['method' => 'DELETE', 'route' => ['vacancies.destroy', $vacancy->id]]) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        </td>
                        <td>{{ Form::open(['method' => 'GET', 'route' => ['vacancies.edit', $vacancy->id]]) }}
                            {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
                <a href="vacancies/create">
                {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
                </a>
            </table>
        </div>
    </div>

@endsection