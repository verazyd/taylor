@extends('layouts.master')
@section('content')

{{ HTML::style('/css/meet_our_att.css') }}
{{ HTML::style('/css/meet_our_att_responsive.css') }}
<script type="text/javascript" src="http://cms.scorpioncms.com/Shared/js3/cms.1.js"></script>

<style type="text/css">#SideStickyZone {
        position: fixed;
    }
</style>

<script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-26287875-4', 'auto');
    ga('require', 'displayfeatures');

    (function(w) {
        if (w.ga && w.VedDecode && w.VedDecode.ved) {
            // Send pageview with custom dimension data
            ga('set', {
                dimension1: getVedValue('linkIndex'),
                dimension2: getVedValue('linkType'),
                dimension3: getVedValue('resultPosition'),
                dimension4: getVedValue('subResultPosition'),
                dimension5: getVedValue('page')
            });
        }
        function getVedValue(key) {
            var ret = w.VedDecode[key];
            return ret ? ret + '' : '(not set)';
        }
    })(window);
    ga('send', 'pageview');
    </script>
    <script type="text/javascript" src="http://cms.scorpioncms.com/Shared/js3/cms.1.js"></script>
    <script type="text/javascript">window._fortran=true;</script>

    <script type="text/javascript">window._mobilemenu=true;</script>
    <script type='text/javascript'>
        $(document).ready(function(){$('#SlideForm').selfsubmit().find('input:text,textarea').toggleValue();});
    </script>
    <script type='text/javascript'>
        $(document).ready(function(){$('#ContactHome').selfsubmit().find('input:text,textarea').toggleValue();});
    </script>

<div id="myCarousel" class="carousel slide">
    <?php
    $i = 0;
    ?>
    <div class="carousel-inner">
        @foreach($images as $i => $image)

        <div class="item  @if($i == 0) {{ 'active' }} @endif">

            <img src="./img/{{$image->url }}" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>{{ $image->title }}</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, aliquid architecto corporis dolorem,m temporibusloremque, fugit mollitia tenetur.</p>
                    <a class="btn btn-large btn-primary" href="#">Lear more</a>
                </div>
            </div>

        </div>
        @endforeach
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<div class="row" style="margin: 10px 5px;">
    {{HTML::style('css/image_animations.css') }}
    <div class="col-md-12">
        <h2 style="color:#273E55; text-align: center;">Why Choose Taylor & Preston ?</h2>
        <p style="padding:20px; font-weight: bold;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur necessitatibus soluta ad, eveniet voluptas. Harum, ea debitis maiores sequi ducimus temporibus, accusamus ipsam nulla, velit, ad tempore rem voluptas voluptate.
        </p>
        <div class="col-md-4 view view-fourth">
            {{HTML::image('/img/our_vic.jpeg', $alt = 'Taylor&Preston',
            $attributes = array('class' => 'center-block img-responsive',  'width' => '350px')) }}
            <div class="mask">
                <h2>Taylor&Preston</h2>
                <p>Lorem ipsum dolor sit amet, consectetu Aut reiciendis repellat sit vel? Dolores earum et</p>
                <a href="#" class="info">Read More</a>
            </div>
        </div>
        <div class="col-md-4">
            {{HTML::image('/img/hexagonal_image.png', $alt = 'Taylor&Preston',
            $attributes = array('class' => 'center-block img-responsive',  'width' => '100%')) }}
            <p style="position: absolute;top: 30%;text-align: center; width: 80%; left: 10%;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam, dolore dolores ex illum itaque minima minus nobis odit pariatur quaerat quibusdam recusandae repellat repudiandae saepe? Ducimus excepturi expedita quos?
            </p>
        </div>
        <div class="col-md-4 view view-fourth">
            {{HTML::image('/img/our_vic.jpeg', $alt = 'Taylor&Preston',
            $attributes = array('class' => 'center-block img-responsive',  'width' => '350px')) }}
            <div class="mask">
                <h2>Taylor&Preston</h2>
                <p>Lorem ipsum dolor sit amet, consectetu Aut reiciendis repellat sit vel? Dolores earum et</p>
                <a href="#" class="info">Read More</a>
            </div>
        </div>
    </div>
