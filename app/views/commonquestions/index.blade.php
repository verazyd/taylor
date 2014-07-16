@extends('layouts.master')
@section('title')
    Melbourne Common Law Quetions
@stop
@section('content')
<div class="container container_section" style="margin-bottom: 10%;">
    <h2>COMMON QUESTIONS IN LAW</h2>
    <h5>MELBOURNE CRIMINAL LAWYER</h5>
    <div class="panel panel-default">
        @foreach($questions as $question)
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#{{ $question->id }}">
                    {{ $question->topic }}
                </a>
            </h4>
        </div>
        <div id="{{ $question->id }}" class="panel-collapse collapse in">
            <div class="panel-body">
                {{ $question->description }}
            </div>
        </div>
        @endforeach
    </div>
</div>

@stop