$(document).ready(function() {
	var windowsHeight=$(window).height();
	var inMotion=false;
	var isMenuOpen=false;
	var isMenuOpened=false;
		
	$('#pageContent').css('height',windowsHeight);
	
	$(window).resize(function() {
		windowsHeight=$(window).height();
     	$('#pageContent').css('height',windowsHeight-164);   
    });
	
	$(".subMenuLink").hover(function(){	
		
		if(!inMotion){
			$(this).find('.subMenuList').slideDown(400,function(){
				inMotion=true;		
			});
		}
		
	},function(){		
		
		if(inMotion){
			$(this).find('.subMenuList').slideUp(400,function(){
				inMotion=false;		
			});
		}
	});
});