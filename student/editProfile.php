<?php
session_start();
error_reporting(0);
include("includes/config.php");


    $name=$_SESSION['username'];
    //var_dump($_POST);

    $re=mysqli_query($con,"select * from  `student` where student_ID='$name' ");
       if ($re) {
        $recod=mysqli_fetch_assoc($re);
        $Email=$recod['student_Email'];
        $PhoneNumber=$recod['st_Number'];
        $NICNumber=$recod['st_NIC'];
        $st_Address=$recod['st_Address'];
}







$altScs="none";
$altUn="none";

if(isset($_POST['submit']))
{
   
    $name=$_SESSION['username'];
    $Email=$_POST['Email'];
    $PhoneNumber=$_POST['PhoneNumber'];
    $NICNumber=$_POST['NICNumber'];
    $st_Address=$_POST['st_Address'];


    $query=mysqli_query($con,"Update `student` set student_Email='{$Email}',st_Number='{$PhoneNumber}',st_Address='{$st_Address}',st_NIC='{$NICNumber}' where student_ID='$name'");

    if ($query) {
        $altScs="block";
     }else
     {
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
            width: 50%;
            height: 100%;
            margin-top: 50px;
            position: relative;
            max-width: 600px;
            padding: 50px;
            background:rgba(255,255,255,.2);
            box-shadow: 0 5px 15px rgba(0,0,0,.5);
            
        }
        
    </style>





</head>
<body style="background-image: url('image/back.jpg');background-size: cover;">
    

<div class="container">
            <form class="form-horizontal mr-auto col-sm-12" role="form" method="POST">
                <center><h2>Edit Profile</h2></center>
                <br>

                <div class="row alert alert-primary successAlt" style="width: 50%;margin-left: 150px;display: <?php echo 
               $altScs;?>">
                   Edit Successfull..
               </div>

                <div class="row alert alert-danger successAlt" style="width: 50%;margin-left: 150px;display: <?php echo 
               $altUn;?>">
                   Edit Unsuccessfull....
               </div>
                
              
              <div class="form-group">
                    <label for="Email" class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-9">
                        <input type="Email" id="Email" value="<?php  echo $Email;?>" placeholder="Email" class="form-control" name="Email"  required>
                    </div>
                </div>



                <div class="form-group">
                    <label for="st_NIC" class="col-sm-3 control-label">NIC</label>
                    <div class="col-sm-9">
                        <input type="text" id="NICNumber" name="NICNumber" value="<?php  echo $NICNumber;?>" placeholder="NIC Number" class="form-control" autofocus  required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="st_Num" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                         <textarea name="st_Address" placeholder="Address" rows="4" cols="35"><?php  echo $st_Address;?></textarea>
                    </div>
                </div>



                <div class="form-group">
                    <label for="st_Num" class="col-sm-3 control-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="text" id="PhoneNumber" name="PhoneNumber" value="<?php  echo $PhoneNumber;?>" placeholder="Phone Number" class="form-control" autofocus  required>

                    </div>
                </div>

               


                <br>
                <div class="form-group">
                    <div class="col-sm-9">
                <button type="submit" name="submit" class="btn btn-primary btn-block" style="width:65%;float: right;">Edit</button>
                <br>
                <br>
                    </div>
                 </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->


</body>
</html>