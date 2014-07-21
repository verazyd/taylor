<style>
    .CContainer img{
        width: 30px ! important;
    }
</style>
<div class="ilayout" id="SideStickyZone">
    <div icobalt="CobaltControls.Controls.StaticContent" id="StickyBtns">
        <div class="CContainer" style="top: -38px;">
            <img class="ContactBtn" src="./img/Side_Contact.jpg" alt="Free Consultation" title="Free Consultation">
            <div id="SlideForm" icobalt="CobaltControls.Controls.DataForm" name="SlideForm">
                <header>
                    <icon class="close close-6"></icon>
                    <h2>How Can We Help?</h2>
                    <h3>Confidential Consultation</h3>
                </header>
                <input name="SlideForm$ctl01$Name" type="text" value="Name:" maxlength="128" id="SlideForm_ctl01_Name" class="Name" required="required"/>
                <span id="SlideForm_ctl01_ctl00" class="validator" style="display:none;"></span>
                <span id="SlideForm_ctl01_ctl01" class="validator" style="display:none;"></span>
                <input name="SlideForm$ctl01$EmailAddress" type="text" value="Email:" maxlength="128" id="SlideForm_ctl01_EmailAddress" class="Email" />
                <span id="SlideForm_ctl01_ctl02" class="validator" style="display:none;"></span>
                <span id="SlideForm_ctl01_ctl03" class="validator" style="display:none;"></span>
                <span id="SlideForm_ctl01_ctl04" class="validator" style="display:none;"></span>
                <input name="SlideForm$ctl01$Phone" type="text" value="Phone:" maxlength="24" id="SlideForm_ctl01_Phone" class="Phone" />
                <span id="SlideForm_ctl01_ctl05" class="validator" style="display:none;"></span>
                <span id="SlideForm_ctl01_ctl06" class="validator" style="display:none;"></span>
                <span id="SlideForm_ctl01_ctl07" class="validator" style="display:none;"></span>
                <input type="hidden" id="SlideForm_ctl01_FFD6" name="SlideForm$ctl01$FFD6"/>
                <textarea name="SlideForm$ctl01$Message" rows="2" cols="20" id="SlideForm_ctl01_Message">Message:</textarea>
                <span id="SlideForm_ctl01_ctl08" class="validator" style="display:none;"></span>
                <span id="SlideForm_ctl01_ctl09" class="validator" style="display:none;"></span>
                <a class="Submit" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;SlideForm$ctl01$ctl10&quot;, &quot;&quot;, true, &quot;GroupSlideForm&quot;, &quot;&quot;, false, true))">
                    Send
                    <icon class="email-3"></icon>
                </a>
                <div id="SlideForm_ctl01_ctl11" style="display:none;"></div>
            </div>
        </div>

    </div>
</div>