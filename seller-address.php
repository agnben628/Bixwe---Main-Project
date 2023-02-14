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
              <h6 class="date mb-0"><?php echo "Today is " . date("Y / m / d") . "<br>";?></h6>
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
              
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="typcn typcn-user mx-0"></i> 
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New Seller Registration</h6>
                  
                </div>
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="typcn typcn-th-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
      
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item ml-0">
            <h4 class="mb-0">Dashboard</h4>
          </li>
          
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-search d-none d-md-block mr-0">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search..." aria-label="search" aria-describedby="search">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="typcn typcn-zoom"></i>
                </span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
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
                
             
              <div class="row mt-15 tm-edit-product-row">
                        <div class="d-flex p-2">
                            <form enctype='multipart/form-data' action="./seller-address.php" method="POST" class="tm-edit-product-form">
                                
                                <div class="input-group mb-3">
                                    
                                    <input id="pin" name="pin" type="text" placeholder="Pincode" class="form-control validate col-xl-15 col-lg-15 col-md-15 col-sm-15" required pattern="^[1-9]{1}[0-9]{2}\\s{0, 1}[0-9]{3}$">
                                </div>
                                <div class="input-group mb-3">
                                    
                                    <input id="locality" name="locality" placeholder="Locality" type="text" class="form-control validate col-xl-15 col-lg-15 col-md-15 col-sm-15"  required pattern="^\S[a-zA-Z\s]*$"></input>
                                </div>
                                <div class="input-group mb-3">
                                    
                                    <input id="address" name="address" type="text" placeholder="Address (Area and Street)" class="form-control validate col-xl-15 col-lg-15 col-md-15 col-sm-15" required pattern="^\S[a-zA-Z\s]*$"></input>
                                </div>
                                <div class="input-group mb-3">
                                    <input id="place" name="place" type="text" placeholder="City/District/Town" class="form-control validate col-xl-15 col-lg-15 col-md-15 col-sm-15" required pattern="^\S[a-zA-Z\s]*$">
                                </div>
                                <div class="input-group mb-3">
                                    <select id="state" name="state" type="text" placeholder="State" class="form-control validate col-xl-15 col-lg-15 col-md-15 col-sm-15" required >
                                    <option disabled selected>State</option><option>Andhra Pradesh</option><option>Arunachal Pradesh</option><option>Assam</option><option>Bihar</option><option>Chhattisgarh</option>
                                      <option>Goa</option><option>Gujarat</option><option>Haryana</option><option>Himachal Pradesh</option>
                                      <option>Jharkhand</option><option>Karnataka</option><option>Kerala</option><option>Madhya Pradesh</option>
                                      <option>Maharashtra</option><option>Manipur</option><option>Meghalaya</option><option>Mizoram</option>
                                      <option>Nagaland</option><option>Odisha</option><option>Punjab</option><option>Rajasthan</option>
                                      <option>Sikkim</option><option>Tamil Nadu</option><option>Telangana</option><option>Tripura</option>
                                      <option>Uttar Pradesh</option><option>Uttarakhand</option><option>West Bengal</option>

                                    </select>

                                </div>
                                <!-- <div class="input-group mb-3">
                                <select id="state" name="state" type="text" placeholder="State" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" required >
                                      <option>Andhra Pradesh</option>
                                      <option>Arunachal Pradesh</option>
                                      

                                    </select>
                                </div> -->
                                
                                
                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-12 col-lg-12 col-md-12 col-sm-12 pl-0">
                                        <button type="submit" class="btn btn-dark" name="address" id="upload">Save Address</button>
                                    </div>
</div>
                              
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </form>
    
                    </div>
                
              </div>
              <div class="row h-100">
                <div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
                  <div class="card">
                    
                <div class ="card" id="productdetails">
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
if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    
    if(isset($_POST['address']))
    {
      $pin = $_POST['pin'];
      $locality = $_POST['locality'];
      $state=$_POST['state'];
      $address=$_POST['address'];
      $city=$_POST['place'];
    $sl="select user_id from users where email='$email'";
    $result1 = $conn-> query($sl);
      if ($result1-> num_rows > 0){
      while($row = $result1-> fetch_assoc()){ 
        $user=$row['user_id'];
     
    $sql= "INSERT INTO address (user_id, pincode, locality, area, city, state)VALUES ($user, $pin, '$locality', '$address', '$city','$state')";
    $result=$conn->query($sql);
}
}
      }
      
    }


    



      
?>
</body>

</html>

