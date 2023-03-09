<?php    
    include "../dbconnect.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Seller</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" 
  integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name"><?php echo $_SESSION['username']; ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="typcn typcn-cog-outline text-primary" href="seller-profile.php"></i>
                Profile
              </a>
              <a class="dropdown-item" href="../logout.php">
                <i class="typcn typcn-eject text-primary"></i>
                Logout
              </a>
            </div>
          </li>
         
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-date dropdown">
            <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;">
              <h6 class="date mb-0"><?php echo "Today is " . date("d / m / Y") . "<br>";?></h6>
              <i class="typcn typcn-calendar"></i>
            </a>
          </li>
          
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="typcn typcn-th-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close typcn typcn-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close typcn typcn-times"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            
            
          </div>
          <!-- To do section tab ends -->
          
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="SellerHome.php">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Dashboard</span>
              
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="typcn typcn-film menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="seller-product-view.php">View</a></li>
                <li class="nav-item"><a class="nav-link" href="analysis.php"> Product Analysis</a></li>
                <li class="nav-item"><a class="nav-link" href="salesreport.php">Sales Analysis</a></li>
                <li class="nav-item"><a class="nav-link" href="sentiment.php">Feedback</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="typcn typcn-chart-pie-outline menu-icon"></i>
              <span class="menu-title">Orders</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="seller-order-view.php">View</a></li>
              </ul>
            </div>
          </li>
          
          
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">        
        <div class="row">
        <div class="d-flex p-2">
        <?php
            $user=$_SESSION['username'];    
            $sql="SELECT * from users, seller where role='Seller' and users.user_id=seller.user_id and users.user_id=(select user_id from users where username='$user')";
            $result=$conn-> query($sql);
            $count=1;
            if ($result-> num_rows > 0){
            while ($row=$result-> fetch_assoc()) {
              $status=$row['approval_status'];
              if($status == 1)
              {
        ?>
          <div class="col-md-12 col-sm-12 text-left ">
            <a class="btn btn-primary" id="add">Add</a>
          </div></br>
       
          <div class="col-md-12 col-sm-12 text-left">
            <a href="manage-stock.php" class="btn btn-primary">Manage Stock</a>
          </div></br>
          <div class="col-md-12 text-left mb-3">
            <button class="btn btn-primary" id="download">Report</button>
          </div>
          <?php
              }
              else{
                ?>
                <p style="color:red;">You are not approved yet</p>
                <?php
              }
            }
          }
?>
</div>
          <?php                  
                        $brand1 = $_SESSION['username'];
                        $sql = "SELECT user_id FROM users where username = '$brand1'";
                        $result1 = $conn-> query($sql);
                        if ($result1-> num_rows > 0){
                        while($row1 = $result1-> fetch_assoc()){
                          $brand = $row1['user_id']; ?>        
            <div class="col-md-12">
              <div class="card">
              <div id = "productform"></div>
              <div id="invoice">
                <div class="table-responsive pt-3">
                 
                <table class="table table-striped project-orders-table">
                
                    <thead>
                      <tr>
                        <th class="ml-5">ID</th>
                        <th colspan="3">Image</th>
                        <th>Product</th>
                        <th>Product Description</th>
                        <th>Category</th>
                        <th>Sub Category	</th>
                       
                        <th colspan=3>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $query = "SELECT * FROM product,subcategory,category,users WHERE product.category=category.category_id AND product.subcategory=subcategory.sub_category_id AND product.brand=users.user_id and product.brand = $brand" ;
                        $result = $conn->query($query); 
                        $count=1;
                        if($result->num_rows > 0){ 
                            while($row = $result->fetch_assoc()){ 
                        ?>
                        <tr>
                        <td><?=$count?></td>
                        <td><img height='80px' src='<?=$row["image1"]?>'></td>
                        <td><img height='80px' src='<?=$row["image2"]?>'></td>
                        <td><img height='80px' src='<?=$row["image3"]?>'></td>
                        <td><?=$row["product_name"]?></td>
                        <td><?=$row["product_desc"]?></td>      
                        <td><?=$row["category_name"]?></td>
                        <td><?=$row["sub_category"]?></td> 
                            
                        <td>
                          <div class="d-flex align-items-center">
                          <a href="view-product.php?id=<?php echo $row['prod_id']?>"style="color:white;text-decoration:none;">  
                          <button type="button" id ="view" value="'<?=$row["prod_id"]?>'" data-toggle="button" aria-pressed="false"class="btn btn-success btn-sm btn-icon-text mr-3">
                              View More                           
                            </button></a>
                            
                            <a href="edit-product.php?id=<?php echo $row['prod_id']?>"style="color:white;text-decoration:none;"><button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                              <i class="typcn typcn-edit btn-icon-append"></i> </a>                         
                            </button>
                            
                          </div>

                        </td>                       
                        
                      </tr>
                      <?php
                             $count=$count+1;
                            }
                        }
                      }
                    }
                        ?>
                    </tbody>
                    
                  </table>
                      
                </div>
                </div>
                <div class ="card" id="productdetails">
                      </div>
              </div>
            </div>
          </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
                  
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
  <script>

       
