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
      <?php                  
                        $brand1 = $_SESSION['username'];
                        $sql = "SELECT user_id FROM users where username = '$brand1'";
                        $result1 = $conn-> query($sql);
                        if ($result1-> num_rows > 0){
                        while($row1 = $result1-> fetch_assoc()){
                          $brand = $row1['user_id']; ?> 
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">        
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th class="ml-5">ID</th>
                        <th>Order Date</th>
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>Customer Phone</th>
                        <th>Payment Mode</th>
                        <th>Amount</th>
                        <th colspan=2>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            
                            $sql="SELECT * from order_items, orders, users where orders.order_id= order_items.order_id and order_items.brand=users.user_id and order_items.brand = $brand";
                            $result=$conn-> query($sql);
                            $count=1;
                            if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                        ?>
                            <tr>
                            <td><?=$count?></td>
                            <td><?=$row["order_date"]?></td>
                            <td><?=$row["c_name"]?></td>
                            <td><?=$row["c_email"]?></td>
                            <td><?=$row["c_phone"]?></td>
                            <td><?=$row["payment_mode"]?></td>
                            <td><?=$row["total_amount"]?></td>
                            <td>
                          <div class="d-flex align-items-center">
                          <a href="view-order.php?id=<?php echo $row['order_id']?>"style="color:white;text-decoration:none;">  
                          <button type="button" id ="view" value="'<?=$row["order_id"]?>'" data-toggle="button" aria-pressed="false"class="btn btn-success btn-sm btn-icon-text mr-3">
                              View                          
                            </button></a>
                            
                            <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                            <?php
                              if($row['order_status']==0){
                                echo "<span class='badge_active'><a href='?type=status&operation=ship&id=".$row['id']."' style='color:white;text-decoration:none;'>Processing</a></span>";
                              } 
                              else if($row['order_status']==1){
                                echo "<span class='badge_deactive'><a href='?type=status&operation=deliver&id=".$row['id']."' style='color:white;text-decoration:none;'>Shipped</a></span>";
                              }
                              else if($row['order_status']==2){
                                echo "<span class='badge_deactive'><a href='?type=status&operation=deliver&id=".$row['id']."' style='color:white;text-decoration:none;'>Delivered</a></span>";
                              }

                            ?>
                                                        
                            </button>
                          </div>

                        </td>
                            <!--<td><a class="btn btn-primary" href="viewEachOrder.php?user=<?=$row['user_id']?>">View</a></td>-->
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


<?php
if(isset($_GET['type']) && $_GET['type']!=''){
  $type=($_GET['type']);

  if($type=='status'){
    $operation=($_GET['operation']);
    $id=($_GET['id']);

    if($operation=='ship'){
      $status='1';
    }
    else if($operation=='deliver'){
      $status='2';
    }
    else{
      $status='0';
    }
    $update_status="UPDATE order_items set order_status='$status'where id='$id'";
    mysqli_query($conn,$update_status);

  }
  
}   
?>  
</body>

</html>

