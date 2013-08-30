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
   if(empty($_GET['id'])){
      $_GET['id'] = '';
   }
   if(empty($error)){
      $error='';
   }

   switch ($_GET['page']) {

      case 'addProduct': addProduct($error); break;
      case 'submitProduct': submitProduct(); break;
      case 'removeProduct': removeProduct($_GET['id']); break;

      case 'addDepartment': addDepartment($error); break;
      case 'submitDepartment': submitDepartment(); break;
      case 'removeDepartment': removeDepartment($_GET['id']); break;

      case 'addDesigner': addDesigner($error); break;
      case 'submitDesigner': submitDesigner(); break;
      case 'removeDesigner': removeDesigner($_GET['id']); break;
      
      default: cpanelContent(); break;
   }
   
   carryHTMLFooter();
?>