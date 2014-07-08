@extends('adminlayout.master')
@section('content')

<h2>COMMON QUESTIONS IN LAW</h2>
<table class="table table-stripped table-bordered">
    <thead>
    <tr>
        <td>Topic</td>
        <td>Description</td>
        <td style="width: 13%;">Actions</td>
    </tr>
    </thead>
    <tbody>
        @foreach($questions as $question)
            <tr>
                <td>
                    {{ $question->topic }}
                </td>
                <td>
                    {{ $question->description }}
                </td>
                <td>
                     <a class="btn btn-small btn-info" href="{{ ('common/'.$question->id.'/edit') }}"> Edit </a>
                     {{ Form::open(array(
                     'url' => 'commons/'.$question->id,
                     'method' => 'DELETE',
                     'style' => 'display:inline' ))
                     }}
                     {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                     {{ Form::close() }}
                 </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>

@stop