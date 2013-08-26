<?php function cpanelContent() { ?>        
        	   <div id="pageTitle"><span>CARRY MATERNITY CONTROL PANEL</span></div>
            <div id="managePages">
               <div><span>MANAGE PAGES</span></div>
               <ul>
                  <li><a href="cpanel.php?page=view">PRODUCTS</a></li>
                  <li><a href="cpanel.php?page=lookbook">LOOKBOOK</a></li>
                  <li><a href="cpanel.php?page=contact">CONTACT</a></li>
                  <li><a href="cpanel.php?page=about">ABOUT</a></li>
               </ul>
            </div>
            <div id="manageUsers">
               <div><span>MANAGE USERS</span></div>
               <ul>
                  <li><a href="cpanel.php?manageUser=add">ADD A USER</a></li>
                  <li><a href="cpanel.php?manageUser=modify">MODIFY A USER</a></li>
                  <li><a href="cpanel.php?manageUser=remove">REMOVE A USER</a></li>
               </ul>
            </div>
<?php } ?>
<?php function viewProducts() { ?>
            <div id="pageTitle"><span>CARRY MATERNITY CONTROL PANEL - VIEW PRODUCTS</span></div>
            <div class="buttons">
               <a href="cpanel.php?page=add">ADD A PRODUCT</a>
               <a href="cpanel.php">BACK TO CPANEL</a>
            </div>
            <div id="productTable">
               <table border="1">
                  <tr>
                     <th>Photo</th>
                     <th>Name</th>
                     <th>Department</th>
                     <th>Designer</th>
                     <th>Price</th>
                     <th>Lookbook</th>
                     <th>New Arrivals</th>
                  </tr>

                  <?php
                     $query = "select * from products";

                     $pass = '';
                     //connects to the mysql server to retrieve data
                     $mySqlLink = mysqli_connect("localhost:3306",'admin',$pass) or die("Could not Connect" . mysqli_error($mySqlLink));
                     mysqli_select_db($mySqlLink, 'test') or die("No database found" . mysqli_error($mySqlLink));
                     
                     $tableData = mysqli_query($mySqlLink, $query .' order by productID') or die("Query Error " . mysqli_error($mySqlLink));

                     if(mysqli_num_rows($tableData) != 0)
                        while($rows=mysqli_fetch_assoc($tableData)){
                           echo "
                           <tr>
                              <td><img src='/assets/img/products/$rows[photo]'></td>
                              <td>$rows[name]</td>
                              <td>$rows[department]</td>
                              <td>$rows[designer]</td>
                              <td>$rows[price]</td>
                              <td>$rows[lookbook]</td>
                              <td>$rows[newArrivals]</td>
                           </tr>";
                        }
                     mysqli_close($mySqlLink);
                  ?>

               </table>
            </div>
<?php } ?>
<?php function addProduct() { 
   if (empty($_POST['productName'])){
      $_POST['productName'] = '';
   }

   $departmentQuery = "select * from departments";
   $designerQuery = "select * from designers";

   $pass = '';
   //connects to the mysql server to retrieve data
   $mySqlLink = mysqli_connect("localhost:3306",'admin',$pass) or die("Could not Connect" . mysqli_error($mySqlLink));
   mysqli_select_db($mySqlLink, 'test') or die("No database found" . mysqli_error($mySqlLink));

   $departmentList = mysqli_query($mySqlLink, $departmentQuery .' order by departmentID') or die("Query Error " . mysqli_error($mySqlLink));
   $designerList = mysqli_query($mySqlLink, $designerQuery .' order by designerID') or die("Query Error " . mysqli_error($mySqlLink));
?>
            <div id="pageTitle"><span>CARRY MATERNITY CONTROL PANEL - ADD A PRODUCT</span></div>
            <div class="buttons">
               <a href="cpanel.php?page=view">VIEW PRODUCTS</a>
               <a href="cpanel.php">BACK TO CPANEL</a>
            </div>

            <div id="addForm">
               <form action="cpanel.php?page=submitProduct" enctype="multipart/form-data" method="post">
                  <div><label>Product name: </label> <input type="text" name="productName" value="<?php echo $_POST['productName'];?>" /></div>
                  <div>
                     <label>Department: </label>
                     <select name="departmentName">
                        <?php 
                           if(mysqli_num_rows($departmentList) != 0)
                              while($rows=mysqli_fetch_assoc($departmentList))
                                 echo "<option>$rows[departmentName]</option>";
                        ?>
                     </select>
                  </div>
                  <div>
                     <label>Designer: </label>
                     <select name="designerName">
                        <?php 
                           if(mysqli_num_rows($designerList) != 0)
                              while($rows=mysqli_fetch_assoc($designerList))
                                 echo "<option>$rows[designerName]</option>";
                        ?>
                     </select>
                  </div>
                  <div><label>Price: </label> <input type="text" name="price" value=""></div>
                  <div><label>New Arrivals: </label> <input type="checkbox" name="newArrivals" value=""></div>
                  <div><label>Photo: </label> <input type="file" name="photo" value=""></div>
                  <div><input type="Submit" value="Submit"></div>
               </form>
            </div>
<?php 
   mysqli_close($mySqlLink);
} 
?>
<?php function submitProduct() {

   $error = array();
   if (!preg_match("/^[a-zA-Z][a-z A-Z]{1,39}$/", $_POST['productName'])) {
      $error['productName'] = "The Product Name can only contain letters and spaces<br>";
   }
   if (!preg_match("/^[0-9]{1,5}[.][0-9]{2}$/", $_POST['price'])) {
      $error['price'] = "Price can only contain one or more digits followed by a period and two more digits<br>";
   }

   $allowedExts = array("gif", "jpeg", "jpg", "png");
   if (isset($_FILES["photo"])){
      $photoName = $_FILES['photo']['name'];
      $photoType = $_FILES['photo']['type'];
      $photoSize = $_FILES['photo']['size'];
      $photoTemp = $_FILES['photo']['tmp_name'];
   }
   else {
      $photoName = null;
      $photoType = null;
      $photoSize = null;
      $photoTemp = null;
   }
   $array = explode(".", $photoName);
   $extension = end($array);
   if (!((($photoType == "image/gif")
   || ($photoType == "image/jpeg")
   || ($photoType == "image/jpg")
   || ($photoType == "image/png"))
   && ($photoSize < 200000)
   && in_array($extension, $allowedExts))){
      $error['photo'] = "There was an issue with the photo that was uploaded. Please check the file type and the size of the image.";
   }

   if (empty($error)){
      trim ($_POST['productName']);
      trim($_POST['price']);

      //This is the directory where images will be saved
      $target = "assets/img/products/";
      $target = $target . basename($photoName);

      //This gets all the other information from the form
      $name = $_POST['productName'];
      $department = $_POST['departmentName'];
      $designer = $_POST['designerName'];
      $price = $_POST['price'];
      $pic = ($photoName);
      $newArrivals = isset($_POST['newArrivals']) ? 'y' : 'n';

      // Connects to your Database
      $mySqlLink = mysqli_connect("localhost:3306",'admin','') or die("Could not Connect" . mysqli_error($mySqlLink));
      mysqli_select_db($mySqlLink, 'test') or die("No database found" . mysqli_error($mySqlLink));

      //Writes the information to the database
      if (empty($_POST['productID'])) {
         $query = "insert into products (photo,name,department,designer,price,newArrivals) VALUES ('$pic', '$name', '$department', '$designer', '$price', '$newArrivals')";
      }
      else {
         $query = "update products set photo='$pic',name='$name',department='$department',designer='$designer',price='$price',newArrivals='$newArrivals'
                   where id = '$_POST[productID]";
      }

      mysqli_query($mySqlLink, $query) or die ("Could not query: " . mysql_error());

      //Writes the photo to the server
      if(!(move_uploaded_file($photoTemp, $target))) {
         $error['uploadedImage'] = "Sorry, there was a problem uploading the image.";
      }

      if (empty($error)){
         viewProducts();
      }
      else {
         addProduct($error);
      }
   }
   else {
      addProduct($error);
   }

}?>