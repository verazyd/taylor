@extends('layouts.master')

@section('content')
<div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
        <div class="item active">
            <img src="./img/grozny3.jpg" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Example headline.</h1>
                    <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <a class="btn btn-large btn-primary" href="#">Sign up today</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="./img/grozny1.jpg" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <a class="btn btn-large btn-primary" href="#">Learn more</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="./img/grozny2.jpg" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->

<div class="row">
    {{HTML::style('css/image_animations.css') }}
    <div class="col-md-12" style="background: #E4EEFF">
        <h2 style="color:#273E55; text-align: center;">Why Choose Taylor & Preston ?</h2>
        <p style="padding:20px; font-weight: bold;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur necessitatibus soluta ad, eveniet voluptas. Harum, ea debitis maiores sequi ducimus temporibus, accusamus ipsam nulla, velit, ad tempore rem voluptas voluptate.
        </p>
        <div class="col-md-4 view view-fourth">
            {{HTML::image('/img/our_vic.jpeg', $alt = 'Taylor&Preston',
            $attributes = array('class' => 'center-block img-responsive',  'width' => '350px')) }}
            <div class="mask">
                <h2>Taylor&Preston</h2>
                <p>Lorem ipsum dolor sit amet, consectetu Aut reiciendis repellat sit vel? Dolores earum et</p>
                <a href="#" class="info">Read More</a>
            </div>
        </div>
        <div class="col-md-4">
            {{HTML::image('/img/hexagonal_image.png', $alt = 'Taylor&Preston',
            $attributes = array('class' => 'center-block img-responsive',  'width' => '100%')) }}
            <p style="position: absolute;top: 30%;text-align: center; width: 80%; left: 10%;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam, dolore dolores ex illum itaque minima minus nobis odit pariatur quaerat quibusdam recusandae repellat repudiandae saepe? Ducimus excepturi expedita quos?
            </p>
        </div>
        <div class="col-md-4 view view-fourth">
            {{HTML::image('/img/our_vic.jpeg', $alt = 'Taylor&Preston',
            $attributes = array('class' => 'center-block img-responsive',  'width' => '350px')) }}
            <div class="mask">
                <h2>Taylor&Preston</h2>
                <p>Lorem ipsum dolor sit amet, consectetu Aut reiciendis repellat sit vel? Dolores earum et</p>
                <a href="#" class="info">Read More</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="btn-group btn-group-justified">

        <div class="col-md-2">
            <div class="btn-group">
                <button type="button" class="personal_injuery">Personal Injury</button><br>
                <button type="button" class="criminal_law">Criminal law</button><br>
                <button type="button" class="corporate_law">Corporate Law law</button><br>
                <button type="button" class="employment_law">Employement law</button><br>
                <button type="button" class="international_law">International and Chinese Law law</button><br>

            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6">
            <div class="css-shapes-preview">
                <p class="text_before">
                    At TP we’re nuts about technology and we use it to ensure that we offer competitive legal services through a team of high quality mobile lawyers that work around clients’ needs, lifestyles and locations.
                </p>
                <p class=" personal_p">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ipsam id eligendi ipsa necessitatibus. Pariatur maiores, asperiores nobis excepturi maxime velit, magni consequatur reprehenderit similique nesciunt quaerat natus voluptate fugit?
                </p>
                <p class="family_law_p">
                    OUR APPROACH
                    TP’ Family Law clients trust us with their future because they know we will always provide a cool, clear head when issues are running red hot


                    Our family law lawyers are smart, tough, highly ethical and empathetic.
                    Together they have century and a half of experience in this highly-complex legal area that traverses many fields like estate planning, property, commercial, tax and company law.
                    Each lawyer is a senior practitioner so clients have the benefit of them conferring with, and backing up, each other at no additional cost.

                <p class="criminal_law_p">
                    this is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate law
                </p>
            </div>
        </div>
        <div class="col-md-2">
            <button type="button" class="family_law">Family Law</button><br>
            <button type="button" class="family_law">Property law</button><br>
            <button type="button" class="family_law">Will&Estates</button><br>
            <button type="button" class="family_law">Personal law</button><br>
            <button type="button" class="family_law">Family law</button><br>

        </div>
    </div>
</div>
<script>
    !function ($) {
        $(function(){
            // carousel demo
            $('#myCarousel').carousel()
        })
    }(window.jQuery)
</script>
@stop