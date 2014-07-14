{{ HTML::script('/js/jquery_validate.js') }}

<div class="row" style="background: #1C8FE0;">
    <div class="col-md-6">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <p style="text-align: center;font-size: 28px;color: #ffffff"><span class="glyphicon glyphicon-envelopeHow"></span>Any Questions?</p>
            <p style="text-align: center;font-size: 20px;color: #ffffff"><span class="glyphicon glyphicon-envelopeHow"></span>No Win, No Fee Representation!</p>
        </div>
    </div>
    <div class="col-md-6">
        <form class="form" style="margin-top: 4%">
            <div class="com-md-6" style="float: left;">
                <div class="name">
                    <label class="sr-only" >Name*:</label>
                    <input type="text" class="input_name"  minlength="2" placeholder="Name" required="required">
                </div>
                <div class="email">
                    <label class="sr-only" >Email*</label>
                    <input type="email" class="input_email" placeholder="Email" required="required">
                </div>
                <div class="phone">
                    <label class="sr-only" >Phone*</label>
                    <input type="tel" class="input_phone"  placeholder="Phone" required="required">
                </div>
            </div>
            <div class="col-md-6 pull-left"  style="float: right; padding-bottom: 15px;">
                <label class="sr-only" >Details*</label>
                <textarea class="form-control" class="input_details"  placeholder="Details" required="required" style="background: #001321; margin-bottom: 4px; height: 68px; color: #ffffff"></textarea>
                <button type="submit" class="btn btn-info form_submit"><i class="fa fa-envelope"></i>&nbsp;SUBMIT</button>
            </div>
        </form>
    </div>
</div>