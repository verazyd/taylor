@extends('layouts.master')

@section('title')
    Family Lawyers - Personal Injury Lawyers in Melbourne | Taylor & Preston Lawyers in Melbourne
@stop

@section('keywords')
    "Family Lawyers,Divorce Lawyers, Same-Sex Relationship, Property Settlements, Child Support,
    Family Violence and Intervention Orders, Domestic Partner Relationships, personal injury, melburne personal injury,
    melbourne, tac melbourne, melbourne tac, melbourne workcover, workcover melbourne, road injuries melbourne, law firm in melbourne,
    melbourne injury law firm"
@stop

@section('description')
    "Taylor & Preston Lawyers Melbourne can be contacted to 11PM 7 days a week on 1800 633 625. They are a successful peronal injuries,
    family law,  and divorce law firm in Melbourne which offers best family lawyers and personal lawyers in Melbourne and provides the highest quality,
    personal legal services in all areas of family law and personal law matters, including tac and workcover. We understand that the outcome of your or
    your loved ones personal legal matters is of the utmost importance, and it is vital that you have on your side Melbourne lawyers that
    will provide you with committed and exceptional service in family law, personal injury, tac, workcover, road injuries."
@stop

@section('content')
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
                <div class="carousel-caption carousel_text">
                    <h1>{{ $image->title }}</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, aliquid architecto corporis dolorem,m temporibusloremque, fugit mollitia tenetur.</p>
                    <a class="btn btn-large btn-primary" href="{{ URL::route('legal_services') }}">Learn More [+]</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<div class="row why_taylor_first">
    <h2>Why Choose Taylor & Preston ?</h2>
    <h3>Choosing the right law firm makes all the difference. Don’t settle for second best </h3>
    <hr/>
    <div class="col-md-12 why_taylor">
        <p>
            Taylor & Preston Lawyers have years of experience handling family law matters. Our lawyers include David Denby, who has been practicing law for
            over 40 years and is an ex-president of the Law Institute of Victoria. Jeffrey Stone is another senior lawyer at the firm who has also been practising family law for over 40 years.
            We have earned this trust by practicing law with the highest ethical standards in the legal profession. The excellence of our family lawyers,
            and our commitment to our clients has earned the firm its elite standing in the legal community.
        </p>
    </div>
</div>

    @include('layouts.partials._contact_form')

    @include('layouts.partials._feedback')

