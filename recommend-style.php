<?php    
    include "dbconnect.php";
    session_start();
    if(!(isset($_SESSION['email'])))
    {
      header("Location: login.php");
    }
    if(isset($_SESSION['email']))
    {
        $email = $_SESSION["email"];
        $url = 'http://127.0.0.1:5000/recommend';
        $data = json_encode(array('texts' => $email));
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'POST',
                'content' => $data,
            ),
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $result = json_decode($result, true);
        $username = $result['username'];
        $email = $result['email'];
        $weight = $result['weight'];
        $height = $result['height'];
        $gender = $result['gender'];
        $body_type = $result['body_type'];
        $fit = $result['fit'];
        $every_day_style = $result['every_day_style'];
        $style = $result['style'];
        $array = explode(",", $style);
        $st1 = $array[0];
        $st2 = $array[1];
        $st3 = $array[2];
        $tops = $result['tops'];
        $array = explode(",", $tops);
        $t1 = $array[0];
        $t2 = $array[1];
        $t3 = $array[2];
    
        $skirts = $result['skirts'];
        $array = explode(",", $skirts);
        $sk1 = $array[0];
        $sk2 = $array[1];
        $sk3 = $array[2];
    
        $bottom = $result['bottom'];
        $array = explode(",", $bottom);
        $b1 = $array[0];
        $b2 = $array[1];
        $b3 = $array[2];
     
        
    }
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
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
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
                                <a href="javascript:;">Styles</a>
                                <ul>
                                <li><a href="recommend-style.php">Quiz Results</a></li>    
                                <li><a href="recommend-bodytype.php">Body Type</a></li>
                                    
                                    
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
    <?php    
    
    $email = $_SESSION['email'];
    $sq = "SELECT quiz_taken from users where email = '$email'";
    $re = mysqli_query($conn, $sq);
    if ($re-> num_rows > 0){
        while ($row=$re-> fetch_assoc()) {
            if($row['quiz_taken'] == 0)
            {
                

            
    
?>
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>Bixwe</h4>
                                <span>Wear what suites you...</span>
                                <a style="text-decoration:none;" href="know-your-style.php"><button class="btn btn-dark">
                                    Check Now!
                                    
                                    
                            </button></a>
                            </div>
                            <img src="assets/images/left-banner-image.jpg" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <?php
            }
        }
    }

    ?>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
</br>
</br>
</br>
<?php
if($gender == "Female")
{
?>
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Related to your style</h2>
                        <span>Check out what suites you based on the style.</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                        <?php
                            $sql="SELECT * from recommend r, wear w where r.wear_id = w.wear_id and ((w.wear_name = '$st1') OR (w.wear_name = '$st2') OR (w.wear_name = '$st3')) and r.o_desc LIKE '%Women%'";

                            $result = $conn-> query($sql);
                            if ($result-> num_rows > 0){
                            while($row = $result-> fetch_assoc()){   
                        ?>
                            <div class="item">
                                <div class="thumb">
                                   
                                    <img src="<?php echo $row['outfit'];?>" alt="">
                                </div>
                                <div class="down-content">
                                    <span><?php echo $row['o_desc'];?></span>
                                    
                                </div>
                            </div>
                            <?php
                            }
                        }
                        ?>                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Related to your favourites</h2>
                        <span>Check out what suites you from your picks of tops.</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                        <?php
                            $sql="SELECT * from recommend r, wear w where r.wear_id = w.wear_id and r.o_desc LIKE '%Women%' and ((w.wear_name = '$st1') OR (w.wear_name = '$st2') OR (w.wear_name = '$st3')) and ((r.o_desc LIKE '%$t1%') OR (r.o_desc LIKE '%$t2%') OR (r.o_desc LIKE '%$t3%'))";

                            $result = $conn-> query($sql);
                            if ($result-> num_rows > 0){
                            while($row = $result-> fetch_assoc()){   
                        ?>
                            <div class="item">
                                <div class="thumb">
                                   
                                    <img src="<?php echo $row['outfit'];?>" alt="">
                                </div>
                                <div class="down-content">
                                    <span><?php echo $row['o_desc'];?></span>
                                    
                                </div>
                            </div>
                            <?php
                            }
                        }
                        ?>                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Related to your favourites</h2>
                        <span>Check out what suites you from your picks of skirts.</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                        <?php
                            $sql="SELECT * from recommend r, wear w where r.wear_id = w.wear_id and r.o_desc LIKE '%Women%' and((w.wear_name = '$st1') OR (w.wear_name = '$st2') OR (w.wear_name = '$st3')) and ((r.o_desc LIKE '%$sk1%') OR (r.o_desc LIKE '%$sk2%') OR (r.o_desc LIKE '%$sk3%'))";

                            $result = $conn-> query($sql);
                            if ($result-> num_rows > 0){
                            while($row = $result-> fetch_assoc()){   
                        ?>
                            <div class="item">
                                <div class="thumb">
                                   
                                    <img src="<?php echo $row['outfit'];?>" alt="">
                                </div>
                                <div class="down-content">
                                    <span><?php echo $row['o_desc'];?></span>
                                    
                                </div>
                            </div>
                            <?php
                            }
                        }
                        ?>                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Related to your favourites</h2>
                        <span>Check out what suites you from your picks of bottom wear.</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                        <?php
                            $sql="SELECT * from recommend r, wear w where r.wear_id = w.wear_id and r.o_desc LIKE '%Women%' and ((w.wear_name = '$st1') OR (w.wear_name = '$st2') OR (w.wear_name = '$st3')) and ((r.o_desc LIKE '%$b1%') OR (r.o_desc LIKE '%$b2%') OR (r.o_desc LIKE '%$b3%'))";

                            $result = $conn-> query($sql);
                            if ($result-> num_rows > 0){
                            while($row = $result-> fetch_assoc()){   
                        ?>
                            <div class="item">
                                <div class="thumb">
                                   
                                    <img src="<?php echo $row['outfit'];?>" alt="">
                                </div>
                                <div class="down-content">
                                    <span><?php echo $row['o_desc'];?></span>
                                    
                                </div>
                            </div>
                            <?php
                            }
                        }
                        ?>                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <?php
    }
   
