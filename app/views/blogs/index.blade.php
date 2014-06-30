@extends('adminlayout.master')

@section('content')
<div class="container">
    <h4>Blogs</h4>
    <table class="table table-stripped table-bordered">
        <thead>
        <tr>
            <td>Topic</td>
            <td>Description</td>
            <td>Publish</td>
            <td>Actions</td>
        </tr>
        </thead>
    <tbody>
        @foreach($blogs as $blog)
        <tr>
            <td>{{$blog->topic }}</td>
            <td>{{$blog->description }}</td>
            <td>
                <?php if ($blog->is_published): ?>
                <a class="btn btn-primary" href="{{ URL::to('blogs/' . $blog->id . '/hide_blog') }}">HIDE</a>
                <?php else: ?>
                    <a class="btn btn-success" href="{{ URL::to('blogs/' . $blog->id . '/publish_blog') }}">
                        <i class="fa fa-cogs"></i> PUBLISH
                    </a>
                <?php endif ?>
            </td>
            <td>
                <a class="btn btn-small btn-info pull-right" href="{{ ('blogs/'.$blog->id.'/edit') }}"> Edit </a>
                {{ Form::open(array('url' => 'blog/' . $blog->id, 'class' => 'pull-right')) }}
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