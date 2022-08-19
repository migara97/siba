<?php
session_start();
error_reporting(0);
include("includes/config.php");


if(isset($_GET['id']))
    {
        $StudentID=$_GET['id'];
    
    
var_dump($_POST);

    $re=mysqli_query($con,"select * from  `student` where student_ID='$StudentID' ");
       if ($re) {
        $recod=mysqli_fetch_assoc($re);
        $Name=$recod['student_Name'];
        $Email=$recod['student_Email'];
        $date=$recod['DOB'];
        $det=$recod['department_ID'];
        $cou=$recod['course_ID'];
        $PhoneNumber=$recod['st_Number'];


    
      }
}







if(isset($_POST['submit']))
{
   
    $StudentID=$_POST['StudentID'];
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $radio=$_POST['radio'];
    $date=$_POST['date'];
    $pwd=rand(10000,99999);   //genarate pwd
    $enc_pwd=md5($pwd);
    $PhoneNumber=$_POST['PhoneNumber'];

    var_dump($_POST);


    $query=mysqli_query($con,"Update `student` set student_Name='{$Name}',student_Email='{$Email}',gender='{$radio}',DOB='{$date}',student_Password='{$pwd}',st_Number='{$PhoneNumber}' where student_ID='$StudentID'");


    if($que){

            $que=mysqli_query($con,"update `login` set userPassword ='{$enc_pwd}' where userName='{$StudentID}'");
                

            $to=$Email;
            $mail_subject="Student Manegment System User Name Password";
            $email_body="Your  Student Manegment System User Name : $StudentID <br>";
            $email_body.="Your Student Manegment System Password : $pwd";  
            $header="From: {$Email}\r\nContent-Type: text/html";

            $send_mail_result=mail($to,$mail_subject,$email_body,$header);    
    }else{
        echo "error";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <!-- <link rel="stylesheet" href="../css/adddepartment.css"> -->
    <style type="text/css">
        .form-horizontal{
            margin-left: 170px;
            width: 60%;
            margin-top: 70px;


        }
        #txtHint{
            background-color: white;
            position: absolute;
            z-index: 99;
            padding: 12px;
            display: none;
            cursor: pointer;
        }
    </style>

    <script>
        function showHint(str){
            var xhttp;
            if(str.length==0){
                document.getElementById("txtHint").innerHTML="";
                document.getElementById("txtHint").style.display="none";
                return;
            }else{
                document.getElementById("txtHint").style.display="block";
            }
            xhttp= new XMLHttpRequest()
            xhttp.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;

                }
            };
            xhttp.open("GET","ajax/ajax.php?q="+str,true);
            xhttp.send();
        }
    </script>


    <script>
        function loadDoc() {
            var department_ID=document.getElementById("det").value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("cou").innerHTML = this.responseText;
                }
             };
        xhttp.open("GET", "../getcourse_Ajax.php?department_ID=" + department_ID, true);
        xhttp.send();
        }
    </script>



</head>
<body>
    

<div class="container">
            <form class="form-horizontal" role="form" method="POST">
                <center><h2>Update Students</h2></center>
                <br>

                    

                <div class="form-group">
                    <label for="StudentID" class="col-sm-3 control-label">Student ID</label>
                    <div class="col-sm-9">
                        <input type="text" onkeyup="showHint(this.value)" id="StudentID" name="StudentID" autocomplete="off" value="<?php  echo $StudentID;?>" placeholder="Student ID" class="form-control" autofocus>
                        <samp id="txtHint" style="color: black"></samp>
                       
                    </div>

                </div>
                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="Name" name="Name" value="<?php  echo $Name;?>"placeholder="Student Name" class="form-control" autofocus>
                    </div>
                </div>
                
              
              <div class="form-group">
                    <label for="Email" class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-9">
                        <input type="Email" id="Email" value="<?php  echo $Email;?>" placeholder="Email" class="form-control" name="Email">
                    </div>
                </div>

 		

				<div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" name="date" value="<?php  echo $date;?>" id="birthDate" class="form-control">
                    </div>
                </div>


                <div class="form-group">
                    <label for="st_Num" class="col-sm-3 control-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="text" id="PhoneNumber" name="PhoneNumber" value="<?php  echo $PhoneNumber;?>" placeholder="Phone Number" class="form-control" autofocus>
                    </div>
                </div>

                <br>
                <button type="submit" name="submit" class="btn btn-primary btn-block" style="width:75%;float: right;">Update</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->


</body>
</html>