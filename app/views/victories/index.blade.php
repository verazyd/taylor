@extends('layouts.master')

@section('content')
<style>
    .vic_description{
        height: 350px;
        max-height: 400px;
        overflow-y: scroll;
    }
    .recent_victory{
        background: #3685BE;
        margin-top: 10px;
        color: #ffffff;
    }
    .recent_victory h3{
        text-align: center;
    }
    .recent_victory p{
        text-align: justify;
        font-family: italic arial, sans-serif;
        font-size: 20px;
        background: #000000;
    }
    #TestZone{
        padding: 15px 0px;
    }

</style>
    <div class="container" style="margin-bottom: 10%;">
        <div class="row">
             {{HTML::image('/img/our_vic.jpeg', $alt = 'Taylor&Preston',
            $attributes = array('class' => 'center-block img-responsive',  'width' => '100%')) }}
            <h3 style="position: absolute; bottom:40%; left: 10%; color: #ffffff; font-size: 48px; background: #294058">OUR VICTORIES</h3>
        </div>
        <div class="row">
            <div class="col-md-12 recent_victory">
                <div class="icobalt ilayout cf BGScroll" id="TestZone">
                    <div icobalt="CobaltControls.Controls.StaticContent" class="main" id="HomeTestimonial">
                        <h2>Our Victories</h2>
                        <p>"Lorem ipsum dolor sit amet, consect expedita impedit ipsa libero non obcaecati officiis perspiciatis quae ratione?"
                             <span style="text-transform: lowercase">If you would like to learn more about how we can help with your case,<br>
                                 please give us a call at &nbsp;<strong style="font-size: 28px; text-align: center">800-633-625</strong></span>
                        </p>
                    </div>
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