@extends('adminlayout.master')

@section('content')
<div class="container">
    <div class="col-md-6 col-md-offset-3" >
        <h4>Add Family Law Service:: </h4>
        {{ Form::open(['method' => 'POST', 'route' => 'allfamilyLaw.store']) }}
        <div class="form-group">
            {{ Form::label('name', 'Name*') }}
            {{ Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) }}
            {{ errors_for('name', $errors) }}
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Description*') }}
            {{ Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) }}
            {{ errors_for('description', $errors) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
        </div>
        @if(Session::has('flash_message'))
        <div class="form-group">
            <p>{{ Session::get('flash_message') }}</p>
        </div>
        @endif
        {{ Form::close() }}
    </div>
</div>

@stop