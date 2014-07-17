@extends('layouts.master')

@section('title')
    Best Lawyers for Family and Personal Injury in Melbourne
@stop

@section('content')
<style>
    .meet_out_attorneys_page{
        background-color: rgb(216, 227, 246);
        margin-top: 10px;
        color: #1D85DC;
    }
    .meet_out_attorneys_page h1{
        padding: 0px 10px;
        text-align: justify;
        font-size: 2em;
        color: rgb(0, 86, 149);
    }
    .meet_out_attorneys_page p{
        text-align: justify;
        font-family: italic arial, sans-serif;
        font-size: 18px;;
        opacity: 0.7;
        padding: 5px 10px;;
    }
    .meet_out_attorneys_page p2{
        text-align: center;
        background: #217C9C;
        color: #ffffff;
        line-height: 1.5;
        padding: 10px;
    }
    .personal_injury h2{
        color: rgb(0, 86, 149);
    }
    .personal_injury h5{
        cfont-family: Cabin Condensed, Arial;
        font-weight: 500;
        font-size: 26px;
        color: rgb(93, 93, 93);
    }
    .personal_injury_info{
        display: block;
        background-color: rgb(216, 227, 246);
        border: 1px solid rgb(189, 201, 221);
        margin: 0 0 4px;
        box-shadow: 0 2px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.75);
        padding: 10px 0;
        color: rgb(0, 86, 149);
        text-transform: uppercase;
        transition: .5s ease;
    }
    .personal_injury_info:hover{
        background: #217C9C;
    }
    .meet_attorney_section{
        margin-bottom: 5%;
    }
    .meet_out_attorneys_page ul li{
        list-style-type: none;
    }
    .lawyers_img{
        text-align: center;
        border: 2px solid #217C9C;
    }
    .lawyers_img span{
        text-transform: uppercase;
        font-weight: bold;
    }

</style>
<div class="container_section">
    <div class="row">
        {{HTML::image('/img/our_vic.jpeg', $alt = 'Taylor&Preston',
        $attributes = array('class' => 'center-block img-responsive',  'width' => '100%')) }}
        <h2>MEET OUR ATTORNEYS</h2>
    </div>
    <div class="row">
        <div class="col-md-8 meet_out_attorneys_page">
            <div class="col-md-12 meet_attorney_section">
                <h3>Attorneys at Taylor&Preston</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto blanditiis, cum deleniti deserunt eligendi ipsam itaque, omnis possimus praesentium quam, quia quidem rerum saepe sit vitae voluptate voluptatum. Consequatur, itaque.
                    <span>If you would like to learn more about how we can help with your case,
                    please give us a call at<strong>&nbsp;&nbsp;800-633-625</strong></span>"
                    </p>
            </div>
            <ul>
                <li>
                    <div class="col-md-4 lawyers_img">
                        <a href="">
                            <img src="../img/customer.jpeg" alt="" width="156" height="156"/></a>
                        <span>Lawyer 1</span>
                    </div>
                </li>
                <li>
                    <div class="col-md-4 lawyers_img">
                        <a href="">
                            <img src="../img/customer.jpeg" alt="" width="156" height="156"/></a>
                        <span>Lawyer 1</span>
                    </div>
                </li>
                <li>
                    <div class="col-md-4 lawyers_img">
                        <a href="">
                            <img src="../img/customer.jpeg" alt="" width="156" height="156"/></a>
                        <span>Lawyer 1</span>
                    </div>
                </li>
                <li>
                    <div class="col-md-4 lawyers_img">
                        <a href="">
                            <img src="../img/customer.jpeg" alt="" width="156" height="156"/></a>
                        <span>Lawyer 1</span>
                    </div>
                </li>
                <li>
                    <div class="col-md-4 lawyers_img">
                        <a href="">
                            <img src="../img/customer.jpeg" alt="" width="156" height="156"/></a>
                        <span>Lawyer 1</span>
                    </div>
                </li>
                <li>
                    <div class="col-md-4 lawyers_img">
                        <a href="">
                            <img src="../img/customer.jpeg" alt="" width="156" height="156"/></a>
                        <span>Lawyer 1</span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-4 personal_injury">
           <h3>Personal Injury Services</h3>
            <h5>Information Center</h5>
            <div class="btn-group btn-group-justified">
                <div class="btn-group">
                    @foreach($personals as $personal)
                    <button type="button" class="btn btn-default personal_injury_info"><a href=""> {{ $personal->name }} </a> </button>
                    @endforeach
                </div>
            </div>
            <h3>Our Recent Victories</h3>
            <h5>Information Center</h5>
            <div class="btn-group btn-group-justified">
                <div class="btn-group">
                    @foreach($victories as $victory)
                    <button type="button" class="btn btn-default personal_injury_info"><a href=""> {{ $victory->topic }} </a> </button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop