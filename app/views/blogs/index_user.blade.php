@extends('layouts.master')

@section('title')
    Family Injury Blog
@stop

@section('content')
<div class="container container_section">
    <div class="col-md-8">
        <h1>Firm's Latest News and Updates</h1>
        <hr/><br>
        @foreach($blogs as $blog)
          <a href="{{('Blog.html/'.$blog->id)}}">{{$blog->topic }}</a><br>
        @endforeach
    </div>
    <div class="col-md-4">
        <h1>Categories</h1><br>
        @foreach($tags as $tag)
        <a href="{{('Category.html/'.$tag->id)}}">{{$tag->name }}</a><br>
        @endforeach
    </div>
</div>
@stop