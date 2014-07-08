@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 185px; margin-bottom: 100px;">
    <h2>Based upon you search, we found the following:</h2><br>
    @if(count($results) > 0)
        @foreach($results as $result )
            <strong>{{ $result->name }}</strong><br>
            <p>{{ $result->description }}</p><br>
        @endforeach

    @else
        <p>Sorry! No search results were found for <strong>"{{$query}}"</strong> try something else!! Thank you :)</p>
    @endif
</div>
@stop