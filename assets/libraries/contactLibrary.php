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
                        <form action="" id="inquiresForm">
                        	<input id="inquiryFormEmail" type="text" placeholder="ENTER YOUR E-MAIL" onfocus="this.placeholder = ''" onblur="this.placeholder  							= 'ENTER YOUR E-MAIL '"  /><br /><br />
                            <textarea id="inquiryFormQuestion" placeholder="YOUR QUESTION" onfocus="this.placeholder = ''" onblur="this.placeholder  							                            = 'YOUR QUESTION'"  ></textarea><br /><br />
                            <input id="inquiryFormButton" value="OK" type="button" />
                        </form>
                    </div>	
                </div>
            </div>
        </div>
<?php } ?>