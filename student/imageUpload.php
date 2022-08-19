<?php
session_start();
error_reporting(0);
include("includes/config.php");


$altScs="none";
$altUn="none";
    

if(isset($_POST['submit']))
{
   
    $nam=$_SESSION['username'];
    var_dump($_POST);

    $image=$_FILES["img"]["name"];
    $Upload_image_folder="Upload/";
    $folser_db="Upload/";
    move_uploaded_file($_FILES["img"]["tmp_name"],"$Upload_image_folder".$image);
    $image_path=$folser_db.$image;

 echo "$image";

    $query=mysqli_query($con,"Update `login` set image='$image_path' where userName='$nam'");

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
            /*margin-left: 170px;
            width: 60%;
            margin-top: 70px;
*/
            margin-left: 170px;
            width: 50%;
            height: 100%;
            margin-top: 70px;
            /*background-color:#4F4F4F;
            background-position: transparent;*/
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
            <form class="form-horizontal mr-auto col-sm-12" role="form" method="POST" enctype="multipart/form-data">
                <center><h2 style="font-family:Impact;">Upload</h2></center>
                <br>
                <div class="row alert alert-primary successAlt" style="width: 50%;margin-left: 150px;display: <?php echo 
               $altScs;?>">
                   Upload Successfull..
               </div>

                <div class="row alert alert-danger successAlt" style="width: 50%;margin-left: 150px;display: <?php echo 
               $altUn;?>">
                   Upload Unsuccessfull....
               </div>

                <div class="form-group">
                    <label for="st_Num" class="col-sm-3 control-label" style="color: #00cc66;">Upload Picture</label>
                    <div class="col-sm-9">
                        <input type="file" name="img" class="form-control">
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-sm-9">                
                    <button type="submit" name="submit" class="btn btn-primary btn-block" style="width:65%;float: right;margin-top: 20px;">Upload</button>
                    <br> 
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->


</body>
</html>