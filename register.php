<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="style1.css">  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="adfontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    
    <link rel="stylesheet" href="adbootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container1">
        <form id="signup" class="form" method="POST" action="register.php">
            <h1>Sign Up</h1>
            <div class="form-field">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" autocomplete="off" required >
                <small></small>
            </div>

            <div class="form-field">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" autocomplete="off" required>
                <small></small>
            </div>
            
            <div class="form-field">
                <label for="phno">Phone No:</label>
                <input type="text" name="phno" id="phno" autocomplete="off" required>
                <small></small>
            </div>

            <div class="form-field">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" autocomplete="off" required>
                <small></small>
            </div>


            <div class="form-field">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" name="confirmpassword" id="confirm-password" autocomplete="off" required>
                <small></small>
            </div>

            <div class="form-field">
                <label for="role">Select Role:</label>
                <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="role" id="role">
                    <option>Customer</option>
                    <option>Seller</option>
                    <option>Admin</option>
                </select>
                <small></small>
            </div>

            <div class="form-field">
                <input type="submit" value="Sign Up" name="signup" class="btn">
            </div>
            <p>
                Already having an account? <a href="login.php">Login Here!</a>
            </p>
        </form>
    </div>
    <script src="register.js"></script>
</body>
</html>
<?php
include "connection.php";
session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$msg = "";


if (isset($_SESSION['email'])) {
    header("Location: homepage.php");
    die();
}
if(isset($_POST['signup']))
{
    // receiving the values entered and storing in the variables
    //data sanitization is done to prevent SQL injections
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phno=mysqli_real_escape_string($con,$_POST['phno']);
    $password_1=mysqli_real_escape_string($con,$_POST['password']);
    $password_2=mysqli_real_escape_string($con,$_POST['confirmpassword']);
    $role=mysqli_real_escape_string($con,$_POST['role']);
    $code = mysqli_real_escape_string($con, md5(rand()));
	if (count($errors) == 0) 
    {
        $sel="SELECT * from users where email='".$email."'";
        $result=$con->query($sel);
        if($result->num_rows > 0)
        {
            echo "<p id='d'>" ."The Email is Already in Use"."</p>" ;
        } 
        else
        {
            $password = md5($password_1);//password encryption to increase data security
            $qury="INSERT INTO users (username,email,password,contact_no,role,code) VALUES('$username','$email','$password','$phno','$role','$code')";
            $sql="SELECT role from users where email='".$email."' AND password='".$password."'";
            
            if ($con->query($qury) === TRUE) 
            {
                echo "<div style='display: none;'>";
                    //Create an instance; passing `true` enables exceptions
                    $mail = new PHPMailer(true);

                    try 
                    {
                        //Server settings
                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'agnesazhimukham628@gmail.com';                     //SMTP username
                        $mail->Password   = 'sjbflfqknnnqckmu';                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                        $mail->Port       = 465;                                    //TCP port to conect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                        //Recipients
                        $mail->setFrom('agnesazhimukham628@gmail.com');
                        $mail->addAddress($email);

                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'no reply';
                        $mail->Body    = 'Here is the verification link <b><a href="http://localhost/Bixwe%20-%20Main/login.php?verification='.$code.'">http://localhost/Bixwe%20-%20Main/login.php?verification='.$code.'</a></b>';

                        $mail->send();
                        echo 'Message has been sent';
                    } 
                    catch (Exception $e) 
                    {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                    echo "</div>";
                    $msg = "<div class='alert alert-info'>We've send a verification link on your email address.</div>";
            } 
            else 
            {
                $msg = "<div class='alert alert-danger'>Something wrong went.</div>";
                $_SESSION['email'] = $email;
            }
            $res=$con->query($sql);
            if($res->num_rows > 0)
            {
                foreach($res as $data)
                {
                    $rolen=$data['role'];
                }
            } 
            if($role == 'Customer')
            {
                header("location:homepage.php");  
            }
            else if($role == 'Admin')
            {
                header("location:Admin/admin_index.php");  
            }
            else if($role == 'Seller')
            {
                header("location:Seller/SellerHome.php");  
            }
        } 
    }
    else 
    {
        echo "Error: " . $qury . "<br>" . $con->error;
    }
    
}
 $con->close();
?>
  