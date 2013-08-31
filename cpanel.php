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

      case 'addProduct': addProduct($error,$_GET['id']); break;
      case 'submitProduct': submitProduct(); break;
      case 'removeProduct': removeProduct($_GET['id']); break;
      case 'modifyProduct': addProduct(false, $_GET['id']); break;

      case 'addDepartment': addDepartment($error,$_GET['id']); break;
      case 'submitDepartment': submitDepartment(); break;
      case 'removeDepartment': removeDepartment($_GET['id']); break;
      case 'modifyDepartment': addDepartment(false, $_GET['id']); break;

      case 'addDesigner': addDesigner($error,$_GET['id']); break;
      case 'submitDesigner': submitDesigner(); break;
      case 'removeDesigner': removeDesigner($_GET['id']); break;
      case 'modifyDesigner': addDesigner(false, $_GET['id']); break;
      
      default: cpanelContent(); break;
   }
   
   carryHTMLFooter();
?>