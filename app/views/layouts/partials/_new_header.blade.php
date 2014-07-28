<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    <meta name="keywords" content= @yield('keywords') />
    <meta name="description" content= @yield('description') />
    <meta name="robots" content="all"/>

    <!-- Bootstrap CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <link href='http://fonts.googleapis.com/css?family=Neuton' rel='stylesheet' type='text/css'>
    {{ HTML::style('./css/normalize.css') }}
    {{ HTML::style('./css/font-awesome.min.css')}}
    {{ HTML::style('./css/main.css') }}
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>


<!--    header style sheet-->
    {{ HTML::style('./css/css_header/style2.css') }}
    {{ HTML::style('./css/css_header/style3.css') }}
    {{ HTML::style('./css/css_header/style.css') }}
    {{ HTML::style('./css/css_header/responsive.css') }}


    <style type="text/css">
        #NavZone {
            position:fixed
        }
    </style>

    {{ HTML::script('./js/js_header/script.js')  }}

    <script type="text/javascript">window._mobilemenu=true;</script>

    {{ HTML::style('./css/meet_our_att.css') }}
    {{ HTML::style('./css/meet_our_att_responsive.css') }}

    <script>
        $(function(){
            if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1)
            {
               $('html').css('margin-top', '-80px');
            }

        });
    </script>

