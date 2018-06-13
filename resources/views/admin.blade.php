@extends('layouts.app')

@section('content')
    <script>
        $(document).ready(function() {
            $('#verified').click(function(){
                alert('test')
            });
        });
    </script>
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
                            </tr>
                            @foreach($user as $users)
                                <tr>
                                    <td><a href="{{ route('admin.show', $users) }}"> {{ $users->name }}</a></td>
                                    <td>{{ $users->email }}</td>
                                    <td>
                                    @if($users->verified == 1)
                                            <a><i onclick="" id="verified" class="far fa-check-circle fa-lg"></i></a>
                                    @else
                                            <a><i onclick="" id="verified" class="far fa-times-circle fa-lg"></i></a>
                                    @endif
                                    </td>
                                    <td>
                                        @if($users->company == 1)
                                            <span class="far fa-check-circle fa-lg"></span>
                                        @else
                                            <span class="far fa-times-circle fa-lg"></span>
                                        @endif
                                    </td>
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
