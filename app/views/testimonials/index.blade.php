@extends('layouts.master')

@section('content')
<style>
    #TestZone{
        background: #ffffff;
    }
</style>
<div class="row">
    <div class="BGScroll" id="TestZone">
        <div icobalt="CobaltControls.Controls.StaticContent" class="main" id="HomeTestimonial">
            <h2 style="margin-top: -23px; color: #1C8FE0;">What Our Clients Are Saying About Us</h2>
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