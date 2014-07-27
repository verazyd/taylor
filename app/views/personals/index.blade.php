@extends('layouts.master')

@section('title')
    Personal Injury Lawyers in Melbourne | Taylor & Preston Personal Injury Lawyers in Melbourne
@stop

@section('keywords')
    "Personal Injury, Accident Compensations, Personal Injury Lawyers Melbourne,WorkCover Lawyers Melbourne, Employment Law Melbourne, Road Injuries Melbourne,
     TAC Claims Melbourne, Public Liability Melbourne,   Motor Vehicle Accidents Melbourne,Medical Negligence Melbourne, melbourne solicitors,
     lawyers in melbourne, lawyer in melbourne, melbourne lawyers, personal injuries litigation, back injury, TAC, traffic accidents,
     car accidents"
@stop

@section('description')
    "Applying for WorkCover, Applying For Employment, Road Injuries, TAC Claims, Public Liability, Motor Vehicle Accidents,
    Medical Negligence"
@stop


@section('content')
<div class="container container_section_personal">
    <div class="row">
        <h1>Personal Injury Lawyers in Melbourne</h1>
        <p>
            The team of <strong>personal injury lawyers</strong>  at Taylor & Preston are dedicated to protecting the rights and interests of ordinary Victorians. Let the recognized
            experience and expertise of Taylor&Preston’s injury compensation lawyers provide you with peace of mind that your case will be handled with the care,
            efficiency and effectiveness you deserve.

        </p>
        <p>
            The team of <strong>personal injury lawyers based at Melbourne</strong> proudly deliver better results and lower fees for clients.
        </p>
        <p>
            <strong>Personal Injury Lawyers at Taylor & Preston in Melbourne</strong>, do <strong>WorkCover</strong>, <strong>Employment</strong>,
            <strong>Road Injuries</strong>, <strong>TAC Claims</strong>,
            <strong>Public Liability</strong>, <strong>Motor Vehicle Accidents</strong>
        </p>
        <div class="personal_sidebar">
        @foreach($personals as $personal)
            <div class="col-md-12">
                <h3>{{ $personal->name }}</h3>
            </div>
            <div class="col-md-12">
                <p>{{ $personal->description }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop