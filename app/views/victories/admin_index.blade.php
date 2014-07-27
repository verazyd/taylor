@extends('adminlayout.master')

@section('content')
<div class="container">
    <h3>All recent victories are on the top! Select "Publish" to publish them to users:</h3>
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
        @foreach($victories as $victory)
        <tr>
            <td>{{ $victory->topic }}</td>
            <td>{{ $victory->description }}</td>
            <td>
                <?php if ($victory->is_published): ?>
                    <a class="btn btn-primary" href="{{ URL::to('allVictories/' . $victory->id . '/hide_victory') }}">HIDE</a>
                <?php else: ?>
                    <a class="btn btn-success" href="{{ URL::to('allVictories/' . $victory->id . '/publish_victory') }}">
                        <i class="fa fa-cogs"></i> PUBLISH
                    </a>
                <?php endif ?>
            </td>
            <td>
                <a class="btn btn-small btn-info pull-right" href="{{ ('allVictories/'.$victory->id.'/edit') }}"> Edit </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop