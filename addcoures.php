<?php
session_start();
error_reporting(0);
include("includes/config.php");



$altScs="none";
$altUn="none";


if(isset($_POST['submit']))
{
   
   
    $couresID=$_POST['couresID'];
     $Coures=$_POST['Coures'];
     $det=$_POST['det'];
    
    var_dump($_POST);

$query=mysqli_query($con,"insert into `course`(course_ID,course_Name,department_ID) value('{$couresID}','{$Coures}','{$det}')");
    if($query){
        $altScs="none";
    }else{
        $altUn="none";
    }

}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="../css/adddepartment.css">
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
            <form class="form-horizontal" role="form" method="POST">
                <center><h2>Add Coures</h2></center>
                <br>

                <div class="row alert alert-primary successAlt" style="width: 50%;margin-left: 150px;display: <?php echo 
               $altScs;?>">
                   Add Coures Successfull..
               </div>

                <div class="row alert alert-danger successAlt" style="width: 50%;margin-left: 150px;display: <?php echo 
               $altUn;?>">
                   Add Coures Unsuccessfull....
               </div>

                    <div class="form-group">
                    <label for="Coures" class="col-sm-3 control-label">Department </label>
                    <div class="col-sm-9">
                        <select  class="browser-default custom-select custom-select-lg mb-3" name="det">
                        <option selected>Select Coures...</option>



                        <?php
                        $query="SELECT * FROM `department`";
                        $query_run=mysqli_query($con,$query);
                        if($query_run){
                            while ($rec=mysqli_fetch_assoc($query_run)) {
                                echo "<option value=\"$rec[department_ID]\">$rec[department_ID]</option>";
                            }

                        }

                        ?>


                        </select>
                        
                    </div>
                </div>

                <div class="form-group">
                    <label for="couresID" class="col-sm-3 control-label">Coures ID</label>
                    <div class="col-sm-9">
                        <input type="text" id="couresID" name="couresID" placeholder="couresID" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Coures" class="col-sm-3 control-label">Coures Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="Coures" name="Coures" placeholder="Coures Name" class="form-control" autofocus required>
                    </div>
                </div>
                
                <br>
                <button type="submit" name="submit" class="btn btn-primary btn-block" style="width:75%;float: right;">Register</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->




</body>
</html>