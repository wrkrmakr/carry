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
				required:"Please enter a e-mail address"
			},
		    inquiryFormQuestion:{
				required:"Please enter a question"   
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
}); 