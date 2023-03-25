<?php include("db.php"); ?>
<?php session_start();
// if(isset($_POST['submit'])){
//     $fullname = $_POST['fullname'];
//     $matric = $_POST['matric'];
//     $department = $_POST['department'];
//     $level = $_POST['level'];
//     $session = $_POST['session'];
//     $centre_name = $_POST['centre_name'];
//     $centre_address = $_POST['centre_address'];
//     $trainer_name = $_POST['trainer_name'];
//     $trainer_phone = $_POST['trainer_phone'];
//     $duration = $_POST['duration'];
//     $std_image = $_FILES['uploadfile']['name'];
//     $std_image_temp = $_FILES['uploadfile']['tmp_name'];
//     $work_nature = $_POST['work_nature'];

//     $folder = "images/" . $std_image;
//     move_uploaded_file($std_image_temp, $folder);

//     $query = "SELECT matric_no FROM students WHERE matric_no = '$matric'";
//     $student_query = mysqli_query($connection, $query);
//     $count = mysqli_num_rows($student_query);
    
//      if($count != 0){
//          echo "<script>alert('Matriculation Number already exist');
//          window.location.href='index.php';</script>";
//   } else {
//     $insert_query = "INSERT INTO students(full_name, matric_no, department, std_level, std_session, training_centre, training_address, work_nature, trainer_name, duration, trainer_number, std_image) ";
//     $insert_query .= "VALUES('{$fullname}', '{$matric}', '{$department}', '{$level}', '{$session}', '{$centre_name}', '{$centre_address}', '{$work_nature}', '{$trainer_name}', '{$duration}', {$trainer_phone}, '{$std_image}') ";
//     $std_query = mysqli_query($connection, $insert_query);
//     if(!($std_query)){
//       die("QUERY FAILED" . mysqli_errno($connection));
//     }
//   }
// }
?>

<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
    
<title>2023 STUDENT ENTREPRENEURSHIP FORM</title>
<style type="text/css">
#main {
	background:#FFF;
	padding:5px 10px 5px 10px;
	width: 900px;
}
#header {
	height: 80px;
}
#header h4{
	font: 18px bold;
}
#logo_left {
	float:left; position: relative;
}
#logo_right {
	float:right;
}
#mid_header {
	float:left;
	margin-left:20px;
	text-align:center;
	width:880px;
	padding:0px 5px 0px 5px;
}
#box_bot {
	font:12px normal;
	float:right;
	border: 1px #CCC solid;
	padding:5px;
	width:auto;
}
#coord_address {
	font:12px normal;
	float:left;
	padding:5px;
	margin-top:0px;
	width:200px;
}
#content {
	float:left;
	width:100%;
	margin-bottom:15px;
	background-image: url(../../images/bg_forms.jpg);
	background-repeat: no-repeat;
}
#content ol.double{
	line-height: 300%;
}
#content span.title{
	text-align:center;
}

#content span.fill{
	border-bottom-style: dotted;
}
#content span.content_fill{
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	text-decoration: underline;
}

#content span.values{
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:14px;
}

body {
	margin-top: 0px;
}

img.pic{
float:right;
padding:2px;
margin-right:2px;
border:1px  #D8C6B1 solid;
margin-bottom:2px;
}
.error_not_found {
	font-size: 40px;
	color: #F00;
}

</style>
</head>
<body>
<?php if(isset($_SESSION['matric'])){
echo "<script> onload='javascript:window.print()' </script>";
} ?>
<p>
<div id="main">
<div id="mid_header">
    <p align="center"><strong><font size="+3"><img src="images/logo.png" width="114" height="121" border="0" /><br />
      OSUN STATE UNIVERSITY, OSOGBO</font></strong><br>
      <strong><font size="+1">OFFICE OF THE VICE CHANCELLOR </font></strong> <br>
      <strong><font size="+2"> CENTRE FOR ENTREPRENEURSHIP </font> </strong> <br>
      P.M.B 4494, OSOGBO, OSUN STATE, NIGERIA </p>
</div>
</p><br />
<div id="content">
    <h4 style="text-align: center;"> OFFER OF PLACE OF ENTREPRENEURSHIP TRAINING</h4>
    <?php 
      $getmatric = $_SESSION['matric'];

      $query = "SELECT * FROM students WHERE matric_no = '{$getmatric}'";
      $fetch_query = mysqli_query($connection, $query);
      while($row = mysqli_fetch_assoc($fetch_query)){
        $fullname = $row['full_name'];
        $matric = $row['matric_no'];
        $std_image = $row['image'];
        $department = $row['department'];
        $level = $row['std_level'];
        $centre_name = $row['training_centre'];
        $centre_address = $row['training_address'];
        $work_nature = $row['nature_of_work'];
        $duration = $row['training_duration'];
        $trainer_name = $row['trainer_name'];
        $trainer_phone = $row['trainer_number'];
      ?>
  <div id="logo_right"><img src="images/<?php echo $std_image; ?>" width="150" height="150" 
	        alt="<?php echo $std_image; ?>" title="Olatunji Nafeesat Ayomide" class="pic"/></div>
            <ol class="double">
  <li><strong>FULL NAME:</strong> <span class="content_fill"><?php echo strtoupper($fullname); ?></span></li>
  <li><strong>MATRICULATION NUMBER:</strong> <span class="content_fill"><?php echo strtoupper($matric); ?></span></li>
  <li><strong>DEPARTMENT:</strong> <span class="content_fill"><?php echo strtoupper($department); ?></span></li>
  <li><strong>LEVEL:</strong> <span class="content_fill"><?php echo strtoupper($level); ?></span></li>
  <li><strong>SESSION:</strong> <span class="content_fill">2022/2023</span></li>
  <li><strong>TRAINING CENTRE FULL NAME:</strong> <span class="content_fill"><?php echo strtoupper($centre_name); ?></span></li>
  <li><strong>TRAINING CENTRE ADDRESS: </strong><span class="content_fill"><?php echo strtoupper($centre_address); ?></span></li>
  <li><strong>NATURE OF WORK:</strong> <span class="content_fill"><?php echo strtoupper($work_nature); ?></span></li>
  <li><strong>PERIOD OF TRAINING:</strong><span class="content_fill"><?php echo strtoupper($duration); ?></span></li>
  <li><strong>TRAINING OFFICER NAME:</strong> <span class="content_fill"><?php echo strtoupper($trainer_name); ?></span>
  <li><strong>TRAINING OFFICER PHONE NUMBER:</strong> <span class="content_fill"><?php echo $trainer_phone; ?></span><br /> 
    </li>
  </ol>
</div>
<?php } ?>
<div class="row">
                <div class="col-md-12 form-group">
                  <?php if(isset($_SESSION['matric'])){

                    echo "<input type='submit' onclick='javascript:window.print()' value='PRINT' class='btn btn-success rounded-0 py-2 px-4'>";

                  } else {
                    echo "";
                  } ?>
                </div>
              </div>
</body>
<?php session_destroy(); ?>
</html>