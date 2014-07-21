@extends('layouts.master')

@section('title')
    Our Victories - Case Results | Taylor & Preston Lawyers in Melbourne
@stop

@section('keywords')
    "Taylor & Preston Victories, success, case results, Melbourne Personal Injury Lawyers,
    Melbourne Family Lawyers, Lawyers, attorney, Melbourne, Victoria"
@stop


@section('description')
    "Read through the victories of Taylor & Preston's our legal ability. When you are ready, we are ready to help you in any way
    possible to get you to the right direction and towards success. We have achieved our victories and success in Personal Injury and
    Family Law in Melbourne with our hard work and decation"
@stop


@section('content')
<style>
    .vic_description{
        height: 350px;
        max-height: 400px;
        overflow-y: scroll;
    }
</style>
    <div class="container_section">
        <div class="row">
             {{HTML::image('/img/our_vic.jpeg', $alt = 'Our Victories - Case Results Taylor & Preston',
            $attributes = array('class' => 'center-block img-responsive',  'width' => '100%')) }}
<!--            <h2>OUR VICTORIES</h2>-->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="HomeTestimonial">
                    <h1>Our Victories</h1>
                    <p style="width: 100%; text-align: justify; margin-bottom: 25px;">
                        The lawyers at Taylor & Preston have obtained excellent results for their clients.
                        For a detailed list of our case results, please visit our blog by <a href="{{ URL::route('allblogs') }}">clicking here</a>
                             <span>If you would like to learn more about how we can help with your case,<br>
                                 please give us a call at &nbsp;<strong style="font-size: 28px; text-align: center">800-633-625</strong></span>

                    </p>
                </div>
            </div>
        </div>
        @foreach($victories as $victory)
        <div class="col-md-4 vic_section">
            <h4>{{$victory->topic }}</h4><br>
             <p class="vic_description">{{$victory->description }}</p><br>
        </div>
        @endforeach
    </div>
@stop