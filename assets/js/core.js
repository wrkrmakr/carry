$(document).ready(function() {
	var windowsHeight=$(window).height();
	var inMotion=false;

	$('#nav a li span').hover(function(){
		$(this).css('border-bottom','1px solid white');
	}, function(){
		$(this).css('border-bottom','none');
	});

	/*	
		$(window).resize(function() {
			//windowsHeight=$(window).height();
	     	//$('#pageContent').css('height',windowsHeight-164);   
	    });
		
		$(".subMenuLink").hover(function(){			
			if(!inMotion){
				inMotion=true;
				$(this).find('.subMenuList').slideDown(300,function(){
					inMotion=false;
				});
			}		
		},function(){			
			//if(inMotion){
				$(this).find('.subMenuList').slideUp(200,function(){
			//		inMotion=false;		
				});
			//}
		});
	*/

});