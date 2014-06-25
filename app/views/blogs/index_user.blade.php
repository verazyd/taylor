@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 15%;">
    <div class="col-md-8">
        <h4>Recent Post:</h4>
        @foreach($blogs as $blog)
          <a href="{{('allblogs/'.$blog->id)}}" style="margin: 15% 0;">{{$blog->topic }}</a><br><br><br>
        @endforeach
    </div>
</div>
@stop