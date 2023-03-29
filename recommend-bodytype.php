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
        
        $gender = $result['gender'];
        $body_type = $result['body_type'];
        
        $url = 'http://127.0.0.1:5000/bodytype';
        $data = json_encode(array('texts' => $body_type));
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'POST',
                'content' => $data,
            ),
        );
        $cont  = stream_context_create($options);
        $res = file_get_contents($url, false, $cont);
        $res = json_decode($res, true);
        $tops = $res['tops'];
        if($tops != "None")
        {
        $array = explode(",", $tops);
        $top1 = $array[0];
        $top2 = $array[1];
        $top3 = $array[2];
        $top4 = $array[3];
        $top5 = $array[4];
        $top6 = $array[5];
        }
        
        $jackets = $res['jackets'];
        if($jackets != "None")
        {
        $array = explode(",", $jackets);
        $jacket1 = $array[0];
        $jacket2 = $array[1];
        $jacket3 = $array[2];
        $jacket4 = $array[3];
        $jacket5 = $array[4];
        }
        $cardigans = $res['cardigans'];
        if($cardigans != "None")
        {
        $array = explode(",", $cardigans);
        $cardigan1 = $array[0];
        $cardigan2 = $array[1];
        $cardigan3 = $array[2];
        $cardigan4 = $array[3];
        $cardigan5 = $array[4];
        }
        $coats = $res['coats'];
        if($coats != "None")
        {
        $array = explode(",", $coats);
        $coat1 = $array[0];
        $coat2 = $array[1];
        $coat3 = $array[2];
        $coat4 = $array[3];
        $coat5 = $array[4];
        }
        $trousers = $res['trousers'];
        if($trousers != "None")
        {
        $array = explode(",", $trousers);
        $trousers1 = $array[0];
        $trousers2 = $array[1];
        $trousers3 = $array[2];
        $trousers4 = $array[3];
        $trousers5 = $array[4];
        }
        $jeans = $res['jeans'];
        if($jeans != "None")
        {
        $array = explode(",", $jeans);
        $jeans1 = $array[0];
        $jeans2 = $array[1];
        $jeans3 = $array[2];
        $jeans4 = $array[3];
        $jeans5 = $array[4];
        }
        $skirts = $res['skirts'];
        if($skirts != "None")
        {
        $array = explode(",", $skirts);
        $skirts1 = $array[0];
        $skirts2 = $array[1];
        $skirts3 = $array[2];
        $skirts4 = $array[3];
        $skirts5 = $array[4];
        }
        $dress = $res['dress'];
        if($dress != "None")
        {
        $array = explode(",", $dress);
        $dress1 = $array[0];
        $dress2 = $array[1];
        $dress3 = $array[2];
        $dress4 = $array[3];
        $dress5 = $array[4];
        }
        $blazers = $res['blazers'];
        if($blazers != "None")
        {
        $array = explode(",", $blazers);
        $blazers1 = $array[0];
        $blazers2 = $array[1];
        $blazers3 = $array[2];
        $blazers4 = $array[3];
        $blazers5 = $array[4];
        }
        $tshirts = $res['tshirts'];
        if($tshirts != "None")
        {
        $array = explode(",", $tshirts);
        $tshirts1 = $array[0];
        $tshirts2 = $array[1];
        $tshirts3 = $array[2];
        $tshirts4 = $array[3];
        $tshirts5 = $array[4];
        }
        $shirts = $res['shirts'];
        if($shirts != "None")
        {
        $array = explode(",", $shirts);
        $shirts1 = $array[0];
        $shirts2 = $array[1];
        $shirts3 = $array[2];
        $shirts4 = $array[3];
        $shirts5 = $array[4];
        }
        $jumpers = $res['jumpers'];
        if($jumpers != "None")
        {
        $array = explode(",", $jumpers);
        $jumpers1 = $array[0];
        $jumpers2 = $array[1];
        $jumpers3 = $array[2];
        $jumpers4 = $array[3];
        $jumpers5 = $array[4];
        }
        $sweats = $res['sweats'];
        if($sweats != "None")
        {
        $array = explode(",", $sweats);
        $sweats1 = $array[0];
        $sweats2 = $array[1];
        $sweats3 = $array[2];
        $sweats4 = $array[3];
        $sweats5 = $array[4];
        }
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
<section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Related to your Body Type <?php echo "\n\n".$body_type;?></h2>
                        
                    </div>
                </div>
            </div>
        </div>
