@extends('adminlayout.master')
@section('content')
    <h2>Availlable Tags:</h2>
<table class="table table-stripped table-bordered">
    <thead>
        <tr>
            <td>Topic</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($tags as $tag)
        <tr>
            <td>{{ $tag->name}}</td>
            <td>
                <a class="btn btn-small btn-info pull-right" href="{{ ('tags/'.$tag->id.'/edit') }}"> Edit </a>
                {{ Form::open(array('url' => 'tags/' . $tag->id)) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop