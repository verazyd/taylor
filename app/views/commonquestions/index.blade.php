@extends('layouts.master')
@section('title')
    Melbourne Common Law Quetions | Taylor & Preston Lawyers in Melbourne
@stop

@section('keywords')
    "family law, familily lawyers, personal injury, melbourne personal injury, melbourne personal injury lawyers, Custody, Children, Mediation, Child Abuse, Divorce,
    melbourne tac lawyers, tac melburne, tac law vic, tac victoria, victoria tac law firm, victoria workcover, workcover melbourne,
    same-sex relationship, law questions melbourne, melbourne family law quetsions, melbourne personal injury law quetsions,
    family law consultation, personal injury consultation, child support questions melbourne"
@stop

@section('description')
    "Common Family Law questions Melbourne? Common Personal Injury Law questions Melboure? Common TAC law questions? Workcover melbourne
    law questions? divorce law questions melbourne? Child support law questions?"
@stop

@section('content')
<div class="container common_questions">
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