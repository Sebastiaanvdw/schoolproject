@extends('layouts.app')
@include('layouts.errors')

@section('content')
    <div class="container">
        <form action="{{ route('vacancies.search') }}" method="POST" class="ajaxSearch">
            <input type="search" name="query" placeholder="Type something to search" autocomplete="off">
            <input type="submit" value="Search">
        </form>

        <div id="results"></div>
        @role('user')
        <a href="vacancies/create">
            {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
        </a>
        @endrole
    </div>

@endsection

@section('scripts')
    <script>
        var csrf_token = "{{ csrf_token() }}";
    </script>
    <script src="{{ asset('js/search.js') }}"></script>
@endsection