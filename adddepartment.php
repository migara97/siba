<?php
session_start();
error_reporting(0);
include("includes/config.php");


if(isset($_POST['submit']))
{
   
    $departmentID=$_POST['departmentID'];
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $pwd=rand(10000,99999);   //genarate pwd
    $enc_pwd=md5($pwd);
    var_dump($_POST);

$query=mysqli_query($con,"insert into `department`(department_ID,department_Name,email,password) value('{$departmentID}','{$Name}','{$Email}','{$pwd}')");

    if($query){
            
            $query=mysqli_query($con,"insert into `login` value('{$departmentID}','{$enc_pwd}','department')");

            $to=$Email;
            $mail_subject="Student Manegment System User Name Password";
            $email_body="Your  Student Manegment System User Name : $departmentID <br>";
            $email_body.="Your Student Manegment System Password : $pwd";  
            $header="From: {$Email}\r\nContent-Type: text/html";

            $send_mail_result=mail($to,$mail_subject,$email_body,$header);    
            
    }else{
        echo 'error';
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
    <link rel="stylesheet" href="../css/adddepartment.css">
    <style type="text/css">
        .form-horizontal{
            margin-left: 130px;
            width: 60%;
            margin-top: 70px;


        }
    </style>
</head>
<body>
    

<div class="container">
            <form class="form-horizontal" role="form" method="POST">
                <center><h2>Registration Department</h2></center>
                <br>

                
                <div class="form-group">
                    <label for="departmentID" class="col-sm-3 control-label">Department ID</label>
                    <div class="col-sm-9">
                        <input type="text" id="departmentID" name="departmentID" placeholder="Department ID" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="Name" name="Name" placeholder="Department Name" class="form-control" autofocus required>
                    </div>
                </div>
                
              
              <div class="form-group">
                    <label for="Email" class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-9">
                        <input type="Email" id="Email" placeholder="Email" class="form-control" name="Email">
                    </div>
                </div>
                <br>
                <br>
                <button type="submit" name="submit" class="btn btn-primary btn-block" style="width:75%;float: right;">Register</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->


</body>
</html>