<?php
   session_start();

   include "assets/libraries/headerAndFooter.php";
   include "assets/libraries/lookbookLibrary.php";
   
   carryHTMLHead("lookbook","lookbook"," - Lookbook");
   carryNavigationPanel();
   lookbookContent();
   carryHTMLFooter();
?>