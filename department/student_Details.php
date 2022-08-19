
<?php
	session_start();
error_reporting(0);

include("includes/config.php");
$name=$_SESSION['username'];
echo $name;

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

	<script src="https://code.jquery.com/jquery-migrate-3.3.1.js" integrity="sha256-lGuUqJUPXJEMgQX/RRaM6mZkK6ono5i5bHuBME4qOCo=" crossorigin="anonymous"></script>



</head>
<body>
<form method="POST" class="row" style="margin-top: 30px;">

	<div class="col-md-2 mx-auto">
		<input type="text" name="stID" id="stID" class="form-control" placeholder="Enter Student ID">
		</div>
		
</form>
                    <br>

	<div class="col-sm-10 mx-auto">
	<table border="1" class="table table-striped table-dark">
		<tr style="text-align: center;">
			<th>STUDENT ID</th>
			<th>STUDENT NAME</th>
			<th>EMAIL</th>
			<th>GENDER</th>
			<th>DOB</th>
			<th>COURES ID</th>
			<th>Student Number</th>
			<th>Department ID</th>
			<th>Student Address</th>
			<th>Student NIC</th>
			

		</tr>

		<?php
			
			$query="SELECT * FROM `student` WHERE department_ID='$name'";
			$query_run=mysqli_query($con,$query);
			if($query_run){
				while($rec=mysqli_fetch_assoc($query_run)){
					$tb="<tr style=\"text-align: center;\">";
					$tb.="<td>$rec[student_ID]</td>";
					$tb.="<td>$rec[student_Name]</td>";
					$tb.="<td>$rec[student_Email]</td>";
					$tb.="<td>$rec[gender]</td>";
					$tb.="<td>$rec[DOB]</td>";
					$tb.="<td>$rec[course_ID]</td>";
					$tb.="<td>$rec[st_Number]</td>";
					$tb.="<td>$rec[department_ID]</td>";
					$tb.="<td>$rec[st_Address]</td>";
					$tb.="<td>$rec[st_NIC]</td>";
					// $tb.="<td><input type='submit' class='btn btn-danger' value='Delete'></td>";
					$tb.="</tr>";

					echo $tb;
				}
			}
		?>

	</table>


</div>

</form>


<script>
	$("#stID").on("keyup",function()
	{
		var value=$(this).val();
		$("table tr").each(function(records)
		{
			if(records !==0)
			{
				var id=$(this).find("td:first").text();
				if(id.indexOf(value)!==0 && id.toLowerCase().indexOf(value.toLowerCase())<0)
				{
					$(this).hide();
				}
				else
				{
					$(this).show();
				}
			}

		});
	});
</script>


</body>
</html>