@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 175px;">
    <div class="row clearfix">
    <div class="col-md-4">
        <h3>Services:</h3>
        @foreach($personals as $personal)
        <ul class="personal_sidebar">

            <li>
                <a href="{{"personalInjury/".$personal->id }}"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;{{ $personal->name }}</a>
            </li>

        </ul>
        @endforeach
    </div>
        <div class="col-md-8">

    </div>

    </div>
</div>
@stop