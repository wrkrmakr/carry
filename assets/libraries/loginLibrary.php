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
            $mySqlLink = mysqli_connect("localhost:3306","admin",$pass) or die("Could not Connect");
            mysqli_real_escape_string($mySqlLink, $username);
            mysqli_select_db($mySqlLink, "test") or die("Error in selecting database: " . mysqli_error($mySqlLink));
            $data = mysqli_query($mySqlLink, $query) or die ("Could not query: " . mysqli_error($mySqlLink));
            $row = mysqli_fetch_array($data);
            $encryptedPass = $row[0];
            
            if (mysqli_num_rows($data)==1){
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

            mysqli_close($mySqlLink);
         }
      }
      else
         loginForm();
   }
   else
      header('Location: /');
} ?>