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
                <p>Department</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>

            <ul class="list-sidebar bg-defoult">
              <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fa fa-users" aria-hidden="true"></i> <span class="nav-label"> Students </span> <span class="fa fa-chevron-left pull-right"></span> </a>
              <ul class="sub-menu collapse" id="dashboard">
                <li class="active"><a href="student_subject.php" target="f1">Student Subject Add</a></li>
                <li class="active"><a href="student_update.php" target="f1">Update Student Detail</a></li>  
              </ul>
            </li>
            
            <li> <a href="#" data-toggle="collapse" data-target="#tables" class="collapsed active" ><i class="fa fa-line-chart" aria-hidden="true"></i> <span class="nav-label">Results</span><span class="fa fa-chevron-left pull-right"></span></a>
            <ul  class="sub-menu collapse" id="tables" >
            <li><a href="resultAdd.php" target="f1"> Add Result</a></li>
            <li><a href="" target="f1"> Update Result</a></li>
            </ul>
            </li>

          

          <li> <a href="#" data-toggle="collapse" data-target="#e-commerce" class="collapsed active" ><i class="fa fa-book" aria-hidden="true"></i></i> <span class="nav-label">Subjects</span><span class="fa fa-chevron-left pull-right"></span></a>
        <ul  class="sub-menu collapse" id="e-commerce" >
          <li><a href="addSubject.php" target="f1"> Add Subjects</a></li>
          
        </ul>
      </li>


      



           
          <li> <a href="#" data-toggle="collapse" data-target="#e" class="collapsed active" ><i class="fa fa-cogs" aria-hidden="true"></i> <span class="nav-label">Setting</span><span class="fa fa-chevron-left pull-right"></span></a>
        <ul  class="sub-menu collapse" id="e" >
          <li><a href="changePassword.php" target="f1">Change Password</a></li>
          
        </ul>
      </li>
          
          
        
      
    </ul>
    </div>
    </aside>
    </div>

</body>
</html>