</head>
<body>
<?php $path =  base_path().'/public';?>
    <header>
        <div  id="NavZone" class="topNabVar" style="background-image: url(/../img/img_header/BG-topnav.jpg)">
            <div class="cf masthead" id="Masthead" icobalt="CobaltControls.Controls.StaticContent">
                <div class="TopLogo">
                    <div class="logobg"></div>
                    <a href="{{ URL::to('/') }}">
                        <img class="logo-image" style="background-image:url(/../img/img_header/main_logo_cropped.png)"
                             src="/../img/img_header/spacer.gif"></a>

                    <a class="logo-button" href="{{ URL::to('/') }}">
                        <img src="/../img/img_header/spacer.gif">
                    </a>
                </div>
                <div class="navsection">
                    <nav class="top-nav" id="TopNavigation">
                        <ul class="t-nav"  _flyout="false" id="ctl03" name="ctl03">
                            <li data-index="1">
                                <a target="">Family Law</a>
                            </li>
                            <li data-index="2">
                                <a target="">Personal Injury</a>
                            </li>
                            <li data-index="3">
                                <a target="">Legal Services</a>
                            </li>
                            <li data-index="4">
                                <a target="">About Us</a>
                            </li>
                            <li data-index="5">
                            <a  target="">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div id="MobileArea">
                    <a class="menu" id="MobileMenu" href="javascript:void('Start');" icobalt="CobaltControls.Controls.MobileMenu"><icon class="menu-6"></icon></a><div class='imenupanel' style='display:none;'><div class='imenu'><div class='imenuitem' _pageid='5400249' _childpages='0'><a href="{{ URL::to('/') }}">Home</a></div><div class='imenuitem iright' _pageid='5400354' _childpages='2'><a href="{{URL::route('familyLaw') }}">Family Law</a></div><div class='imenuitem iright' _pageid='5427349' _childpages='6'><a href="{{ URL::route('personalInjury') }}">Personal Injury</a></div><div class='imenuitem iright' _pageid='5400357' _childpages='14'><a href="{{ URL::route('ourvictories') }}">Our Victories</a></div><div class='imenuitem iright' _pageid='5400358' _childpages='6'><a href="{{ URL::route('allblogs') }}">Our Blog</a></div><div class='imenuitem' _pageid='5468457' _childpages='0'><a href="{{ URL::route('contactus') }}">Contact Us</a></div><div class='imenuitem' _pageid='5400359' _childpages='0'><a href="{{ URL::route('location') }}">Locations</a></div><div class='imenuitem' _pageid='5471654' _childpages='0'><a href="">One Item</a></div><div class='imenuitem' _pageid='5520105' _childpages='0'><a href="">Another</a></div><div class='imenuitem' _pageid='5400254' _childpages='0'><a href="">Third Extra Menu</a></div></div></div>
                </div>
                <div class="Number">
                    <a class="phone_link" href="tel:1800833625">1 800 633 625</a>
                </div>
            </div>
            <div id="Flyout">
                <div class="fly-nav  1">
                    <div class="main">
                        <div id="FlyoutContent1" class="flycontent">
                            <h3>Family Law</h3>
                            <p>We at Taylor & Preston understand how important the outcome of any family law matter is to you and your future, as well as the urgency of your case when children are involved. Our professional lawyers have impressive credentials and a full understanding of the laws involved in all areas of family law. When we represent you, you can be confident that your interests will be protected, and that you are represented by a quality family lawyer that will do all possible to pursue a favorable outcome for you. We urge you to contact our firm to discuss your personal legal matter. We take all the time necessary to answer your questions about what to expect and how we will proceed to pursue your objectives.</p>
                            <p><strong>That leaves just one question: Are you ready to get more?</strong></p>
                        </div>
                        <nav class="droplist" id="FlyMenu1" name="FlyMenu1">
                            <ul>
                                <li class="level1 ">
                                    <a href="{{URL::route('familyLaw') }}" target="">Our expertise in Family Law</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Divorce</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Same sex relationships</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Property settlements</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Child Support</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Family Violence and Intervention orders</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Domestic partner relationships</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="fly-nav  2">
                    <div class="main">
                        <div id="FlyoutContent2" class="flycontent">
                            <h3>Personal Injury</h3>
                            <p>We at Taylor & Preston understand how important the outcome of any personal injury law matter is to you and your future, as well as the urgency of your case when children are involved. Our professional lawyers have impressive credentials and a full understanding of the laws involved in all areas of family law. When we represent you, you can be confident that your interests will be protected, and that you are represented by a quality family lawyer that will do all possible to pursue a favorable outcome for you. We urge you to contact our firm to discuss your personal legal matter. We take all the time necessary to answer your questions about what to expect and how we will proceed to pursue your objectives.</p>
                            <p><strong>That leaves just one question: Are you ready to get more?</strong></p>
                        </div>
                        <nav class="droplist" id="FlyMenu2" name="FlyMenu2">
                            <ul>
                                <li class="level1 ">
                                    <a href="{{ URL::route('personalInjury') }}"  target="">Services in Personal Injury</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">WorkCover</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Employment Law</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Road Injuries and TAC Claims</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Public Liability</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Motor Vehicle Accidents</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Medical Negligence</a>
                                </li>
                            </ul>
                            <div class="scrollbar"></div>
                        </nav>
                    </div>
                </div>
                <div class="fly-nav  3 cf">
                    <div class="main">
                        <div id="FlyoutContent3" class="flycontent">
                            <h3>Our Practice Areas</h3>
                            <p>Our team can assist in the drafting of pre-nuptial agreements, and provides committed legal counsel in issues involving property settlement, financial agreements, mediation, and child support, both binding child support agreements, limited child support agreements, and cases of objecting child support. We are well-versed in Australian law with regard to child custody, child abduction, and can assist in family dispute resolution. Cases of neglect, domestic violence, or child abduction are of great concern, and should be acted upon by a qualified lawyer from our firm immediately for protection and legal intervention. We also provide legal services for those in same sex relationships that have family law matters to address.</p>
                        </div>
                        <nav class="droplist" id="FlyMenu3" name="FlyMenu3">
                            <ul>
                                <li class="level1 ">
                                    <a href="{{ URL::route('familyLaw') }}" target="">Family Law</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('personalInjury') }}" target="">Personal Injury</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Criminal Law</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Commercial Law</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Employment Law</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">International and Chinese Law</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Property Law</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Wills & Estates </a>
                                </li>
                            </ul>
                            <div class="scrollbar"></div>
                        </nav>
                    </div>
                </div>
                <div class="fly-nav  4">
                    <div class="main">
                        <div id="FlyoutContent4" class="flycontent">
                            <h3>About Us</h3>
                            <p>
                                There are a lot of reasons why we think you should choose to work with
                                our team of marketing experts, but we believe the biggest reason is simple:
                                <strong>we get results.</strong> This is something we have proven through actions, not just words, throughout
                                the years, and can be easily seen from the millions of qualified leads
                                that we have driven to our customers.
                                <strong>We will get you more for less</strong>.
                            </p>
                        </div>
                        <nav class="droplist" icobalt="CobaltControls.Controls.AdvancedMenu" id="FlyMenu4" name="FlyMenu4">
                            <ul>
                                <li class="level1 ">
                                    <a href="{{URL::route('ourvictories') }}" target="">Our Victories</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('testimonials') }}" target="">Testimonials</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{URL::route('allblogs') }}" target="">Our Blog</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Our Awards</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Our Dedication</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">Our Philosophy</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('practice_areas') }}" target="">What Makes Us Different?</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="fly-nav  5">
                    <div class="main">
                        <div id="FlyoutContent2" class="flycontent">
                            <h3>Contact Us Now</h3>
                            <p>Our team can assist in the drafting of pre-nuptial agreements, and provides committed legal counsel in issues involving property settlement, financial agreements, mediation, and child support, both binding child support agreements, limited child support agreements, and cases of objecting child support. We are well-versed in Australian law with regard to child custody, child abduction, and can assist in family dispute resolution. Cases of neglect, domestic violence, or child abduction are of great concern, and should be acted upon by a qualified lawyer from our firm immediately for protection and legal intervention. We also provide legal services for those in same sex relationships that have family law matters to address.</p>
                        </div>
                        <nav class="droplist" icobalt="CobaltControls.Controls.AdvancedMenu" id="FlyMenu2" name="FlyMenu2">
                            <ul>
                                <li class="level1 ">
                                    <a href="{{URL::route('location')}}" target="">Our Locations</a>
                                </li>
                                <li class="level1 ">
                                    <a href="{{ URL::route('contactus') }}" target="">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="ilayout" id="Imagezone">
            <div id="Animation" data-delay="8000" name="animation">

    </header>
