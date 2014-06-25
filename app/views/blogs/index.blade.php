@extends('adminlayout.master')

@section('content')
<div class="container">
    <h4>Blogs</h4>
    <table class="table table-stripped table-bordered">
        <thead>
        <tr>
            <td>Topic</td>
            <td>Description</td>
            <td>Actions</td>
        </tr>
        </thead>
    <tbody>
        @foreach($blogs as $blog)
        <tr>
            <td>{{$blog->topic }}</td>
            <td>{{$blog->description }}</td>
            <td>{{ Form::open(array('url' => 'blog/' . $blog->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@stop