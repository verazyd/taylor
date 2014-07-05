@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 175px; margin-bottom: 100px;">
    @foreach($results as $result )
    <a href="">{{ $result->name }}</a><br>
    @endforeach
</div>
@stop