</div>

    @include('layouts.partials._contact_form')

<div class="" style="margin: 10px 5px 5px 5px;">
<form id="ctl00" name="ctl00" method="post" action=""
      onsubmit="javascript:return WebForm_OnSubmit();" style="margin:0px;padding:0px;">


    @include('layouts.partials._feedback')

<main>
<div class="icobalt ilayout cf paper" id="AttorneyZone">
    <div icobalt="CobaltControls.Controls.DisplayList" id="AttyCarousel" class="main" name="AttyCarousel">
        <ul>
            <li class="Info1">
                <a class="nav left" href="javascript:void('Left');">

                    <img src="./img/left2.png" style="width:21px;height:44px"></a>

                <a class="nav right" href="javascript:void('Right');">

                    <img src="./img/right2.png" style="width:21px;height:44px"></a>

                <img src="./img/spacer-2.gif" style="border-width:0px;background-image:url('./img/process/s5k30s_i1xx.svg');" />

                <img data-bg-image="./img/process/uuwtdmzwk9t.png" src="./img/spacer-2.gif" style="border-width:0px;display:none;" />

                <div class="AttyInfo">
                    <h1> Lawyer 1</h1>
                    <h2>Attorney</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt velit eaque, pariatur saepe voluptatem aut magnam minima ab sequi facilis! Reiciendis labore, pariatur numquam blanditiis praesentium autem molestias. Aliquam, reprehenderit. ...
                    </p>
                    <a href="Meet-Our-Attorneys/Kyle-Findley.html">Learn More [+]</a>
                </div>
            </li>
            <li class="Info2">
                <a class="nav left" href="javascript:void('Left');">
                    <img src="./img/left2.png" style="width:21px;height:44px"></a>

                <a class="nav right" href="javascript:void('Right');">
                    <img src="./img/right2.png" style="width:21px;height:44px"></a>

                <img src="./img/shared/spacer-2.gif" style="border-width:0px;background-image:url('./img/process/73mloujkgzw.svg');" />
                <img data-bg-image="img/process/0p_uzoez0yu.png" src="img/spacer-2.gif" style="border-width:0px;display:none;" />

                <div class="AttyInfo">
                    <h1> Lawyer 2</h1>
                    <h2>Attorney</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus tempore officiis tenetur, harum commodi eaque quibusdam voluptas ea maiores porro repudiandae voluptatum minima corporis, reiciendis ipsam at ab, ipsum impedit. ...
                    </p>
                    <a href="Meet-Our-Attorneys/Noah-Wexler.html">Learn More [+]</a>
                </div>
            </li>
            <li class="Info3">
                <a class="nav left" href="javascript:void('Left');">
                    <img src="img/left2.png" style="width:21px;height:44px"></a>
                <a class="nav right" href="javascript:void('Right');">
                    <img src="img/right2.png" style="width:21px;height:44px"></a>
                <img src="./img/spacer-2.gif" style="border-width:0px;background-image:url('./img/process/nxd63i37rjs.svg');"
                <img data-bg-image="./img/process/tbwy8d5odzn.png" src="./img//spacer-2.gif" style="border-width:0px;display:none;" />

                <div class="AttyInfo">
                    <h1> Lawyer 3</h1>
                    <h2>Attorney</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quod pariatur fugiat blanditiis, earum nisi neque quidem voluptas accusantium libero voluptatem vero praesentium unde ad ducimus illo hic quas modi....
                    </p>
                    <a href="Meet-Our-Attorneys/Cory-Itkin.html">Learn More [+]</a>
                </div>
            </li>
            <li class="Info4">
                <a class="nav left" href="javascript:void('Left');">
                    <img src="img/left2.png" style="width:21px;height:44px"></a>
                <a class="nav right" href="javascript:void('Right');">
                    <img src="img/right2.png" style="width:21px;height:44px"></a>
                <img src="img/spacer-2.gif" style="border-width:0px;background-image:url('./img/process/6g5q27g6jjm.svg');" />
                <img data-bg-image="./img/process/16csjzk079q.png" src="img/spacer-2.gif" style="border-width:0px;display:none;" />

                <div class="AttyInfo">
                    <h1> Lawyer 4</h1>
                    <h2>Attorney</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, quo, minima! Veritatis voluptate, tempore, reiciendis maiores quibusdam numquam tempora harum minima dolor nobis libero commodi odit facilis, recusandae voluptates. Dicta! ...
                    </p>
                    <a href="Meet-Our-Attorneys/Caj-Boatright.html">Learn More [+]</a>
                </div>
            </li>
            <li class="Info5">
                <a class="nav left" href="javascript:void('Left');">
                    <img src="img/left2.png" style="width:21px;height:44px"></a>
                <a class="nav right" href="javascript:void('Right');">
                    <img src="img/right2.png" style="width:21px;height:44px"></a>
                <img src="img/spacer-2.gif" style="border-width:0px;background-image:url('./img/process/ac6c5v0np2s.svg');" />
                <img data-bg-image="./img/process/jrg5w8tvjsx.png" src="img/spacer-2.gif" style="border-width:0px;display:none;" />

                <div class="AttyInfo">
                    <h1> Lawyer 5</h1>
                    <h2>Attorney</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum aliquid illo ipsam laudantium modi hic incidunt sequi inventore. Voluptatum deserunt dolores libero, est molestiae iusto pariatur aperiam voluptates sapiente eius....
                    </p>
                    <a href="Meet-Our-Attorneys/Santana-McMurrey.html">Learn More [+]</a>
                </div>
            </li>


            <li class="Info6">
                <a class="nav left" href="javascript:void('Left');">
                    <img src="img/left2.png" style="width:21px;height:44px"></a>
                <a class="nav right" href="javascript:void('Right');">
                    <img src="img/right2.png" style="width:21px;height:44px"></a>
                <img src="img/spacer-2.gif" style="border-width:0px;background-image:url('./img/process/byxj03k58z0.svg');" />
                <img data-bg-image="./img/process/6n5lfxlmhyp.png" src="img/spacer-2.gif" style="border-width:0px;display:none;" />

                <div class="AttyInfo">
                    <h1> Lawyer 6</h1>
                    <h2>Attorney</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione ipsum sunt dolorem aliquid id quo quis, architecto praesentium maxime, ipsa aliquam voluptatibus, natus nostrum magni corporis possimus earum fuga dignissimos. ...
                    </p>
                    <a href="">Learn More [+]</a>
                </div>
            </li>


        </ul>
    </div>
