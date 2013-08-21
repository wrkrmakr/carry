$(document).ready(function() {
   var photoIndex = 1;

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
});