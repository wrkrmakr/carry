$(document).ready(function() { 
	$('#inquiresForm').validate({		
		rules: {
				inquiryFormEmail:{
                    email: true,
					required:true
               },
			   inquiryFormQuestion:{
					required:true   
			   }			    
       },
       messages: {
            inquiryFormEmail: {
                email: "Please enter a valid e-mail address",
				required:"Please enter an e-mail address"
			},
		    inquiryFormQuestion:{
				required:"Please send us an Inquiry"   
		    }
       },
		submitHandler: function(form) {
			$(form).ajaxSubmit({
				success: function(responseText, statusText, xhr, $form) {
				$(form).fadeOut("fast",function(){
					$("#inquiresResponse").append('<div ><br />'+responseText+'</div>');
					$('#inquiresResponse').fadeIn(400);							
				});	
			}
			});
			return false;
		}	
	});
	$('#signUpForm').validate({		
		rules: {
				signUpFormEmail:{
					required:true
               }			    
       },
       messages: {
            signUpFormEmail: {
				required:"Please enter an e-mail address"
			}
       },
		submitHandler: function(form) {
			$(form).ajaxSubmit({
				success: function(responseText, statusText, xhr, $form) {
					alert('Sucess');
			}
			});
			return false;
		}	
	});
	
}); 