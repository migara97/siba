
<?php
	session_start();
	$name=$_SESSION['username'];

	if(isset($_SESSION['subjects_ID'])){

		$su_id1=$_SESSION['subjects_ID'];
	}
error_reporting(0);
include("includes/config.php");



if(isset($_POST['pay'])){
	$query_run="UPDATE `repeat_exam` SET isPay='1' WHERE subjects_ID='$su_id1'  AND student_ID='$name'";
	$query=mysqli_query($con,$query_run);
	if($query){
		echo "yes";
	}else{
		echo "no";
	}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>

<link rel="stylesheet" href="css/style1.css">


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <style type="text/css">
    	.tb td{
    		background-color: white;
    		text-align: center;

    	}
    	.tb th{
    		background-color: #b6b8b6;
    		text-align: center;
    	}

    	.tb td ,th{
    		border: 1px solid #2a2b2b;
    	}
    </style>


</head>
<body style="background-image: url('image/back.jpg');background-size: cover;">
	<div class="container">
	<form class="form-horizontal">
	<div class="col-sm-10" style="text-align: center;padding-top:20px  "><h2>Student ID 	<?php echo $name; ?></h2></div>

	 

	<div class="col-sm-10 mx-auto row">
	<table class="table table-striped tb">
		<tr>
			<th scope="col">Course ID</th>
			<th scope="col">Samester</th>
			<th scope="col">Subjects ID</th>
			<th scope="col">Subjects Name</th>
			<th scope="col">Grade</th>
			<th scope="col">Repeat Request</th>
			
		</tr>

	<?php  

	$subject = "SELECT * FROM `examrepeat` WHERE student_ID='$name'";
	$query_run=mysqli_query($con,$subject);
	if($query_run)
	{
		while($rec=mysqli_fetch_assoc($query_run))
		{
			$id=$rec[student_ID];
			$cuid=$rec[subjects_ID];

			$isCheck="SELECT * FROM `repeat_exam` WHERE student_ID='$rec[student_ID]' AND subjects_ID='$rec[subjects_ID]'";
					$isCheck_result=mysqli_query($con,$isCheck);

					if($isCheck_result){
						if(mysqli_num_rows($isCheck_result)>=1){
							$value="Requested";
							$color="red";
						}else{
							$value="request";
							$color="green";
						}
					}

 			$tb="<tr>";
					
					$tb.="<td>$rec[course_ID]</td>";
					$tb.="<td>$rec[semester]</td>";
					$tb.="<td>$rec[subjects_ID]</td>";
					$tb.="<td>$rec[subject_name]</td>";
					$tb.="<td>$rec[grade]</td>";
					$tb.="<td><input type=\"button\" class=\"btn btn-success\" style=\"width:95px;background-color:$color;\"; value='$value' onclick=\"document.getElementById('id01').style.display='block';loadDoc('$id','$cuid');\"></td>";
					
					$tb.="</tr>";

					echo $tb;
		}
	}





	?>
<?php echo $courseID;?>

</table>
</div>
</form>
</div>
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-card-4 col-md-5" style="margin-left: 300px">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Requst Repeat Exam</h2>
      </header>
      <div class="container">
            <form class="form-horizontal" role="form" method="POST">
               
                <label id="departID"></label>
                <form>
             	<table width="60%" style="margin-left: 175px;">
             		<tr>
             			
             			<td>
               			 <input type="button" name="submit" id="btn1" class="btn btn-primary btn-block" onclick="document.getElementById('id04').style.display='block'"  style="width:80%;" value="Requst">
             			</td>
             			<td>
             				<input type="reset" class="btn btn-danger btn-block" style="width:80%;" value="Cancel">
             			</td>
             		</tr>
             	</table>
                </form>
                <br>
                <br>
            </form> <!-- /form -->
        </div> <!-- ./container -->
    </div>
  </div>



<div id="id04" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-card-4 col-md-6" style="margin-left: 300px">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id04').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Requst Repeat Exam</h2>
      </header>
      
   
				<div class="container">
				    <div class='row'>
				        <div class='col-md-3'></div>
				        <div class='col-md-6'>
				          <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
				          <form accept-charset="UTF-8" action="" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post">
				          	<div style="margin:0;padding:0;display:inline">
				          		<input name="utf8" type="hidden" value="✓" />
				          		<input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" />
				          	</div>
				            <div class='form-row'>
				              <div class='col-xs-12 form-group required'>
				                <label class='control-label'>Name on Card</label>
				                <input class='form-control' size='4' type='text' required>
				              </div>
				            </div>
				            <div class='form-row'>
				              <div class='col-xs-12 form-group card required'>
				                <label class='control-label'>Card Number</label>
				                <input autocomplete='off' class='form-control card-number' size='20' type='text' maxlength='16' required>
				              </div>
				            </div>
				            <div class='form-row'>
				              <div class='col-xs-4 form-group cvc required'>
				                <label class='control-label'>CVC</label>
				                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' required>
				              </div>
				              <div class='col-xs-4 form-group expiration required'>
				                <label class='control-label'>Expiration</label>
				                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text' maxlength='2' required>
				              </div>
				              <div class='col-xs-4 form-group expiration required'>
				                <label class='control-label'> </label>
				                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text' required>
				              </div>
				            </div>
				            <div class='form-row'>
				              <div class='col-md-12'>
				                <div class='form-control total btn btn-info'>
				                  Total:
				                  <span class='amount'>Rs.2500.00</span>
				                </div>
				              </div>
				            </div>
				            <div class='form-row'>
				              <div class='col-md-12 form-group'>
				                <button class='form-control btn btn-primary submit-button' name="pay" type='submit'>Pay »</button>
				               
				              </div>
				            </div>
				            <div class='form-row'>
				              <div class='col-md-12 error form-group hide'>
				                <div class='alert-danger alert'>
				                  Please correct the errors and try again.

				                </div>
				              </div>
				            </div>
				          </form>
				        </div>
				        <div class='col-md-3'></div>
				    </div>
				</div>


             	
                
                <br>
                <br>
          
    </div>
  </div>




<script>
function loadDoc(id,su_id) {
	//document.getElementById("departID").innerHTML =id;
  var xhttp = new XMLHttpRequest();
  var res="&id="+id+"&su_id="+su_id;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 || this.status == 200) {
      document.getElementById("departID").innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "ajax/department_edit_ajax.php?d_id="+res, true);
  xhttp.send();
}
</script>





</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
  $("#btn1").click(function(){
    $("#id01").hide();
  });
  
});
</script>

