<?php
	session_start();
	include("../includes/config.php");

	$d_id=$_GET['id'];
	$su_id=$_GET['su_id'];

	$query="SELECT * FROM `examrepeat` WHERE student_ID='$d_id' and subjects_ID='$su_id'";
			$query_run=mysqli_query($con,$query);
			if($query_run){
				
				echo "<table class='tb2'>";
				$rec=mysqli_fetch_assoc($query_run);
					
					$tb="<tr>";
					$tb.="<td>Course ID</td><td><input type='text' name='courseID' value='$rec[course_ID]'class='form-control'></td>";
					$tb.="</tr>";
					$tb.="<tr>";
					$tb.="<td>Student ID</td><td><input type='text' name='studentID' value='$rec[student_ID]'class='form-control'></td>";
					$tb.="</tr>";
					$tb.="<tr>";
					$tb.="<td>Semester</td><td><input type='text' name='semester' value='$rec[semester]'class='form-control'></td>";
					$tb.="</tr>";
					$tb.="<tr>";
					$tb.="<td>Subject ID</td><td><input type='text' name='subjectsID' value='$rec[subjects_ID]'class='form-control'></td>";
					$tb.="</tr>";
					$tb.="<tr>";
					$tb.="<td>Subjet Name</td><td><input type='text' name='subjectname' value='$rec[subject_name]'class='form-control'></td>";
					$tb.="</tr>";

					$_SESSION['subjects_ID']=$rec['subjects_ID'];
					$isCheck="SELECT * FROM `repeat_exam` WHERE student_ID='$rec[student_ID]' AND subjects_ID='$rec[subjects_ID]'";
					$isCheck_result=mysqli_query($con,$isCheck);

					if($isCheck_result){
						if(mysqli_num_rows($isCheck_result)>=1){

						}else{
							$repeat_query="INSERT INTO `repeat_exam` (course_ID,student_ID,semester,subjects_ID,subject_name) value('{$rec['course_ID']}','{$rec['student_ID']}','{$rec['semester']}','{$rec['subjects_ID']}','{$rec['subject_name']}')";
							$result_re=mysqli_query($con,$repeat_query);

						}
					}

					
					echo $tb;
				
				echo "</table>";
			}else{
				echo "error";
			}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.tb2{
			width: 130%;
			/*border: 1px solid white;*/
		}

		.tb2 td{
			padding: 8px;
		}
	</style>
</head>
<body>

</body>
</html>