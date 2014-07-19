@extends('layouts.master')

@section('title')
    Legal Services in Taylor&Preston
@stop
@section('content')

<div class="container legal_services">
    <h2>Legal Services</h2>
   <div class="row">
       <div class="col-md-12">
           <h3>Family Law</h3>
           <p>We at Taylor & Preston understand how important the outcome of any family law matter is to you and your future, as well as the urgency of your case when children are involved. Our professional lawyers have impressive credentials and a full understanding of the laws involved in all areas of family law. When we represent you, you can be confident that your interests will be protected, and that you are represented by a quality family lawyer that will do all possible to pursue a favorable outcome for you. We urge you to contact our firm to discuss your personal legal matter. We take all the time necessary to answer your questions about what to expect and how we will proceed to pursue your objectives.</p>
           <p><strong>That leaves just one question: Are you ready to get more?</strong></p>
           <a class="btn btn-large btn-info" href="{{ URL::to('familyLaw') }}">Learn More [+]</a>
       </div>
       </div>
    <br/><br/>
    <div class="row">
       <div class="col-md-12">
           <h3>Personal Injury</h3>
           <p>We at Taylor & Preston understand how important the outcome of any family law matter is to you and your future, as well as the urgency of your case when children are involved. Our professional lawyers have impressive credentials and a full understanding of the laws involved in all areas of family law. When we represent you, you can be confident that your interests will be protected, and that you are represented by a quality family lawyer that will do all possible to pursue a favorable outcome for you. We urge you to contact our firm to discuss your personal legal matter. We take all the time necessary to answer your questions about what to expect and how we will proceed to pursue your objectives.</p>
           <p><strong>That leaves just one question: Are you ready to get more?</strong></p>
           <a class="btn btn-large btn-info" href="#">Learn More [+]</a>
       </div>
    </div>
    <br/><br/>
       <div class="row">
           <div class="col-md-12">
               <h3>Criminal Law</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet at commodi cum dicta, earum ipsam labore libero repudiandae vel! Ad aperiam consequatur impedit laudantium molestiae nihil, quae quis ullam.</p>
           </div>
       </div>
    <br/><br/>
    <div class="row">
       <div class="col-md-12">
           <h3>Commercial Law</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consectetur cumque distinctio doloribus, eaque est, ipsam ipsum laborum, molestias mollitia nostrum optio provident quod recusandae rerum sequi sunt totam veritatis?</p>
       </div>
    </div>
    <br/><br/>
     <div class="row">
       <div class="col-md-12">
           <h3>Employment Law</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dolore exercitationem id, itaque laborum maxime mollitia possimus quas qui rem unde ut. Architecto facere fuga iste libero officia quibusdam velit?</p>
       </div>
     </div>
    <br/><br/>
     <div class="row">
       <div class="col-md-12">
           <h3>International and Chinese Law</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium deleniti, dignissimos eos eveniet expedita explicabo, ipsam laboriosam nihil reprehenderit repudiandae rerum tempora ullam voluptates? Ab aperiam dolore incidunt neque reprehenderit?</p>
       </div>
     </div>
    <br/><br/>
       <div class="row">
           <div class="col-md-12">
               <h3>Wills & Estates</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi autem deserunt est et exercitationem harum inventore magnam maiores, minus optio, perferendis provident quo similique unde veniam! Et odio quos repellat!</p>
           </div>
       </div>
    <br/><br/>
   </div>
</div>
@stop