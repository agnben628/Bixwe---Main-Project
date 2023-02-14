<?php    
    include "../dbconnect.php";
    session_start();
    $id=$_GET['id'];
    $qry=mysqli_query($conn, "SELECT * FROM product, cut, users, body_type, fade, features, fit, material, pattern, texture, wear, usergroup, category, subcategory WHERE prod_id = $id and product.cut = cut.cut_id and product.brand= users.user_id and product.body_type = body_type.type_id and product.fade=fade.entry_id and product.feature = features.entry_id and product.fit = fit.fit_id and product.material = material.material_id and product.pattern = pattern.pattern_id and product.texture = texture.entry_id and product.wear = wear.wear_id and product.usergroup = usergroup.group_id and product.category = category.category_id and product.subcategory = subcategory.sub_category_id");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
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
          
          
          
        </ul>
      </nav>
      
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-xl-6 grid-margin stretch-card flex-column">
                
              <div class="row">
                
              
              <div class="row tm-mt-big">
            <div class="col-xl-20 col-lg-20 col-md-20 col-sm-20">
                <div class="p-5 mb-20 bg-light text-dark">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="tm-block-title d-inline-block">Edit Product</h4>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-15 col-lg-15 col-md-15">
                        <form enctype='multipart/form-data' action="./seller-product-view.php" method="POST" class="tm-edit-product-form">
                                <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Name</label>
                                    <input id="p_name" name="p_name" type="text" value="<?=$row1['product_name']?>"class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" required pattern="^\S[a-zA-Z\s]*$">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="description" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Description</label>
                                    <input id="p_desc" name="p_desc" type="text" value="<?=$row1['product_desc']?>"class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" rows="3" required pattern="^\S[a-zA-Z\s]*$"></input>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="price" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label" >Price</label>
                                    <input id="p_price" name="p_price" type="number" value="<?=$row1['price']?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" min="1" required pattern="^\-[0-9]+">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="qty" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Quantity</label>
                                    <input id="qty" name="qty" type="number"value="<?=$row1['quantity']?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" min="1" required pattern="^[0-9]+">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="category" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Category</label>
                                    <input id="category" name="category" type="text"value="<?=$row1['category_name']?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" required pattern="^\S[a-zA-Z\s]*$" >
                                </div>
                                <div class="input-group mb-3">
                                    <label for="subcategory" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Sub Category</label>
                                    <input id="subcategory" name="subcategory" type="text" value="<?=$row1['sub_category']?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" required pattern="^\S[a-zA-Z\s]*$">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="brand" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Brand</label>
                                    <input id="brand" name="brand" type="text"value="<?=$row1['username']?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"required pattern="^\S[a-zA-Z\s]*$">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="usergroup" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">User Group</label>
                                    <input id="usergroup" name="usergroup" type="text"value="<?=$row1['group_name']?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"required pattern="^\S[a-zA-Z\s]*$">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="cut" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Cut</label>
                                    <input id="cut" name="cut" type="text"value="<?=$row1['cut_name']?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"required pattern="^\S[a-zA-Z\s]*$">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="fit" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Fit</label>
                                    <input id="fit" name="fit" type="text"value="<?=$row1['fit_name']?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"required pattern="^\S[a-zA-Z\s]*$">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="material" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Material</label>
                                    <input id="material" name="material" type="text"value="<?=$row1['material_name']?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"required pattern="^\S[a-zA-Z\s]*$">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="pattern" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Pattern</label>
                                    <input id="pattern" name="pattern" type="text"value="<?=$row1['pattern_name']?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"required pattern="^\S[a-zA-Z\s]*$">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="texture" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Texture</label>
                                    <input id="texture" name="texture" type="text"value="<?=$row1['texture_name']?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"required pattern="^\S[a-zA-Z\s]*$">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="wear" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Wear</label>
                                    <input id="wear" name="wear" type="text" value="<?=$row1['wear_name']?>" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"required pattern="^\S[a-zA-Z\s]*$">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="file1"class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Image 1</label>
                                    <input type="file" value="<?=$row1['image1']?>"class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7-file" id="file1" name="file1">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="file2"class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Image 2</label>
                                    <input type="file" value="<?=$row1['image2']?>"class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7-file" id="file2" name="file2">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="file3"class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Image 3</label>
                                    <input type="file" value="<?=$row1['image3']?>"class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7-file" id="file3" name="file3">
                                </div>
                                <div class="input-group mb-3">
                                    <input id="prod_id" name="prod_id" type="text" value="<?=$row1['prod_id']?>" hidden class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <button type="submit" class="btn btn-dark" name="update" id="upload">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div> 
                        <?php
        }
    }
    ?>
                    </div>
                </div>
            </div>
                        <div class="table-responsive">
                        <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th class="ml-5">ID</th>
                        <th colspan="3">Image</th>
                        <th>Product</th>
                        <th>Product Description</th>
                        <th>Category</th>
                        <th>Sub Category	</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th colspan=3>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM product,subcategory,category WHERE product.category=category.category_id AND product.subcategory=subcategory.sub_category_id" ;
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
                        <td><?=$row["price"]?></td>  
                        <td><?=$row["quantity"]?></td>     
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
                            <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                            <?php
                              if($row['status']==1){
                                echo "<span class='badge_active'><a href='?type=status&operation=deactive&id=".$row['prod_id']."' style='color:white;text-decoration:none;'>Active</a></span>";
                              } 
                              else{
                                echo "<span class='badge_deactive'><a href='?type=status&operation=active&id=".$row['prod_id']."' style='color:white;text-decoration:none;'>Inactive</a></span>";
                              }

                            ?>
                              <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                            </button>
                          </div>

                        </td>                       
                        
                      </tr>
                      <?php
                             $count=$count+1;
                            }
                        }
                        ?>
                    </tbody>
                  </table>
                </div>
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
    include_once "../dbconnect.php";
    
    
  
    if(isset($_GET['type']) && $_GET['type']!=''){
      $type=($_GET['type']);
    
      if($type=='status'){
        $operation=($_GET['operation']);
        $id=($_GET['id']);
    
        if($operation=='active'){
          $status='1';
        }
        else{
          $status='0';
        }
        $update_status="UPDATE product set status='$status'where prod_id='$id'";
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

