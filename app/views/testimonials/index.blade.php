@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 175px;">
    <div class="icobalt ilayout cf BGScroll" id="TestZone">
        <div icobalt="CobaltControls.Controls.StaticContent" class="main" id="HomeTestimonial">
            <h2 style="margin-top: -23px;">What Our Clients Are Saying About Us</h2>
            @foreach($testimonials as $testimonial)
                 <p>"{{ $testimonial->description }}" <span>--{{ $testimonial->name }}
                     {{ $testimonial->location }}</span></p>
            @endforeach
        </div>
    </div>
    </div>
</div>
@stop