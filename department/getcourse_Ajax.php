
<?php
session_start();
include("includes/config.php");

$det=$_GET['department_ID'];



$query="select course_ID from `course` where department_ID = '$det'";
$result=mysqli_query($con,$query);

if ($result) {
	echo"<select class=\"form-control\" style=\"height:40px;\">";
	while ($recode=mysqli_fetch_assoc($result)) {
		echo "<option value=\"$recode[course_ID]\">$recode[course_ID]</option>";
		
	}
	echo "</select>";
}

?>