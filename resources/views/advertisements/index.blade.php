@extends('layouts.app')
@include('layouts.errors')

@section('content')
        <div class="container">
            <table class="table">
                <tr>
                    <th>Title:</th>
                    <th>Description:</th>
                </tr>
                @foreach($advertisements as $advertisement)
                    <tr>
                        <td>
                            <a href="advertisements/{{ $advertisement->id }}">
                                {{$advertisement->title}}
                            </a>
                        </td>
                        <td>{{$advertisement->description}}</td>
                        <td>@role('company')
                            {{ Form::open(['method' => 'DELETE', 'route' => ['advertisements.destroy', $advertisement->id]]) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                            @endrole
                        </td>
                        <td>@role('company')
                            {{ Form::open(['method' => 'GET', 'route' => ['advertisements.edit', $advertisement->id]]) }}
                            {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
                            {{ Form::close() }}
                            @endrole
                        </td>
                    </tr>
                @endforeach
            </table>
            @role('company')
            <a href="advertisements/create">
                {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
            </a>
            @endrole
        </div>

@endsection