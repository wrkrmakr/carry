$(document).ready(function() {
	var windowsHeight=$(window).height();
	
	$('#pageContent').css('height',windowsHeight);
	
	$(window).resize(function() {
		windowsHeight=$(window).height();
     	$('#pageContent').css('height',windowsHeight-164);   
    });
});