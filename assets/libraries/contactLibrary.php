<?php function contactContent() { ?>
            <div id="pageTitle">
               <span>CONTACT US</span>
            </div>        	
        	<div id="upperContent">
            	<div id="storeInfo">
                	<div id="storeInfoContainer">
                    	<div id="storeHours">
                        	<br /><p class="bigContactText">STORE HOURS</p>
                            <!--<hr class="greyBorder" />-->
                            <p class="smallContactText"><span style="font-size:16px">OPEN 7 DAYS A WEEK</span><br />
                            	Monday-Wednesday 11am - 6pm<br />
                                Thursday 11am - 7pm<br />
                                Friday - Saturday 11am - 6pm<br />
                                Sunday 12pm - 5pm
                            </p>
                        </div>
                        <div id="locationInfo"><p class="bigContactText">LOCATION</p>
                            <!--<hr class="greyBorder" />-->	
                        	<p class="smallContactText"><span style="font-size:16px">TORONTO</span><br />
                                110 Cumberland Street<br />
                                Toronto, ON M5R 1A6<br />
                                Yorkville<br />
                                (416) 921-3116
                            </p>
                        </div>                    
                    </div>
                </div>
                <div id="inquires">	
                	<div id="inquiresContainer">
                        <br /><p class="bigContactText">INQUIRIES</p>
                        <!--<hr class="greyBorder" />--><br />
                        <form id="inquiresForm" action="validateInquiryForm.php" method="post">
                        	<input  class="formTextBox" id="inquiryFormEmail" name="inquiryFormEmail" type="text" placeholder= 			 								"ENTER YOUR E-MAIL" onfocus ="this.placeholder = ''" onblur="this.placeholder= 'ENTER YOUR E-MAIL  								'"  /><br /><br />
                            <textarea id="inquiryFormQuestion" name="inquiryFormQuestion" placeholder="YOUR QUESTION" onfocus= 				 								"this.placeholder = ''" onblur	="this.placeholder= 'YOUR QUESTION'"  ></textarea><br /><br />
                            <input id="inquiryFormButton" class="formButton" value="OK" type="submit" />
                        </form>
                        <div id="inquiresResponse"></div>
                    </div>	
                </div>
            </div>
            <div id="lowerContent">
            	<div id="mapContainer" class="lowerContentInnerDiv">
                	WHERE TO FIND US<br /><br />
                    <div id="map"></div>	
                </div>
                <div id="socialIconContainer" class="lowerContentInnerDiv">
                	CONNECT WITH US<br /><br /><br />
                    <div id="socialIcons">
                        <a href="http://www.facebook.com/Carrymaternity" target="_blank"><img src="assets/img/fbIcon.png" alt="Facebook Icon"/></a>
                        <a href="http://www.twitter.com/CarryMaternity" target="_blank"><img src="assets/img/twitterIcon.png" alt="Twitter Icon"/></a>
                        <a href="http://www.pinterest.com/carrymaternity" target="_blank"><img src="assets/img/pIntIcon.png" alt="Pinterest Icon"/></a>
                        <a href="#" target="_blank"><img src="assets/img/icon4.png" alt="Instagram Icon"/></a>
                        <br /><br /><br />
                        <span class="lowerContentSmallText">
                        	Follow us to stay in the loop on what’s new with Carry Maternity.
                        </span>
                    </div>
                </div>
                <div id="signUpFormContainer" class="lowerContentInnerDiv">
                	GET OUR UPDATES<br /><br /><br />
                    <div id="signUp" style="margin-left: 20px;">
                        <!-- Begin MailChimp Signup Form -->
                        <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
                        <style type="text/css">
                            /*#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif;  width:250px;}*/
                            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                        </style>
                        <div id="mc_embed_signup1">
                        <form action="http://carrymaternity.us7.list-manage.com/subscribe/post?u=3efc4b8a8eed96d10a760dc9d&amp;id=662bcb9844" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <input type="email" value="" name="EMAIL" class="formTextBox" id="mce-EMAIL" placeholder="Your email address" required>
                            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="formButton">
                        </form>
                        </div>
                        <br/>
                        <!--End mc_embed_signup-->
                        <div id="signUpFormText" class="lowerContentSmallText">
                        	Sign up for our newsletter for our latest news and updates!	
                        </div>
                        <div id="signUpResponse"></div>
                    </div>
                </div>
            </div>
        <br /><br /><br />
<?php } ?>