</div>
<div class="icobalt ilayout cf LBlue" id="PAZone"><div icobalt="CobaltControls.Controls.DisplayList" id="HomePracticeAreas" class="PracticeList main" name="HomePracticeAreas">
        <h1>Our Practice Areas</h1>
        <h2>Featured Personal Injury Services We Offer</h2>
        <ul class="cf">
            <li class="active left">
                <a href=""">Personal Injury</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/personal_injury.jpg)">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/crutches-icon.png">
                    </div>
                    <h2>Personal Injury</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquid, aut blanditiis illum ipsa iste magni minus neque odio officiis optio quae repellendus ut vitae voluptas? Error laudantium, unde. Facilis.</p>
                    <a href="">Learn More</a>
                </div>
            </li><li class="right">
                <a href="">Family Law</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/maritime_offshore.jpg)">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/maritime-icon.png">
                    </div>
                    <h2>Family Law</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquid, aut blanditiis illum ipsa iste magni minus neque odio officiis optio quae repellendus ut vitae voluptas? Error laudantium, unde. Facilis.</p>
                    <a href="">Learn More</a>
                </div>
            </li><li class=" left">
                <a href="Practice-Areas/Trucking-Accidents.html">Crime Compensation</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/trucking.jpg)">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/truck-icon.png">
                    </div>
                    <h2>Crime Compensation</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquid, aut blanditiis illum ipsa iste magni minus neque odio officiis optio quae repellendus ut vitae voluptas? Error laudantium, unde. Facilis.</p>
                    <a href="">Learn More</a>
                </div>
            </li><li class="right">
                <a href="Practice-Areas/Oil-Rig-Explosions.html">Work Injury</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/oil_rig.jpg)">
                    <div class="Icon">
                        <img src="images/Practice-Areas/oil-rig-icon.png">
                    </div>
                    <h2>Work Injury</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquid, aut blanditiis illum ipsa iste magni minus neque odio officiis optio quae repellendus ut vitae voluptas? Error laudantium, unde. Facilis.</p>
                    <a href="">Learn More</a>
                </div>
            </li><li class=" left">
                <a href="Practice-Areas/Industrial-Injury.html">Superanuation Cover</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/industrial.jpg)">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/industrial-icon.png">
                    </div>
                    <h2>Superanuation Cover</h2>
                    <p>Due to the nature of their work, individuals employed on industrial work-sites face extreme dangers every day. This could come in the form of fires and explosions, electrocutions, chemical exposure, or even accidents involving heavy machinery. In the wake of such incidents, it is crucial that the victims turn to our firm for help.</p>
                    <a href="">Learn More</a>
                </div>
            </li><li class="right">
                <a href="Practice-Areas/Plant-Refinery-Accidents.html">Sexual & Instutional Abuse</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/plant_refinery.jpg)">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/plant-icon.png">
                    </div>
                    <h2>Sexual & Instutional Abuse</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquid, aut blanditiis illum ipsa iste magni minus neque odio officiis optio quae repellendus ut vitae voluptas? Error laudantium, unde. Facilis.</p>
                    <a href=""">Learn More</a>
                </div>
            </li><li class=" left">
                <a href="">Injury in public</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/pharmaceutical.jpg)">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/pills-icon.png">
                    </div>
                    <h2>Injury in public</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquid, aut blanditiis illum ipsa iste magni minus neque odio officiis optio quae repellendus ut vitae voluptas? Error laudantium, unde. Facilis.</p>
                    <a href="">Learn More</a>
                </div>
            </li><li class="right">
                <a href="">Crime and compensation</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/product_liability.jpg)">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/product-icon.png">
                    </div>
                    <h2>Crime and compensation</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquid, aut blanditiis illum ipsa iste magni minus neque odio officiis optio quae repellendus ut vitae voluptas? Error laudantium, unde. Facilis.</p>
                    <a href="">Learn More</a>
                </div>
            </li><li class=" left">
                <a href="">Road Injury</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/railroad.jpg)">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/railroad-icon.png">
                    </div>
                    <h2>Road Injury</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquid, aut blanditiis illum ipsa iste magni minus neque odio officiis optio quae repellendus ut vitae voluptas? Error laudantium, unde. Facilis.</p>
                    <a href="">Learn More</a>
                </div>
            </li><li class="right">
                <a href="">Employment Law</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/catastrophic.jpg)">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/catastrophic-icon.png">
                    </div>
                    <h2>Employment Law</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquid, aut blanditiis illum ipsa iste magni minus neque odio officiis optio quae repellendus ut vitae voluptas? Error laudantium, unde. Facilis.</p>
                    <a href="">Learn More</a>
                </div>
            </li><li class=" left">
                <a href="">Motor Vehicle Accidents</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/motor_vehicle.jpg)">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/motor-vehicle-icon.png">
                    </div>
                    <h2>Motor Vehicle Accidents</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquid, aut blanditiis illum ipsa iste magni minus neque odio officiis optio quae repellendus ut vitae voluptas? Error laudantium, unde. Facilis.</p>
                    <a href="">Learn More</a>
                </div>
            </li><li class="right">
                <a href="">TAC Claims</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/aviation.jpg)">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/aviation-icon.png">
                    </div>
                    <h2>TAC Claims</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquid, aut blanditiis illum ipsa iste magni minus neque odio officiis optio quae repellendus ut vitae voluptas? Error laudantium, unde. Facilis.</p>
                    <a href="">Learn More</a>
                </div>
            </li><li class=" left">
                <a href="">Commercial Litigation</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/commercial.jpg)">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/commercial-icon.png">
                    </div>
                    <h2>Commercial Litigation</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquid, aut blanditiis illum ipsa iste magni minus neque odio officiis optio quae repellendus ut vitae voluptas? Error laudantium, unde. Facilis.</p>
                    <a href="">Learn More</a>
                </div>
            </li><li class="right">
                <a href="">Insurance Claims</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/insurance_claims.jpg)">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/insurance-claims-icon.png">
                    </div>
                    <h2>Insurance Claims</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquid, aut blanditiis illum ipsa iste magni minus neque odio officiis optio quae repellendus ut vitae voluptas? Error laudantium, unde. Facilis.</p>
                    <a href="">Learn More</a>
                </div>
            </li><li class=" left">
                <a href="">Property Contamination</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/property_contamination.jpg)">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/property-contamination-icon.png">
                    </div>
                    <h2>Property Contamination</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquid, aut blanditiis illum ipsa iste magni minus neque odio officiis optio quae repellendus ut vitae voluptas? Error laudantium, unde. Facilis.</p>
                    <a href="">Learn More</a>
                </div>
            </li><li class="right">
                <a href="">Frequently Asked Questions</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/faq.jpg)">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/faq-icon.png">
                    </div>
                    <h2>Frequently Asked Questions</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquid, aut blanditiis illum ipsa iste magni minus neque odio officiis optio quae repellendus ut vitae voluptas? Error laudantium, unde. Facilis.</p>
                    <a href="">Learn More</a>
                </div>
            </li>
        </ul>
    </div></div>


