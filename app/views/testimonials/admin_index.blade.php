@extends('adminlayout.master')

@section('content')
<table class="table table-stripped table-bordered">
    <thead>
    <tr>
        <td>Name:</td>
        <td>Location:</td>
        <td>Description:</td>
        <td style="width: 13%;">Actions</td>
    </tr>
    </thead>
    <tbody>
    @foreach($testimonials as $testimonial)
    <tr>
        <td>{{ $testimonial->name }}</td>
        <td>{{ $testimonial->location }}</td>
        <td>{{ $testimonial->description  }}</td>
        <td>
            <a class="btn btn-small btn-info" href="{{ ('testimonial/'.$testimonial->id.'/edit') }}"> Edit </a>

            {{ Form::open(array('url' => 'testimonials/' . $testimonial->id, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@stop