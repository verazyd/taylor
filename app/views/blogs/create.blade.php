@extends('adminlayout.master')

@section('content')
<?php $tag_name_selector = array(); ?>

@foreach($tags as $tag_name)
<?php  $tag_name_selector[$tag_name->id] = $tag_name->name;?>
@endforeach

<div class="container">
    {{ Form::open(['method' => 'POST', 'route' => 'blogs.store']) }}
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
    <div class="form-group">
        {{ Form::label('tag', 'Tag:') }}
        {{ Form::select('tag_id', $tag_name_selector, array_values($tag_name_selector)[0]) }}
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-info">Submit</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
    {{ Form::open() }}
</div>

@stop