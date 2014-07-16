@extends('layouts.master')

@section('title')
    Family Injury Blog
@stop

@section('content')
<div class="container container_section">
    <div class="col-md-8">
        <h4>Recent Post:</h4>
        @foreach($blogs as $blog)
          <a href="{{('allblogs/'.$blog->id)}}" style="margin: 15% 0;">{{$blog->topic }}</a><br><br><br>
        @endforeach
    </div>
    <div class="col-md-2">
        <h4>Categories:</h4>
        @foreach($tags as $tag)
        <a href="{{('tags/'.$tag->id)}}" style="margin: 10% 0;">{{$tag->name }}</a><br><br><br>
        @endforeach
    </div>
</div>
@stop