<?php
session_start();
error_reporting(0);
include("includes/config.php");
if(isset($_POST['submit']))
{
   
    $StudentID=$_POST['StudentID'];
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $radio=$_POST['radio'];
    $date=$_POST['date'];
    $det=$_POST['det'];
    $cou=$_POST['cou'];
    $pwd=rand(10000,99999);   //genarate pwd
    $enc_pwd=md5($pwd);
    $PhoneNumber=$_POST['PhoneNumber'];
    $NICNumber=$_POST['NICNumber'];
    $st_Address=$_POST['st_Address'];
    var_dump($_POST);

    $query=mysqli_query($con,"insert into `student`(student_ID,student_Name,student_Email,gender,DOB,course_ID,student_Password,st_Number,department_ID,st_Address,st_NIC) value('{$StudentID}','{$Name}','{$Email}','{$radio}','{$date}','{$cou}','{$pwd}','{$PhoneNumber}','{$det}','{$NICNumber}','{$st_Address}')");

    if($query){

            $query=mysqli_query($con,"insert into `login` value('{$StudentID}','{$enc_pwd}','student')");

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
    <link rel="stylesheet" href="../css/adddepartment.css">
    <style type="text/css">
        .form-horizontal{
            margin-left: 170px;
            width: 60%;
            margin-top: 70px;


        }
    </style>


<script>
        function loadDoc() {
            var department_ID=document.getElementById("det").value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("cou").innerHTML = this.responseText;
                }
             };
        xhttp.open("GET", "getcourse_Ajax.php?department_ID=" + department_ID, true);
        xhttp.send();
        }
</script>



</head>
<body>
    

<div class="container">
            <form class="form-horizontal" role="form" method="POST">
                <center><h2>Registration Students</h2></center>
                <br>
                <div class="form-group">
                    <label for="StudentID" class="col-sm-3 control-label">Student ID</label>
                    <div class="col-sm-9">
                        <input type="text" id="StudentID" name="StudentID" placeholder="Student ID" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="Name" name="Name" placeholder="Student Name" class="form-control" autofocus required>
                    </div>
                </div>


                <div class="form-group">
                    <label for="st_NIC" class="col-sm-3 control-label">NIC</label>
                    <div class="col-sm-9">
                        <input type="text" id="NICNumber" name="NICNumber" placeholder="NIC Number" class="form-control" autofocus>
                    </div>
                </div>


                   <div class="form-group">
                    <label for="st_Num" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                         <textarea name="st_Address" id="st_Address" placeholder="Address" rows="4" cols="35"></textarea>
                    </div>
                </div>
                
              
                <div class="form-group">
                    <label for="Email" class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-9">
                        <input type="Email" id="Email" placeholder="Email" class="form-control" name="Email" required>
                    </div>
                </div>

 				<div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="radio" id="femaleRadio" value="Female" >Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="radio" id="maleRadio" value="Male" >Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

				<div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" name="date" id="birthDate" class="form-control" required>
                    </div>
                </div>

				
                <div class="form-group">
                    <label for="Department" class="col-sm-3 control-label">Department ID </label>
                    <div class="col-sm-9">
                        <select class="browser-default custom-select custom-select-lg mb-3" id="det" onchange="loadDoc()" name="det" required>
                        <option selected>Select Department...</option>



                        <?php
                        $query="SELECT * FROM `department`";
                        $query_run=mysqli_query($con,$query);
                        if($query_run){
                            while ($rec=mysqli_fetch_assoc($query_run)) {
                                echo "<option value=\"$rec[department_ID]\">$rec[department_ID]</option>";
                            }

                        }

                        ?>


                        </select>

                    </div>
                </div>



                <div class="form-group">
                    <label for="Department" class="col-sm-3 control-label">Course ID</label>
                   <div class="col-sm-9">
                       <div id="cou"></div>
                   </div>
                </div>


               
                <div class="form-group">
                    <label for="st_Num" class="col-sm-3 control-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="text" id="PhoneNumber" name="PhoneNumber" pattern="[0-9]{10}" placeholder="Phone Number" class="form-control" autofocus required>
                    </div>
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-primary btn-block" style="width:75%;float: right;">Register</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->





</body>
</html>