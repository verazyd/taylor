@extends('layouts.master')

@section('title')
    Client's Testimonials | Taylor & Preston Lawyers in Melbourne
@stop

@section('keywords')
    "Melbourne, Victoria, Testimonials, Personal Injury Lawyer Melbourne, Famly Lawyers Melbourne, personal injury vic, family law vic,
    Melbourne injury law, personal injury attorney, family lawyer attorney"
@stop

@section('description')
    "At Taylor & Preston, we build great relationships with our clients. To learn more about what it is like working with Taylor & Preston Personal Injury
    Lawyers and Family Lawyers, read through our testimonials."
@stop

@section('content')
<style>
    #TestZone{
        background: #ffffff;
    }
</style>
<div class="row">
    <div class="BGScroll" id="TestZone">
        <div icobalt="CobaltControls.Controls.StaticContent" class="main" id="HomeTestimonial">
            <h2 style="color:#1B8FE0;margin-top: 6%;">What Our Clients Are Saying About Us</h2>
            @foreach($testimonials as $testimonial)
                 <p>"{{ $testimonial->description }}" <span>--{{ $testimonial->name }}
                     {{ $testimonial->location }}</span></p>
            @endforeach
        </div>
    </div>
</div>
@include('layouts.partials._contact_form')
@stop