<?php
   include "assets/libraries/headerAndFooter.php";
   include "assets/libraries/cpanelLibrary.php";
   if (!$_SESSION['logged_in']) {
		header('Location: /');  
	}
   
   carryHTMLHead("cpanel","cpanel"," - Control Panel");
   carryNavigationPanel();
   cpanelContent();
   carryHTMLFooter();
?>