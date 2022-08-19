<?php
    session_start();
    error_reporting(0);
    include("includes/config.php");

    // $quary=mysqli_query($con,"SELECT `request_id`count(*) as num FROM `request` WHERE is_approve='0' GROUP BY `request_id`");
    $quary=mysqli_query($con,"SELECT request_id,count(*) as tot FROM request WHERE is_approve='0'");
    $que=mysqli_fetch_assoc($quary);
      
    $x=$que['tot'];
      
       
  



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style type="text/css">
      
      .fa:hover{
        transform: scale(1.2);
      }
    </style>

</head>
<body>
<header class="header">
         
          <nav class="navbar navbar-toggleable-md navbar-light pt-0 pb-0 ">
           
            
            <a class="navbar-brand p-0 mr-5" href="#"><img src="image/siba-logo.png" width="150px" height="70px"></a>
            <div class="float-left">  </div>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                
              <li class="nav-item dropdown notifications-menu">
                <a class="nav-link dropdown-toggle" href="../requestApprove.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-warning bg-warning"><?php echo $x; ?></span>
                </a>
                
              </li>
              
             
            <li class="nav-item dropdown messages-menu">
                

                <a href="logOut.php"><i class="fa fa-sign-out" style="font-size: 25px; margin-top:10px; color: black;margin-left: 10px" aria-hidden="true"></i></a>
                  
                  
              </li>


            </ul>
          </div>
        </nav>
      </header>
</body>
</html>