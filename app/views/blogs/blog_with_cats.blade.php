@extends('layouts.master')

@section('content')
<div class="row" style="margin-top: 10%;">
    <h2>{{ $tag->name }} :</h2>
    @foreach($blogs as $blog)
    <a href="{{('/allblogs/'.$blog->id)}}" style="margin: 15% 0;">{{$blog->topic }}</a><br><br>
    @endforeach
</div>
@include('layouts.partials._contact_form')
@stop