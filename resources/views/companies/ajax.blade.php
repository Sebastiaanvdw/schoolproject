@extends('companies.master')

@section('content')
    <div id="content">
        @include('companies.index')
    </div>
    <div class="loading">
        <i class="fa fa-refresh fa-spin fa-2x fa-tw"></i>
        <br>
        <span>Loading</span>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/ajaxcrud.js') }}"></script>
@endsection