<div class="icobalt ilayout cf BGScroll" id="TestZone">
    <div icobalt="CobaltControls.Controls.StaticContent" id="TestIEBG" class="IEBG">
        <img src="images/Testimonial_BG.jpg">
    </div>
    <div icobalt="CobaltControls.Controls.StaticContent" class="main" id="HomeTestimonial">
        <h2>What Our Clients Are Saying About Us</h2>
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi beatae corporis" <span>- Client From Melbourne</span></p>
    </div>
</div>


<!---->
<!--    <div class="icobalt ilayout cf paper" id="ContactZone"><div icobalt="CobaltControls.Controls.StaticContent" class="main" id="ContactSection">-->
<!--        <div id="ContactHome" icobalt="CobaltControls.Controls.DataForm" name="ContactHome">-->
<!--    </div>-->
<!--    </div>-->

</main>
</form>

<script type="text/javascript">
    $(document).ready(function() {

        // Grab the elements
        var form = $('div.CContainer');

        // Find and execute the appropriate function
        this._handleMouse = function(e) {
            if ( e.type === 'click' ) {
                var action,
                    target = $(e.target);

                if ( target.is('.close') ) {
                    // Clicked directly on the close button.
                    action = 'close';
                } else if ( target.is( '.ContactBtn' ) ) {
                    // Clicked on the "sideways" form button.
                    if ( form.is('.Out') ) {
                        action = 'close';
                    } else {
                        action = 'open';
                    }
                } else if ( !this._over && this._selected ) {
                    // Clicked elsewhere on the body and the form was in a selected state.
                    action = 'close';
                } else if ( this._over ) {
                    // Clicked on the form itself.
                    action = 'open';
                }

                if ( action === 'close' ) {
                    this._selected = false;
                    form.removeClass('Out');
                } else if ( action === 'open' ) {
                    this._selected = true;
                    form.addClass('Out');
                }
            } else if ( e.type === 'mouseenter' ) {
                this._over = true;
                form.addClass('Out');
            } else if ( e.type === 'mouseleave' ) {
                this._over = false;
                if ( !this._selected ) {
                    form.removeClass('Out');
                }
            }
        };

        // Set up the events to trigger
        this.element = form.on( 'mouseenter mouseleave', $.proxy( this._handleMouse, this ) );
        $('body').on( 'click', $.proxy( this._handleMouse, this ) );


    });

