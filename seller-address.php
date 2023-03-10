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
          
          <li class="nav-item dropdown mr-0">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="typcn typcn-bell mx-0"></i>
              <span class="count"></span>
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
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#profile" aria-expanded="false" aria-controls="charts">
              <i class="typcn typcn-chart-pie-outline menu-icon"></i>
              <span class="menu-title">Profile</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="profile">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="seller-address.php">Manage Address</a></li>
              </ul>
            </div>
          </li>
          
          
          
        </ul>
      </nav>
      <!-- partial -->
        <div class="main-panel">
        <div class="content-wrapper">

        <div class="row">
        <div class="col-xl-10 grid-margin stretch-card flex-column">
        <a href="seller-profile.php" ><button type="submit" class="btn btn-dark" name="saveaddress" id="upload">Back</button></a>

        <div class="row mt-15 tm-edit-product-row">
       
        <div class="d-flex p-2">
        <div class="col-lg-12">
        <form class="form-horizontal row-fluid" name="profileupdate" action="seller-address.php"method="post" enctype="multipart/form-data">
        <?php
        // $id=intval($_GET['id']);
        $email=$_SESSION['email'];
        $query=mysqli_query($conn,"SELECT * FROM users WHERE users.email = '$email'");
        while($row=mysqli_fetch_array($query))
        {
        ?>
        <div class="input-group mb-3">
        <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Name</label>
        <input id="name" name="name" type="text" value="<?=$row['username']?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"required pattern="^\S[a-zA-Z\s]*$">
        </div>
        <div class="input-group mb-3">
        <label for="housename" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">House Name</label>
        <input id="housename" name="housename" type="text"  class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"required pattern="^\S[a-zA-Z\s]*$">
        </div>
        <div class="input-group mb-3">
        <label for="postoffice" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Post Office</label>
        <input id="postoffice" name="postoffice" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"required pattern="^\S[a-zA-Z\s]*$">
        </div>
        <div class="input-group mb-3">
        <label for="locality" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Locality</label>
        <input id="locality" name="locality" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"required pattern="^\S[a-zA-Z\s]*$">
        </div>
        <div class="input-group mb-3">
        <label for="city" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">City</label>
        <input id="city" name="city" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"required pattern="^\S[a-zA-Z\s]*$">
        </div>
        <div class="input-group mb-3">
        <label for="district" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">District</label>
        <input id="district" name="district" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"required pattern="^\S[a-zA-Z\s]*$">
        </div>
        <div class="input-group mb-3">
        <label for="pincode" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Pincode</label>
        <input id="pincode" name="pincode" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"required >
        </div>

        <?php } ?>
        <div class="input-group mb-3">
        <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
        <button type="submit" class="btn btn-dark" name="saveaddress" id="upload">Save</button>
        </div>
        </div>
        </form>
        </div>

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
    
    if(isset($_POST['saveaddress']))
    {
      $name= $_POST['name'];
      $sql="SELECT user_id from users where username='$name'";
      $res=$conn->query($sql);
      if($res->num_rows>0)
      {
        while($row = $res-> fetch_assoc())
        {
            $user=$row['user_id'];

      }
      $housename = $_POST['housename'];
      $postoffice = $_POST['postoffice'];
      $locality = $_POST['locality'];
      $city = $_POST['city'];
      $district = $_POST['district'];
        $pincode = $_POST['pincode'];
        
      $insert = mysqli_query($conn,"INSERT INTO address(user_id, housename, postoffice, locality, city, district, pincode) 
      VALUES ($user,'$housename','$postoffice', '$locality', '$city', '$district', '$pincode')");
 
        if($insert)
        {
            echo'<script>alert("Address added")</script>';
        }
        else
        {
            echo'<script>alert("Address not added")</script>';
        }
        
    } 
       
    }    
    
    
?>
</body>

</html>

