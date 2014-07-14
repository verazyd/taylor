@extends('layouts.master')

@section('content')
<div class="container">
    <div class="icobalt ilayout cf BGScroll" id="TestZone">
        <div icobalt="CobaltControls.Controls.StaticContent" class="main" id="HomeTestimonial">
            <h2 style="margin-top: -23px;">What Our Clients Are Saying About Us</h2>
            @foreach($testimonials as $testimonial)
                 <p>"{{ $testimonial->description }}" <span>--{{ $testimonial->name }}
                     {{ $testimonial->location }}</span></p>
            @endforeach
        </div>
    </div>
    <div class="row" style="margin: 2px 0px; background: #217C9C;">
        <div class="col-md-6">
            <div class="col-md-6">
                <p style="text-align: center;font-size: 28px;color: #ffffff"><span class="glyphicon glyphicon-envelopeHow"></span>Any Questions?</p>
                <p style="text-align: center;font-size: 20px;color: #ffffff"><span class="glyphicon glyphicon-envelopeHow"></span>No Win, No Fee Representation!</p>
            </div>
            <div class="col-md-6">
                {{ HTML::image('/img/question.jpg', $alt = 'Questions' , $attributes = array('class' => 'center-block img-responsive question_img',  'width' => '100px'))}}
            </div>
        </div>
        <div class="col-md-6">
            <form class="form" style="padding-top: 15px; padding-left: 25%;">
                <div class="com-md-6" style="float: left;">
                    <div class="name">
                        <label class="sr-only" >Name*:</label>
                        <input type="text" class="input_name"  minlength="2" placeholder="Name" required="required">
                    </div>
                    <div class="email">
                        <label class="sr-only" >Email*</label>
                        <input type="email" class="input_email" placeholder="Email" required="required">
                    </div>
                    <div class="phone">
                        <label class="sr-only" >Phone*</label>
                        <input type="tel" class="input_phone"  placeholder="Phone" required="required">
                    </div>
                </div>
                <div class="col-md-6 pull-left"  style="float: right; padding-bottom: 15px;">
                    <label class="sr-only" >Details*</label>
                    <textarea class="form-control" class="input_details"  placeholder="Details" required="required" style="background: #001321; margin-bottom: 4px; height: 68px; color: #ffffff"></textarea>
                    <button type="submit" class="btn btn-info form_submit"><i class="fa fa-envelope"></i>&nbsp;SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@stop