@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 15%;">
    <h2>{{ $tag->name }} :</h2>
    @include('layouts.partials._contact_form')
    @foreach($blogs as $blog)
    <a href="{{('/allblogs/'.$blog->id)}}" style="margin: 15% 0;">{{$blog->topic }}</a><br><br>
    @endforeach
</div>
@stop