@extends('adminlayout.master')

@section('content')
<table class="table table-hover table-bordered">
    <thead>
    <tr>
        <td>Text on Image</td>
        <td>Image Name</td>
        <td>Check to Assign Images for Carasaul</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @foreach($images as $image)
    <tr>
        <td>{{ $image->title }}</td><br>
        <td class="{{ $image->is_carasaul ? 'is_carasaul' : '' }}">{{ $image->url }}</td>
        <td>
            {{ Form::model($image, ['method' => 'PATCH', 'route' => ['images.update', $image->id]] ) }}
                {{ Form::checkbox('is_carasaul') }}
                 {{ Form::submit('Assign', array('class' => 'btn btn-primary pull-right')) }}
                 {{ Form::close() }}
        </td>
        <td>{{ Form::open() }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
@stop