$(document).ready(function() {
   var progressPercent = 0;
   var imageIndex = 1;
   var imagesInBanner = 5; //adjust this number for the number of images
   var pauseProgress = false;
   var pVal = $('.ui-progressbar-value').addClass('ui-corner-right');
   var myImages = [
      "assets/img/about/aboutBanner1.jpg",
      "assets/img/about/aboutBanner2.jpg",
      "assets/img/about/aboutBanner3.jpg",
      "assets/img/about/aboutBanner4.jpg",
      "assets/img/about/aboutBanner5.jpg"
   ];

   preloadImages(myImages);

   $(window).load(function(){
      $("#progressbar").progressbar();
      progressBar();
      $("#pageContent").mCustomScrollbar({
         theme:"dark",
         advanced:{
              updateOnContentResize: true
         }
      });
   });

   $('#aboutUsImage, .progressbar').click(function(e) {
      var temp = $(this).offset().left;
      temp = e.clientX - temp;
      temp = (temp / $('#aboutUsImage').width()) * 100;
      progressPercent = temp;
      $('#progressbar div').stop(true,true).animate({width: progressPercent + '%'}, 150, 'easeInOutSine');
   });

   $('#aboutUsImage, .progressbar').hover(function(){
      pauseProgress = true;
   },function(){
      pauseProgress = false;
   });

   function preloadImages(list) {
      var img;
      if (!preloadImages.cache) {
         preloadImages.cache = [];
      }
      for (var i = 0; i < list.length; i++) {
         img = new Image();
         img.src = list[i];
         preloadImages.cache.push(img);
      }
   }

   function progressBar(){
      var timer = setInterval (function () {
         if (!pauseProgress)
            $('#progressbar div').stop(true,true).animate({width: progressPercent + '%'}, 130, 'easeInOutSine', function(){
               progressPercent++;
            });
         $('#progressbar div').css('display','block');
         //$('#progressbar').progressbar ("value", progressPercent);
         
         if (progressPercent > 100){
            progressPercent = -4;
            toNextPhoto();
         }
      }, 100);
   }

   function toNextPhoto() {
      if (imageIndex == imagesInBanner)
         imageIndex = 1;
      imageIndex = parseInt(imageIndex)+1;
      $('progressbar').hide(0);
      $('#aboutUsImageCrossFade').css('background-image','url(assets/img/about/aboutBanner'+imageIndex+'.jpg)');
      $('#aboutUsImageCrossFade').show("fade", 500);
      $('#aboutUsImage').hide("fade", 500, function() {
         $('#aboutUsImage').css('background-image','url(assets/img/about/aboutBanner'+imageIndex+'.jpg)');
         $('progressbar').show(0);
         $('#aboutUsImage').show(0);
         $('#aboutUsImageCrossFade').hide(0);
      });
      
      
      //progressBar();
   }

});
