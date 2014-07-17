@extends('layouts.master')

@section('title')
    Best Law Firm In Melbourne
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
    <div class="row">
        @include('layouts.partials._contact_form')
    </div>
</div>
@stop