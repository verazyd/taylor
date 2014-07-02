@extends('adminlayout.master')

@section('content')
<h2>Edit Tag:</h2>
{{ Form::model($victory, array('route' => array('victories.update', $victory->id), 'method' => 'PUT')) }}

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
<a class="btn btn-default" href="{{ URL::to('allVictories/') }}">Cancel</a>

{{ Form::close() }}
@stop