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

<style type="text/css">
        .form-horizontal{
            margin-left: 60px;
            width: 800px;
            height: 400px;
            margin-top: 50px;
            position: relative;
            max-width: 2000px;
            max-height: 1000px;
            padding: 50px;
            background:rgba(255,255,255,.2);
            box-shadow: 0 5px 15px rgba(0,0,0,.5);
            
        }
        
    </style>


</head>
<body style="background-image: url('image/back.jpg');background-size: cover;">

	<div class="container">
     <form class="form-horizontal col-sm-12">
	 <div class="col-sm-12" style="text-align: center;padding-top:20px;padding-bottom: 20px"><h2>REQUEST</h2></div>

	<div class="col-sm-12 mx-auto">
    <table border="1" class="table table-striped table-dark">
		<tr style="text-align: center;">
			<th>Student ID</th>
			<th>Description</th>
			<th>Request Date</th>
			<th>Expire Date</th>
			<th>Status</th>
			
		</tr>

		<?php
			$name=$_SESSION['username'];
			$query="SELECT * FROM `request` where student_ID='$name'";
			$query_run=mysqli_query($con,$query);
			if($query_run){
				while($rec=mysqli_fetch_assoc($query_run)){

					$app=$rec['is_approve'];
					if ($app==1) {
						$a="<td><button class=\"btn btn-success\">Approve</button></td>";
					}else{
						$a="<td><button class=\"btn btn-warning\">Pendding</button></td>";

					}
					

					$Rid=$rec[request_id];
					$tb="<tr style=\"text-align: center;\">";
					$tb.="<td>$rec[student_ID]</td>";
					$tb.="<td>$rec[msg]</td>";
					$tb.="<td>$rec[date]</td>";
					$tb.="<td>$rec[expire]</td>";
					$tb.="$a";
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