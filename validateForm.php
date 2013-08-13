<?php 
	$userEmail=$_POST["inquiryFormEmail"];
	$userInquiry=$_POST["inquiryFormQuestion"]; 
	
	$to = "nijjar.login@gmail.com";
	$subject = "Mail From: ".$userEmail;          				
	$from = $userEmail ;										   				
	$headers = "From: " . strip_tags($userEmail) . "\r\n";		   				
	$headers .= "Reply-To: ". strip_tags($userEmail) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";					   				
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";  		
	$message = '<html><body>';
	$message .= '<table rules="all" style="border: 1px solid black" cellpadding="10"><caption style="margin-bottom:2px"><strong>	  		User Inquiry</strong></caption>';
	$message .= '<tr ><td style="background-color:#999"><strong>Sender`s email:</strong></td><td     	          				    	style="background-color:rgba(31,206,203,.1);">' .$userEmail.'</td></tr>';
	$message .= '<tr><td style="background-color:#999"><strong>Inquiry Question:</strong></td><td    	   	 	 	 				    	style="background-color:rgba(31,206,203,.1);">'.$userInquiry.'</td></tr>';
			
	mail($to,$subject,$message,$headers);													//Send mail
	die( "We have received your e-mail. You will receive a reply shortly.<br /><br />");

 ?>
