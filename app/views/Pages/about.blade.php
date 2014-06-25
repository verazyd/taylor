@extends('layouts.master')

@section('content')

<style type="text/css">
    #wrapper {
        height: 100%;
        width: 100%;
        min-height: 650px;
        padding-top: 1px;
        margin-top: 165px;
    }
    #slider {
        margin: 10px 0 0 0;
        height: 500px;
        overflow: hidden;
        background: url(img/ajax-loader.gif) center center no-repeat;
    }

    #slider .slide {
        position: relative;
        display: none;
        height: 500px;
        float: left;
        background-position: center right;
        cursor: pointer;
        border-left: 1px solid #fff;
    }

    #slider .slide:first-child {
        border: none;
    }

    #slider .slide.active {
        cursor: default;
    }

    #slider .slide-block {
        position: absolute;
        left: 10px;
        bottom: 75px;
        display: inline-block;
        width: 435px;
        background-color: #fff;
        background-color: rgba(255,255,255, 0.8);
        padding: 20px;
        font-size: 14px;
        color: #134B94;
        border: 1px solid #fff;
        overflow: hidden;
        border-radius: 4px;
    }

    #slider .slide-block h4 {
        font-size: 36px;
        font-weight: bold;
        margin: 0 0 10px 0;
        line-height: 1;
    }
    #slider .slide-block p {
        margin: 0;
    }
    .active{
        width: 100%
    }
</style>
    <div id="wrapper">
        <div id="slider">

            <div class="slide" style="background-image: url( '{{ asset('img/birds.jpg') }}' );">
                <div class="slide-block">
                    <h4>Call Us Now:</h4>
                    <p>188 633 625</p>
                </div>
            </div>

            <div class="slide" style="background-image: url(img/birds.jpg);">
                <div class="slide-block">
                    <h4>Why Taylor&Preston?</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aspernatur, assumenda beatae cumque debitis dicta dolor dolore eaque esse mollitia</p>
                </div>
            </div>

            <div class="slide" style="background-image: url(../img/up.jpg);">
                <div class="slide-block">
                    <h4>We are here to help you.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, dicta modi nemo rem repellendus sapiente veniam? Consequuntur harum id itaque magni minus mollitia nam nesciunt quam quibusdam quisquam tempore, voluptatem.</p>
                </div>
            </div>

        </div>
    </div>
@stop