<div class="LBlue" id="PAZone">
    <div id="HomePracticeAreas" class="PracticeList main" name="HomePracticeAreas">
        <h2 style="color: #3685BE !important; font-size: 45px; font-family: 'Neuton', serif;"><a href="practice_areas">Our Practice Areas</a></h2>
        <ul class="cf">
            <li class="active left">
                <a href="{{ URL::route('personalInjury') }}">Personal Injury</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/personal_injury.jpg);height: 365px;top: 28px;">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/crutches-icon.png">
                    </div>
                    <h4>Personal Injury</h4>
                    <p>Taylor & Preston Lawyers practice in Personal Injury Law and accept matters from Victoria and New South Wales</p>
                    <p>If you would like to speak to someone in relation to a personal injury matter, please call on 1800 633 625. between 7A.M.and 11P.M. Monday to Sunday.</p>
                    <a href="{{ URL::route('personalInjury') }}">Learn More</a>
                </div>
            </li>
            <li class="right">
                <a href="{{ URL::route('familyLaw') }}">Family Law</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/maritime_offshore.jpg);height: 365px;top: 28px;">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/maritime-icon.png">
                    </div>
                    <h4>Family Law</h4>
                    <p>Our family law lawyers are smart, tough, highly ethical and empathetic.</p>
                    <p>Together they have century and a half of experience in this highly-complex legal area that traverses many fields like estate planning, property, commercial, tax and company law.</p>
                    <a href="{{ URL::route('familyLaw') }}">Learn More</a>
                </div>
            </li><li class=" left">
                <a href="{{ URL::route('practice_areas') }}">Crime Compensation</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/trucking.jpg);height: 365px;top: 28px;">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/truck-icon.png">
                    </div>
                    <h4>Crime Compensation</h4>
                    <p>At Taylor & Preston we understand that going to court can be a daunting experience. We are committed to defending your rights with compassion and understanding.</p>
                    <p>We guarantee that the lawyer you first meet will manage your case until its completion.</p>
                    <a href="{{ URL::route('practice_areas') }}">Learn More</a>
                </div>
            </li><li class="right">
                <a href="{{ URL::route('practice_areas') }}">Work Injury</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/oil_rig.jpg);height: 365px;top: 28px;">
                    <div class="Icon">
                        <img src="images/Practice-Areas/oil-rig-icon.png">
                    </div>
                    <h4>Work Injury</h4>
                    <p>Taylor & Preston Lawyers practice in  Law  and accept matters from Victoria</p>
                    <p>If you would like to speak to someone in relation to an employment law matter, please call on 1800 633 625. between 7A.M.and 11P.M. Monday to Sunday.</p>
                    <a href="{{ URL::route('practice_areas') }}">Learn More</a>
                </div>
            </li><li class=" left">
                <a href="{{ URL::route('practice_areas') }}">Superanuation Cover</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/industrial.jpg);height: 365px;top: 28px;">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/industrial-icon.png">
                    </div>
                    <h4>Superanuation Cover</h4>
                    <p>Due to the nature of their, individuals employed on industrial work-sites face extreme dangers every day. This could come in the form of fires and explosions, electrocutions, chemical exposure, or even accidents involving heavy machinery. In the wake of such incidents, it is crucial that the victims turn to our firm for help.</p>
                    <a href="{{ URL::route('practice_areas') }}">Learn More</a>
                </div>
            </li><li class="right">
                <a href="{{ URL::route('practice_areas') }}">Sexual & Instutional Abuse</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/plant_refinery.jpg);height: 365px;top: 28px;">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/plant-icon.png">
                    </div>
                    <h4>Sexual & Institutional Abuse</h4>
                    <p>First steps – if you or someone you know was abused</p>
                    <p>Redress Schemes</p>
                    <p>Damages claims</p>
                    <p>Knowing all these is very crucial in filing a case. We can help you the best!!</p>
                    <a href="{{ URL::route('practice_areas') }}">Learn More</a>
                </div>
            </li>
            <li class=" left">
                <a href="{{ URL::route('practice_areas') }}">Same Sex Relationship</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/pharmaceutical.jpg);height: 365px;top: 28px;">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/pills-icon.png">
                    </div>
                    <h4>Same Sex Relationship</h4>
                    <p>Australia may not extend marriage and adoption rights to same-sex couples, however, under the numerous State and Federal laws,  a couple who is in a same-sex relationship for all intents and purposes have the same rights as those who are in a legally recognised marriage.</p>
                    <a href="{{ URL::route('practice_areas') }}">Learn More</a>
                </div>
            </li>
            <li class="right">
                <a href="{{ URL::route('practice_areas') }}">Crime and compensation</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/product_liability.jpg);height: 365px;top: 28px;">
                    <div class="Icon">
