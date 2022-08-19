
<?php
session_start();
error_reporting(0);
include("includes/config.php");



$altScs="none";
$altUn="none";


if(isset($_POST['submit']))
{
   
   
    $Cou=$_POST['Cou'];
    $semester=$_POST['semester'];
    $couresID=$_POST['couresID'];
    $Coures=$_POST['Coures'];
    $Credit=$_POST['Credit'];
    var_dump($_POST);

$query=mysqli_query($con,"insert into `course_subject`(course_ID,semester,subject_ID,subject_name,subject_Credit) value('{$Cou}','{$semester}','{$couresID}','{$Coures}','{$Credit}')");
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
                <center><h2>Add Subject</h2></center>
                <br>

                <div class="row alert alert-primary successAlt" style="width: 50%;margin-left: 150px;display: <?php echo 
               $altScs;?>">
                   Add Subject Successfull..
               </div>

                <div class="row alert alert-danger successAlt" style="width: 50%;margin-left: 150px;display: <?php echo 
               $altUn;?>">
                   Add Subject Unsuccessfull....
               </div>


 					<div class="form-group">
                    <label for="Coures" class="col-sm-3 control-label">Course ID </label>
                    <div class="col-sm-9">
                        <select  class="browser-default custom-select custom-select-lg mb-3" name="Cou">
                        <option selected>Select Coures...</option>



                        <?php
                        $query="SELECT * FROM `course`";
                        $query_run=mysqli_query($con,$query);
                        if($query_run){
                            while ($rec=mysqli_fetch_assoc($query_run)) {
                                echo "<option value=\"$rec[course_ID]\">$rec[course_ID]</option>";
                            }

                        }

                        ?>


                        </select>
                        
                    </div>
                </div>

				<div class="form-group">
                <label for="Coures" class="col-sm-3 control-label">Semester </label>
                <div class="col-sm-9">
				<select name="semester" class="form-control" style="height:36px">
					<option value="Semester 1">Semester 1</option>
					<option value="Semester 2">Semester 2</option>
					<option value="Semester 3">Semester 3</option>
					<option value="Semester 4">Semester 4</option>
					<option value="Semester 5">Semester 5</option>
					<option value="Semester 6">Semester 6</option>
					<option value="Semester 7">Semester 7</option>
					<option value="Semester 8">Semester 8</option>
				</select>
 				</div>
                </div>



                <div class="form-group">
                    <label for="couresID" class="col-sm-3 control-label">subject_ID</label>
                    <div class="col-sm-9">
                        <input type="text" id="couresID" name="couresID" placeholder="couresID" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Coures" class="col-sm-3 control-label">Subject Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="Coures" name="Coures" placeholder="Coures Name" class="form-control" autofocus required>
                    </div>
                </div>
                
               <div class="form-group">
                    <label for="Coures" class="col-sm-3 control-label">Subject Credit</label>
                    <div class="col-sm-9">
                        
                    <select name="Credit" class="form-control" style="height:36px">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					
					</select>


                    </div>
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-primary btn-block" style="width:75%;float: right;">Register</button>
            </form> <!-- /form -->
        </div> 
</body>
</html>