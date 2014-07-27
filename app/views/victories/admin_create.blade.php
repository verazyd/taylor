@extends('adminlayout.master')

@section('content')
    <div class="container">
        {{ Form::open(['method' => 'POST', 'route' => 'victories.store']) }}
        <!--Topic Form Input -->
        <div class="form-group">
            {{ Form::label('topic', 'Topic:') }}
            {{ Form::text('topic', null, ['class' => 'form-control']) }}
        </div>
        <!--Text Form Input -->
        <div class="form-group">
            {{ Form::label('description', 'Description:') }}
            {{Form::textarea('description', null, ['class' => 'form-control']) }}
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
        {{ Form::open() }}
    </div>
@stop