<!--                        <img src="./img/Practice-Areas/product-icon.png">-->
                    </div>
                    <h4>Crime and compensation</h4>
                    <p>Taylor&Preston Lawyers have significant expertise in all victims of crime compensation matters.</p>
                    <p>If you are uncertain as to whether you are eligible to make a Victims of Crime Assistance Tribunal application, please do not hesitate to contact our office </p>
                    <a href="{{ URL::route('practice_areas') }}">Learn More</a>
                </div>
            </li><li class=" left">
                <a href="{{ URL::route('practice_areas') }}">Hague Convention</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/railroad.jpg);height: 365px;top: 28px;">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/railroad-icon.png">
                    </div>
                    <h4>Hague Convention</h4>
                    <p>Australia is a party to the Hague Convention on The Civil Aspects of International Child Abduction (“Convention“).</p>
                    <p>If you are uncertain as to whether your matter is a part of Hague Convection, do not hesitate to contact us.</p>
                    <a href="">Learn More</a>
                </div>
            </li><li class="right">
                <a href="{{ URL::route('practice_areas') }}">Employment Law</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/catastrophic.jpg);height: 365px;top: 28px;">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/catastrophic-icon.png">
                    </div>
                    <h4>Employment Law</h4>
                    <p>Taylor & Preston Lawyers practice in Employment Law  and accept matters from Victoria</p>
                    <p>If you would like to speak to someone in relation to an employment law matter, please call on 1800 633 625. between 7A.M.and 11P.M. Monday to Sunday.</p>
                    <a href="{{ URL::route('practice_areas') }}">Learn More</a>
                </div>
            </li><li class=" left">
                <a href="{{ URL::route('practice_areas') }}">Divorce</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/motor_vehicle.jpg);height: 365px;top: 28px;">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/motor-vehicle-icon.png">
                    </div>
                    <h4>Divorce</h4>
                    <p>Obtaining a Divorce is the legal end to a marriage. Proceedings for Divorce are usually commenced after all parenting and/or financial matters have been resolved. You can apply for a property settlement at any time after separation and prior to Divorce. </p>
                    <a href="{{ URL::route('practice_areas') }}">Learn More</a>
                </div>
            </li><li class="right">
                <a href="{{ URL::route('practice_areas') }}">TAC Claims</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/aviation.jpg);height: 365px;top: 28px;">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/aviation-icon.png">
                    </div>
                    <h4>TAC Claims</h4>
                    <p>If you're injured in a car accident, motorcycle crash, or as a cyclist or pedestrian, a TAC lawyer fights for your rightful compensation</p>
                    <p>The TAC may not always be on your side</p>
                    <p>Call us to have a confidential consultation for you rights.</p>
                    <a href="{{ URL::route('practice_areas') }}">Learn More</a>
                </div>
            </li><li class=" left">
                <a href="{{ URL::route('practice_areas') }}">Commercial Litigation</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/commercial.jpg);height: 365px;top: 28px;">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/commercial-icon.png">
                    </div>
                    <h4>Commercial Litigation</h4>
                    <p>Whether you are part of a company dealing with a contract or trade practices dispute, or feuding with your joint venture partner, or part of a family business where disputes are literally closer to home (or both), the key in any potentially litigious matter is to recognise what will get you the result you want</p>
                    <a href="{{ URL::route('practice_areas') }}">Learn More</a>
                </div>
            </li><li class="right">
                <a href="{{ URL::route('practice_areas') }}">Insurance Claims</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/insurance_claims.jpg);height: 365px;top: 28px;">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/insurance-claims-icon.png">
                    </div>
                    <h4>Insurance Claims</h4>
                    <p>One of our sole focus is insurance law and we act for a diverse range of risk carriers, underwriting agents, brokers and corporate insureds relevant to litigious and general advisory services.</p>
                    <p>Call us for confidential consultation.</p>
                    <a href="{{ URL::route('practice_areas') }}">Learn More</a>
                </div>
            </li><li class=" left">
                <a href="{{ URL::route('practice_areas') }}">Property Contamination</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/property_contamination.jpg);height: 365px;top: 28px;">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/property-contamination-icon.png">
                    </div>
                    <h4>Property Contamination</h4>
                    <p>Contamination is a problem for vendors and purchasers alike. For vendors it may worry potential purchasers resulting in a lower sale price. Most estate agents don’t bother to fully investigate contamination issues.</p>
                    <p>Are you uncertain if you could further you case, call us.</p>
                    <a href="{{ URL::route('practice_areas') }}">Learn More</a>
                </div>
            </li><li class="right">
                <a href="{{ URL::route('practice_areas') }}">Frequently Asked Questions</a>
                <div class="details" style="background-image:url(./img/Practice-Areas/faq.jpg);height: 365px;top: 28px;">
                    <div class="Icon">
                        <img src="./img/Practice-Areas/faq-icon.png">
                    </div>
                    <h4>Frequently Asked Questions</h4>
                    <p>Following a serious injury-causing accident, it is not uncommon for the victims to have many questions. If you are in such a situation, our firm is here for you. For this reason, we have compiled a list of some of the most common questions that we hear. Call us for more details.</p>
                    <a href="{{ URL::route('practice_areas') }}" style="padding-bottom: 5px;">Learn More</a>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="row" style="background:rgb(27, 143, 224);border-top: 5px solid gray; border-bottom: 5px solid gray; margin-top: -5%">
    <div class="col-md-12" style="padding: 20px;">
        <div id="HomeTestimonial">
        <h2>What Our Clients Are Saying About Us</h2>
        @foreach($testimonials as $testimonial)
        <p style="width: 96%; margin: 0 auto;">"{{ $testimonial->description }}"
            <span>--
                 {{ $testimonial->name }} From {{$testimonial->location }}
            </span>
            &nbsp{{$testimonial->created_at->format('l jS F Y') }}
        </p>
        <a class="btn btn-large btn-success" href="{{ URL::to('testimonials') }}">Learn more</a>
        @endforeach
        </div>
    </div>
