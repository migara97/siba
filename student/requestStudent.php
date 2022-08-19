
<?php
    session_start();
    $name=$_SESSION['username'];
error_reporting(0);
include("includes/config.php");

    
    $altScs="none";
    $altUn="none";
    if(isset($_POST['submit']))
    {
        
        $name=$_SESSION['username'];
        $msg=$_POST['description'];
        
        $d=date("y-m-d");
        $expire=date("y-m-d",strtotime("+10 day"));

        var_dump($_POST);
        $query=mysqli_query($con,"insert into `request`(student_ID,msg,date,expire)value('{$name}','{$msg}','{$d}','{$expire}')");

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
    <title>Student</title>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    
    <style type="text/css">
        .form-horizontal{
            margin-left: 130px;
            width: 60%;
            margin-top: 70px;
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
            <form class="form-horizontal mr-auto col-sm-12" method="post">
                <center><h2>Examination Request From</h2></center>
                <br>
               

              <div class="row alert alert-primary successAlt" style="width: 50%;margin-left: 150px;display: <?php echo 
               $altScs;?>">
                   Request Successfull..
               </div>

                <div class="row alert alert-danger successAlt" style="width: 50%;margin-left: 150px;display: <?php echo 
               $altUn;?>">
                   Request Unsuccessfull....
               </div>

                <div class="form-group">
                    <div class="col-sm-9">
                        <textarea style="margin-left: 150px" name="description" placeholder="Description" rows="4" cols="35"  required></textarea>
                    </div>
                </div>
                
              
             
                <input  type="submit" name="submit" class="btn btn-primary btn-block" value="Request" style="width:45%;margin-left: 150px">
            </form> <!-- /form -->
        </div> <!-- ./container -->

</body>
</html>