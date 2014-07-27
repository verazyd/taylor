@extends('adminlayout.master')

@section('content')
    <div class="container">
        <div class="col-md-6">
            {{ Form::open(['method' => 'POST', 'route' => 'location.store']) }}
            <div class="form-group">
                {{ Form::label('address', 'Address*') }}
                {{ Form::text('address', null, ['class' => 'form-control', 'required' => 'required']) }}
                {{ errors_for('address', $errors) }}
            </div>
            <div class="form-group">
                {{ Form::label('city', 'City*') }}
                {{ Form::text('city',null,  ['class' => 'form-control', 'required' => 'required']) }}
                {{ errors_for('city', $errors) }}
            </div>
            <div class="form-group">
                {{ Form::label('state', 'State*') }}
                {{  Form::select('state', array('vic' => 'VIC', 'nsw' => 'NSW', 'qld' => 'QLD', 'tas' => 'TAS', 'sa' => 'SA', 'wa' => 'WA'), 'S') }}
                {{ errors_for('state', $errors) }}
            </div>
            <div class="form-group">
                {{ Form::label('zip', 'ZipCode*') }}
                {{ Form::text('zip', null,['class' => 'form-control', 'required' => 'required']) }}
                {{ errors_for('zip', $errors) }}
            </div>
            <div class="form-group">
                {{ Form::submit('Submit', ['class' => 'btn btn-warning']) }}
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