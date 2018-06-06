@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $advertisement->title }}</div>
                    <div class="card-body">
                        <p class="card-text"> {{ $advertisement->description }}</p>
                    </div>
                </div>
                <div class="form-group">
                    <a href="{{ url('advertisements') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection