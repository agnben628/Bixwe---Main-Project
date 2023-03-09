<?php    
    include "../dbconnect.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
              <a class="dropdown-item" href="seller-profile.php">
                <i class="typcn typcn-cog-outline text-primary"></i>
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
          
          <li class="nav-item dropdown mr-0">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="typcn typcn-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <?php
                            
                    $sql="SELECT * from notification, notif_type where notification.receiver=15 and notification.notif_id=notif_type.notif_id and notification.read_status=0";
                    $result=$conn-> query($sql);
                    $count=1;
                    if ($result-> num_rows > 0){
                    while ($row=$result-> fetch_assoc()) {
                      $entry=$row['entry_id'];
                  ?>
              <a href="manage-stock.php?id=<?php echo $entry;?>" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  
                </div>
                  
                  <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal"><?php echo $row['notification'];?></h6>
                  

                  </div>
              </a>
              <?php
              }
            }
            ?>
            </div>
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
            <div class="col-xl-6 grid-margin stretch-card flex-column">
                
              <div class="row">
               <?php 
              $brand1 = $_SESSION['username'];
        $sql = "SELECT user_id FROM users where username = '$brand1'";
        $result = $conn-> query($sql);
        if ($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){
          $brand = $row['user_id'];
          ?>
              </div>
              <div class="row h-100">
                <div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
                  <div class="card">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <p class="text-muted">Orders</p>
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="mb-"><?php
                       
                       $sql="SELECT * from orders,order_items,users where orders.order_id=order_items.order_id and order_items.brand=users.user_id and order_items.brand = $brand";
                       $result=$conn->query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result->fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?></h4>
                        
                      </div>
                      <canvas id="sales-chart-b" class="mt-auto" height="38"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row h-100">
                        <div class="col-6 d-flex flex-column justify-content-between">
                          <p class="text-muted">Products</p>
                          <h4><?php
                       
                       $sql="SELECT * from product, users where product.brand=users.user_id and product.brand = $brand";
                       $result=$conn->query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result->fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?></h4>
                          <canvas id="cpu-chart" class="mt-auto"></canvas>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

      

          

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="table-responsive pt-3">
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
                        
                        <th >Action</th>
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
              
            </div>
          </div>
          
          <div class="container-fluid d-flex p-2">
 <div id="columnchart12" style="width: 80%; height: 400px;"></div>
 
 <div id="columnchart13" style="width: 80%; height: 400px;"></div>
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




<script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['Product','Number'],
 <?php 
      $user=$_SESSION['username'];
      $query = "SELECT count(order_items.product_id) AS number, product.product_name FROM product, order_items WHERE product.prod_id=order_items.product_id and order_items.brand=product.brand and order_items.brand=(select user_id from users where username='$user') GROUP BY order_items.product_id";
      $exec = mysqli_query($conn,$query);
      while($row = mysqli_fetch_array($exec)){
       echo "['".$row['product_name']."',".$row['number']."],";
       }
       ?> 
 
 ]);

 var options = {
 title: 'Analysis of Product Sale',
  pieHole: 0,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };
 var chart = new google.visualization.PieChart(document.getElementById("columnchart12"));
 chart.draw(data,options);
 }
  
 </script>
<script type="text/javascript">
    
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['Product','Number'],
 <?php 
      $user=$_SESSION['username'];
      $query = "SELECT count(wishlist.product_id) AS number product.product_name FROM product INNER JOIN wishlist WHERE product.prod_id=wishlist.product_id and wishlist.brand=product.brand and wishlist.brand=(select user_id from users where username='$user') GROUP BY wishlist.product_id";

       $exec = mysqli_query($conn,$query);
       while($row = mysqli_fetch_array($exec)){

       echo "['".$row['product_name']."',".$row['number']."],";
       }
       ?> 
 
 ]);

 var options = {
 title: 'Analysis of Wishlisted Products',
  pieHole: 0,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };
 var chart = new google.visualization.PieChart(document.getElementById("columnchart13"));
 chart.draw(data,options);
 }
  
 
    </script>
    </body>

</html>