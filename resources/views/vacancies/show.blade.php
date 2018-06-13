@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $vacancy->title }}</div>
                    <div class="card-body">
                        <p class="card-text">Occupation: {{ $vacancy->occupation }}</p>
                        <p class="card-text">Description: {{ $vacancy->description }}</p>
                    </div>
                </div>
                <div class="form-group">
                    <a href="{{ url('vacancies') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection