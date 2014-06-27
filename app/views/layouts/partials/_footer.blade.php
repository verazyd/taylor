<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::route('home') }}">Taylor&Preston</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ set_active('/') }}">
                    <a href="{{URL::to('/')}}">Home</a>
                </li>
                <li class="{{ set_active('commonquestions') }}">
                    <a href="{{URL::to('/commonquestions') }}">Common Questions</a>
                </li>
                <li><a href="#contact">Keywords</a></li>
                <li><a href="#contact">Video Center</a></li>
                <li><a href="#contact">Testimonials</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <p style="margin-top: 5%;">
                    <a target="_blank" href="{{ Share::load(Request::url(), 'check this'.'http:/google.com')->facebook() }}" >
                        <i class="fa fa-lg fa-facebook btn btn-sm btn-primary social_logo"></i>
                    </a>
                    <a target="_blank" href="{{ Share::load(Request::url(), 'check this')->twitter() }}" >
                        <i class="fa fa-lg fa-twitter btn btn-sm btn-primary social_logo"></i>
                    </a>
                    <a target="_blank" href="{{ Share::load(Request::url(), 'check this')->gplus() }}" >
                        <i class="fa fa-lg fa-google-plus btn btn-sm btn-primary social_logo"></i>
                    </a>
                    <a target="_blank" href="{{ Share::load(Request::url(), 'check this ')->linkedin() }}" >
                        <i class="fa fa-lg fa-linkedin btn btn-sm btn-primary social_logo"></i>
                    </a>
                </p>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<!-- jQuery -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<!-- Bootstrap JavaScript -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
{{HTML::script('/js/carasaul_homepage.js') }}
{{HTML::script('/js/custom_carasaul.js') }}
<script>
    $(function() {
        $( "#tabs" ).tabs();
    });
</script>
<!--<script>-->
<!--    $(document).ready(function() {-->
<!--        $('#myCarousel').carousel({-->
<!--            interval: 1000-->
<!--        })-->
<!---->
<!--        $('#myCarousel').on('slid.bs.carousel', function() {-->
<!--            //alert("slid");-->
<!--        });-->
<!---->
<!---->
<!--    });-->
<!---->
<!--</script>-->
</body>
</html>