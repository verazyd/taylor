@extends('layouts.master')
@section('title')
    Family Lawyers in Melbourne | Taylor & Preston Family Lawyers in Melbourne
@stop

@section('keywords')
    "Family Lawyers Melbourne,Divorce Lawyers Melbourne, Same-Sex Relationship Melbourne, Property Settlements Melbourne, Child Support Melbourne,
    Family Violence and Intervention ORders Melbourne, Domestic Partner Relationships,family legal matter"
@stop

@section('description')
    "Applying for Divorce, Applying For Parenting Orders, Child Abduction, Child Abuse, Child Support, Children, community,
    Contravention Orders, Court Process, Custody, De Facto, De Facto Relationships, Divorce, Family Court, Family Law Act (1975) Cth,
    Federal Circuit Court, Financial Agreements,family legal matter"
@stop

@section('content')
<div class="container container_section_personal">
    <div class="row">
        <h1>Family Lawyers in Melbourne</h1>
        <p>We at Taylor & Preston understand how important the outcome of any <strong>family law</strong> matter is to you and your future, as well as the urgency of your case when children are involved. Our professional <strong>Family lawyers</strong>
            have impressive credentials and a full understanding of the laws involved in all areas of family law. When we represent you, you can be confident that your interests will be protected, and that you are represented by a quality family lawyer that will do all possible to pursue a favorable outcome for you. We urge you to contact our firm to discuss your <strong>family legal matter</strong>.
            We take all the time necessary to answer your questions about what to expect and how we will proceed to pursue your objectives.</p>

        <p><strong>Family Lawyers at Taylor & Preston in Melbourne</strong>, do <strong>Divorce</strong>, <strong>Same-Sex Relationship </strong>,
                <strong>Property Settlements</strong>, <strong>Child Support </strong>,
            <strong>Family Violence and Intervention Orders</strong>, <strong>Domestic Partner Relationships</strong>.
        </p>

            <div class="personal_sidebar">
                @foreach($family_laws as $family)
                <div class="col-md-12">
                   <h3>{{ $family->name }}</h3>
                   </div>
                <div class="col-md-12">
                    <p>{{ $family->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
</div>
@stop