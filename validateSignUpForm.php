<?php 
	$userEmail=$_POST["signUpFormEmail"]; 
	
	$from = "nijjar.login@gmail.com";
	$subject = "Mail From: ".$userEmail;          				
	$to = $userEmail ;										   				
	$headers = "From: " . strip_tags($from) . "\r\n";		   				
	$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";					   				
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";  		
	$message = '<html><body>';
	$message .= '<table rules="all" style="border: 1px solid black" cellpadding="10"><caption style="margin-bottom:2px"><strong>	  		Newsletter Request</strong></caption>';
	$message .= '<tr ><td style="background-color:#999"><strong>Sender`s email:</strong></td><td     	          				    	style="background-color:rgba(31,206,203,.1);">' .$userEmail.'</td></tr>';
			
	mail($to,$subject,$message,$headers);													
	die("Thank you for signing up for our newsletter. You will receive the newsletter via your email.<br /><br />");

 ?>
