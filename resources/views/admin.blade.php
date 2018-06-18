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
                                <th>Verified</th>
                                <th>Company</th>
                            </tr>
                            @foreach($user as $users)
                                <tr>
                                    <td><a href="{{ route('admin.show', $users) }}"> {{ $users->name }}</a></td>
                                    <td>{{ $users->email }}</td>
                                    <td>
                                    @if($users->verified == 1)
                                            <a><i id="verified" class="far fa-check-circle fa-lg"></i></a>
                                    @else
                                            <a><i id="verified" class="far fa-times-circle fa-lg"></i></a>
                                    @endif
                                    </td>
                                    <td>
                                        @if($users->company == 1)
                                            <span class="far fa-check-circle fa-lg"></span>
                                        @else
                                            <span class="far fa-times-circle fa-lg"></span>
                                        @endif
                                    </td>
                                    <td>{{ Form::open(['method' => 'DELETE', 'route' => ['admin.destroy', $users->id]]) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {{ Form::close() }}
                                    </td>
                                    <td>{{ Form::open(['method' => 'GET', 'route' => ['admin.edit', $users->id]]) }}
                                        {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <a href="admin/create">
                            {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
