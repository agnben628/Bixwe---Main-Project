<?php
include "../dbconnect.php";
session_start();
if(!(isset($_SESSION['email'])))
    {
      header("Location: ../login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
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

  
  


	<title>Best Seller Performance Report</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>


	<style>
		table {
			border-collapse: collapse;
			width: 50%;
			margin-bottom: 20px;
		}
		table, th, td {
			border: 1px solid black;
			padding: 5px;
			text-align: center;
		}
		th {
			background-color: #f2f2f2;
		}
	</style>
    
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
            <a class="nav-link" href="admin_index.php">
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
            <a class="nav-link" data-toggle="collapse" href="#recommend" aria-expanded="false" aria-controls="form-elements">
              <i class="typcn typcn-film menu-icon"></i>
              <span class="menu-title">Recommendation</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="recommend">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="for-recommendation.php">Add Outfits</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="seller-analysis.php">Analysis</a></li>
                <li class="nav-item"> <a class="nav-link" href="best-seller.php">Best Seller</a></li>
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
      <div class="container-fluid">
<?php

// Connect to the database
// Retrieve sales data for the specified year and month
if (isset($_GET['year']) && isset($_GET['month'])) {
    $year = $_GET['year'];
    $month = $_GET['month'];
    $sq= "SELECT s.username as brand,s.user_id as brand_id, SUM(oi.total_price) AS total_sales FROM order_items oi 
JOIN orders o ON oi.order_id = o.order_id 
JOIN product p ON oi.product_id = p.prod_id 
JOIN users s ON p.brand = s.user_id
WHERE YEAR(o.order_date) = $year AND MONTH(o.order_date) = $month 
GROUP BY s.username
ORDER BY total_sales DESC
LIMIT 1";
    $res = mysqli_query($conn, $sq);
    if (mysqli_num_rows($res) > 0) {
        // Output the total revenue for the seller for the specified month and year
        $row = mysqli_fetch_assoc($res);
        echo "<h4>Best Seller Performance Report for $month/$year</h4>";
        $max_revenue = $row['total_sales'];
        $best_seller= $row['brand'];
        $seller= $row['brand_id'];
        echo "<p>Best Seller : $best_seller</p>";
        echo "<p>Total Revenue : $max_revenue</p>";
  

    // Generate the sales report
    
  
    echo "<table>";

   
  $sql=  "SELECT p.product_name, o.order_date, oi.total_price, o.c_name
FROM order_items oi
INNER JOIN orders o ON oi.order_id = o.order_id
INNER JOIN product p ON oi.product_id = p.prod_id
WHERE p.brand = $seller
AND MONTH(o.order_date) = $month
AND YEAR(o.order_date) = $year";
    // Calculate the sales metrics
    $result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Output the total revenue for the seller for the specified month and year
    echo "<table class='table table-striped project-orders-table' width='50%'>";
    echo "<tr><th>Product_Name</th><th>Customer_Name</th><th>Date</th><th>Amount</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['product_name']."</td>";
        echo "<td>".$row['c_name']."</td>";
        echo "<td>".$row['order_date']."</td>";
        echo "<td>".$row['total_price']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
    

   ?>
   <div class="card">
    <?php
    $sql3 = "SELECT count(oi.product_id) AS number, p.product_name
    FROM order_items oi 
    JOIN orders o ON oi.order_id = o.order_id 
    JOIN product p ON oi.product_id = p.prod_id 
    WHERE  p.brand = $seller AND YEAR(o.order_date) = $year AND MONTH(o.order_date) = $month GROUP BY oi.product_id";
    
    $result3 = mysqli_query($conn, $sql3);
    
    // Format the sales data for use with Chart.js
    $labels = array();
    $data = array();
    while ($row = mysqli_fetch_assoc($result3)) {
        array_push($labels, $row['product_name']);
        array_push($data, $row['number']);
    }

   
    $labels_json = json_encode($labels);
    $data_json = json_encode($data);
    // Display the sales graph
    // echo "<h4>Seller Specific Performance Report for $month/$year</h4>";
    echo "<canvas id='sales-chart'></canvas>";
    echo "<script>";
    echo "var ctx = document.getElementById('sales-chart').getContext('2d');";
    echo "var salesChart = new Chart(ctx, {";
    echo "    type: 'bar',";
    echo "    data: {";
    echo "        labels: $labels_json,";
    echo "        datasets: [{";
    echo "            label: 'Sales',";
    echo "            data: $data_json,";
    echo "            backgroundColor: [";
    echo "                'rgba(255, 99, 132, 0.2)',";
    echo "                'rgba(54, 162, 235, 0.2)',";
    echo "                'rgba(255, 206, 86, 0.2)',";
    echo "                'rgba(75, 192, 192, 0.2)',";
    echo "                'rgba(153, 102, 255, 0.2)',";
    echo "                'rgba(255, 159, 64, 0.2)'";
    echo "            ],";
    echo "            borderColor: [";
    echo "                'rgba(255, 99, 132, 1)',";
    echo "                'rgba(54, 162, 235, 1)',";
    echo "                'rgba(255, 206, 86, 1)',";
    echo "                'rgba(75, 192, 192, 1)',";
    echo "                'rgba(153, 102, 255, 1)',";
    echo "                'rgba(255, 159, 64, 1)'";
    echo "            ],";
    echo "            borderWidth: 1";
    echo "        }]";
    echo "    }"; 
    echo "});";
    echo "</script>";

    // Calculate the balance
 
    
    // $sql4 ="SELECT SUM(total_amount) AS total_revenue FROM order_items oi INNER JOIN orders o ON oi.order_id = o.order_id
    // INNER JOIN product p ON oi.product_id = p.prod_id
    // WHERE p.brand = $seller
    // AND YEAR(o.order_date) = $year
    // AND MONTH(o.order_date) < $month";
    // // Calculate the sales metrics
    // $result4 = mysqli_query($conn, $sql4);
    // $previous_sales = mysqli_fetch_assoc($result4)['total_revenue'];
    // $balance = $previous_sales - $total_revenue;

    // // Display the balance
    // echo "<h2>Revenue as of $month/$year</h2>";
    // echo "<p>Previous sales: $previous_sales</p>";
    // echo "<p>Total sales: $total_revenue</p>";
    

    
} 
    
}

?>
</div>
</div>
</div>
</body>
</html>