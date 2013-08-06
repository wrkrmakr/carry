$(document).ready(function() {
	var windowsHeight=$(window).height();
	var currentHoveredMenu,isSubMenuOpen=false;
	
	$('#pageContent').css('height',windowsHeight);
	
	$(window).resize(function() {
		windowsHeight=$(window).height();
     	$('#pageContent').css('height',windowsHeight-164);   
    });
	
	$(".subMenuLink").hover(function(){	
		currentHoveredMenu=$(this).attr('id');
		
		$('#'+currentHoveredMenu+'Menu').slideDown(400);
		
	},function(){		
		currentHoveredMenu=$(this).attr('id');
		$('#'+currentHoveredMenu+'Menu').slideUp(400);
	});
});