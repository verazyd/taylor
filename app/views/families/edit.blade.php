@extends('adminlayout.master')

@section('content')
<h2>Edit Personal Injury:</h2>
{{ Form::model($family_law, array('route' => array('family.update', $family_law->id), 'method' => 'PUT')) }}

<div class="form-group">
    {{ Form::label('name', 'Name*:') }}
    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Description*:') }}
    {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
</div>
<button type="submit" class="btn btn-primary">
    <span class="fa fa-pencil-square-o"></span>
    Submit
</button>
<a class="btn btn-default" href="{{ URL::to('allPersonalInjury/') }}">Cancel</a>

{{ Form::close() }}

@stop