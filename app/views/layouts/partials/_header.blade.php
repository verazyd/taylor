<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="7y-QO6s2ptMu42r0jREIFab8z3bDRnI6qCCZNAMr1NM" />
    <title>Family Lawyers Melbourne - 1800 633 625 - Open 7 Days To 11PM - Taylor & Preston family lawyers melbourne | Melbourne divorce lawyers</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="keywords" content="Family Lawyers Melbourne,Divorce Lawyers Melbourne                                                                                                                        ">
    <meta name="description" content="Taylor & Preston Family Lawyers Melbourne can be contacted to 11PM 7 days a week on 1800 633 625. They are a successful family law and divorce law firm in Melbourne which offers best family lawyers and divorce lawyers in Melbourne and provides the highest quality, personal legal services in all areas of family law matters, including divorce and child custody. We understand that the outcome of your or your loved ones personal legal matters is of the utmost importance, and it is vital that you have on your side Melbourne family lawyers that will provide you with committed and exceptional service.                                                                                                                        ">

    <!-- Bootstrap CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    {{ HTML::style('css/normalize.css') }}
    {{ HTML::style("css/font-awesome.min.css")}}
    {{ HTML::style('css/main.css') }}
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    {{ HTML::style('/css/meet_our_att.css') }}
    {{ HTML::style('/css/meet_our_att_responsive.css') }}
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="row pull-right phone_contact" style="margin-right: 3%;margin-top: 10px;">
        <div class="col-md-12">
        <p >   <a target="_blank" href="{{ Share::load(Request::url(), 'check this'.'http:/google.com')->facebook() }}" >
                <i class="fa fa-lg fa-facebook btn btn-sm btn-primary pulse-grow"></i>
            </a>
            <a target="_blank" href="{{ Share::load(Request::url(), 'check this')->twitter() }}" >
                <i class="fa fa-lg fa-twitter btn btn-sm btn-primary pulse-grow"></i>
            </a>
            <a target="_blank" ref="{{ Share::load(Request::url(), 'check this')->gplus() }}" >
                <i class="fa fa-lg fa-google-plus btn btn-sm btn-primary pulse-grow"></i>
            </a>
            <a target="_blank" href="{{ Share::load(Request::url(), 'check this ')->linkedin() }}" >
                <i class="fa fa-lg fa-linkedin btn btn-sm btn-primary pulse-grow"></i>
            </a>
        </p>
        </div>
    </div>
    <div class="header_back" style=" padding-left: 10px; padding-top: 10px;">
        <div class="row">
            <div class="col-md-5">
                <a href="{{URL::to('/') }}">
                    {{HTML::image('/img/FLMlogo.png', $alt = 'Taylor&Preston', $attributes = array('class' => 'img-responsive top_logo', 'height' => 100)) }}</a>
                <p class="experienced">No Win, No Fee Representation</p>
            </div>
            <div class="col-md-6 pull-right">
                <div class="col-md-2"></div>
                <div class="col-md-6">
                    <p class="pulse-grow phone_header pull-right">
                        <span class="glyphicon glyphicon-earphone" style="padding-right: 5px"></span>
                        <span style="font-weight: bold; font-size: ">1 800 833 625</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="pulse-grow phone_header pull-right">
                        <span class="glyphicon glyphicon-user" style="margin-right: 10px;"></span>Live Chat
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">Taylor & Preston</a>
        -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ set_active('/') }}">
                    <a href="{{URL::to('/')}}">HOME</a>
                </li>
                <li class="{{ set_active('familyLaw') }}">
                    <a href="{{URL::to('familyLaw') }}">FAMILY LAW</a>
                </li>
                <li class="{{set_active('personalInjury') }}">
                    <a href="{{ URL::to('/personalInjury') }}">PERSONAL INJURY</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        LEGAL SERVICES <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{URL::to('familyLaw') }}"">Family Law</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ URL::to('/personalInjury') }}">Personal Injury</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Criminal Law</a>
                        </li>
                        <li class="divider">Commercial Law</li>

                        <li>
                            <a href="#">Employeement Law</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">International and Chinese Law</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Property Law</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Wills & Estates</a>
                        </li>
                    </ul>
                </li>
                <li class="{{set_active('victories') }}">
                    <a href="{{URL::to('/victories') }}">OUR VICTORIES</a>
                </li>
                <li class="{{set_active('location') }}">
                    <a href="{{URL::to('/location')}}">OUR LOCATIONS</a>
                </li>
                <li class="{{ set_active('allblogs') }}">
                    <a href="{{URL::to('/allblogs') }}">BLOG</a>
                </li>
                <li class="{{set_active('contactus') }}">
                    <a href="{{URL::to('/contactus') }}">CONTACT US</a>
                </li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="I'm looking for ...."></div>
            </form>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
</div>
