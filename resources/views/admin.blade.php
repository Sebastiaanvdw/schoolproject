@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                            @foreach($user as $users)
                                <tr>
                                    <td><a href="{{ route('admin.show', $users) }}"> {{ $users->name }}</a></td>
                                    <td>{{ $users->email }}</td>
                                    <td>{{ Form::open(['method' => 'GET', 'route' => ['admin.edit', $users->id]]) }}
                                        {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
