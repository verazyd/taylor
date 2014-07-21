@extends('layouts.master')

@section('title')
    Best Lawyers for Family and Personal Injury in Melbourne | Taylor & Preston Family Lawyers in Melbourne
@stop

@section('keywords')
    "lawyers in melbourne, lawyers in vic, lawyers in victoria, family lawyers, family law melbourne, personal injury melbourne,
    personal injury vic, personal injury victoria, tac lawyers melbourne, workcover lawyers melbourne, melbounre tac lawyers,
    melbourne workcover lawyers, best lawyers in melbourne, melboourne good laweyrs, injury lawyers meblbourne"
@stop

@section('description')
    "Best Lawyers in Melboune, family injury melboune, injuries melbourne, road injuries melboune, best tac laywers melboune,
    workcover lawyers, we at Taylor & Preston take care of our clients in best possible way. "
@stop

@section('content')
<style>
    .meet_out_attorneys_page h1{
        padding: 0px 10px;
        text-align: justify;
        font-size: 2em;
        color: rgb(0, 86, 149);
    }
    .meet_out_attorneys_page p{
        text-align: justify;
        font-family: Montserrat, Arial, "Helvetica Neue", Helvetica, sans-serif;
        font-size: 18px;;
        opacity: 0.7;
        padding: 5px 10px;
        margin-top: 50px;
        color: rgb(38, 39, 37);;
    }
    .personal_injury h2{
        color: rgb(0, 86, 149);
    }
    .personal_injury h5{
        font-family: Montserrat, Arial, "Helvetica Neue", Helvetica, sans-serif;
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
        {{HTML::image('/img/our_vic.jpeg', $alt = 'Lawyers at Taylor & Preston - Family Law - Personal Injury',
        $attributes = array('class' => 'center-block img-responsive',  'width' => '100%')) }}
        <h2>MEET OUR ATTORNEYS</h2>
    </div>
    <div class="row">
        <div class="col-md-8 meet_out_attorneys_page">
            <div class="col-md-12">
                <h2>Attorneys at Taylor&Preston</h2>
                    <p>"Taylor & Preston Lawyers have years of experience handling <strong>family law</strong> and <strong>personal
                        injury laweyrs</strong> matters. Our <strong>lawyers</strong> include David Denby, who has been practicing
                        law for over 40 years and is an ex-president of the Law Institute of Victoria. Jeffrey Stone is another senior
                        lawyer at the firm who has also been <strong>practising family law </strong>for over 40 years. We have earned this trust by
                        practicing law with the highest ethical standards in the legal profession. The excellence of our family lawyers,
                        and our commitment to our clients has earned the firm its elite standing in the legal community
                    <span>If you would like to learn more about the best family lawyers, how we can help with your case,
                    <span>please give us a call at<strong>&nbsp;&nbsp;800-633-625</strong></span>"
                    </p>
            </div>
            <ul>
                <li>
                    <div class="col-md-4 lawyers_img">
                        <a href="{{ URL::to('jeremy') }}">
                            <img src="../img/customer.jpeg" alt="" width="199" height="170"/></a>
                        <span>Jeremy Williams</span>
                    </div>
                </li>
                <li>
                    <div class="col-md-4 lawyers_img">
                        <a href="{{ URL::to('madeline')  }}">
                            <img src="../img/customer.jpeg" alt="" width="199" height="170"/></a>
                        <span>Madeline Smith</span>
                    </div>
                </li>
                <li>
                    <div class="col-md-4 lawyers_img">
                        <a href="{{ URL::to('holly') }}">
                            <img src="../img/customer.jpeg" alt="" width="199" height="170"/></a>
                        <span>Holly Renwick</span>
                    </div>
                </li>
                <li>
                    <div class="col-md-4 lawyers_img">
                        <a href="{{ URL::to('wu') }}">
                            <img src="../img/customer.jpeg" alt="" width="199" height="170"/></a>
                        <span>Payne Wu</span>
                    </div>
                </li>
                <li>
                    <div class="col-md-4 lawyers_img">
                        <a href="{{ URL::to('peter') }}">
                            <img src="../img/customer.jpeg" alt="" width="199" height="170"/></a>
                        <span>Peter Ansell</span>
                    </div>
                </li>
                <li>
                    <div class="col-md-4 lawyers_img">
                        <a href="{{ URL::to('paul') }}">
                            <img src="../img/customer.jpeg" alt=""width="199" height="170"/></a>
                        <span>Paul Boers</span>
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