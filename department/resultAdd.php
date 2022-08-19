
<?php
    session_start();
error_reporting(0);
include("includes/config.php");


if(isset($_POST['save'])){
    $k=$_POST['grade'];
    echo $k;

    echo $_SESSION['c_id'];

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











    <style type="text/css">
        .form-horizontal{
            margin-left: 130px;
            width: 60%;
            margin-top: 70px;


        }



        .tb1{
            width: 50%;
            margin-top: 50px;
            margin-left: 200px;
            
        }

        .tb1 th{
            padding: 10px;
            background-color: #c2b48f;
        }

        .tb1 td{
            margin: 10px;
            padding: 10px;
            text-align: center;
            background-color: #cfc9bc;
        }
        .tb2{
             width: 40%;
            margin-top: 40px;
        }
        .tb2 td{
            padding: 10px;
            width: 15%;
        }

        
       
    </style>



    <script>
        function showHint(srt){
            var xhttp;
            if (str.length ==0) {
                document.getElementsByID("txtHint").innerHTML = "";
                document.getElementsByID("txtHint").style.display="none";
                return;

            }else{
                document.getElementsByID("txtHint").style.display="block";
            }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementsByID("txtHint").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET","ajax/ajax.php?q="+str,true);
            xhttp.send();
        }
    </script>


    

    <script type="text/javascript">
        function CL(su_id,c_id,semester,credit){
            //var c_id=document.getElementsByID("c_id").value;
            //alert(c_id+c_name);
            document.getElementById("c_id").innerHTML = c_id;
            document.getElementById("sem_name").innerHTML = semester;
            document.getElementById("su_id").innerHTML = su_id;
            document.getElementById("credit").innerHTML = credit;


            // sessionStorage.setItem("c_id","c_id");
        }
    </script>

</head>
<body>
    

<div class="container">
            <form class="form-horizontal" role="form" method="POST">
                <center><h2>Result Add</h2></center>
                <br>
                
                <div class="form-group">
                    <label for="StudentID" class="col-sm-3 control-label">Student ID</label>
                    <div class="col-sm-9">
                        <input type="text" id="studentID" name="studentID" placeholder="Student ID" class="form-control" autofocus>
                        <samp id="txtHint" style="color: black;"></samp>
                    </div>
                </div>
                
              
                <div class="form-group">
                <label for="Coures" class="col-sm-3 control-label">Semester </label>
                <div class="col-sm-9">
                <select name="semester" class="form-control" style="height:36px">
                    <option value="Semester 1">Semester 1</option>
                    <option value="Semester 2">Semester 2</option>
                    <option value="Semester 3">Semester 3</option>
                    <option value="Semester 4">Semester 4</option>
                    <option value="Semester 5">Semester 5</option>
                    <option value="Semester 6">Semester 6</option>
                    <option value="Semester 7">Semester 7</option>
                    <option value="Semester 8">Semester 8</option>
                </select>
                </div>
                </div>
                <button  name="search" id="search" class="btn btn-primary btn-block" style="width:73%;float: right;">Search</button>
        <br>
        </form >


        
        <form name="a" method="POST" class="col-sm-12 row">
            <table name="f2" class="tb1 mx-auto" style="width: 50%;margin-top: 50px;margin-left: 170px;">
            
            <tr>
            <th>Course ID </th>
            <th>Subjects ID </th>
            <th>Subject Credit</th>
            <th></th>
            
            
            </tr>

        <?php
        
                if (isset($_POST['search'])) {
    
                    // $courseID=$_POST['courseID'];
                    $studentID=$_POST['studentID'];
                    $semester=$_POST['semester'];
                    // var_dump($_POST);
                    $query=mysqli_query($con,"select course_ID,subjects_ID,subject_Credit FROM `student_subjects` WHERE student_ID='$studentID' and samester='$semester'");


                    if ($query) {



                        while ($rec=mysqli_fetch_assoc($query)) {
                            $c=$rec[course_ID];
                            $tb="<tr>";
                            $tb.="<td>$rec[course_ID]</td>";
                            $tb.="<td>$rec[subjects_ID]</td>";
                            $tb.="<td>$rec[subject_Credit]</td>";
                            $tb.="<td><input type='button' name='click'onclick=\"CL('$rec[subjects_ID]','$rec[course_ID]','$semester','$rec[subject_Credit]')\" class='form-control' style='width:40px;value='Click'></td>";
                          
                            $tb.="</tr>";
                            
                            echo $tb;

                            }
                        }
                    }
                    ?>
              

        
        </table>


            <br>
            <br>
            <br>

        <div class="row">
            <table class="tb2" cellspacing="0" cellpadding="0" width="100%" border="1" id="myTable">

                

            <tr>

            <td><p name="c_id" id="c_id"></p></td>
            <td><p name="sem_name" id="sem_name"></p></td>
            <td><p name="su_id" id="su_id"></p></td>
            <td><p name="credit" id="credit"></p></td> 
           <td><input type="text" name="ass_Mark" placeholder="Enter Assigment Mark" id="ass_Mark"></td>
            <td><input type="text" name="paper_Mark"  id="paper_Mark" placeholder="Enter Paper Mark" ></td>
            <td><input type="txt" id="tot_Mark" name="tot_Mark"></td>
            <td><input type="txt" name="grade" id="grade"></td>

            <td><input type="button" onclick="Calc()" value="Cal"></td> 

            </tr>
            </table>
        </div>

        <br>
        <br>
        <br>
        <br>
        <input type="submit"  name="save" id="save" class="btn btn-primary btn-block" style="margin-top: 50px; width:43%;float: right;"value="Save">









            </form> <!-- /form -->
        </div> <!-- ./container -->



</body>
</html>
<script type="text/javascript">
function Calc() {
   var x= document.getElementById("ass_Mark").value;
    var y= document.getElementById("paper_Mark").value;

    if((x=="") || (y=="")){
        alert("alll feil ");
    }else{
        if((x<=100 && x>=0)&&(y<=100 && y>=0)){

            var n = (40*x)/100;
            var m =(60*y)/100;
            var sum=parseInt(n)+parseInt(m);
        document.getElementById("tot_Mark").value=sum;

        if(sum >= 85) {
            a="A+";
        }  
        else if (sum<=85 && sum>=80){
            a="A";
        }
        else if(sum<=80 && sum>=75){
            a="A-";

        }
        else if(sum<=75 && sum>=70){
            a="B+";
        }
        else if(sum<=70 && sum>=65){
            a="B";
        }
        else if(sum<=65 && sum>=60){
            a="B-";
        }
        else if(sum<=60 && sum>=55){
            a="C+";
        }
        else if(sum<=55 && sum>=50){
            a="C";
        }
        else if(sum<=50 && sum>=45){
            a="C-";
        }
        else if(sum<=45 && sum>=40){
            a="D+";
        }
        else if(sum<=40 && sum>=35){
            a="D";
        }
        else if(sum<=35 && sum>=30){
            a="D-";
        }
        else{
            a="F";
        }
     

        document.getElementById("grade").value=a;

            
        }else{
            alert ("invalid number");

        }
    }

}


</script>