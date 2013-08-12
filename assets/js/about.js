$(document).ready(function() {
   var progressPercent;
   var imageIndex = 1;
   var imagesInBanner = 5;
   var myImages = [
      "assets/img/about/aboutBanner1.jpg",
      "assets/img/about/aboutBanner2.jpg",
      "assets/img/about/aboutBanner3.jpg",
      "assets/img/about/aboutBanner4.jpg",
      "assets/img/about/aboutBanner5.jpg",
   ];

   preloadImages(myImages);

   $(window).load(function(){
      $("#progressbar").progressbar();
      progressBar();
   });

   $('#aboutUsImage, .progressbar').click(function(e) {
      var temp = $(this).offset().left;
      temp = e.clientX - temp;
      temp = (temp / $('#aboutUsImage').width()) * 100;
      progressPercent = temp;
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
      progressPercent = 0;
      var timer = setInterval (function () {
         $('#progressbar').progressbar ("value", progressPercent);
         progressPercent++;
         if (progressPercent > 100){
            toNextPhoto();
            progressPercent = -5;
         }
      }, 50);
   }

   function toNextPhoto() {
      if (imageIndex == imagesInBanner)
         imageIndex = 1;
      imageIndex = parseInt(imageIndex)+1;

      $('#aboutUsImageCrossFade').css('background-image','url(assets/img/about/aboutBanner'+imageIndex+'.jpg)');
      $('#aboutUsImageCrossFade').show("fade", 400);
      $('#aboutUsImage').hide("fade", 400, function() {
         $('#aboutUsImage').css('background-image','url(assets/img/about/aboutBanner'+imageIndex+'.jpg)');
         $('#aboutUsImage').show(0);
         $('#aboutUsImageCrossFade').hide(0);
      });
      
      
      //progressBar();
   }

});
