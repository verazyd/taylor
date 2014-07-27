@extends('adminlayout.master')

@section('content')
    <div class="container">
        @foreach($locations as $location)
        <div class="col-md-4">
            {{ $location->address }}<br>
            {{ $location->city }}<br>
            {{ $location->state }}<br>
            {{ $location->zip }}<br>
        </div>
        @endforeach
    </div>
@stop