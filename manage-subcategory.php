<?php    
    include "../dbconnect.php";
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
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
              <span class="nav-profile-name">Admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="typcn typcn-cog-outline text-primary"></i>
                Settings
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
              <h6 class="date mb-0">Today : Mar 23</h6>
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
            <a class="nav-link" href="admin-index.php">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Dashboard</span>
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Properties</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="manage-category.php">Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="manage-subcategory.php">Sub Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="manage-bodytype.php">Body Type</a></li>
                <li class="nav-item"> <a class="nav-link" href="manage-colors.php">Color</a></li>
                <li class="nav-item"> <a class="nav-link" href="manage-cut.php">Cut</a></li>
                <li class="nav-item"> <a class="nav-link" href="manage-fade.php">Fade</a></li>
                <li class="nav-item"> <a class="nav-link" href="manage-features.php">Features</a></li>
                <li class="nav-item"> <a class="nav-link" href="manage-fit.php">Fit</a></li>
                <li class="nav-item"> <a class="nav-link" href="manage-material.php">Material</a></li>
                <li class="nav-item"> <a class="nav-link" href="manage-pattern.php">Pattern</a></li>
                <li class="nav-item"> <a class="nav-link" href="manage-size.php">Size</a></li>
                <li class="nav-item"> <a class="nav-link" href="manage-texture.php">Texture</a></li>
                <li class="nav-item"> <a class="nav-link" href="manage-usergroup.php">User Group</a></li>
                <li class="nav-item"> <a class="nav-link" href="manage-wear.php">Wear</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="typcn typcn-film menu-icon"></i>
              <span class="menu-title">Customers</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="customers.php">View</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="typcn typcn-chart-pie-outline menu-icon"></i>
              <span class="menu-title">Sellers</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="sellers.php">View</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="typcn typcn-th-small-outline menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="product.php">View</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="typcn typcn-compass menu-icon"></i>
              <span class="menu-title">Orders</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="orders.php">View</a></li>
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
                
              <div id="propertyform">
                <div class="row tm-mt-big">
                    <div class="col-xl-20 col-lg-20 col-md-20 col-sm-20">
                        <div class="p-5 mb-20 bg-light text-dark">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="tm-block-title d-inline-block">Add Sub Category</h2>
                                    <p id="d"></p>
                                </div>
                            </div>
                            <div class="row mt-4 tm-edit-product-row">
                                <div class="col-xl-15 col-lg-15 col-md-15">
                                    <form enctype='multipart/form-data' action="./manage-subcategory.php" method="POST" class="tm-edit-product-form">
                                    <div class="input-group mb-3">
                                    <label for="category" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Category</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="category"id="category">
                                        <option disabled selected>Select Category</option>
                                            <?php
                                            $sql="SELECT * from category";
                                            $result = $conn-> query($sql);

                                            if ($result-> num_rows > 0){
                                            while($row = $result-> fetch_assoc()){
                                            echo"<option value='".$row['category_id']."'>".$row['category'] ."</option>";
                                            }
                                            }
                                            ?>
                                    </select>
                                </div> 
                                <div class="input-group mb-3">
                                    <label for="sc_name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5  col-form-label">Sub Category</label>
                                    <input id="sc_name" name="sc_name" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"required pattern="^\S[a-zA-Z\s]*$">
                                </div>
                                        <div class="input-group mb-3">
                                            <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                                <button type="submit" class="btn btn-dark" name="upload" id="upload">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table class="table" id="subcategory">
                        <thead class="thead-light">
                            <tr class="tm-bg-white">
                            <th scope="col">S.N</th>
                            <th scope="col" class="text-center">Sub Category</th>
                            <th scope="col" class="text-center">Category</th>
                            <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                            
                    </table>
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
  <script>

       
$(document).ready(function(){
    $('#category').on('change', function(){
        var catID = $(this).val();
        if(catID){
            $.ajax({
                type:'POST',
                url:'dispsubcat.php',
                data:'catid='+catID,
                success:function(html){
                    $('#subcategory').html(html); 
                }
            }); 
        }else{
            $('#subcategory').html('<option value="">Select category first</option>');
        }
    });
    
});

</script>

  <?php
    
    
    if(isset($_POST['upload']))
    {
       
        $subcatname = $_POST['sc_name'];
        $cat_id=$_POST['category'];
         $insert = mysqli_query($conn,"INSERT INTO subcategory(category_id,sub_category) VALUES ('$cat_id','$subcatname')");
 
         if($insert)
         {
            echo "<p id='d' style='color:white;'>" ."Sub category added succesfully"."</p>" ;
         }
         else
         {
            echo "<p id='d' style='color:white;'>" ."Could not add sub category"."</p>" ;
         }
     
    }
?>
</body>

</html>

