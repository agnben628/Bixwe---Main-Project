<?php
 // starting the session, necessary for using session variables
// declaring and hoisting the variables
$username = "";
$email    = "";
$phno     = "";
$errors = array(); 
$_SESSION['success'] = "";
$con = mysqli_connect("localhost","root","","bixweshopsite");    
if($con===false){
    die("ERROR: Could not connect.".mysqli_connect_error());
}
// registration code
?>