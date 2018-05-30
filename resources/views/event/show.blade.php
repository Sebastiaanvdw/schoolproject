@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $event->name }}</div>
                    <p>Date: {{ $event->date }}</p>
                    <p>Location: {{ $event->location }}</p>
                    <p>Begin time: {{ $event->begintime }}</p>
                    <p>End time: {{ $event->enttime }}</p>
                    <p>Age restriction: {{ $event->agerestriction }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection