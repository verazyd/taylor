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
    {{ HTML::style('css/normalize.css') }}
    {{ HTML::style("css/font-awesome.min.css")}}
    {{ HTML::style('css/main.css') }}
</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
             <a class="navbar-brand" href="#">Taylor & Preston Admin Panel</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown {{ set_active('admin_login*') }}">
                    <a href="{{('admin_login')}}" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-home fa"></i>&nbsp;HOME <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{URL::route('admin_addImages') }}">Add Images</a>
                        </li>
                        <li>
                            <a href="{{URL::route('images') }}">All Images</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-gavel"></i>&nbsp;OUR VICTORIES <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="">View All Victories</a>
                        </li>
                        <li>
                            <a href="{{('addVictory')}}">Add Recent Victory</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown {{ set_active('location*') }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-location-arrow fa"></i>&nbsp;OUR LOCATIONS <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{('/alllocations') }}">View Locations</a>
                        </li>
                        <li>
                            <a href="{{('/add_location') }}">Add Location</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown {{ set_active('blogs*') }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-rss-square fa"></i>&nbsp;BLOG <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{('/blogs') }}">View All Blogs</a>
                        </li>
                        <li>
                            <a href="{{('/create')}}">Create a Thread</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{('/logout')}}"><i class="fa fa-power-off fa"></i> &nbsp;Logout</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>


<div class="container">
    @if(Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    @yield('content')
</div>
<!-- jQuery -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>
</html>