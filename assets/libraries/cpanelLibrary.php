<?php function cpanelContent() { ?>
         <div id="pageContent">        
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
        </div>
<?php } ?>
<?php function viewProducts() { ?>
         <div id="pageContent">
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
         </div>
<?php } ?>
<?php function addProduct() { 
   if (empty($_POST['productname'])){
      $_POST['productname'] = '';
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
         <div id="pageContent">
            <div id="pageTitle"><span>CARRY MATERNITY CONTROL PANEL - ADD A PRODUCT</span></div>
            <div class="buttons">
               <a href="cpanel.php?page=view">VIEW PRODUCTS</a>
               <a href="cpanel.php">BACK TO CPANEL</a>
            </div>

            <div id="addForm">
               <form action="cpanel.php?page=submit" method="post">
                  <div><label>Product name: </label> <input type="text" name="productname" value="<?php echo $_POST['productname'];?>" /></div>
                  <div>
                     <label>Department: </label>
                     <select>
                        <?php 
                           if(mysqli_num_rows($departmentList) != 0)
                              while($rows=mysqli_fetch_assoc($departmentList))
                                 echo "<option>$rows[departmentName]</option>";
                        ?>
                     </select>
                  </div>
                  <div>
                     <label>Designer: </label>
                     <select>
                        <?php 
                           if(mysqli_num_rows($designerList) != 0)
                              while($rows=mysqli_fetch_assoc($designerList))
                                 echo "<option>$rows[designerName]</option>";
                        ?>
                     </select>
                  </div>
                  <div><label>Price: </label> <input type="text" value=""></div>
                  <div><label>New Arrivals: </label> <input type="checkbox" value=""></div>
                  <div><label>Photo: </label> <input type="file" value=""></div>
                  <div><input type="Submit" value="Submit"></div>
               </form>
            </div>
         </div>
<?php } ?>