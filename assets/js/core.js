$(document).ready(function() {
	var windowsHeight=$(window).height();
	var inMotion=false;
		
	$(window).resize(function() {
		//windowsHeight=$(window).height();
     	//$('#pageContent').css('height',windowsHeight-164);   
    });
	
	$(".subMenuLink").hover(function(){			
		//if(!inMotion){
			$(this).find('.subMenuList').stop(true,true).slideDown(400,function(){
		//		inMotion=true;		
			});
		//}		
	},function(){			
		//if(inMotion){
			$(this).find('.subMenuList').stop(true,true).slideUp(200,function(){
		//		inMotion=false;		
			});
		//}
	});
});