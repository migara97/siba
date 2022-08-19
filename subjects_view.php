
<?php
	session_start();
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
<body>


	<div class="col-sm-10" style="text-align: center;padding-top:20px;padding-bottom: 20px"><h2>COURSE</h2></div>

	<div class="col-sm-10 mx-auto">
	<table border="1" class="table table-striped table-dark">
		<tr style="text-align: center;">
			<th>COURSE ID</th>
			<th>SEMESTER</th>
			<th>SUBJECT ID</th>
			<th>SUBJECT NAME</th>
			<th>CREDIT</th>
			

		</tr>

		<?php
			$query="SELECT * FROM `course_subject`";
			$query_run=mysqli_query($con,$query);
			if($query_run){
				while($rec=mysqli_fetch_assoc($query_run)){
					$tb="<tr style=\"text-align: center;\">";
					$tb.="<td>$rec[course_ID]</td>";
					$tb.="<td>$rec[semester]</td>";
					$tb.="<td>$rec[subject_ID]</td>";
					$tb.="<td>$rec[subject_name]</td>";
					$tb.="<td>$rec[subject_Credit]</td>";
					
					$tb.="</tr>";

					echo $tb;
				}
			}
		?>

	</table>


</div>

</body>
</html>