<script type="text/javascript">
var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
ValidatorOnLoad();
}

function ValidatorOnSubmit() {
if (Page_ValidationActive) {
return ValidatorCommonOnSubmit();
}
else {
return true;
}
}

</script>
<script type="text/javascript">
//Reset the top bar height on scroll
    $(window).scroll(function() {
        //Grab heights for the top bar elements
        var scrollY = $(document).scrollTop(),
            scrollPos = 10,
            topBar = $('#NavZone');

        if(scrollY > scrollPos) {
            topBar.addClass( 'Scrolled' );

        }

        else {
            topBar.removeClass( 'Scrolled' );

        }

    });

//Slides contact form and body left
$('.masthead .panelbtn').click(function(){
    var bodystuff = $('body');
    if (bodystuff.hasClass('animateleft')) {
        bodystuff.removeClass('animateleft');
    }
    else {

        bodystuff.addClass('animateleft');
    }


});


</script>

<script type="text/javascript">
    function SlideOutPanel() {
        var Out;

        this.slideOut = function() {
            if ( (Out !== true) ) {
                return;
            } else {
                this.flyOut.stop().css({"opacity":"0","margin-top":"20px"}).delay(500).queue(function() {
                    $('.fly-nav').css({display: 'none'});
                });
                Out = undefined;
            }
        };

        this.slideIn = function() {
            if ( Out === true ) {
                return;
            } else {
                this.flyOut.stop().css({"opacity":"1","margin-top":"0px"});
                Out = true;
            }
        };

        this._handleMouse = function(e) {
            if ( e.type === 'mouseleave' ) {
                this.slideOut();
            } else {
                var target = $(e.target);
                if ( target.parents('.top-nav').length === 0 ) {
                    if ( (target.parents('#Flyout').length !== 0) || (target.is(this.flyOut)) ) {
                        return;
                    } else {
                        this.slideOut();
                    }
                } else {
                    var li = target.closest('li'),
                        index = li.data( 'index' );


                }
                switch ( index ) {
                    case 1:
                        this.flyouts.css({display: 'none'});
                        this.flyouts.filter( '.1' ).css({display: 'block'});
                        this.slideIn();
                        break;
                    case 2:
                        this.flyouts.css({display: 'none'});
                        this.flyouts.filter( '.2' ).css({display: 'block'});
                        this.slideIn();
                        break;
                    case 3:
                        this.flyouts.css({display: 'none'});
                        this.flyouts.filter( '.3' ).css({display: 'block'});
                        this.slideIn();
                        break;
                    case 4:
                        this.flyouts.css({display: 'none'});
                        this.flyouts.filter( '.4' ).css({display: 'block'});
                        this.slideIn();
                        break;
                    case 5:
                        this.flyouts.css({display: 'none'});
                        this.flyouts.filter( '.5' ).css({display: 'block'});
                        this.slideIn();
                        break;
                }


            }
        }

        this.element = $('#NavZone').on( 'mouseover mouseleave', $.proxy(this._handleMouse,this) );
        this.flyOut = this.element.find( '#Flyout' );
        this.flyouts = this.flyOut.find('.fly-nav');
    }
    new SlideOutPanel();
</script>