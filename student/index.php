


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/slidebar.css">
    <script src="js/sildebar.js"></script>

    <style>


        body{
            overflow-x: hidden;
            overflow-y: hidden;
        }
        
        .iframe{
            border:none;
            width:100%;
            height: 600px;
            
        }
    </style>
</head>
<body>
	 <div class="row">
        <div class="col-md-12">
            <?php include('includes/hedear.php');?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <?php include('includes/sidebar.php');?>
        </div>
        <div class="col-md-10">
           <iframe class="iframe" name="f1" style="background-image: url('DSC_3931.jpg');background-size: cover;">
            
           </iframe>
        </div>
    </div>
    
</body>
</html>