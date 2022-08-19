<?php
	session_start();
	include("../includes/config.php");

	$d_id=$_GET['d_id'];

	$query="SELECT * FROM `department` WHERE department_ID='$d_id'";
			$query_run=mysqli_query($con,$query);
			if($query_run){
				echo "<table class='tb'>";
				while($rec=mysqli_fetch_assoc($query_run)){
					
					$tb="<tr>";
					$tb.="<td>Department ID</td><td><input type='text' name='departmentID' value='$rec[department_ID]'class='form-control'></td>";
					$tb.="</tr>";
					$tb.="<tr>";
					$tb.="<td>Name</td><td><input type='text' name='Name' value='$rec[department_Name]'class='form-control'></td>";
					$tb.="</tr>";
					$tb.="<tr>";
					$tb.="<td>Email</td><td><input type='text' name='Email' value='$rec[email]'class='form-control'></td>";
					$tb.="</tr>";

					echo $tb;
				}
				echo "</table>";
			}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.tb{
			width: 130%;
		}

		.tb td{
			padding: 8px;
		}
	</style>
</head>
<body>

</body>
</html>