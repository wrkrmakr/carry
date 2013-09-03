<?php
   include "assets/libraries/headerAndFooter.php";
   include "assets/libraries/designersLibrary.php";
   
   carryHTMLHead("designers","designers"," - Designers");
   carryNavigationPanel();
   
    if(empty($_GET['designer'])){
      $_GET['designer'] = false;
   }
   switch ($_GET['designer']) {
      case 'designer1': designers1Content(); break; 
	  case 'designer2': designers2Content(); break; 
	  case 'designer3': designers3Content(); break;  
	  case 'designer4': designers4Content(); break;  
	  case 'designer5': designers5Content(); break;  
	  case 'designer6': designers6Content(); break;  
	  case 'designer7': designers7Content(); break;  
	  case 'designer8': designers8Content(); break;  
	  case 'designer9': designers9Content(); break;  
	  case 'designer10': designers10Content(); break;  
	  case 'designer11': designers11Content(); break;  
	  case 'designer12': designers12Content(); break;  
	  case 'designer13': designers13Content(); break;  
	  case 'designer14': designers14Content(); break;  
	  case 'designer15': designers15Content(); break;  
	  case 'designer16': designers16Content(); break;  
	  case 'designer17': designers17Content(); break;  
	  case 'designer18': designers18Content(); break;  
	  case 'designer19': designers19Content(); break;  
      default: designersContent(); break;
   }
   carryHTMLFooter();
?>