@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 185px; margin-bottom: 100px;">
    @foreach($results as $result )
    <strong>{{ $result->name }}</strong><br>
    <p>{{ $result->description }}</p><br>
    @endforeach
</div>
@stop