@extends('adminlayout.login')
@section('content')
    <div class="container" style="background: #273E55;">
        <div class="col-md-6 col-md-offset-3" >
            <h4 style="color: #ffffff">Admin Login Panal: </h4>

            {{ Form::open(['route' => 'admin.store']) }}
            <div class="form-group" style="color: #ffffff">
                {{ Form::label('email', 'Email*') }}
                {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}
                {{ errors_for('email', $errors) }}
            </div>
            <div class="form-group" style="color: #ffffff">
                {{ Form::label('password', 'Password*') }}
                {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
                {{ errors_for('password', $errors) }}
            </div>
            <div class="form-group">
                {{ Form::submit('Log In', ['class' => 'btn btn-warning']) }}
            </div>
            @if(Session::has('flash_message'))
            <div class="form-group">
                <p>{{ Session::get('flash_message') }}</p>
            </div>
            @endif
            {{ Form::close() }}

        </div>
    </div>
<a href="{{('/register')}}"><button type="button" class="btn btn-primary">Register</button></a>
@stop