else
{
?>
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Related to your style</h2>
                        <span>Check out what suites you based on the style.</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                        <?php
                            $sql="SELECT * from recommend r, wear w where r.wear_id = w.wear_id and r.o_desc LIKE '%Men%' and ((w.wear_name = '$st1') OR (w.wear_name = '$st2') OR (w.wear_name = '$st3'))";

                            $result = $conn-> query($sql);
                            if ($result-> num_rows > 0){
                            while($row = $result-> fetch_assoc()){   
                        ?>
                            <div class="item">
                                <div class="thumb">
                                   
                                    <img src="<?php echo $row['outfit'];?>" alt="">
                                </div>
                                <div class="down-content">
                                    <span><?php echo $row['o_desc'];?></span>
                                    
                                </div>
                            </div>
                            <?php
                            }
                        }
                        ?>                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Related to your favourites</h2>
                        <span>Check out what suites you from your picks of Top Wear.</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                        <?php
                            $sql="SELECT * from recommend r, wear w where r.wear_id = w.wear_id and r.o_desc LIKE '%Men%' and((w.wear_name = '$st1') OR (w.wear_name = '$st2') OR (w.wear_name = '$st3')) and ((r.o_desc LIKE '%$t1%') OR (r.o_desc LIKE '%$t2%') OR (r.o_desc LIKE '%$t3%'))";

                            $result = $conn-> query($sql);
                            if ($result-> num_rows > 0){
                            while($row = $result-> fetch_assoc()){   
                        ?>
                            <div class="item">
                                <div class="thumb">
                                   
                                    <img src="<?php echo $row['outfit'];?>" alt="">
                                </div>
                                <div class="down-content">
                                    <span><?php echo $row['o_desc'];?></span>
                                    
                                </div>
                            </div>
                            <?php
                            }
                        }
                        ?>                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Starts ***** -->
    
    <!-- ***** Kids Area Ends ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Related to your favourites</h2>
                        <span>Check out what suites you from your picks of Bottom Wear.</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                        <?php
                            $sql="SELECT * from recommend r, wear w where r.wear_id = w.wear_id and r.o_desc LIKE '%Men%' and ((w.wear_name = '$st1') OR (w.wear_name = '$st2') OR (w.wear_name = '$st3')) and ((r.o_desc LIKE '%$b1%') OR (r.o_desc LIKE '%$b2%') OR (r.o_desc LIKE '%$b3%'))";

                            $result = $conn-> query($sql);
                            if ($result-> num_rows > 0){
                            while($row = $result-> fetch_assoc()){   
                        ?>
                            <div class="item">
                                <div class="thumb">
                                   
                                    <img src="<?php echo $row['outfit'];?>" alt="">
                                </div>
                                <div class="down-content">
                                    <span><?php echo $row['o_desc'];?></span>
                                    
                                </div>
                                
                            </div>
                            <?php
                            }
                        }
                        ?>                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <?php
    }
    ?>  
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

  </body>
</html>