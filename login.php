<?php 
   session_start();

   include "assets/libraries/headerAndFooter.php";
   include "assets/libraries/loginLibrary.php";
   
   carryHTMLHead("login","login"," - Login");
   carryNavigationPanel();
   login();
   carryHTMLFooter();
?>
