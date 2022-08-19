<?php

include("../includes/config.php");

if (isset($_GET['q'])) {
	$name=$_GET['q'];
	$sql ="select * from `student` where student_ID LIKE '%$name%' ";
	$result = mysqli_query($con,$sql);

	echo "<table>";
	if($result){
		while ($recode = mysqli_fetch_assoc($result)) {
			$td ="<tr><td style=\"padding:5px;\"> <a href=student_update.php?id=$recode[student_ID]>$recode[student_ID]</td></tr>";
			echo $td;
		}

	echo "</table>";
	}
}

?>