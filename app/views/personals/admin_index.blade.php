@extends('adminlayout.master')

@section('content')
<table class="table table-stripped table-bordered">
    <thead>
    <tr>
        <td>Practice Area:</td>
        <td>Description:</td>
        <td style="width: 13%;">Actions</td>
    </tr>
    </thead>
    <tbody>
    @foreach($personals as $personal)
    <tr>
        <td>{{ $personal->name  }}</td>
        <td>{{ $personal->description  }}</td>
        <td>
        <a class="btn btn-small btn-info" href="{{ ('allPersonalInjury/'.$personal->id.'/edit') }}"> Edit </a>

            {{ Form::open(array('url' => 'personal/' . $personal->id, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@stop