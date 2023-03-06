<?php    
    include "dbconnect.php";
    
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Bixwe</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
     <link rel="stylesheet" type="text/css" href="translate.css">
    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
  <script src=
        "https://code.jquery.com/jquery-3.3.1.min.js">
    </script>
    <link rel="stylesheet" href="astyle.css">
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    <link rel="stylesheet" href="astyle2.css">
  <link rel="stylesheet" href="productdetailstyle.css"/>
<meta charset="UTF-8">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
 
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
<style>
@media (min-width: 1025px) {
  .h-custom {
  height: 100vh !important;
  }
  }
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

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <!-- <a href="index.php" class="logo">
                            <img src="assets/images/logo.png">
                        </a> -->
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="myorders.php">My Orders</a></li>
                           
                            <li class="submenu">
                                <a href="javascript:;">Settings</a>
                                <ul>
                                <li><a href="profile-info.php">Profile Information</a></li>    
                                <li><a href="manage-address.php">Manage Address</a></li>
                                    
                                    
                                </ul>
                            </li>
                            <li class="submenu">
                                
                                 <a href="javascript:;"><?php
                            if((isset($_SESSION['email'])))
                            {
                                echo $_SESSION['username'];
                            }
                                else
                                {
                                    echo "Account";
                                } ?> </a>
                          
                                <ul>
                                    
                                <?php
                              if(!(isset($_SESSION['email']))){
                                echo "<li><a href='login.php'>Login</a></li>";
                              } 
                              else{
                                echo "<li><a href='logout.php'>Logout</a></li>";
                              }

                            ?>
                                    
                                </ul>
                            </li>
                            
                   
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4 style="color:white;">........  </h4>
                                <span style="color:white;">...</span>
                                <div class="main-border-button">
                                    <p style="color:white;">...  
                                    
                            </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                            </div>
                <div class="col-lg-12">
                <a href="add-address.php"><i class="bi bi-plus"></i>Add new address</a><br><br>
                    <div class="module-body table">
                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Address</th>
                    <th colspan=2>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        
                    <?php 
                    $email=$_SESSION['email'];
                    $query=mysqli_query($conn,"select * from address WHERE user_id=(select user_id from users where email='$email') and status=1");
                    $cnt=1;
                    while($row=mysqli_fetch_array($query))
                    {
                    ?>
                    <tr>
                    <td><?php echo $cnt;?></td>
                    <td><?php echo $row['housename'];?>(H), <?php echo $row['postoffice'];?> P.O,<?php echo $row['locality'];?>, <?php echo $row['city'];?>, <?php echo $row['district'];?>, <?php echo $row['pincode'];?> </td>
                    
                    <td><div class="d-flex align-items-center">
                            <a href="edit-address.php?id=<?php echo $row['address_id']?>"style="color:white;text-decoration:none;"><button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                              </a>                          
                            </button>
                            <a href="delete-address.php?id=<?php echo $row['address_id']?>"style="color:white;text-decoration:none;"><button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Delete
                              </a>                          
                            </button>
                          </div></td>
                </tr>
                    <?php $cnt=$cnt+1; } ?>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    
    <!-- ***** Kids Area Ends ***** -->

    <!-- ***** Explore Area Starts ***** -->
    
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->
    
    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your Name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-2">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        
                        <ul>
                            
                            <li><a href="#">bixwe@company.com</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Men Shopping</a></li>
                        <li><a href="#">Women Shopping</a></li>
                        <li><a href="#">Kids Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="index.php">Homepage</a></li>
                        <li><a href="about.html">About Us</a></li>
                        
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 Bixwe Co., Ltd. All Rights Reserved. 
                        
                        
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
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
    if(isset($_POST['editaddress']))
    {
      
      $housename = $_POST['housename'];
      $postoffice = $_POST['postoffice'];
      $locality = $_POST['locality'];
      $city = $_POST['city'];
      $district = $_POST['district'];
        $pincode = $_POST['pincode'];
        $address = $_POST['address'];
      $update = mysqli_query($conn,"UPDATE address SET housename='$housename',postoffice='$postoffice', locality='$locality', city='$city', district='$district', pincode='$pincode' where address_id=$address");
 
        if($update)
        {
            echo'<script>alert("Address updated")</script>';
        }
        else
        {
            echo'<script>alert("Address not updated")</script>';
        }
        
    } 
       
    if(isset($_POST['addrdel']))
    {
      
   
        $address = $_POST['address'];
      $update = mysqli_query($conn,"UPDATE address SET status=0 where address_id=$address");
 
        if($update)
        {
            echo'<script>alert("Address deleted")</script>';
        }
        else
        {
            echo'<script>alert("Address not deleted")</script>';
        }
        
    }    
    
    
?>
  </body>
</html>