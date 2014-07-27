@extends('adminlayout.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Add Image and Text for Carousel:</h4>
            {{ Form::open(['method' => 'POST', 'route' => 'video.store', 'files' => true]) }}
            <div class="form-group">
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::file('photo') }}
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
            {{ Form::open() }}
        </div>
    </div>
</div>

@stop