<?php function cpanelContent() { ?>        
        	   <div id="pageTitle"><span>CARRY MATERNITY CONTROL PANEL</span></div>
            <div id="managePages">
               <div><span>MANAGE PAGES</span></div>
               <ul>
                  <li><a href="cpanel.php?page=addProduct">PRODUCTS</a></li>
                  <li><a href="cpanel.php?page=lookbook">LOOKBOOK</a></li>
                  <li><a href="cpanel.php?page=contact">CONTACT</a></li>
                  <li><a href="cpanel.php?page=about">ABOUT</a></li>
               </ul>
            </div>
<?php } ?>
<?php function cpanelNavigation($section){ ?>
            <div id="pageTitle"><span>CARRY MATERNITY CONTROL PANEL<?php echo $section; ?></span></div>
            <div class="buttons">
               <a href="cpanel.php?page=addProduct">ADD/VIEW PRODUCTS</a>
               <a href="cpanel.php?page=addDepartment">ADD/VIEW A DEPARTMENT</a>
               <a href="cpanel.php?page=addDesigner">ADD/VIEW A DESIGNER</a>
               <a href="cpanel.php">BACK TO CPANEL</a>
            </div>
<?php } ?>
<?php function addProduct($error,$modify) {
   if (empty($_POST['productName'])){
      $_POST['productName'] = '';
   }
   if (empty($_POST['price'])){
      $_POST['price'] = '';
   }
   if (empty($modify)){
      $modify = false;
   }
   if (isset($_FILES["photo"]))
      $photoName = $_FILES['photo']['name'];

   if (!empty($error) && $error){
      if(empty($error['productName']))
         $productNameError = '';
      else
         $productNameError = $error['productName'];

      if(empty($error['price']))
         $priceError = '';
      else
         $priceError = $error['price'];

      if(empty($error['photoType']))
         $photoTypeError = '';
      else
         $photoTypeError = $error['photoType'];
      
      if(empty($error['photoExtension']))
         $photoExtensionError = '';
      else
         $photoExtensionError = $error['photoExtension'];

   }
   else {
      $productNameError = '';
      $priceError = '';
   }

   $departmentQuery = "select * from departments";
   $designerQuery = "select * from designers";

   //connects to the mysql server to retrieve data
   $mySqlLink = mysqli_connect("localhost:3306",'admin','') or die("Could not Connect" . mysqli_error($mySqlLink));
   mysqli_select_db($mySqlLink, 'test') or die("No database found" . mysqli_error($mySqlLink));

   $departmentList = mysqli_query($mySqlLink, $departmentQuery .' order by departmentID') or die("Query Error " . mysqli_error($mySqlLink));
   $designerList = mysqli_query($mySqlLink, $designerQuery .' order by designerID') or die("Query Error " . mysqli_error($mySqlLink));
?>
            <?php cpanelNavigation(' - ADD/VIEW PRODUCTS'); ?>

            <div id="addForm">
               <form action="cpanel.php?page=submitProduct" enctype="multipart/form-data" method="post">
                  <?php if ($modify) {
                     $tableData = mysqli_query($mySqlLink,'select * from products where productID = '.$modify) or die("Query Error " . mysqli_error($mySqlLink));
                     $rows=mysqli_fetch_assoc($tableData);
                  ?>
                  <div><label>Product ID: </label> <input type="text" readonly="readonly" name="productID" value="<?php echo $rows['productID'] ?>" /></div>
                  <?php } ?>

                  <div><?php echo $productNameError ?><label>Product name: </label> <input type="text" name="productName" value="<?php if($modify)echo $rows['name']; else echo $_POST['productName'];?>" /></div>
                  <div>
                     <label>Department: </label>
                     <select name="departmentName">
                        <?php
                           if(mysqli_num_rows($departmentList) != 0)
                              while($deptRows=mysqli_fetch_assoc($departmentList)){
                                 if (!empty($rows) && $deptRows == $rows['departmentName'])
                                    echo "<option selected='selected'>$rows[departmentName]</option>";
                                 else if (!empty($_POST['departmentName']) && $_POST['departmentName'] == $deptRows['departmentName'])
                                    echo "<option selected='selected'>$_POST[departmentName]</option>";
                                 else
                                    echo "<option>$deptRows[departmentName]</option>";
                              }
                        ?>
                     </select>
                  </div>
                  <div>
                     <label>Designer: </label>
                     <select name="designerName">
                        <?php 
                           if(mysqli_num_rows($designerList) != 0)
                              while($designerRows=mysqli_fetch_assoc($designerList)){
                                 if (!empty($rows) && $designerRows == $rows['designerName'])
                                    echo "<option selected='selected'>$rows[designerName]</option>";
                                 else if (!empty($_POST['designerName']) && $_POST['designerName'] == $designerRows['designerName'])
                                    echo "<option selected='selected'>$_POST[designerName]</option>";
                                 else
                                    echo "<option>$designerRows[designerName]</option>";
                              }
                        ?>
                     </select>
                  </div>
                  <div><?php echo $priceError ?><label>Price: </label> <input type="text" name="price" value="<?php if($modify)echo $rows['price']; else echo $_POST['price'];?>"></div>
                  <div><label>New Arrivals: </label> <input type="checkbox" name="newArrivals" <?php if((!empty($rows) && $rows['newArrivals']=='y') || isset($_POST['newArrivals'])) echo 'checked="checked"'; ?>></div>
                  <div>
                     <?php 
                        if (!empty($photoTypeError))
                           echo $photoTypeError;
                        if (!empty($photoExtensionError))
                           echo $photoExtensionError;
                     ?>
                     <label>Photo: </label>
                     <input type="file" name="photo">
                     <?php 
                        if($modify)
                           echo "<img src='assets/img/products/$rows[photo]'>";
                     ?>
                  </div>
                  <div><input type="Submit" value="Submit"></div>
               </form>
            </div>
            <div id="productTable">
               <table border="1">
                  <tr>
                     <th>Photo</th>
                     <th>Name</th>
                     <th>Department</th>
                     <th>Designer</th>
                     <th>Price</th>
                     <th>New Arrivals</th>
                     <th>Modify?</th>
                     <th>Remove?</th>
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
                              <td>$rows[newArrivals]</td>
                              <td><a href='cpanel.php?page=modifyProduct&id=$rows[productID]'>Modify</a></td>
                              <td><a href='cpanel.php?page=removeProduct&id=$rows[productID]'>Remove</a></td>
                           </tr>";
                        }
                  ?>

               </table>
            </div>
