@extends('adminlayout.master')

@section('content')
<table class="table table-stripped table-bordered">
    <thead>
    <tr>
        <td>Practice Area:</td>
        <td>Description:</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
    @foreach($family_laws as $family)
    <tr>
        <td>{{ $family->name  }}</td>
        <td>{{ $family->description  }}</td>
        <td>
            <a class="btn btn-small btn-info" href="{{ ('addallfamilyLaw/'.$family->id.'/edit') }}"> Edit </a>

            {{ Form::open(array('url' => 'family/' . $family->id, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@stop