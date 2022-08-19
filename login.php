
<?php
session_start();
error_reporting(0);
include("includes/config.php");
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"SELECT * FROM login WHERE userName='$username' and userPassword='$password'");
    $num=mysqli_fetch_array($query);


    if($num['userType']=="admin")
    {
        $_SESSION['username']=$num['userName'];
        header("location:adindex.php");
    }
    elseif($num['userType']=="student")
    {
       // $un=
        $_SESSION['username']=$num['userName'];
        $_SESSION['image']= $num['image'];
        header("location:student/index.php");
    }
    elseif($num['userType']=="department")
    {
        $_SESSION['username']=$num['userName'];
        header("location:department/index.php");
    }
    else
    {
        $_SESSION['errmsg']="Invalid username or password";
        header("location:login.php");
    }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css" >
    <title>Document</title>
 
      

</head>
<body>
    
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
      <img src="image/siba-logo.png" id="icon" alt="User Icon" />
      <!-- <img src="image/siba-logo.png" id="icon" width="150px" height="70px"></a> -->
    </div>

    <!-- Login Form -->
    <form method="post">
      <input type="text"  class="fadeIn second" name="username" placeholder="username">
      <input type="password"  class="fadeIn third" name="password" placeholder="password">
      <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
    </form>

    

  </div>
</div>



</body>
</html>