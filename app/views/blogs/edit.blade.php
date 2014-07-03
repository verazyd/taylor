@extends('adminlayout.master')

@section('content')
<div class="container">
    <h4>Edit {{ $blog->topic }} Blogs</h4>
    <h2>Edit Tag:</h2>
    {{ Form::model($blog, array('route' => array('blogs.update', $blog->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('topic', 'Topic*:') }}
        {{ Form::text('topic', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description*:') }}
        {{ Form::textarea('description', Input::old('name'), array('class' => 'form-control')) }}
    </div>
    <button type="submit" class="btn btn-primary">
        <span class="fa fa-pencil-square-o"></span>
        Submit
    </button>
    <a class="btn btn-default" href="{{ URL::to('blogs/') }}">Cancel</a>

    {{ Form::close() }}
@stop