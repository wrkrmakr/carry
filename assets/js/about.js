<<<<<<< HEAD
$(document).ready(function() {
   var progressPercent;
   var imageIndex = 1;
   var imagesInBanner = 5;

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

   function progressBar(){
      progressPercent = 0;
      var timer = setInterval (function () {
         $('#progressbar').progressbar ("value", progressPercent);
         progressPercent++;
         if (progressPercent > 100){
            toNextPhoto();
            progressPercent = -3;
         }
      }, 40);
   }

   function toNextPhoto() {
      console.log(imageIndex);
      if (imageIndex == imagesInBanner)
         imageIndex = 1;
      $('#aboutUsImage').hide("fade", 100, function() {
         imageIndex = parseInt(imageIndex)+1;
         console.log(imageIndex);
         $('#aboutUsImage').css('background-image','url(assets/img/about/aboutBanner'+imageIndex+'.jpg)');
         $('#aboutUsImage').show("fade", 200);
      });
      //progressBar();
   }

});
