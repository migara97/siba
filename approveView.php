<?php
session_start();
error_reporting(0);
include("includes/config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
	<title></title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

            <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>




</head>
<body>


	<div class="col-sm-10" style="text-align: center;padding-top:20px;padding-bottom: 20px"><h2>APPROVE</h2></div>

	<div class="col-sm-10 mx-auto">
    <table border="1" class="table table-striped table-dark">
		<tr>
			<th>Student ID</th>
			<th>Description</th>
			<th>Request Date</th>
			<th>Expire Date</th>
			
		</tr>

		<?php
			$query="SELECT * FROM `request` where is_approve='1'";
			$query_run=mysqli_query($con,$query);
			if($query_run){
				while($rec=mysqli_fetch_assoc($query_run)){
					$Rid=$rec[request_id];
					$tb="<tr>";
					$tb.="<td>$rec[student_ID]</td>";
					$tb.="<td>$rec[msg]</td>";
					$tb.="<td>$rec[date]</td>";
					$tb.="<td>$rec[expire]</td>";
					
					$tb.="</tr>";

					echo $tb;
				}
			}
		?>

	</table>
</div>
</body>
</html>