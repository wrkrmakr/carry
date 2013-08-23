$(document).ready(function() {
	
	$(window).load(function(){
      $("#pageContent").mCustomScrollbar({
         theme:"dark",
         advanced:{
              updateOnContentResize: true
         }
      });
   });
	
	var windowsHeight=$(window).height();
	var inMotion=false;

	$('#nav a li span').hover(function(){
		$(this).css('border-bottom','1px solid white');
	}, function(){
		$(this).css('border-bottom','none');
	});

});