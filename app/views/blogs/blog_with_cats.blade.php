@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 15%;">
    @foreach($blogs as $blog)
        {{ $blog->topic }}<br>
    @endforeach
</div>
@stop