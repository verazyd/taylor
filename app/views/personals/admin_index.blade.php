@extends('adminlayout.master')

@section('content')
    @foreach($personals as $personal)
        <h4>Practice Area:</h4>
        <p><strong>{{ $personal->name  }}</strong></p>
            <h5>Description:</h5>
        {{ $personal->description  }}<br><br>
    @endforeach
@stop