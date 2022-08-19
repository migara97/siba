
<?php
    session_start();
error_reporting(0);
include("includes/config.php");



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
     <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <script>
       $(document).ready(function () {
            $('select').selectize({
                sortField: 'text'
            });
        });
        </script>
</head>
<body>
	<form method="POST" class="row" style="margin-top: 20px;">

<div class="col-md-6"></div>
		<select class="form-control col-md-4"  name="studentID" required>
                                            <?php
                                            
                                                $query = "SELECT * FROM `student`";

                                                $result_set = mysqli_query($con,$query);

                                                if (mysqli_num_rows($result_set) >= 1){
                                                     echo "<option value=''>Studen ID</option>";
                                                    while($record = mysqli_fetch_assoc($result_set)){
                                                        echo "<option value='".$record['student_ID']."'>".$record['student_ID']."</option>";
                                                    }

                                                } else {
                                                    echo "<option value='".null."'>empty</option>";
                                                }

                                            ?>
                                        </select>
  <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
  <input type="submit"  class="btn btn-secondary col-md-1" style="height: 33px;margin-left: 10px;"  name="submit">
</form>
<div class="col-sm-10 mx-auto">
<table>
<tr>
	<th>Student ID</th>
	<th>Course ID</th>
	<th>GPA</th>
</tr>
<?php 
if(isset($_POST['submit'])){

	$studentID=$_POST['studentID'];

		$query=mysqli_query($con,"SELECT * FROM `finalgpa` WHERE student_ID='$studentID'");
			if($query){
				$rec=mysqli_fetch_assoc($query);
				
					$tb="<tr>";
					$tb.="<td>$rec[student_ID]</td>";
					$tb.="<td>$rec[course_ID]</td>";
					$tb.="<td>$rec[FIGPA]</td>";
					
					
					$tb.="</tr>";

				echo $tb;
			}else{
				echo "error_log";
			}



}

 ?>
</table>
</div>
</body>
</html>