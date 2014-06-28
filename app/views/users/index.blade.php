@extends('adminlayout.master')
@section('content')
<div class="row">
    <div class="col-md-6">
        <table class="table table-stripped table-bordered">
            <thead>
            <tr>
                <td>Users</td>
                <td>Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($names as $name)
            <tr>
                <td>{{ $name->name }}</td>
                <td>
                    {{ Form::model($name, ['method' => 'PATCH', 'route' => ['user.update', $name->id]] ) }}
                    {{ Form::checkbox('is_admin') }}
                    {{ Form::submit('Is Admin ?', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}
                </td>

            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop