<?php
   include "assets/libraries/headerAndFooter.php";
   include "assets/libraries/departmentsLibrary.php";
   
   carryHTMLHead("departments","departments"," - Departments");
   carryNavigationPanel();
   if(empty($_GET['department'])){
      $_GET['department'] = false;
   }
   switch ($_GET['department']) {
      case 'department1': department1Content(); break; 
	  case 'department2': department2Content(); break; 
	  case 'department3': department3Content(); break;
	  case 'department4': department4Content(); break;
	  case 'department5': department5Content(); break;
	  case 'department6': department6Content(); break;
	  case 'department7': department7Content(); break;
	  case 'department8': department8Content(); break;
	    
      default: departmentsContent();; break;
   }
   carryHTMLFooter();
?>