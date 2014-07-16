@extends('layouts.master')
@section('title')
    Family Lawyers in Melbourne
@stop
@section('content')
<div class="container container_section">
    <div class="row">
        <div class="col-md-4">
            <h3>Services:</h3>
            <ul class="personal_sidebar">
                @foreach($family_laws as $family)
                <li>
                    <a href="{{"familyLaw/".$family->id }}"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;{{ $family->name }}</a>
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