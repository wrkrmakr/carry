<?php 
   session_start();
   if ($_SESSION['logged_in']) {
      setcookie ("PHPSESSID", "", time() - 9001, "/");
      session_destroy();
      unset($_SESSION);
   }
   header('Location: /');
?>