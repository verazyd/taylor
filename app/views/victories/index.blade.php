@extends('layouts.master')

@section('title')
    Law Victroies in Melbourne
@stop

@section('content')
<style>
    .vic_description{
        height: 350px;
        max-height: 400px;
        overflow-y: scroll;
    }
</style>
    <div class="row container_section" style="margin: 1%;">
        <div class="row">
             {{HTML::image('/img/our_vic.jpeg', $alt = 'Taylor&Preston',
            $attributes = array('class' => 'center-block img-responsive',  'width' => '100%')) }}
            <h3 style="position: absolute; bottom:40%; left: 10%; color: #ffffff; font-size: 48px; background: #294058">OUR VICTORIES</h3>
        </div>
        <div class="row" style="background:rgb(27, 143, 224);;">
            <div class="col-md-12" style="padding: 20px;">
                <div id="HomeTestimonial">
                    <h2 style="text-align: center; color: #ffffff;">Our Victories</h2>
                    <p style="width: 96%; margin: 0 auto;">
                        Lorem ipsum dolor sit amet, consect expedita impedit ipsa libero non obcaecati officiis perspiciatis quae ratione?"
                             <span style="text-transform: lowercase">If you would like to learn more about how we can help with your case,<br>
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