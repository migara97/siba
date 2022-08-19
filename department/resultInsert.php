<?php
	include("includes/config.php");  
	session_start();
	$cuID=$_GET['c_id'];
	$suID=$_GET['su_id'];
	$grade=$_GET['grade'];
	$studentID=$_SESSION['studentID'];
	$sname=$_GET['sem_name'];
	$credit=$_GET['credit'];
	$ass_Mark=$_GET['ass_Mark'];
	$paper_Mark=$_GET['paper_Mark'];
	$tot_Mark=$_GET['tot_Mark'];
	

	$altScs="none";
	$altUn="none";

	if($cuID!='' && $suID!='' && $grade!='' && $studentID!='' && $sname!='' && $credit!='' && $ass_Mark!='' && $paper_Mark!='' && $tot_Mark!=''){
	$query=mysqli_query($con,"insert into `results`(student_ID,course_ID,semester,subjects_ID,subject_Credit,assignment_marks,paper_Marks,result,grade) value('{$studentID}','{$cuID}','{$sname}','{$suID}','{$credit}','{$ass_Mark}','{$paper_Mark}','{$tot_Mark}','{$grade}')");

	if($query){
		echo "Successfull.........";

	}else{
		echo "Unsuccessfull.......";
	}
}else{
	echo "Fill the Detail";
}
 

?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="row alert alert-primary successAlt" style="width: 50%;margin-left: 150px;display: <?php echo 
               $altScs;?>">
                   Edit Successfull..
               </div>

                <div class="row alert alert-danger successAlt" style="width: 50%;margin-left: 150px;display: <?php echo 
               $altUn;?>">
                   Edit Unsuccessfull....
               </div>
</body>
</html> -->

                