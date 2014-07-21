
<footer id="Footer" style="margin-bottom: 2%">
    <div class="icobalt ilayout cf BGScroll" id="FooterTop"><div icobalt="CobaltControls.Controls.StaticContent" id="FootIEBG" class="IEBG">
        </div>
        <div icobalt="CobaltControls.Controls.StaticContent" id="BottomInfo" class="main">
            <div class="third">
                <h3>Office Location</h3>
                <div id="SiteSchema" icobalt="CobaltControls.Controls.Schema">
                    <div itemscope="" itemtype="">
                        <span itemprop="legalName" style="font-size: 18px">Taylor&Preston</span> <br>
                        <span itemprop="description"><strong>101 Hope Street, Brunswick VIC 3056</strong></span>
					<div class="BPhone">
                        <icon class="phone"></icon> Call Today For Free Consulation:<br>
                        <span itemprop="telephone"><a href="" class="phonelink">1 800 633 625</a></span>
                    </div>
					<br>
				</span>
                    </div>
                </div>
                <nav class="social" icobalt="CobaltControls.Controls.DisplayList" id="SocialList" name="SocialList">
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
                </nav>
            </div>
            <nav class="third" icobalt="CobaltControls.Controls.AdvancedMenu" id="QuickLinks" name="QuickLinks">
                <h3>Quick Links</h3>
                <ul>
                    <li>
                        <a href="{{URL::to('familyLaw') }}" target="">Family Law</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/personalInjury') }}" >Personal Injury</a>
                    </li>
<!--                    <li>-->
<!--                        <a href="#practice_areas">Practice Areas</a>-->
<!--                    </li>-->
                    <li>
                        <a href="{{URL::to('/location')}}">Our Locations</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/victories') }}">Our Victories</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/allblogs') }}">Our Blog</a>
                    </li>
                    <li>
                        <a href="{{ URL::route('commonquestions') }}">Common Questions</a>
                    </li>
                </ul>
            </nav>
            <nav class="third" icobalt="CobaltControls.Controls.AdvancedMenu" id="LegalNetwork" name="LegalNetwork">
                <h3>Legal Network</h3>
                <ul>
                    <li>
                        <a href="{{ URL::to('/personalInjury') }}">Personal Injury</a>
                    </li>
                    <li>
                        <a href="{{URL::to('familyLaw') }}" >Family Law</a>
                    </li>
                    <li>
                        <a href="" >Criminal Law</a>
                    </li>
                    <li>
                        <a href="" >Sexual & Instituional Abuse</a>
                    </li>
                    <li>
                        <a href="" >TAC Claims</a>
                    </li>
                    <li>
                        <a href="">Work Injury</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</footer>

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
                    <a href="{{URL::to('/')}}">HOME</a>
                </li>
                <li class="{{ set_active('about') }}">
                    <a href="{{ URL::route('about') }}">LEGAL TEAM</a>
                </li>
                <li class="{{ set_active('commonquestions') }}">
                    <a href="{{URL::route('commonquestions') }}">COMMON QUESTIONS</a>
                </li>
                <li><a href="">KEYWORDS</a></li>
                <li class="{{ set_active('allVideos') }}">
                    <a href="{{URL::to('allVideos') }}">VIDEO CENTER</a>
                </li>
                <li class="{{ set_active('testimonials') }}">
                    <a href="{{ URL::to('testimonials') }}">TESTIMONIALS</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <p style="margin-top: 9%;">
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
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<!--<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>-->
<!-- Bootstrap JavaScript -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
{{HTML::script('/js/carasaul_homepage.js') }}
{{HTML::script('/js/custom_carasaul.js') }}

<script>
    $(function() {
        $( "#tabs" ).tabs();
    });
</script>
</body>
</html>