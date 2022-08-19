<?php
	include("includes/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


	<script src="../js/dropbox.js"></script>
</head>
<body>

	<?php

		
			$query="SELECT * FROM `department`";
			$query_run=mysqli_query($con,$query);
			if($query_run){
				echo "<select name=\"name\">";
				while($rec=mysqli_fetch_assoc($query_run)){
					echo "<option value=\"$rec[department_Name]\"> $rec[department_Name]</option>";
				}
				echo "</select>";
			}
		

	?>


</body>
</html>