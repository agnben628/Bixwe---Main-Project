<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "bixweshopsite";

$conn = mysqli_connect($server,$user,$password,$db);
$username = "";
$email    = "";
$phno     = "";
$errors = array(); 
$_SESSION['success'] = "";
if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}

?>