<?php    
    include "dbconnect.php";
    session_start();
    $id=$_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bixwe</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-icons.css" rel="stylesheet">

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <style>
        .text-bold {
            font-weight: 800;
        }

        text-color {
            color: #0093c4;
        }

        /* Main image - left */
        .main-img img {
            width: 100%;
        }

        /* Preview images */
        .previews img {
            width: 100%;
            height: 140px;
        }

        .main-description .category {
            text-transform: uppercase;
            color: #0093c4;
        }

        .main-description .product-title {
            font-size: 2.5rem;
        }

        .old-price-discount {
            font-weight: 600;
        }

        .new-price {
            font-size: 2rem;
        }

        .details-title {
            text-transform: uppercase;
            font-weight: 600;
            font-size: 1.2rem;
            color: #757575;
        }

        .buttons .block {
            margin-right: 5px;
        }

        .quantity input {
            border-radius: 0;
            height: 40px;

        }


        .custom-btn {
            text-transform: capitalize;
            background-color: #0093c4;
            color: white;
            width: 150px;
            height: 40px;
            border-radius: 0;
        }

        .custom-btn:hover {
            background-color: #0093c4 !important;
            font-size: 14px;
            color: white !important;
        }

        .similar-product img {
            height: 400px;
        }

        .similar-product {
            text-align: left;
        }

        .similar-product .title {
            margin: 17px 0px 4px 0px;
        }

        .similar-product .price {
            font-weight: bold;
        }


        /* Small devices (landscape phones, less than 768px) */
        @media (max-width: 767.98px) {

            /* Make preview images responsive  */
            .previews img {
                width: 100%;
                height: auto;
            }

        }
    

.nav-link[data-toggle].collapsed:after {
    content: " ";
}
.nav-link[data-toggle]:not(.collapsed):after {
    content: " ";
}
</style>
</head>
<body>
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            

            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
            <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>        
            <li class="nav-item">
                        <a class="nav-link" href="products.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="wishlist.php">Wishlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart</a>
                    </li>
                </ul>
                
                <form class="d-flex">
                    <input class="form-control me-3" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
                &emsp;&emsp;&emsp;&emsp;
                  &emsp;&emsp;         
                <ul class="navbar-nav mr-lg-2">
                   <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              
              <span class="nav-profile-name">Account</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <button type="button" class="btn btn-dark btn-sm btn-icon-text">
                Profile
              </button>
              <button type="button" class="btn btn-dark btn-sm btn-icon-text">
                            <?php
                              if(!(isset($_SESSION['email']))){
                                echo "<span class='badge_active'><a href='login.php' style='color:white;text-decoration:none;'>Login</a></span>";
                              } 
                              else{
                                echo "<span class='badge_deactive'><a href='logout.php' style='color:white;text-decoration:none;'>Logout</a></span>";
                              }

                            ?>
                                                       
                            </button>
                            <?php 
                            if(isset($_SESSION['email'])){
                            $email=$_SESSION['email'];
                            }
                            ?>
            </div>
          </li>
          
        </ul>
            </div>
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
      
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="admin_index.php">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Filters</span>
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Women</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
              <?php
                                
                                $sql="SELECT * from category,usergroup where category.usergroup_id=1 and category.usergroup_id=usergroup.group_id";
                                $result=$conn-> query($sql);
                                $count=1;
                                if ($result-> num_rows > 0){
                                while ($row=$result-> fetch_assoc()) {
                                ?>
                <li class="nav-item"> <a class="nav-link" href="filter-women.php?cat=<?=$row["category_id"]?>"><?=$row["category_name"]?></a></li>
                <?php
                                }
                              }
                              ?>
                
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Men</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
              <?php
                                
                                $sql="SELECT * from category,usergroup where category.usergroup_id=2 and category.usergroup_id=usergroup.group_id";
                                $result=$conn-> query($sql);
                                $count=1;
                                if ($result-> num_rows > 0){
                                while ($row=$result-> fetch_assoc()) {
                                ?>
                <li class="nav-item"> <a class="nav-link" href="filter-men.php?cat=<?=$row["category_id"]?>"><?=$row["category_name"]?></a></li>
                <?php
                                }
                              }
                              ?>
                
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Kids</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
              <?php
                                
                                $sql="SELECT * from category,usergroup where category.usergroup_id=3 and category.usergroup_id=usergroup.group_id";
                                $result=$conn-> query($sql);
                                $count=1;
                                if ($result-> num_rows > 0){
                                while ($row=$result-> fetch_assoc()) {
                                ?>
                <li class="nav-item"> <a class="nav-link" href="filter-kids.php?cat=<?=$row["category_id"]?>"><?=$row["category_name"]?></a></li>
                <?php
                                }
                              }
                              ?>
                
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Brands</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
              <?php
                                
                                $sql="SELECT * from users where users.role='Seller'";
                                $result=$conn-> query($sql);
                                $count=1;
                                if ($result-> num_rows > 0){
                                while ($row=$result-> fetch_assoc()) {
                                ?>
                <li class="nav-item"> <a class="nav-link" href="filter-brand.php?id=<?=$row["user_id"]?>"><?=$row["username"]?></a></li>
                <?php
                                }
                              }
                              ?>
                
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Size</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
              <?php
                                
                                $sql="SELECT * from size";
                                $result=$conn-> query($sql);
                                $count=1;
                                if ($result-> num_rows > 0){
                                while ($row=$result-> fetch_assoc()) {
                                ?>
                <li class="nav-item"> <a class="nav-link" href="filter-size.php?size=<?=$row["size_id"]?>"><?=$row["size_name"]?></a></li>
                <?php
                                }
                              }
                              ?>
                
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic5">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Colors</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic5">
              <ul class="nav flex-column sub-menu">
              <?php
                                
                                $sql="SELECT * from colour";
                                $result=$conn-> query($sql);
                                $count=1;
                                if ($result-> num_rows > 0){
                                while ($row=$result-> fetch_assoc()) {
                                ?>
                <li class="nav-item"> <a class="nav-link" href="filter-color.php?cat=<?=$row["color_id"]?>"><?=$row["color_name"]?></a></li>
                <?php
                                }
                              }
                              ?>
                
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="typcn typcn-compass menu-icon"></i>
              <span class="menu-title">Price</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="filter-price.php?min=100&max=500">100-500</a></li>
                <li class="nav-item"> <a class="nav-link" href="filter-price.php?min=501&max=1000">501-1000</a></li>
                <li class="nav-item"> <a class="nav-link" href="filter-price.php?min=1001&max=2000">1001-2000</a></li>
              </ul>
            </div>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div id="productdetails">
                            </div>
                            <div class="container similar-products my-4">
        
        <div class="row">
        <?php
      $sql="SELECT * from product,users where product.brand=users.user_id and product.brand=$id";
      $result = $conn-> query($sql);
      if ($result-> num_rows > 0){
      while($row = $result-> fetch_assoc()){ 
      
    ?>
            <div class="col-md-3">
                <div class="similar-product">
                <a href="product-detail.php?products=<?php echo $row['prod_id'];?>"><img class="w-100" src="<?php echo $row['image1']?>" alt="Preview"></a>
                    <p class="title"><?php echo $row['product_name']?></p>
                    <p class="price"><?php echo $row['username']?></p>
                </div>
            </div>
            <?php
      }}?>
            
            
        </div>
    </div>
          

            

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
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
      var prodID = $(this).data('custom-value');
          if(prodID){
            $.ajax({
                type:'POST',
                url:'product-detail.php',
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
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"2ca523eb82d7f0c7c74faf765e82ad1a2","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>

</body>

</html>

