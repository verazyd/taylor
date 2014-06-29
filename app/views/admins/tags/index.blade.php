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

                {{ Form::open(array(
                    'url' => 'tags/'.$tag->id,
                    'method' => 'DELETE',
                    'style' => 'display:inline' ))
                }}
                @include('layouts.partials._delete')
                {{ Form::close() }}

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<!-- Bootstrap JavaScript -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

<script>
    $('#confirmDelete').on('show.bs.modal', function (e) {
        $message = $(e.relatedTarget).attr('data-message');
        $(this).find('.modal-body p').text($message);
        $title = $(e.relatedTarget).attr('data-title');
        $(this).find('.modal-title').text($title);

        // Pass form reference to modal for submission on yes/ok
        var form = $(e.relatedTarget).closest('form');
        $(this).find('.modal-footer #confirm').data('form', form);
    });

    <!-- Form confirm (yes/ok) handler, submits form -->
    $('#confirmDelete').find('.modal-footer #confirm').on('click', function(){
        $(this).data('form').submit();

    });
</script>
@stop