</section>
<?php
if($tops != "None")
{
?>
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Tops</h2>
                        <span>Check out what suites you based on your body type.</span>
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
                            $sql="SELECT * from rec_bodytype r, body_type b where r.type_id = b.type_id and b.type_id = (select type_id from body_type where body_type_name = '$body_type') and (r.o_desc LIKE '%Tops%') and ((r.o_desc LIKE '%$top1%') OR (r.o_desc LIKE '%$top2%' ) OR (r.o_desc LIKE '%$top3%') OR (r.o_desc LIKE '%$top4%') OR (r.o_desc LIKE '%$top5%'))";

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
    
    <!-- ***** Women Area Starts ***** -->
    
    <?php
    }

?>
  
  
  <?php
if($jackets != "None")
{
?>
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Jackets</h2>
                        <span>Check out what suites you based on your body type.</span>
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
                            $sql="SELECT * from rec_bodytype r, body_type b where r.type_id = b.type_id and b.type_id = (select type_id from body_type where body_type_name = '$body_type') and (r.o_desc LIKE '%Jackets%') and ((r.o_desc LIKE '%$jacket1%') OR (r.o_desc LIKE '%$jacket2%') OR (r.o_desc LIKE '%$jacket3%') OR (r.o_desc LIKE '%$jacket4%') OR (r.o_desc LIKE '%$jacket5%'))";

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
    
    <!-- ***** Women Area Starts ***** -->
    
    <?php
    }

?>

<?php
if($cardigans != "None")
{
?>
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Cardigans</h2>
                        <span>Check out what suites you based on your body type.</span>
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
                            $sql="SELECT * from rec_bodytype r, body_type b where r.type_id = b.type_id and b.type_id = (select type_id from body_type where body_type_name = '$body_type') and (r.o_desc LIKE '%Cardigans%') and ((r.o_desc LIKE '%$cardigan1%') OR (r.o_desc LIKE '%$cardigan2%') OR (r.o_desc LIKE '%$cardigan3%') OR (r.o_desc LIKE '%$cardigan4%') OR (r.o_desc LIKE '%$cardigan5%'))";

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
    
    <!-- ***** Women Area Starts ***** -->
    
    <?php
    }

?>

<?php
if($coats != "None")
{
?>
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Coats</h2>
                        <span>Check out what suites you based on your body type.</span>
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
                            $sql="SELECT * from rec_bodytype r, body_type b where r.type_id = b.type_id and b.type_id = (select type_id from body_type where body_type_name = '$body_type') and (r.o_desc LIKE '%Coats%') and ((r.o_desc LIKE '%$coat1%') OR (r.o_desc LIKE '%$coat2%') OR (r.o_desc LIKE '%$coat3%') OR (r.o_desc LIKE '%$coat4%') OR (r.o_desc LIKE '%$coat5%'))";

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
    
    <!-- ***** Women Area Starts ***** -->
    
    <?php
    }

?>

<?php
if($trousers != "None")
{
?>
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Trousers</h2>
                        <span>Check out what suites you based on your body type.</span>
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
                            $sql="SELECT * from rec_bodytype r, body_type b where r.type_id = b.type_id and b.type_id = (select type_id from body_type where body_type_name = '$body_type') and (r.o_desc LIKE '%Trousers%') and ((r.o_desc LIKE '%$trousers1%') OR (r.o_desc LIKE '%$trousers2%') OR (r.o_desc LIKE '%$trousers3%') OR (r.o_desc LIKE '%$trousers4%') OR (r.o_desc LIKE '%$trousers5%'))";

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
    
    <!-- ***** Women Area Starts ***** -->
    
    <?php
    }

?>

<?php
if($jeans != "None")
{
?>
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Jeans</h2>
                        <span>Check out what suites you based on your body type.</span>
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
                            $sql="SELECT * from rec_bodytype r, body_type b where r.type_id = b.type_id and b.type_id = (select type_id from body_type where body_type_name = '$body_type') and (r.o_desc LIKE '%Jeans%') and ((r.o_desc LIKE '%$jeans1%') OR (r.o_desc LIKE '%$jeans2%') OR (r.o_desc LIKE '%$jeans3%') OR (r.o_desc LIKE '%$jeans4%') OR (r.o_desc LIKE '%$jeans5%'))";

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
    
    <!-- ***** Women Area Starts ***** -->
    
    <?php
    }

?>


<?php
if($skirts != "None")
{
?>
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Skirts</h2>
                        <span>Check out what suites you based on your body type.</span>
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
                            $sql="SELECT * from rec_bodytype r, body_type b where r.type_id = b.type_id and b.type_id = (select type_id from body_type where body_type_name = '$body_type') and (r.o_desc LIKE '%Skirts%') and ((r.o_desc LIKE '%$skirts1%') OR (r.o_desc LIKE '%$skirts2%') OR (r.o_desc LIKE '%$skirts3%') OR (r.o_desc LIKE '%$skirts4%') OR (r.o_desc LIKE '%$skirts5%'))";

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
    
    <!-- ***** Women Area Starts ***** -->
    
    <?php
    }

