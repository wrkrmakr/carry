$(document).ready(function() {

/*   $(window).load(function(){
      $("#pageContent").mCustomScrollbar({
         theme:"dark",
         advanced:{
              updateOnContentResize: true
         }
      });
   });
*/
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
					email: true,
					required:true
               }			    
       },
       messages: {
            signUpFormEmail: {
				email: "Please enter a valid e-mail address",
				required:"Please enter an e-mail address"
			}
       },
		submitHandler: function(form) {
			$(form).ajaxSubmit({
				success: function(responseText, statusText, xhr, $form) {
				
				$('#signUpFormText').fadeOut('fast');
				$(form).fadeOut("fast",function(){
					$("#signUpResponse").append('<div ><br />'+responseText+'</div>');
					$('#signUpResponse').fadeIn(400);							
				});		
			}
			});
			return false;
		}	
	});
	
   // --------- GOOGLE MAP API ---------- //
   google.maps.event.addDomListener(window, 'load', initialize);
   function initialize() {    
      var myLatlng = new google.maps.LatLng(43.670280200000001,-79.391538100000005);
      var mapOptions = {
         zoom: 16,
         center: myLatlng,
         mapTypeId: google.maps.MapTypeId.ROADMAP
      };    
      map = new google.maps.Map(document.getElementById('map'), mapOptions);
      
      
      var marker = new google.maps.Marker({
         position: myLatlng,
         map: map,
         title:"Location for Carry Maternity"
      });
   }
   window.onresize=function(){
      initialize();
   }
   window.onorientationchange = function() {
      initialize();     
   }
}); 