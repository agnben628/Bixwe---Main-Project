<?php    
    include "../dbconnect.php";
    session_start();
    
    $count=0;
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
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
    </style>
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
  <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    
    <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-icons.css" rel="stylesheet">
  
  <link rel="stylesheet" href="productdetailstyle.css"/>
<meta charset="UTF-8">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  
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
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">        
        <div class="row">
        <div class="row mt-8 tm-edit-product-row">
            <div class="d-flex p-2">
                <form enctype='multipart/form-data' action="add-new-color.php" method="POST" class="tm-edit-product-form">
                    <div class="input-group mb-3">
                    <label for="product" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Product</label>
                        <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="product" id="product">
                            <option disabled selected>Select Product</option>
                                <?php
                                $user=$_SESSION['username'];
                                $sql="SELECT * from product, users where product.brand=users.user_id and users.user_id=(select user_id from users where username='$user')";
                                $result = $conn-> query($sql);

                                if ($result-> num_rows > 0){
                                while($row = $result-> fetch_assoc()){
                                echo "<option value='".$row['prod_id']."'>".$row['product_name'] ."</option>";
                                }
                                }
                                ?>
                        </select>
                    </div>
                    
                    <div class="input-group mb-3">
                        <label for="color" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Color</label>
                        <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="color" id="color">
                            <option disabled selected>Select Color</option>
                                <?php
                                $sql="SELECT * from colour where status=1";
                                $result = $conn-> query($sql);

                                if ($result-> num_rows > 0){
                                while($row = $result-> fetch_assoc()){
                                echo "<option value='".$row['color_id']."'>".$row['color_name'] ."</option>";
                                }
                                }
                                ?>
                        </select>
                    </div> 
                    </div>
                    <div class="input-group mb-3">
                      <input type="submit" value="Save" name="addcolor" id="addcolor" class="btn btn-primary"></input>
                    </div>
                </form>
            </div>
        </div>
                            
            <div class="col-md-12">
              <div class="card">
              <div id="invoice">
                
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
$(document).ready(function(){
    $('#add-qty').on('click', function(){
        
        
            $.ajax({
                type:'POST',
                url:'add-quantity.php',
                success:function(html){
                    $('#quantityform').html(html); 
                }
            }); 
        
    });
    
});
</script>
<?php
    
    if(isset($_POST['addcolor']))
    {
      $prod= $_POST['product'];
      $color = $_POST['color'];
      
      
      $insert = mysqli_query($conn,"INSERT INTO product_color_var(product_id, color_id) 
      VALUES ($prod,$color)");
 
        if($insert)
        {
        echo "<p id='d' >" ."Product variation added succesfully"."</p>" ;
        }
        else
        {
        echo "<p id='d' >" ."Could not add product variation"."</p>" ;
        }
        echo'<script>const response = confirm("Do you want to add more?")</script>';
        echo'<script> 
        count=0;
        if (response) {
          count=count+1;
      } else {
          
      }</script>';  
       
    }    
    
    
?>
</body>

</html>

