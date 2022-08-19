<?php
//session_start();
error_reporting(0);
include("config.php");
   $img= $_SESSION['image'];

    $name=$_SESSION['username'];
     $query=mysqli_query($con,"select * from `student` where student_ID='$name'");
    if($query) {
       $recod= mysqli_fetch_assoc($query);
       $st_name=$recod['student_Name'];
    }
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <!-- <script src="../js/sildebar.js"></script> -->
    <!-- <link rel="stylesheet" href="../css/slidebar.css"> -->
</head>
<body>


      <div class="main">
        <aside>
          <div class="sidebar left " style="height:600px;">
            <div class="user-panel">
              <div class="pull-left image">
                <img src="<?php echo $img ;?>" class="rounded-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p style="margin-left: 20px;"><?php echo $st_name ;?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>
            <ul class="list-sidebar bg-defoult">
              <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fa fa-user" aria-hidden="true"></i> <span class="nav-label"> Edit Profile </span> <span class="fa fa-chevron-left pull-right"></span> </a>
              <ul class="sub-menu collapse" id="dashboard">
                <li class="active"><a href="editProfile.php" target="f1">Edit</a></li>
                <!-- <li><a href="adddepartment.php" target="f1">Upadate Department</a></li> -->
                <li><a href="imageUpload.php" target="f1">Image Upload</a></li>
                <li><a href="changePassword.php" target="f1">Change Password</a></li>
                
              </ul>
            </li>
            
            <li> <a href="#" data-toggle="collapse" data-target="#tables" class="collapsed active" ><i class="fa fa-book" aria-hidden="true"></i></i> <span class="nav-label">Subject</span><span class="fa fa-chevron-left pull-right"></span></a>
            <ul  class="sub-menu collapse" id="tables" >
            <li><a href="viewSubjet.php" target="f1">View Subject</a></li>
            <li><a href="viewcourse.php" target="f1">Optional Subject</a></li>
            </ul>
            </li>

          

          <li> <a href="#" data-toggle="collapse" data-target="#e-commerce" class="collapsed active" ><i class="fa fa-envelope-open-o" aria-hidden="true"></i> <span class="nav-label">Request</span><span class="fa fa-chevron-left pull-right"></span></a>
        <ul  class="sub-menu collapse" id="e-commerce" >
          <li><a href="requestStudent.php" target="f1"> Examinition</a></li>
          <li><a href="myRequest.php" target="f1"> View Request</a></li>
          
        </ul>
      </li>



           
        
      
    </ul>
    </div>
    </aside>
    </div>

</body>
</html>