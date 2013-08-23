<?php
   include "assets/libraries/headerAndFooter.php";
   include "assets/libraries/cpanelLibrary.php";
   if (!$_SESSION['logged_in']) {
		header('Location: /');  
	}
   
   carryHTMLHead("cpanel","cpanel"," - Control Panel");
   carryNavigationPanel();

   if(empty($_GET['page'])){
      $_GET['page'] = false;
   }

   switch ($_GET['page']) {
      case 'view': viewProducts(); break;
      case 'add': addProduct(); break;
      
      default: cpanelContent(); break;
   }
   
   carryHTMLFooter();
?>