</script>


<script type="text/javascript">
    $(window).load(function() {
        if ($(window).width() > 713) {
            $('#SideStickyZone').animate({right: 0, opacity: 1});
        }
    });</script><script type="text/javascript">
    $('#SiteSearch').bind('click',function(e){
        var target = e && e.target && $(e.target);
        if ( target.is('input:text') ) {
            return;
        } else {
            $(this).find('input:text:first').focus();
        }
    });
</script><script type="text/javascript">
    $(".top-nav li").click(function(e){
        var target = $(e.target),
            link = target.closest('a');
        if ( link.length ) {
            return;
        } else {
            $(this).find('a')[0].click();
        }
    });

</script>

</script><script type="text/javascript">
    function AttorneyCarousel(){
        // Handle a carousel click.
        this._handleClick = function(e){
            // Check if we've clicked on a link.
            var data = $.getLinkAction(e);
            switch ( data.action ) {
                case 'Left':
                    this.prev();
                    return false;
                case 'Right':
                    this.next();
                    return false;
            }
            // Check if we've clicked directly on one of the LIs.
            var target = $(e.target),
                index = target.is('img') ? target.parent().data( 'index' ) : undefined;

            if ( index === undefined ) {
                return;
            } else if ( index === this.index ) {
                var a = target.closest( 'li' ).find( '.AttyInfo a' );
                if ( a.length ) {
                    a[0].click();
                }
                return;
            } else {
                this.set( index );
            }
        };

        // Advance to the next item in the carousel.
        this.next = function(){
            this.set( this.index + 1 );
        };

        // Advance to the previous item in the carousel.
        this.prev = function(){
            this.set( this.index - 1 );
        };

        // Set the active position.
        this.set = function( pos ) {
            // Validate the position.
            pos = $.toInt( pos );

            // If we're too close to the end, and we need to "wrap" the carousel.
            if ( pos >= this.lis.length-3 || pos < 3 ) {
                // How far ahead are we clicking?
                var	diff = pos - this.index;
                if ( pos < 3 ) {
                    pos += this.length - diff;
                } else {
                    pos -= this.length + diff;
                }

                // Adjust the position and remove the animation class.  This will instantly set the position.
                this.element.removeClass( 'animate' );

                var fn = function( wz, _diff ){
                    return function(){
                        // Restart the animation css and advance to the next item.
                        wz.element.addClass( 'animate' );
                        wz.set( wz.index + _diff );
                        wz = null;
                        _diff = null;
                    };
                }(this,diff);
                setTimeout(fn,1);
            }
            // If this is the same position, do nothing.
            if ( this.index === pos ) {
                return;
            }

            // Set the selected item.
            this.lis.filter('.selected').removeClass('selected');
            this.lis.eq( pos ).addClass( 'selected' ).removeStyle('width');
            this.index = pos;

            // Animate the item into position.
            this.animate();
        };

        // Initialize the dimensions.
        this.init = function(){
            if ( !this.small || !this.large ) {
                this.large = this.lis.filter('.selected').outerWidth(true);
                this.small = this.lis.filter(':not(.selected):first').outerWidth(true);
            }
        };

        // Animate the carousel into position.
        this.animate = function(){
            this.init();
            var width = this.element.width(),
                left = ( this.index * this.small ) + ( this.large / 2 ),
                margin = ( width / 2 ) - left;

            if ( !Modernizr.csstransitions && this.element.is('.animate') ) {
                this.ul.animate( { marginLeft: margin } );
            } else {
                this.ul.css( { marginLeft: margin } );
            }
        };

        // Resize the position on a 0.1 second timeout.
        this.resize = function(){
            if ( this._timeout ) {
                clearTimeout( this._timeout );
            }
            this._timeout = setTimeout( $.proxy(this._resize,this), 10 );
        };

        // Reset the position after resizing the browser window.
        this._resize = function(){
            if ( this._timeout ) {
                clearTimeout( this._timeout );
                this._timeout = null;
            }
            this.animate();
        };

        // Get the carousel element.
        this.element = $('#AttyCarousel');
        // And the UL (which will be moved back and forth).
        this.ul = this.element.find('ul:first');
        // Count the number of lis to start with.
        this.length = this.ul.children().length;
        // Duplicate the LIs.
        var html = $.trim( this.ul.html() );
        this.ul.html( html+html );
        // Get the set of LIs.
        this.lis = this.ul.children().each(function(i){
            $(this).data('index',i);
        });

        // Activate the "first" item of the cloned lis.
        var active = this.lis.filter('.Info1').eq(1);
        var pos = this.lis.index(active);
        this.set(pos);

        // Activate the animations.
        var el = this.element;
        setTimeout( function(){
            el.addClass( 'animate' );
            el = null;
        }, 1);

        // When clicking on the carousel, activate the selected items.
        this.element.on('click',$.proxy(this._handleClick,this));

        // Adjust the center when the window resizes.
        $(window).on('resize',$.proxy(this.resize,this));
    }
    new AttorneyCarousel();</script><script type="text/javascript">
    $(document).ready(function() {
        function Services() {
            //check to see if hover was on the same link and then show the new one
            this._mouseOver = function(e){

                if ( $(e.target).closest('li').hasClass('active') ) {
                    return;
                }  else {
                    this.elements.listItem.removeClass('active');
                    $(e.target).closest('li').addClass('active');
                }
            };

// grab elements
            this.elements = {
                listItem: $('.PracticeList').find('li'),
                link: $('.PracticeList').find('li > a').on( 'mouseenter', $.proxy(this._mouseOver, this))
            };
        }

        new Services();
    });</script><script type="text/javascript">
    $( function () {
        if ( !Modernizr.boxsizing ) {
            $( 'form *' ).each( function() {
                if ( this.currentStyle && this.currentStyle.width && this.currentStyle.width != 'auto' ) {
                    var el = $( this ),
                        full = el.outerWidth(),
                        actual = el.width(),
                        delta = full - actual;
                    if ( delta ) {
                        el.css( { width: actual - delta } );
                    }
                }
            } );
        }
    } );