</div>

<div class="paper" id="AttorneyZone">
    <div id="AttyCarousel" class="main" name="AttyCarousel">
        <ul>
            <li class="Info1">
                <a class="nav left" href="javascript:void('Left');">

                    <img src="./img/left2.png" style="width:21px;height:44px"></a>

                <a class="nav right" href="javascript:void('Right');">

                    <img src="./img/right2.png" style="width:21px;height:44px"></a>

                <img src="./img/spacer-2.gif" style="border-width:0px;background-image:url('./img/process/8.png');" />

                <img data-bg-image="./img/process/uuwtdmzwk9t.png" src="./img/spacer-2.gif" style="border-width:0px;display:none;" />

                <div class="AttyInfo">
                    <h1> Jeremy Williams</h1>
                    <h2>Attorney</h2>
                    <p>
                        Jeremy Williams has Bachelor of Laws (LLB) Victoria University and is a member Law Institute of Victoria.
                    </p>
                    <a href="{{ URL::route('jeremy') }}">Learn More [+]</a>
                </div>
            </li>
            <li class="Info2">
                <a class="nav left" href="javascript:void('Left');">
                    <img src="./img/left2.png" style="width:21px;height:44px"></a>

                <a class="nav right" href="javascript:void('Right');">
                    <img src="./img/right2.png" style="width:21px;height:44px"></a>

                <img src="./img/shared/spacer-2.gif" style="border-width:0px;background-image:url('./img/process/2.png');" />
                <img data-bg-image="img/process/0p_uzoez0yu.png" src="img/spacer-2.gif" style="border-width:0px;display:none;" />

                <div class="AttyInfo">
                    <h1>Paul Boers</h1>
                    <h2>Attorney</h2>
                    <p>
                        Paul Boers is a Senior Family Lawyer.  He was originally admitted as a solicitor in 1990 and has over 20 years experience in Family Law.
                    </p>
                    <a href="{{ URL::route('paul') }}">Learn More [+]</a>
                </div>
            </li>
            <li class="Info3">
                <a class="nav left" href="javascript:void('Left');">
                    <img src="img/left2.png" style="width:21px;height:44px"></a>
                <a class="nav right" href="javascript:void('Right');">
                    <img src="img/right2.png" style="width:21px;height:44px"></a>
                <img src="./img/spacer-2.gif" style="border-width:0px;background-image:url('./img/process/3.png');"
                <img data-bg-image="./img/process/tbwy8d5odzn.png" src="./img//spacer-2.gif" style="border-width:0px;display:none;" />

                <div class="AttyInfo">
                    <h1>Madeline Smith</h1>
                    <h2>Attorney</h2>
                    <p>
                        Madeline Smith has PhD Criminal Law (candidate), Monash University and is a member of Law Institute of Victoria

                    </p>
                    <a href="{{ URL::route('madeline') }}">Learn More [+]</a>
                </div>
            </li>
            <li class="Info4">
                <a class="nav left" href="javascript:void('Left');">
                    <img src="img/left2.png" style="width:21px;height:44px"></a>
                <a class="nav right" href="javascript:void('Right');">
                    <img src="img/right2.png" style="width:21px;height:44px"></a>
                <img src="img/spacer-2.gif" style="border-width:0px;background-image:url('./img/process/4.png');" />
                <img data-bg-image="./img/process/16csjzk079q.png" src="img/spacer-2.gif" style="border-width:0px;display:none;" />

                <div class="AttyInfo">
                    <h1>Peter Ansell</h1>
                    <h2>Attorney</h2>
                    <p>
                        Peter Ansell is Barrister and Solicitor and is a member of Law Institute of Victoria
                    </p>
                    <a href="{{ URL::route('peter') }}">Learn More [+]</a>
                </div>
            </li>
            <li class="Info5">
                <a class="nav left" href="javascript:void('Left');">
                    <img src="img/left2.png" style="width:21px;height:44px"></a>
                <a class="nav right" href="javascript:void('Right');">
                    <img src="img/right2.png" style="width:21px;height:44px"></a>
                <img src="img/spacer-2.gif" style="border-width:0px;background-image:url('./img/process/5.png');" />
                <img data-bg-image="./img/process/jrg5w8tvjsx.png" src="img/spacer-2.gif" style="border-width:0px;display:none;" />

                <div class="AttyInfo">
                    <h1>Payne Wu</h1>
                    <h2>Attorney</h2>
                    <p>
                        Payne Wu has Master of Laws (Juris Doctor), Monash University,Collaborative Practice Certificate (Family Law), University of Sydney
                        Master of Laws, Shanghai Normal University,Bachelor of Law / Undergraduate Diploma of English and is a member of Law Institute of Victoria
                    </p>
                    <a href="{{ URL::route('wu') }}">Learn More [+]</a>
                </div>
            </li>s
            <li class="Info6">
                <a class="nav left" href="javascript:void('Left');">
                    <img src="img/left2.png" style="width:21px;height:44px"></a>
                <a class="nav right" href="javascript:void('Right');">
                    <img src="img/right2.png" style="width:21px;height:44px"></a>
                <img src="img/spacer-2.gif" style="border-width:0px;background-image:url('./img/process/6.png');" />
                <img data-bg-image="./img/process/6n5lfxlmhyp.png" src="img/spacer-2.gif" style="border-width:0px;display:none;" />

                <div class="AttyInfo">
                    <h1>Holly Renwick</h1>
                    <h2>Attorney</h2>
                    <p>
                        Holly Renwick has Bachelor of Law (LLB)/Bachelor of Psychology University of Auckland and is a member of Law Institute of Victoria

                    </p>
                    <a href="{{ URL::route('holly') }}">Learn More [+]</a>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="row why_taylor_first_verdict">
    <div class="col-md-6">
        <h2>Verdicts & Settlements</h2>
        <h4>Recent Successful Cases</h4>

        <div class="col-md-12 verdict_recent">
                @foreach($victories as $victory)
            <?php $href = ("URL::route('ourvictories')"); ?>
            <div class="victory_top_des">
                    <p style="text-transform: uppercase;">{{ $victory->topic }}</p>
                    <p class="verdict_desc">{{ str_limit( $victory->description, $limit=150,
                        $end = '<a href="">&nbsp;Read More [+]</a>') }}</p>
            </div>
                @endforeach
        </div>

    </div>
    <div class="col-md-6">
        <h2>Firms News & Updates</h2>
        <h4>Latest Information</h4>
        <div class="col-md-12 news_recent">
                 @foreach($blogs as $blog)
            <div class="victory_top_des">
                    <p style="text-transform: uppercase;">{{ $blog->topic }}</p>
                    <p class="verdict_desc">{{str_limit ( $blog->description, $limit=150,
                        $end = '<a href="">&nbsp;&nbsp;Read More [+]</a>') }}</p>
            </div>
                 @endforeach
        </div>
    </div>
</div>






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
@stop
