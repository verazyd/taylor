@extends('adminlayout.master')

@section('content')

<div class="container">
    <h4>Register!</h4>
    {{ Form::open(['route' => 'register.store']) }}
    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}
        {{ $errors->first('email', '<span class="error">:message</span>') }}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
        {{ $errors->first('password', '<span class="error">:message</span>') }}
    </div>
    <div class="form-group">
        {{ Form::label('password_confirmation', 'Password') }}
        {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) }}
    </div>
    <div class="form-group">
        {{ Form::submit('Create Account', ['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}
</div>

@stop