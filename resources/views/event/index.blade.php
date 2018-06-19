@extends('layouts.layout')
@include('layouts.errors')

@section('content')
    <div class="layout-container">
        <form action="{{ route('event.search') }}" method="POST" class="ajaxSearch">
            <input type="search" name="query" placeholder="Type something to search" autocomplete="off" class="search_bar">
            <input type="submit" value="Search" class="search_button">
        </form>
        <div id="results" class="grid-container">

        </div>

        <div class="container">
            <a href="event/create">
                {{ Form::submit('Create', ['class' => 'btn btn-create']) }}
            </a>
        </div>
    </div>
@endsection