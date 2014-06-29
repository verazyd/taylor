@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 175px; margin-bottom: 10%;">
    <div class="row">
    <div class="col-md-4">
        <h3>Services:</h3>
        <ul class="personal_sidebar">
            @foreach($personals as $personal)
            <li>
                <a href="{{"personalInjury/".$personal->id }}"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;{{ $personal->name }}</a>
            </li>
            @endforeach
        </ul>
    </div>
        <div class="col-md-8">
            <h3>Text Here</h3>

        </div>
    </div>
</div>
@stop