</script>


</div>







<!--<div class="" style="margin: 10px 5px 95px 5px;">-->
<!--    <div class="btn-group btn-group-justified">-->
<!--        <div class="col-md-3">-->
<!--            <div class="btn-group">-->
<!--                <button type="button" class="personal_injury">Personal Injury</button><br>-->
<!--                <button type="button" class="criminal_law">Criminal law</button><br>-->
<!--                <button type="button" class="corporate_law">Corporate Law law</button><br>-->
<!--                <button type="button" class="employment_law">Employement law</button><br>-->
<!--                <button type="button" class="international_law">International and Chinese Law law</button><br>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-6">-->
<!--                <p class="text_before">-->
<!--                    At TP we’re nuts about technology and we use it to ensure that we offer competitive legal services through a team of high quality mobile lawyers that work around clients’ needs, lifestyles and locations.-->
<!--                </p>-->
<!--                <p class=" personal_p">-->
<!--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ipsam id eligendi ipsa necessitatibus. Pariatur maiores, asperiores nobis excepturi maxime velit, magni consequatur reprehenderit similique nesciunt quaerat natus voluptate fugit?-->
<!--                </p>-->
<!--                <p class="family_law_p">-->
<!--                    OUR APPROACH-->
<!--                    TP’ Family Law clients trust us with their future because they know we will always provide a cool, clear head when issues are running red hot-->
<!---->
<!---->
<!--                    Our family law lawyers are smart, tough, highly ethical and empathetic.-->
<!--                    Together they have century and a half of experience in this highly-complex legal area that traverses many fields like estate planning, property, commercial, tax and company law.-->
<!--                    Each lawyer is a senior practitioner so clients have the benefit of them conferring with, and backing up, each other at no additional cost.-->
<!---->
<!--                <p class="criminal_law_p">-->
<!--                    this is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate lawthis is corporate law-->
<!--                </p>-->
<!--            </div>-->
<!--        <div class="col-md-1"></div>-->
<!--        <div class="col-md-3" style="padding-left: 45px;">-->
<!--            <button type="button" class="family_law">Family Law</button><br>-->
<!--            <button type="button" class="family_law">Property law</button><br>-->
<!--            <button type="button" class="family_law">Will&Estates</button><br>-->
<!--            <button type="button" class="family_law">Personal law</button><br>-->
<!--            <button type="button" class="family_law">Family law</button><br>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

@stop
