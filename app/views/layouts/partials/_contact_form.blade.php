<style>

</style>
<div class="row" style="margin: 10px 9px; background: #217C9C;">
    <div class="col-md-6">
        <div class="col-md-6">
            <p style="text-align: center;font-size: 28px;color: #ffffff"><span class="glyphicon glyphicon-envelopeHow"></span>Any Questions?</p>
            <p style="text-align: center;font-size: 20px;color: #ffffff"><span class="glyphicon glyphicon-envelopeHow"></span>No Win, No Fee Representation!</p>
        </div>
        <div class="col-md-6">
           {{ HTML::image('/img/question.jpg', $alt = 'Questions' , $attributes = array('class' => 'center-block img-responsive question_img',  'width' => '100px'))}}
        </div>
    </div>
    <div class="col-md-6">
        <form class="form" style="padding-top: 15px; margin-left: 10px;">
            <div class="com-md-6" style="float: left;">
                <div class="name">
                    <label class="sr-only" >Name*:</label>
                    <input type="text" class="input_name"  placeholder="Name">
                </div>
                <div class="email">
                    <label class="sr-only" >Email*</label>
                    <input type="email" class="input_email" placeholder="Email">
                </div>
                <div class="phone">
                    <label class="sr-only" >Phone*</label>
                    <input type="text" class="input_phone"  placeholder="Phone">
                </div>
            </div>
            <div class="col-md-6 pull-left"  style="float: right; padding-bottom: 15px;">
                <label class="sr-only" >Details*</label>
                <textarea class="form-control" class="input_details"  placeholder="Details" style="background: #001321; margin-bottom: 4px; height: 68px; color: #ffffff"></textarea>
                <button type="submit" class="btn btn-info form_submit"><i class="fa fa-envelope"></i>&nbsp;SUBMIT</button>
            </div>
        </form>
    </div>
</div>