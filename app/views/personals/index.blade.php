@extends('layouts.master')

@section('title')
    Personal Injury Lawyers in Melbourne | Taylor & Preston Personal Injury Lawyers in Melbourne
@stop

@section('keywords')
    "Personal Injury Lawyers Melbourne,WorkCover Lawyers Melbourne, Employment Law Melbourne, Road Injuries Melbourne,
     TAC Claims Melbourne, Public Liability Melbourne,   Motor Vehicle Accidents Melbourne,Medical Negligence Melbourne"
@stop

@section('description')
    "Applying for WorkCover, Applying For Employment, Road Injuries, TAC Claims, Public Liability, Motor Vehicle Accidents,
    Medical Negligence"
@stop


@section('content')
<div class="container container_section">
    <div class="row clearfix">
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
    <div class="col-md-4">
        @foreach($personals as $personal)
        <ul class="personal_sidebar">

            <li>
                <a href="{{"Personal-Injury.html/".$personal->id }}"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;{{ $personal->name }}</a>
            </li>

        </ul>
        @endforeach
    </div>
        <div class="col-md-8">

    </div>

    </div>
</div>
@stop