$(document).ready(function(){
    $('#add').on('click', function(){
        
        
            $.ajax({
                type:'POST',
                url:'add-product.php',
                success:function(html){
                    $('#productform').html(html); 
                }
            }); 
        
    });
    
});
$(document).ready(function(){
    $('#stock').on('click', function(){
        
        
            $.ajax({
                type:'POST',
                url:'manage-stock.php',
                success:function(html){
                    $('#stockform').html(html); 
                }
            }); 
        
    });
    
});


       
$(document).ready(function(){
    $('#view').on('click', function(){
      var prodID = $(this).val();
          if(prodID){
            $.ajax({
                type:'POST',
                url:'view-product.php',
                data:'prodID='+prodID,
                success:function(html){
                    $('#productdetails').html(html); 
                }
              
            }); 
          }
    });
    
});


</script>
<script>
window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'report.pdf',
                image: { type: 'jpeg', quality: 0.99 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'a3', orientation: 'l' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
</script>
<?php
    include_once "../dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $ProductName = $_POST['p_name'];
        $desc= $_POST['p_desc'];
        
        $category = $_POST['category'];
        $sub_category = $_POST['subcategory'];
        $cut = $_POST['cut'];
        
        $bodytype = $_POST['bodytype'];
        $fade = $_POST['fade'];
        $fit = $_POST['fit'];
        $feature = $_POST['feature'];
        
        
        $material = $_POST['material'];
        $wear = $_POST['wear'];
        $usergroup = $_POST['usergroup'];
        $pattern = $_POST['pattern'];
        $texture = $_POST['texture'];
        $name1 = $_FILES['file1']['name'];
        $temp1 = $_FILES['file1']['tmp_name'];
    
        $location="./uploads/";
        $image1=$location.$name1;

        $target_dir="./uploads/";
        $finalImage1=$target_dir.$name1;

        move_uploaded_file($temp1,$finalImage1);
        $name2 = $_FILES['file2']['name'];
        $temp2 = $_FILES['file2']['tmp_name'];
    
        $location="./uploads/";
        $image2=$location.$name2;

        $target_dir="./uploads/";
        $finalImage2=$target_dir.$name2;

        move_uploaded_file($temp2,$finalImage2);
        $name3 = $_FILES['file3']['name'];
        $temp3 = $_FILES['file3']['tmp_name'];
        $location="./uploads/";
        $image3=$location.$name3;

        $target_dir="./uploads/";
        $finalImage3=$target_dir.$name3;

        move_uploaded_file($temp3,$finalImage3);
        $brand1 = $_SESSION['username'];
        $sql = "SELECT user_id FROM users where username = '$brand1'";
        $result = $conn-> query($sql);
        if ($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){
          $brand = $row['user_id'];
        $insert = mysqli_query($conn,"INSERT INTO product(product_name, product_desc, cut, brand, body_type, fade, feature, fit, material, pattern, texture, wear, usergroup, image1, image2, image3, category, subcategory) VALUES ('$ProductName','$desc',$cut, $brand, $bodytype, $fade, $feature, $fit, $material, $pattern, $texture, $wear, $usergroup,'$finalImage1', '$finalImage2','$finalImage3', $category, $sub_category)");
 
        if($insert)
        {
        echo "<p id='d' >" ."Product added succesfully"."</p>" ;
        }
        else
        {
        echo "<p id='d' >" ."Could not add product"."</p>" ;
        }
     
    }
  }
}
    if(isset($_POST['update']))
    {
       
        $prod_id=$_POST['prod_id'];
        $ProductName = $_POST['p_name'];
        $desc= $_POST['p_desc'];
        
        
        $name1 = $_FILES['file1']['name'];
        $temp1 = $_FILES['file1']['tmp_name'];
    
        $location="./uploads/";
        $image1=$location.$name1;

        $target_dir="./uploads/";
        $finalImage1=$target_dir.$name1;

        move_uploaded_file($temp1,$finalImage1);
        $name2 = $_FILES['file2']['name'];
        $temp2 = $_FILES['file2']['tmp_name'];
    
        $location="./uploads/";
        $image2=$location.$name2;

        $target_dir="./uploads/";
        $finalImage2=$target_dir.$name2;

        move_uploaded_file($temp2,$finalImage2);
        $name3 = $_FILES['file3']['name'];
        $temp3 = $_FILES['file3']['tmp_name'];
        $location="./uploads/";
        $image3=$location.$name3;

        $target_dir="./uploads/";
        $finalImage3=$target_dir.$name3;

        move_uploaded_file($temp3,$finalImage3);    
        $updateCat = mysqli_query($conn,"UPDATE product SET product_name='$ProductName', product_desc='$desc', image1='$finalImage1', image2='$finalImage2', image3='$finalImage3' WHERE prod_id=$prod_id");
 
         if($updateCat)
         {

            echo "<p id='d' style='color:white;'>" ."Product updated succesfully"."</p>" ;
         }
         else
         {
            echo "<p id='d' style='color:white;'>" ."Could not update product"."</p>" ;
         }
        }
    if(isset($_GET['type']) && $_GET['type']!=''){
      $type=($_GET['type']);
    
      if($type=='status'){
        $operation=($_GET['operation']);
        $id=$_GET['id'];
    
        if($operation=='active'){
          $status='1';
        }
        else{
          $status='0';
        }
        $update_status="UPDATE product set status='$status' where prod_id= $id";
        mysqli_query($conn,$update_status);
    
      }
      if($type=='delete'){
        $id=($_GET['id']);
    
        $delete_sql="DELETE FROM product where prod_id='$id'";
        mysqli_query($conn,$delete_sql);
    
      }
    }          
?>
</body>

</html>

