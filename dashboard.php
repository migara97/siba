
<?php
    session_start();
    error_reporting(0);
    include("includes/config.php");

    
    $department=mysqli_query($con,"SELECT department_ID,count(*) as total FROM department ");
    $dep=mysqli_fetch_assoc($department);
      
    $x=$dep['total'];

    $course=mysqli_query($con,"SELECT course_ID,count(*) as total FROM course ");
    $cu=mysqli_fetch_assoc($course);
      
    $y=$cu['total'];

    $student=mysqli_query($con,"SELECT student_ID,count(*) as total FROM student ");
    $stu=mysqli_fetch_assoc($student);
      
    $z=$stu['total'];

    $admin=mysqli_query($con,"SELECT adminID,count(*) as total FROM admin ");
    $ad=mysqli_fetch_assoc($admin);
      
    $r=$ad['total'];
      

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/slidebar.css">
    <script src="js/sildebar.js"></script>





 

  <style>
    .container{
      margin-top: 50px;
      /* margin-left: 180px; */

    }

    .card-columns{


    }

  </style>
 



</head>
<body> 
<div class="container-fluid">
  <div class="col-sm-2"></div>
  <div class="col-sm-12 mr-auto row pt-5">
    


            <div class="m-1 " style="background-image: linear-gradient(#ffcccc,#ff3333); height:120px; width: 240px">
              <div class="card-body text-center">
              <div style="float:left; margin-top:-30px"><i class="fa fa-university" style="font-size: 50px" aria-hidden="true"></i></div>
              <br>
              <div style="float:left;padding-top: 20px;"><h4>Department</h4></div>
              <div style="float:right;padding-bottom: 15px;"><p class="card-text"><h1><?php echo $x; ?></h1></p></div>
              </div>
            </div>

            <div class="m-1" style="background-image: linear-gradient(#b3ffb3,#00e600);height:120px;width: 240px">
              <div class="card-body text-center">
                <div style="float:left; margin-top:-30px"><i class="fa fa-graduation-cap" style="font-size: 50px" aria-hidden="true"></i></div>
                <br>
                <div style="float:left;padding-top: 20px;"><h4>Courses</h4></div>
                <div style="float:right;padding-bottom: 15px;"><p class="card-text"><h1><?php echo $z; ?></p></h1></div>
              </div>
            </div>



          <div class="m-1" style="background-image: linear-gradient(#ffff99,#ffff00);height:120px;width: 240px">
            <div class="card-body text-center">
                <div style="float:left; margin-top:-30px"><i class="fa fa-users" style="font-size: 50px" aria-hidden="true"></i>
                </div>
            <br>
            <div style="float:left;padding-top: 20px;"><h4>Students</h4>
              </div>
                  <div style="float:right;padding-bottom: 15px;"><p class="card-text"><h1><?php echo $y; ?></h1></p>
                    </div>
            </div>
          </div>

 


          <div class="m-1" style="background-image: linear-gradient(#b3ccff,#3377ff);height:120px;width: 240px">
            <div class="card-body text-center">
              <div style="float:left; margin-top:-30px"><i class="fa fa-user-secret" style="font-size: 50px" aria-hidden="true"></i>
              </div>
              <br>
                <div style="float:left;padding-top: 20px;"><h4>Admin</h4>
                  </div>
                  <div style="float:right;padding-bottom: 15px;"><p class="card-text"><h1><?php echo $r; ?></h1></p>
                  </div>
            </div>
          </div>


</div>

<div class="row pt-3">
<div class="mx-auto" id="graph" style="font-size: 50px;">
</div>
  

  </div>
</div>

</body>
</html>
<script>
  new Morris.Donut({
  
  element: 'graph',
  data: [
    {label: "English Department", value: 12},
    {label: "IT Department", value: 30},
    {label: "BA Department", value: 20}
  ]
});

</script>