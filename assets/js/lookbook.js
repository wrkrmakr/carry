$(document).ready(function() {
   var photoIndex = 1;

   $('#photoSelector ul li').click(function(){
      var selectedPhotoIndex = parseInt($(this).attr('id').substring(13,15));
      $('#photoSelector ul li span').css('border-bottom-width','0px');
      $('#photoSelector'+selectedPhotoIndex+' span').css('border-bottom-width','1px');
      $('#photo'+selectedPhotoIndex).show();
      $('#photo'+photoIndex).hide();
      photoIndex = selectedPhotoIndex;
   });
});