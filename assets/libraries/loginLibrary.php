<?php function loginForm() { ?>         
            <div id="loginForm">
               <h1>Login</h1>
               <form method="post" action="login.php?page=authenticate">
                  <div><label>User name: </label> <input type="text" name="username"></div>
                  <div><label>Password: </label> <input type="password" name="password"></div>
                  <div><input type="Submit" value="Submit"></div>
               </form>
            </div>
<?php } ?>
<?php function login() {
   if(!isset($_SESSION['logged_in']) || empty($_SESSION['logged_in'])){
      $_SESSION['logged_in'] = false;
   }

   if(empty($_GET['page'])){
      $_GET['page'] = false;
   }

   if (!$_SESSION['logged_in']) {
      if (!empty($_GET['page'])){
         if ($_GET['page'] == 'authenticate') {
            $pass = '';
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = "select password from users where username='$username'";
            $mySqlLink = mysql_connect("localhost:3306","admin",$pass) or die("Could not Connect");
            mysql_real_escape_string($username);
            mysql_select_db("test") or die("Error in selecting database: " . mysql_error());
            $data = mysql_query($query) or die ("Could not query: " . mysql_error());
            $row = mysql_fetch_array($data);
            $encryptedPass = $row[0];
            
            if (mysql_num_rows($data)==1){
               if ($encryptedPass == sha1($password)) {
                  $_SESSION['logged_in'] = true;
                  $_SESSION['username'] = $username;
                  header('Location: cpanel.php');
               }
               else{
                  header('Location: login.php');
               }
            }
            else {
               header('Location: login.php');
            }
         }
      }
      else
         loginForm();
   }
   else
      header('Location: /');
} ?>