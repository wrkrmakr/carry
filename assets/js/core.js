$(document).ready(function() {
	var windowsHeight=$(window).height();
	var inMotion=false;
	var overItem = false;
	var currentPage = 'newArrivals';

	$('#nav li span').hover(function(){
		$('#nav li span').css('border-bottom','none');
		$(this).css('border-bottom','1px solid white');
	}, function(){
		if (currentPage == 'index')
			$('#nav li span').css('border-bottom','none');
		else{
			$('#nav li span').css('border-bottom','none');
			$('#'+currentPage).css('border-bottom','1px solid white');
		}
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