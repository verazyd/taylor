@extends('layouts.master')

@section('title')
   Practice Areas | Taylor & Preston Practice Areas in Melbourne
@stop

@section('keywords')
    "Practice Areas, legal practice areas, Personal Injury,WorkCover , Employment, Road Injuries ,Same-Sex Relationship,Superannuation Cover
    TAC Claims , Public Liability e,   Motor Vehicle Accidents,Medical Negligence,Property Contamination,Insurance Claims,LGBTIQ,lawyers with extensive experience,
    Superannuation Law, Superannuation Lawyer, australian superannuation law, Lawyers, law, law firm, law firms, australian law, australian law firm, legal advice,
    Funds Management Law, Fund, crime, finalcial compensation, criminal law, intervention orders, litigation, commercial litigation, injury at work"
@stop

@section('description')
    "Practice areas at Taylor & Preston cover many areas like  WorkCover,  Employment, Road Injuries, TAC Claims, Public Liability, Motor Vehicle Accidents,
    Medical Negligence,Crime Compensation,Hague Convention,Divorce,Commercial Litigation,Sexual & Institutional Abuse. If you are in legal
    dilema, give us a chance to help you out. Our areas of practice are to help satisfy our clients. "
@stop


@section('content')
<div class="practice_areas_section">
    <div class="row">
        <div class="col-md-12">
            <h1>Practise Areas</h1>
        </div>
        <div class="col-md-12">
            <h2>Family Law</h2>
            <p>
                We at Taylor & Preston understand how important the outcome of any <strong>family law</strong> matter is to you and your future, as well as the urgency of your case when children are involved. Our professional <strong>Family lawyers</strong>
                have impressive credentials and a full understanding of the laws involved in all areas of family law. When we represent you, you can be confident that your interests will be protected, and that you are represented by a quality family lawyer that will do all possible to pursue a favorable outcome for you. We urge you to contact our firm to discuss your <strong>family legal matter</strong>.
                We take all the time necessary to answer your questions about what to expect and how we will proceed to pursue your objectives. To learn more
                <a href="{{ URL::route('familyLaw') }}">Learn More [+]</a>
            </p>
        
            <p><strong>Family Lawyers at Taylor & Preston in Melbourne</strong>, do <strong>Divorce</strong>, <strong>Same-Sex Relationship </strong>,
                <strong>Property Settlements</strong>, <strong>Child Support </strong>,
                <strong>Family Violence and Intervention Orders</strong>, <strong>Domestic Partner Relationships</strong>.
            </p>
        </div>
        <div class="col-md-12">
            <h2>Personal Injury</h2>
            <p>
                The team of <strong>personal injury lawyers</strong>  at Taylor & Preston are dedicated to protecting the rights and interests of ordinary Victorians. Let the recognized
                experience and expertise of Taylor&Preston’s injury compensation lawyers provide you with peace of mind that your case will be handled with the care,
                efficiency and effectiveness you deserve.
                 The team of <strong>personal injury lawyers based at Melbourne</strong> proudly deliver better results and lower fees for clients.
                To learn more
                <a href="{{ URL::route('personalInjury') }}">Learn More [+]</a>
            </p>
            <p>
                <strong>Personal Injury Lawyers at Taylor & Preston in Melbourne</strong>, do <strong>WorkCover</strong>, <strong>Employment</strong>,
                <strong>Road Injuries</strong>, <strong>TAC Claims</strong>,
                <strong>Public Liability</strong>, <strong>Motor Vehicle Accidents</strong>
            </p>
        </div>
        <div class="col-md-12">
            <h2>Same-Sex Relationship</h2>
            <p>
                <strong>Same sex relationships</strong> have protection under<strong>Australian law</strong>. Although same sex marriages are not recognised by the federal government,
                there are legal protections available in family law matters. Some common legal issues surrounding same sex relationships include: -
            </p>
            <ul>
                <li>
                    <strong>Filing for partnership</strong>
                </li>
                <li>
                    <strong>Adopting a child</strong>
                </li>
                <li>
                    <strong>Making child support payments</strong>
                </li>
                <li>
                    <strong>Obtaining mutual property</strong>
                </li>
                <li>
                    <strong>Filing for separations</strong>
                </li>
            </ul>
        </div>
        <div class="col-md-12">
            <h2>Superannuation Cover</h2>
            <p>
                Our <strong>superannuation</strong> &  <strong>funds management</strong> team is among the most <strong>experienced lawyers</strong> in Australia.
            </p>
            <h3>Legal Expertise:</h3>
            <ul>
                <li>compliance and regulatory issues</li>
                <li>surpluses and deficiencies</li>
                <li>choice of fund</li>
                <li>superannuation issues in acquisitions and disposals</li>
            </ul>
        </div>
        <div class="col-md-12">
            <h2>Crime Compensation</h2>
            <p>
                In Victoria, victims of <strong>crime</strong> may be entitled to <strong>financial compensation</strong> for any pain, suffering or financial distress suffered
                as a result of criminal acts.Taylor & Preston lawyers have significant expertise in all victims of <strong>crime compensation</strong> matters.
            </p>
        </div>
        <div class="col-md-12">
            <h2>Hague Convention</h2>
            <p>
                Has your child been abducted? If so you must contact our legal team immediately to enact a search within the parameters of the <strong>Hague
                Convention</strong>. The Hague Convention is a treaty amongst the nations of the world to return <strong>abducted children</strong> to their country.
                You must apply within the Hague Convention for a search to be done. <strong>Abductors</strong> can be <strong>parents</strong>, <strong>family</strong>, <strong>friends</strong> or
                                <strong>complete strangers</strong>.
                You need to contact a reputable lawyer immediately so the correct paperwork can be drafted and filed with haste. A Melbourne
                family lawyer can provide you with sound legal advice and quick action if you need to notify the Hague Convention of a possible abduction.

                We understand that this is a very stressful time. Losing your child is one of the most painful and frightening experiences anyone can
                endure, but we are here to help you. Our compassionate legal team will work diligently to see your request filed quickly and effectively.
                We are certified with the Law Institute of Victoria to represent clients in all matters involving family law. Depending on your child`s
                whereabouts and other important details you may need to file with a specific court. Our law firm is aware of guidelines and requirements for
                each court system and we will be able to effectively determine which criteria you fill.
            </p>
            <h3>
                Finding Your Child
            </h3>
            <p>
                Time is of the essence in Hague cases. We understand that you want to retrieve your child as quickly as possible, and we do too.
                We will work tirelessly to ensure that all the paperwork is properly drafted and filed. The dedication of our firm is unwavering
                and we will be by your side fully focused on the safe return of your child or children. We are committed to providing you with a
                helping hand and compassionate legal counsel in these critical legal matters.
            </p>
            <p>
                <a href="{{ URL::route('contactus') }}">Contact a Melbourne family lawyer</a> by calling 1800 898 846 if you have recently lost your child and need to receive sound legal advice on
                the rules and applications of the Hague Convention.
            </p>
        </div>
        <div class="col-md-12">
            <h2>Divorce</h2>
            <p>
                In legal terms, divorce is described as the termination of a marriage other than by a death of one of the parties. In the case of
                family law and the dissolution of a marriage in Australia, there are specific requirements which must be in place before a divorce
                will be considered, much less granted. These requirements are laid out as per the Family Law Act of 1975 (FLA).

                If you or a loved one is considering filing for divorce, you need to consult with a <a href="{{ URL::route('contactus') }}">Melbourne family lawyer</a> at our firm at once.
                We understand that divorce can be a very emotional subject and we are here to help. Our dedicated lawyers will review your case
                and work with you to ensure extra care and consideration is taken during each step of your divorce proceedings. We strive to make
                the entire process at painless as possible in order for you to be able to rapidly move on with your life.
            </p>
        </div>
        <div class="col-md-12">
            <h2>Commercial Litigation</h2>
            <p>
                We recognize that <strong>litigation</strong> is generally an unwelcome distraction from genuine enterprise and the day-to-day operation of your
                business or private endeavors. We aim to minimize the cost and uncertainty of long running litigation by taking prompt and decisive
                action to exert pressure early in proceedings, encouraging advantageous settlements.<a href="{{ URL::route('contactus') }}">Contact us</a>, if you are in any dilema.
            </p>
        </div>
        <div class="col-md-12">
            <h2>Property Contamination</h2>
        </div>
        <div class="col-md-12">
            <h2>Work Injury</h2>
            <p>
                If you have suffered an <strong>injury at work</strong>, you need an expert lawyer who knows the best way to represent you in a claim.
                Taylor & Preston Injury Lawyers,have years of experience in representing injured workers.
                We have lawyers in our WorkCover department who are Accredited Specialists in personal injury law.
            </p>
            <p>
                We pride ourselves on being able to provide clear and practical advice.  In most cases, you are not charged for our time
                unless and until you succeed in your claim.
            </p>
        </div>
        <div class="col-md-12">
            <h3>Sexual & Institutional Abuse</h3>
            <p>First steps – if you or someone you know was abused</p>
            <p>Redress Schemes</p>
            <p>Damages claims</p>
            <p>Knowing all these is very crucial in filing a case. We can help you the best!!</p>
        </div>
        <div class="col-md-12">
            <h2>Employment Law</h2>
            <p>
                Taylor & Preston Lawyers practice in Employment Law  and accept matters from Victoria
            </p>
            <p>
                If you would like to speak to someone in relation to an employment law matter, please call on 1800 633 625. between 7A.M.and 11P.M. Monday to Sunday.
            </p>
        </div>
        <div class="col-md-12">
            <h2>TAC Claims</h2>
            <p>If you're injured in a <strong>car accident</strong>, <strong>motorcycle crash</strong>, or as a <strong>cyclist</strong> or <strong>pedestrian</strong>, a TAC lawyer fights for your rightful compensation</p>
            <p>The TAC may not always be on your side</p>
            <p>Call us to have a confidential consultation for you rights.</p>
        </div>
        <div class="col-md-12">
            <h2>Insurance Claims</h2>
            <p>One of our sole focus is <strong>insurance law</strong> and we act for a diverse range of risk carriers, underwriting agents, brokers and corporate insureds relevant to litigious and general advisory services.</p>
            <p>Call us for confidential consultation.</p>
        </div>
    </div>
@stop