?>

<?php
if($dress != "None")
{
?>
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Dress</h2>
                        <span>Check out what suites you based on your body type.</span>
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
                            $sql="SELECT * from rec_bodytype r, body_type b where r.type_id = b.type_id and b.type_id = (select type_id from body_type where body_type_name = '$body_type') and (r.o_desc LIKE '%Dress%') and ((r.o_desc LIKE '%$dress1%') OR (r.o_desc LIKE '%$dress2%') OR (r.o_desc LIKE '%$dress3%') OR (r.o_desc LIKE '%$dress4%') OR (r.o_desc LIKE '%$dress5%'))";

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
    
    <!-- ***** Women Area Starts ***** -->
    
    <?php
    }

?>

<?php
if($blazers != "None")
{
?>
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Blazers</h2>
                        <span>Check out what suites you based on your body type.</span>
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
                            $sql="SELECT * from rec_bodytype r, body_type b where r.type_id = b.type_id and b.type_id = (select type_id from body_type where body_type_name = '$body_type') and (r.o_desc LIKE '%Blazers%') and ((r.o_desc LIKE '%$blazers1%') OR (r.o_desc LIKE '%$blazers2%') OR (r.o_desc LIKE '%$blazers3%') OR (r.o_desc LIKE '%$blazers4%') OR (r.o_desc LIKE '%$blazers5%'))";

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
    
    <!-- ***** Women Area Starts ***** -->
    
    <?php
    }

?>

<?php
if($tshirts != "None")
{
?>
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>T Shirts</h2>
                        <span>Check out what suites you based on your body type.</span>
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
                            $sql="SELECT * from rec_bodytype r, body_type b where r.type_id = b.type_id and b.type_id = (select type_id from body_type where body_type_name = '$body_type') and (r.o_desc LIKE '%Tshirts%') and ((r.o_desc LIKE '%$tshirts1%') OR (r.o_desc LIKE '%$tshirts2%') OR (r.o_desc LIKE '%$tshirts3%') OR (r.o_desc LIKE '%$tshirts4%') OR (r.o_desc LIKE '%$tshirts5%'))";

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
    
    <!-- ***** Women Area Starts ***** -->
    
    <?php
    }

?>


<?php
if($shirts != "None")
{
?>
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Shirts</h2>
                        <span>Check out what suites you based on your body type.</span>
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
                            $sql="SELECT * from rec_bodytype r, body_type b where r.type_id = b.type_id and b.type_id = (select type_id from body_type where body_type_name = '$body_type') and (r.o_desc LIKE '%Shirts%') and ((r.o_desc LIKE '%$shirts1%') OR (r.o_desc LIKE '%$shirts2%') OR (r.o_desc LIKE '%$shirts3%') OR (r.o_desc LIKE '%$shirts4%') OR (r.o_desc LIKE '%$shirts5%'))";

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
    
    <!-- ***** Women Area Starts ***** -->
    
    <?php
    }

?>

<?php
if($jumpers != "None")
{
?>
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Jumpers</h2>
                        <span>Check out what suites you based on your body type.</span>
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
                            $sql="SELECT * from rec_bodytype r, body_type b where r.type_id = b.type_id and b.type_id = (select type_id from body_type where body_type_name = '$body_type') and (r.o_desc LIKE '%Jumpers%') and ((r.o_desc LIKE '%$jumpers1%') OR (r.o_desc LIKE '%$jumpers2%') OR (r.o_desc LIKE '%$jumpers3%') OR (r.o_desc LIKE '%$jumpers4%') OR (r.o_desc LIKE '%$jumpers5%'))";

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
    
    <!-- ***** Women Area Starts ***** -->
    
    <?php
    }

?>

<?php
if($sweats != "None")
{
?>
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Sweatshirts</h2>
                        <span>Check out what suites you based on your body type.</span>
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
                            $sql="SELECT * from rec_bodytype r, body_type b where r.type_id = b.type_id and b.type_id = (select type_id from body_type where body_type_name = '$body_type') and (r.o_desc LIKE '%Sweatshirts%') and ((r.o_desc LIKE '%$sweats1%')OR (r.o_desc LIKE '%$sweats2%') OR (r.o_desc LIKE '%$sweats3%') OR (r.o_desc LIKE '%$sweats4%') OR (r.o_desc LIKE '%$sweats5%'))";

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
    
    <!-- ***** Women Area Starts ***** -->
    
    <?php
    }

?>
    <!-- ***** Men Area Ends ***** -->
    
  
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->
    
    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
         
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