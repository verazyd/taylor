@extends('layouts.master')

@section('content')
    <div class="container" style="margin-top: 15%;margin-bottom: 10%;">
        <div class="row">
             {{HTML::image('/img/our_vic.jpeg', $alt = 'Taylor&Preston',
            $attributes = array('class' => 'center-block img-responsive',  'width' => '100%')) }}
            <h3 style="position: absolute; bottom:40%; left: 10%; color: #ffffff; font-size: 48px; background: #294058">OUR VICTORIES</h3>
        </div>
        <div class="row" style="background: #294058; margin-top: 10px;color: #ffffff">
            <div class="col-md-12">
                <h3>OUR RECENT VICTORIES</h3>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur blanditiis eos excepturi facere
                    fuga iste mollitia odio provident quia
                    quibusdam, ratione, reprehenderit sequi soluta suscipit tenetur velit veniam voluptates!
                </P>
                <p><strong>If you would like to learn more about how we can help with your case, please give us a call at <span style="font-size: 25px;">800-633-625!</span></strong></p>
            </div>
        </div>
        @foreach($victories as $victory)
        <div class="col-md-4" style="border-bottom: 2px solid #294058">
            <h4>{{$victory->topic }}</h4><br>
             <p style="text-align: justify">{{$victory->description }}</p><br>
        </div>
        @endforeach
    </div>
@stop