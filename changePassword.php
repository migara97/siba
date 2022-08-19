<?php
session_start();
error_reporting(0);
include("includes/config.php");


    $name=$_SESSION['username'];
  





$altScs="none";
    $altUn="none";
     $ghs="none";

if(isset($_POST['submit']))
{
   
    $name=$_SESSION['username'];
    $cupass=$_POST['cupass'];
    $pw1=$_POST['pw1'];
    $pw2=$_POST['pw2'];

    $incrept=md5($cupass);
    $increptNew=md5($pw2);
   
   $que=mysqli_query($con,"select * from `login` where userName='$name' and userPassword='$incrept' ");

   if (mysqli_num_rows($que)==1) {

        if ($pw1==$pw2) {
            $query=mysqli_query($con,"Update `login` set userPassword='$increptNew' where userName='{$name}' ");
            if ($query) {
               $altScs="block";
            }
        }else{
            $ghs="block";
        
        }
       
   }else{
    $altUn="block";
   }

    



}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <!-- <link rel="stylesheet" href="../css/adddepartment.css"> -->
    <style type="text/css">
        .form-horizontal{
            margin-left: 170px;
            width: 60%;
            margin-top: 70px;


        }
        
    </style>





</head>
<body>
    

<div class="container">
            <form class="form-horizontal" method="POST">
                <center><h2>Change Password</h2></center>
                <br>


             <div class="form-group"> 
                <div class="col-sm-12">
              <div class="row alert alert-primary successAlt" style="width: 70%;margin-left: 110px;display: <?php echo 
               $altScs;?>">
                   Password Change Successfull..
               </div>

                <div class="row alert alert-danger successAlt" style="width: 70%;margin-left: 110px;display: <?php echo 
               $altUn;?>">
                   current password increat
               </div>


                <div class="row alert alert-danger successAlt" style="width: 70%; margin-left: 110px;display: <?php echo 
               $ghs;?>">
                   desn't mach password
               </div>


                </div>
                </div>

                
              
              <div class="form-group">
                    <label for="cpass" class="col-sm-3 control-label">Current Password </label>
                    <div class="col-sm-9">
                        <input type="password" id="cupass" placeholder="Current Password" class="form-control" name="cupass" required>
                    </div>
                </div>



                <div class="form-group">
                    <label for="npass" class="col-sm-3 control-label">New Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="pw1" name="pw1" placeholder="New Password" class="form-control" autofocus required>
                    </div>
                </div>


                <div class="form-group">
                    <label for="st_Num" class="col-sm-3 control-label">Conform Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="pw2" name="pw2" placeholder="Conform New Password" class="form-control" autofocus required>
                    </div>
                </div>

               


                <br>
                <button type="submit" name="submit" class="btn btn-primary btn-block" style="width:75%;float: right; ">Edit</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->


</body>
</html>