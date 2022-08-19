<?php
session_start();
error_reporting(0);
include("includes/config.php");

$altScs="none";
$altUn="none";

if(isset($_POST['submit']))
{
	$Cou=$_POST['Cou'];
	$StudentID=$_POST['StudentID'];
	$semester=$_POST['semester'];
var_dump($_POST);
	$query=mysqli_query($con,"select subject_ID,subject_name,subject_Credit from `course_subject` WHERE course_ID='{$Cou}' and semester='{$semester}' " );

	if($query) {
		while ($var=mysqli_fetch_assoc($query) ) {
			$que=mysqli_query($con,"insert into `student_subjects` (course_ID,student_ID,samester,subjects_ID,subject_name,subject_Credit) value('{$Cou}','{$StudentID}','{$semester}','{$var[subject_ID]}','{$var[subject_name]}','{$var[subject_Credit]}') ");

			if ($que) {
				$altScs="block";
			}
			else
			{
				$altUn="none";
			}
		}

		
	}else
	{
		echo "Error";
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
    <!-- <link rel="stylesheet" href="../css/adddepartment.css"> -->
    <style type="text/css">
        .form-horizontal{
            margin-left: 170px;
            width: 60%;
            margin-top: 70px;


        }
        #txtHint{
            background-color: white;
            position: absolute;
            z-index: 99;
            padding: 12px;
            display: none;
            cursor: pointer;
        }
    </style>


<script>
        function showHint(str){
            var xhttp;
            if(str.length==0){
                document.getElementById("txtHint").innerHTML="";
                document.getElementById("txtHint").style.display="none";
                return;
            }else{
                document.getElementById("txtHint").style.display="block";
            }
            xhttp= new XMLHttpRequest()
            xhttp.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;

                }
            };
            xhttp.open("GET","ajax/ajax.php?q="+str,true);
            xhttp.send();
        }
    </script>






</head>
<body>

<div class="container">
            <form class="form-horizontal" role="form" method="POST">
                <center><h2>Student Subject Add</h2></center>
                <br>

                <div class="row alert alert-primary successAlt" style="width: 50%;margin-left: 150px;display: <?php echo 
               $altScs;?>">
                   Student Add Subjects Successfull..
               </div>

                <div class="row alert alert-danger successAlt" style="width: 50%;margin-left: 150px;display: <?php echo 
               $altUn;?>">
                   Student Add Subjects Unsuccessfull....
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
                    <label for="StudentID" class="col-sm-3 control-label">Student ID</label>
                    <div class="col-sm-9">
                        <!-- <input type="text" id="StudentID" name="StudentID" placeholder="Student ID" class="form-control" autofocus> -->
                        <input type="text" onkeyup="showHint(this.value)" id="StudentID" name="StudentID" autocomplete="off" value="<?php  echo $StudentID;?>" placeholder="Student ID" class="form-control" autofocus  required>
                        <samp id="txtHint" style="color: black"></samp>
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






              
                <button type="submit" name="submit" class="btn btn-primary btn-block" style="width:75%;float: right;">Register</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->


  </body>  
</html>