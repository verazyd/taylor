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
<!--    {{ HTML::style('css/normalize.css') }}-->
    {{ HTML::style("css/font-awesome.min.css")}}
    {{ HTML::style('css/main.css') }}
</head>
<style>
    .dropdown-submenu{position:relative;}
    .dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
    .dropdown-submenu:hover>.dropdown-menu{display:block;}
    .dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
    .dropdown-submenu:hover>a:after{border-left-color:#ffffff;}
    .dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
</style>
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
             <a class="navbar-brand" href="#"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ set_active('admin_login*') }}">
                    <a href="{{URL::to('admin_login')}}">HOME</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-users"></i>&nbsp;MANAGE USERS <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ URL::to('/users') }}">All Users</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{URL::to('/register') }}">Add User</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-users"></i>&nbsp;PRACTICE AREAS<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Personal Injury</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="{{ URL::to('addPersonalInjuryService') }}">Add Service Area</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="{{ URL::to('allPersonalInjury') }}">View All</a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="#">More..</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">3rd level</a></li>
                                        <li><a href="#">3rd level</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Family Law</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="{{ URL::to('addallfamilyLaw') }}">Add Service Area</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="{{ URL::to('allfamilyLaws') }}">View All</a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="#">More..</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">3rd level</a></li>
                                        <li><a href="#">3rd level</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-users"></i>&nbsp;Menu Options<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Caraousal Images</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="{{URL::to('admin_addImages') }}">Add Images</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="{{URL::route('images') }}">View All Images</a>
                                </li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Locations</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="{{ URL::to('/add_location') }}">Add Location</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="{{ URL::to('/alllocations') }}">View Locations</a>
                                </li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Common Quetsions</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="{{ URL::to('/commonCreate') }}">Add Common Quetion</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="{{ URL::to('/common') }}">View All Common Quetions</a>
                                </li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Testimonials</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="{{ URL::to('createTestimonial') }}">Add Testimonial</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{{ URL::to('allTestimonials') }}">View All Testimonials</a>
                                </li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Videos</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="{{ URL::to('createVideo') }}">Add Video</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{{ URL::to('videos') }}">View All Videos</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-gavel"></i>&nbsp;OUR VICTORIES <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ URL::to('allVictories')  }}">View All Victories</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{URL::to('addVictory') }}">Add Recent Victory</a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                </li>
                <li class="dropdown {{ set_active('blogs*') }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-rss-square fa"></i>&nbsp;BLOG <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{URL::to('/blogs') }}">View All Blogs</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{URL::to('/create')}}">Create a Blog</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown {{ set_active('tags*') }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-tags fa"></i>&nbsp;Category <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{URL::to('/tags') }}">View All Categories</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{URL::to('/createTag')}}">Create a Category</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ URL::to('/logout') }}"><i class="fa fa-power-off fa"></i> &nbsp;Logout</a>
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