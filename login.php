<!DOCTYPE html>
<html>
  <head>
      <title>Login</title>
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
      <form id="log" class="form" method="POST" action="login.php">
        <h1>Login</h1>
        <div class="form-field">
          <label for="email">Email:</label>
          <input type="text" name="email" id="email" autocomplete="off" required>
          <small></small>
        </div>
        <div class="form-field">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" autocomplete="off" required>
          <small></small>
        </div>
        <p><a href="forgot-password.php" style="margin-bottom: 15px; display: block; text-align: right;">Forgot Password?</a></p>
        <div class="form-field">
          <input type="submit" value="Login" name="login" id="login" class="btn">
        </div>
        <p>
          New Here?
          <a href="register.php">
            Click here to register!
          </a>
        </p>
      </form>
    </div>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>

  </body>
</html>
<?php 
session_start();
  include "connection.php";
  
if (isset($_GET['verification'])) 
{
  if(mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE code='{$_GET['verification']}'")) > 0) 
  {
    $query = mysqli_query($con, "UPDATE users SET code='' WHERE code='{$_GET['verification']}'");
    if ($query) 
    {
        $msg = "<div class='alert alert-success'>Account verification has been successfully completed.</div>";
        header("Location: login.php");
    }
      
  } 
  else 
  {
      header("Location: register.php");
  }
}
if (isset($_SESSION['email'])) {
  header("Location: homepage.php");
  die();
}

  if(isset($_POST['login']))
  {
    $email=$_POST['email'];
    $password=$_POST['password'];
    if (count($errors) == 0) 
    {
      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
        $password = md5($password); //password matching
        $sql="SELECT * from users where email='".$email."' AND password='".$password."'";
        $res=$con->query($sql);
        if($res->num_rows>0)
        {
          foreach($res as $data)
          {
            $email=$data['email'];
            $password=$data['password'];
            $role=$data['role'];
          } 
          if (empty($row['code'])) {
            $_SESSION['email'] = $email;
            header("Location: register.php");
        } else {
            $msg = "<div class='alert alert-info'>First verify your account and try again.</div>";
        }
          $_SESSION['email'] = $email;
          $_SESSION['msg']="Login Successful. ";
          echo "<p id='d'>" .$_SESSION['msg']."</p>" ;
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
          exit(0); 
        }
        else
        {
          $_SESSION['msg']="Invalid email or password. ";
          echo "<p id='d'>" .$_SESSION['msg']."</p>" ;
          exit();
        }
      } 
    }
  }
  $con->close();
?>
