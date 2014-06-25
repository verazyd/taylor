<!DOCTYPE html>
<html lang="">
<head>
    <title>Title Page</title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    {{ HTML::style('css/normalize.css') }}
    {{ HTML::style("css/font-awesome.min.css")}}
    {{ HTML::style('css/main.css') }}
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="row pull-right phone_contact" style="margin-right: 3%;">
        <p >   <a target="_blank" href="{{ Share::load(Request::url(), 'check this'.'http:/google.com')->facebook() }}" >
                <i class="fa fa-lg fa-facebook btn btn-sm btn-primary pulse-grow"></i>
            </a>
            <a target="_blank" href="{{ Share::load(Request::url(), 'check this')->twitter() }}" >
                <i class="fa fa-lg fa-twitter btn btn-sm btn-primary pulse-grow"></i>
            </a>
            <a target="_blank" href="{{ Share::load(Request::url(), 'check this')->gplus() }}" >
                <i class="fa fa-lg fa-google-plus btn btn-sm btn-primary pulse-grow"></i>
            </a>
            <a target="_blank" href="{{ Share::load(Request::url(), 'check this ')->linkedin() }}" >
                <i class="fa fa-lg fa-linkedin btn btn-sm btn-primary pulse-grow"></i>
            </a>
        </p>
    </div>
    <div class="" style="background: #294058; padding: 15px;">
        <div class="row">
            <div class="col-md-4">
                <a href="{{URL::route('home') }}"> {{HTML::image('/img/logo.jpeg', $alt = 'Taylor&Preston', $attributes = array('class' => 'img-responsive top_logo')) }}</a>
            </div>
            <div class="col-md-2">
                <p class="experienced">Experienced | Aggressive</p>
                <p class="experienced">No Win, No Fee Representation</p>

            </div>
            <div class="col-md-6 pull-right">
                <div class="col-md-2 col-md-offset-4">
                    <p>
                        <button type="button" class="btn btn-default btn-lg pulse-grow">
                            <span class="glyphicon glyphicon-earphone"></span>
                            1 800 633 625
                        </button>
                    </p>
                </div>
                <div class="col-md-6">
                    <p>
                        <button type="button" class="btn btn-default btn-lg pull-right pulse-grow">
                            <span class="glyphicon glyphicon-user"></span>
                            Live Chat
                        </button>
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
                    <a href="{{URL::route('home')}}"<i class="fa fa-home fa"></i>&nbsp;HOME</a>
                </li>
                <li class="{{ set_active('/about') }}">
                    <a href="{{URL::route('about') }}"><i class="fa fa-university"></i> &nbsp;FAMILY LAW</a>
                </li>
                <li class="{{set_active('victories') }}">
                    <a href="{{('victories') }}"><i class="fa fa-gavel"></i>&nbsp; OUR VICTORIES</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-gavel"></i>&nbsp;LEGAL SERVICES <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Family Law</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Personal Injury</a>
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
                <li class="{{set_active('location') }}">
                    <a href="{{('/location')}}"> <i class="fa fa-location-arrow fa"></i> &nbsp;Our Locations</a>
                </li>
                <li class="{{ set_active('allblogs') }}">
                    <a href="{{('/allblogs') }}">BLOG</a>
                </li>
<!--                <li>-->
<!--                    <a href="#">FAQ</a>-->
<!--                </li>-->
                <li class="{{set_active('contactus') }}">
                    <a href="/contactus"><i class="fa fa-envelope"></i> &nbsp;CONTACT US</a>
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