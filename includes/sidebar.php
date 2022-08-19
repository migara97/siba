<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <!-- <script src="../js/sildebar.js"></script> -->
    <!-- <link rel="stylesheet" href="../css/slidebar.css"> -->
</head>
<body>


      <div class="main">
        <aside>
          <div class="sidebar left " style="height:600px;">
            <div class="user-panel">
              <div class="pull-left image pb-5">
                <!-- <img src="http://via.placeholder.com/160x160" class="rounded-circle" alt="User Image"> -->
              </div>
              <div class="pull-left info">
                <p>Examinition Department</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>





            <ul class="list-sidebar bg-defoult">


              <li> <a href="#" data-toggle="collapse" data-target="#dash" class="collapsed active" > <i class="fa fa-tachometer" aria-hidden="true"></i> <span class="nav-label"> Dashboard </span> <span class="fa fa-chevron-left pull-right"></span> </a>
              <ul class="sub-menu collapse" id="dash">
                <li><a href="dashboard.php" target="f1">Dashboard</a></li> 
                </ul>
              </li>

                <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fa fa-th-large"></i> <span class="nav-label"> Department </span> <span class="fa fa-chevron-left pull-right"></span> </a>
              <ul class="sub-menu collapse" id="dashboard">
                <li class="active"><a href="adddepartment.php" target="f1">Add Department</a></li>
                <li><a href="department_view.php" target="f1">View</a></li>
                
              </ul>
            </li>
            
            <li> <a href="#" data-toggle="collapse" data-target="#tables" class="collapsed active" ><i class="fa fa-graduation-cap" aria-hidden="true"></i> <span class="nav-label">Course</span><span class="fa fa-chevron-left pull-right"></span></a>
            <ul  class="sub-menu collapse" id="tables" >
            <li><a href="addcoures.php" target="f1"> Add Course</a></li>
            <li><a href="viewcourse.php" target="f1"> Course View</a></li>
            </ul>
            </li>

          

          <li> <a href="#" data-toggle="collapse" data-target="#e-commerce" class="collapsed active" ><i class="fa fa-book" aria-hidden="true"></i></i> <span class="nav-label">Subjects</span><span class="fa fa-chevron-left pull-right"></span></a>
        <ul  class="sub-menu collapse" id="e-commerce" >
          <li><a href="addsubject.php" target="f1"> Add Subjects</a></li>
          <li><a href="subjects_view.php" target="f1"> View Subjects</a></li>
          
        </ul>
      </li>



            <li> <a href="#" data-toggle="collapse" data-target="#products" class="collapsed active" > <i class="fa fa-user-circle-o" aria-hidden="true"></i> <span class="nav-label">Students</span> <span class="fa fa-chevron-left pull-right"></span> </a>
            <ul class="sub-menu collapse" id="products">
              <li class="active"><a href="addstudent.php" target="f1">Add Student</a></li>
              <li class="active"><a href="student_view.php" target="f1">View Student</a></li>
            </ul>
          </li>
          
         <li> <a href="#" data-toggle="collapse" data-target="#prod" class="collapsed active" > <i class="fa fa-check-square" aria-hidden="true"></i> <span class="nav-label">Approve</span> <span class="fa fa-chevron-left pull-right"></span> </a>
            <ul class="sub-menu collapse" id="prod">
              <li class="active"><a href="requestApprove.php" target="f1">Approve Student Request</a></li>
              <li class="active"><a href="approveView.php" target="f1">Approve View</a></li>
            </ul>
          </li>




          <li> <a href="#" data-toggle="collapse" data-target="#res" class="collapsed active" > <i class="fa fa-line-chart" aria-hidden="true"></i><span class="nav-label">Result</span> <span class="fa fa-chevron-left pull-right"></span> </a>
            <ul class="sub-menu collapse" id="res">
              <li class="active"><a href="resultView.php" target="f1">Result View</a></li>
              <li class="active"><a href="changePassword.php" target="f1">GPA Calculate</a></li>
            </ul>
          </li>

            <li> <a href="#" data-toggle="collapse" data-target="#admin" class="collapsed active" > <i class="fa fa-user-secret" aria-hidden="true"></i><span class="nav-label">Admin</span> <span class="fa fa-chevron-left pull-right"></span> </a>
            <ul class="sub-menu collapse" id="admin">
              <li class="active"><a href="addAdmin.php" target="f1">Add Admin</a></li>
              <li class="active"><a href="changePassword.php" target="f1">Password Change</a></li>
            </ul>
          </li>
      
    </ul>
    </div>
    </aside>
    </div>

</body>
</html>