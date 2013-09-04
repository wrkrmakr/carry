$(document).ready(function() {
   var photoIndex = 1;
   var myImages = [
      "assets/img/lookbook/lookbook1.jpg",
      "assets/img/lookbook/lookbook2.jpg",
      "assets/img/lookbook/lookbook3.png",
      "assets/img/lookbook/lookbook4.png",
      "assets/img/lookbook/lookbook5.png",
      "assets/img/lookbook/lookbook6.jpg",
      "assets/img/lookbook/lookbook7.png",
      "assets/img/lookbook/lookbook8.png",
      "assets/img/lookbook/lookbook9.jpg",
      "assets/img/lookbook/lookbook10.png",
	  "assets/img/lookbook/lookbook11.png"
   ];

   preloadImages(myImages);

   $('#photoSelector ul li').click(function(){
      var selectedPhotoIndex = parseInt($(this).attr('id').substring(13,15));
      if (selectedPhotoIndex != photoIndex){
         $('#photoSelector ul li span').css('border-bottom-width','0px');
         $('#photoSelector'+selectedPhotoIndex+' span').css('border-bottom-width','1px');
         $('#photo'+selectedPhotoIndex).show("fade",400);
         $('#photo'+photoIndex).hide();
         photoIndex = selectedPhotoIndex;
      }
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
});