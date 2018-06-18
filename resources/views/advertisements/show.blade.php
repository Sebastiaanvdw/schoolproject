@extends('layouts.app')

@section('content')
    <div class="">
        <div class="show_container">
            <table>
                <tr class="table_header">
                    <th>Title:</th>
                    <th>Description:</th>
                </tr>
                <tr class="table_info">
                    <td>{{$advertisement->title}}</td>

                    <td>{{$advertisement->description}}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="back">
        <a href="{{ url('advertisements') }}" class="back_button">Back</a>
    </div>
@endsection