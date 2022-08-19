<?php
	session_start();
	$name=$_SESSION['username'];
error_reporting(0);
include("includes/config.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>



	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    


</head>
<body style="background-image: url('image/back.jpg');background-size: cover;">
	<div class="container">
	<form class="form-horizontal">
	<div class="col-sm-10" style="text-align: center;padding-top:20px  "><h2>Student ID 	<?php echo $name; ?></h2></div>

	 <div class="form-group row">
                
                <div class="row col-sm-11 ">
                	

					<select name="semester" class="form-control col-md-3 ml-auto m-1" style="height:35px">
						<option value="Semester 1">Semester 1</option>
						<option value="Semester 2">Semester 2</option>
						<option value="Semester 3">Semester 3</option>
						<option value="Semester 4">Semester 4</option>
						<option value="Semester 5">Semester 5</option>
						<option value="Semester 6">Semester 6</option>
						<option value="Semester 7">Semester 7</option>
						<option value="Semester 8">Semester 8</option>
					</select>

					<button  type="submit" class="btn btn-info col-md-1">Search</button>
 				
 				</div>
      </div>

	<div class="col-sm-10 mx-auto row">
	<table class="table table-striped table-dark">
		<tr>
			<th scope="col">Course ID</th>
			<th scope="col">Samester</th>
			<th scope="col">Subjects ID</th>
			<th scope="col">Subjects Name</th>
			<th scope="col">Subject Credit</th>
			
		</tr>

	<?php  

	$subject = "SELECT course_ID,samester,subjects_ID,subject_name,subject_Credit FROM `student_subjects` WHERE student_ID='$name'";
	$query_run=mysqli_query($con,$subject);
	if($query_run)
	{
		while($rec=mysqli_fetch_assoc($query_run))
		{
 			$tb="<tr>";
					
					$tb.="<td scope=\"row\">$rec[course_ID]</td>";
					$tb.="<td scope=\"row\">$rec[samester]</td>";
					$tb.="<td scope=\"row\">$rec[subjects_ID]</td>";
					$tb.="<td scope=\"row\">$rec[subject_name]</td>";
					$tb.="<td scope=\"row\">$rec[subject_Credit]</td>";
					
					$tb.="</tr>";

					echo $tb;
		}
	}





	?>


</table>
</div>
</form>
</div>
</body>
</html>