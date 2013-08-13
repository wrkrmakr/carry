<?php function contactContent() { ?>
        <div id="pageContent">
        	<div id="upperContent">
            	<div id="storeInfo">
                	<div id="storeInfoContainer">
                    	<div id="storeHours">
                        	<br /><p class="bigContactText">STORE HOURS</p>
                            <hr class="greyBorder" />
                            <p class="smallContactText"><span style="font-size:16px">OPEN 7 DAYS A WEEK</span><br />
                            	Monday-Wednesday 11am - 6pm<br />
                                Thursday 11am - 7pm<br />
                                Friday - Saturday 11am - 6pm<br />
                                Sunday 12pm - 5pm
                            </p>
                        </div>
                        <div id="locationInfo"><p class="bigContactText">LOCATION</p>
                            <hr class="greyBorder" />	
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
                        <hr class="greyBorder" /><br />
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
                    	<img src="assets/img/fbIcon.png" />
                        <img src="assets/img/twitterIcon.png" />
                    	<img src="assets/img/pIntIcon.png" />
                        <img src="assets/img/icon4.png" />
                        <br /><br />
                        <span class="lowerContentSmallText">
                        	Follow us to stay in the loop on what’s new with Carry Maternity.
                        </span>
                    </div>
                </div>
                <div id="signUpFormContainer" class="lowerContentInnerDiv">
                	GET OUR UPDATES<br /><br /><br />
                    <div id="signUp">
                        <form id="signUpForm" action="validateSignUpForm.php" method="post">
                            <div id="formMailContainer">
                                <input class="formTextBox" id="signUpFormEmail" name="signUpFormEmail" type="text" placeholder=    								"Enter your e-mail"  onfocus="this.placeholder =  ''" onblur="this.placeholder= 'Enter your e-mail'"  /><br />
                               <input id="signFormButton" class="formButton" value="OK" type="submit" />
                            </div>
                        </form><br />
                        <div id="signUpFormText" class="lowerContentSmallText">
                        	Sign up for our newsletter for our latest news and updates!	
                        </div>
                    </div>
                </div>
            </div>
        <br /><br /><br /></div>
<?php } ?>