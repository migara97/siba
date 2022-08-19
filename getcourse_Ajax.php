
<?php
session_start();
include("includes/config.php");

$det=$_GET['department_ID'];

//echo $det;

$query="select course_ID from `course` where department_ID = '$det'";
$result=mysqli_query($con,$query);

if ($result) {
	echo"<select class=\"form-control\" style=\"height:35px;\" name=\"cou\">";
	while ($recode=mysqli_fetch_assoc($result)) {
		echo "<option value=\"$recode[course_ID]\">$recode[course_ID]</option>";
		
	}
	echo "</select>";
}

?>


