$(document).ready(function() {
	var windowsHeight=$(window).height();
	var inMotion=false;
		
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
});