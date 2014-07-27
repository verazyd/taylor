@extends('adminlayout.master')
@section('content')
<h2>Edit Tag:</h2>
{{ Form::model($tag, array('route' => array('tags.update', $tag->id), 'method' => 'PUT')) }}

<div class="form-group">
    {{ Form::label('name', 'CategoryName*:') }}
    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
</div>
<button type="submit" class="btn btn-primary">
    <span class="fa fa-pencil-square-o"></span>
    Submit
</button>
<a class="btn btn-default" href="{{ URL::to('tags/') }}">Cancel</a>

{{ Form::close() }}

@stop