<?php 
   mysqli_close($mySqlLink);
} ?>
<?php function addDepartment($error) { 
   if (empty($_POST['departmentName'])){
      $_POST['departmentName'] = '';
   }
   if (!empty($error)){
      if(empty($error['departmentName']))
         $departmentNameError = '';
      else
         $departmentNameError = $error['departmentName'];
   }
   else {
      $departmentNameError = '';
   }
?>
            <?php cpanelNavigation(' - ADD/VIEW DEPARTMENTS'); ?>

            <div id="addForm">
               <form action="cpanel.php?page=submitDepartment" method="post">
                  <div><?php echo $departmentNameError ?><label>Department name: </label> <input type="text" name="departmentName" value="<?php echo $_POST['departmentName'];?>" /></div>
                  <div><input type="Submit" value="Submit"></div>
               </form>
            </div>
            <table border="1" id="departmentTable">
               <tr>
                  <th>Department</th>
                  <th>Remove?</th>
               </tr>
               <?php
                  $query = "select * from departments";

                  $pass = '';
                  //connects to the mysql server to retrieve data
                  $mySqlLink = mysqli_connect("localhost:3306",'admin',$pass) or die("Could not Connect" . mysqli_error($mySqlLink));
                  mysqli_select_db($mySqlLink, 'test') or die("No database found" . mysqli_error($mySqlLink));
                  
                  $tableData = mysqli_query($mySqlLink, $query .' order by departmentID') or die("Query Error " . mysqli_error($mySqlLink));

                  if(mysqli_num_rows($tableData) != 0)
                     while($rows=mysqli_fetch_assoc($tableData)){
                        echo "
                        <tr>
                           <td>$rows[departmentName]</td>
                           <td><a href='cpanel.php?page=removeDepartment&id=$rows[departmentID]'>Remove</a></td>
                        </tr>";
                     }
                  mysqli_close($mySqlLink);
               ?>
            </table>
<?php } ?>
<?php function addDesigner($error) { 
   if (empty($_POST['designerName'])){
      $_POST['designerName'] = '';
   }
   if (!empty($error)){
      if(empty($error['designerName']))
         $designerNameError = '';
      else
         $designerNameError = $error['designerName'];
   }
   else {
      $designerNameError = '';
   }
?>
            <?php cpanelNavigation(' - ADD/VIEW DESIGNERS'); ?>

            <div id="addForm">
               <form action="cpanel.php?page=submitDesigner" method="post">
                  <div><?php echo $designerNameError ?><label>Designer name: </label> <input type="text" name="designerName" value="<?php echo $_POST['designerName'];?>" /></div>
                  <div><input type="Submit" value="Submit"></div>
               </form>
            </div>
            <table border="1" id="designerTable">
               <tr>
                  <th>Designer</th>
                  <th>Remove?</th>
               </tr>
               <?php
                  $query = "select * from designers";

                  $pass = '';
                  //connects to the mysql server to retrieve data
                  $mySqlLink = mysqli_connect("localhost:3306",'admin',$pass) or die("Could not Connect" . mysqli_error($mySqlLink));
                  mysqli_select_db($mySqlLink, 'test') or die("No database found" . mysqli_error($mySqlLink));
                  
                  $tableData = mysqli_query($mySqlLink, $query .' order by designerID') or die("Query Error " . mysqli_error($mySqlLink));

                  if(mysqli_num_rows($tableData) != 0)
                     while($rows=mysqli_fetch_assoc($tableData)){
                        echo "
                        <tr>
                           <td>$rows[designerName]</td>
                           <td><a href='cpanel.php?page=removeDesigner&id=$rows[designerID]'>Remove</a></td>
                        </tr>";
                     }
                  mysqli_close($mySqlLink);
               ?>
            </table>
<?php } ?>
<?php function submitProduct() {
   $check = false;
   if (!empty($_POST['productID']))
         $id = $_POST['productID'];
   else
      $id = false;

   $error = array();
   if (!preg_match("/^[a-zA-Z][a-z A-Z]{1,39}$/", $_POST['productName'])) {
      $error['productName'] = "The Product Name can only contain letters and spaces<br />";
      $check = true;
   }
   if (!preg_match("/^[0-9]{1,5}[.][0-9]{2}$/", $_POST['price'])) {
      $error['price'] = "Price can only contain one or more digits followed by a period and two more digits<br />";
      $check = true;
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
   
   $noNewPhoto=false;
   if ($photoName == null && $photoType == null && $photoSize == null && $photoTemp == null) {
      $noNewPhoto = true;
   }
   if (!$noNewPhoto){
      if (!(
         ($photoType == "image/gif")
      || ($photoType == "image/jpeg")
      || ($photoType == "image/jpg")
      || ($photoType == "image/png")
      )){
         $error['photoType'] = "There was an issue with the photo type that was uploaded, please make sure it is a gif, jpeg, jpg, or a png. <br />";
      }
      if (!(in_array($extension, $allowedExts))){
         $error['photoExtension'] = "There was an issue with the photo extention that was uploaded. Please check the file extension. <br />";
      }
   }

   if (empty($error) || ($noNewPhoto && !$check)){
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
      if (!$id) {
         $query = "insert into products (photo,name,department,designer,price,newArrivals) VALUES ('$pic', '$name', '$department', '$designer', '$price', '$newArrivals')";
      }
      else {
         if ($noNewPhoto){
            $query = "update products set name='$name',department='$department',designer='$designer',price='$price',newArrivals='$newArrivals'
                   where productID = '$id'";
         }
         else {
            $query = "update products set photo='$pic',name='$name',department='$department',designer='$designer',price='$price',newArrivals='$newArrivals'
                   where productID = '$id'";
         }
      }

      mysqli_query($mySqlLink, $query) or die ("Could not query: " . mysqli_error($mySqlLink));

      //Writes the photo to the server
      if(!(move_uploaded_file($photoTemp, $target))) {
         $error['uploadedImage'] = "Sorry, there was a problem uploading the image. <br />";
      }
      mysqli_close($mySqlLink);

      if (empty($error) || ($noNewPhoto && !$check)){
         header('Location: cpanel.php?page=addProduct');
      }
      else {
         addProduct($error,$id);
      }
      
   }
   else {
      addProduct($error,$id);
   }
}?>
<?php function submitDepartment() {

   $error = array();
   if (!preg_match("/^[a-zA-Z][a-z A-Z]{1,39}$/", $_POST['departmentName'])) {
      $error['departmentName'] = "The Department name can only contain letters and spaces <br />";
   }
   
   if (empty($error)){
      trim ($_POST['departmentName']);
      $deptName = $_POST['departmentName'];

      // Connects to your Database
      $mySqlLink = mysqli_connect("localhost:3306",'admin','') or die("Could not Connect" . mysqli_error($mySqlLink));
      mysqli_select_db($mySqlLink, 'test') or die("No database found" . mysqli_error($mySqlLink));

      $query = "insert into departments (departmentName) VALUES ('$deptName')";

      mysqli_query($mySqlLink, $query) or die ("Could not query: " . mysqli_error($mySqlLink));
      mysqli_close($mySqlLink);
      header('Location: cpanel.php?page=addDepartment');
   }

   else {
      addDepartment($error);
   }
}?>
<?php function submitDesigner() {

   $error = array();
   if (!preg_match("/^[a-zA-Z][a-z A-Z]{1,39}$/", $_POST['designerName'])) {
      $error['designerName'] = "The Designer name can only contain letters and spaces <br />";
   }
   
   if (empty($error)){
      trim ($_POST['designerName']);
      $designerName = $_POST['designerName'];

      // Connects to your Database
      $mySqlLink = mysqli_connect("localhost:3306",'admin','') or die("Could not Connect" . mysqli_error($mySqlLink));
      mysqli_select_db($mySqlLink, 'test') or die("No database found" . mysqli_error($mySqlLink));

      $query = "insert into designers (designerName) VALUES ('$designerName')";

      mysqli_query($mySqlLink, $query) or die ("Could not query: " . mysqli_error($mySqlLink));
      mysqli_close($mySqlLink);
      header('Location: cpanel.php?page=addDesigner');
   }

   else {
      addDesigner($error);
   }
}?>
<?php function removeProduct($id) {
   if (empty($id))
      $id='';

   else {
      // Connects to your Database
      $mySqlLink = mysqli_connect("localhost:3306",'admin','') or die("Could not Connect" . mysqli_error($mySqlLink));
      mysqli_select_db($mySqlLink, 'test') or die("No database found" . mysqli_error($mySqlLink));

      $query = "delete from products where productID = $id";

      mysqli_query($mySqlLink, $query) or die ("Could not query: " . mysqli_error($mySqlLink));
      mysqli_close($mySqlLink);
   }
   header('Location: cpanel.php?page=addProduct');
}?>
<?php function removeDepartment($id) {
   if (empty($id))
      $id='';

   else {
      // Connects to your Database
      $mySqlLink = mysqli_connect("localhost:3306",'admin','') or die("Could not Connect" . mysqli_error($mySqlLink));
      mysqli_select_db($mySqlLink, 'test') or die("No database found" . mysqli_error($mySqlLink));

      $query = "delete from departments where departmentID = $id";

      mysqli_query($mySqlLink, $query) or die ("Could not query: " . mysqli_error($mySqlLink));
      mysqli_close($mySqlLink);
   }
   header('Location: cpanel.php?page=addDepartment');
}?>
<?php function removeDesigner($id) {
   if (empty($id))
      $id='';

   else {
      // Connects to your Database
      $mySqlLink = mysqli_connect("localhost:3306",'admin','') or die("Could not Connect" . mysqli_error($mySqlLink));
      mysqli_select_db($mySqlLink, 'test') or die("No database found" . mysqli_error($mySqlLink));

      $query = "delete from designers where designerID = $id";

      mysqli_query($mySqlLink, $query) or die ("Could not query: " . mysqli_error($mySqlLink));
      mysqli_close($mySqlLink);
   }
   header('Location: cpanel.php?page=addDesigner');
}?>