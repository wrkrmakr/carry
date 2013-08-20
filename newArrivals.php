<?php
   include "assets/libraries/headerAndFooter.php";
   include "assets/libraries/newArrivalsLibrary.php";
   
   carryHTMLHead("newArrivals","newArrivals"," - New Arrivals");
   carryNavigationPanel();
   newArrivalsContent();
   carryHTMLFooter();
?>