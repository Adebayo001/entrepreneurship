<?php 
include("db.php"); ?>
<?php session_start();?>
<?php
if(isset($_POST['matric'])){
    $matric = $_POST['matric'];
	$fullname = $_POST['fullname'];
	$campus = $_POST['campus'];
	$college = $_POST['college'];
	$faculty = $_POST['faculty'];
	$department = $_POST['department'];
	$ststat = $_POST['ststat'];
	$level = $_POST['level'];
	$semester = $_POST['semester'];
    $state = $_POST['state'];
	$lga = $_POST['slga'];
    $centre_name = $_POST['centre_name'];
    $centre_address = $_POST['centre_address'];
    $trainer_name = $_POST['trainer_name'];
    $trainer_phone = $_POST['trainer_phone'];
    $std_image = $_FILES['uploadfile']['name'];
    $std_image_temp = $_FILES['uploadfile']['tmp_name'];
    $work_nature = $_POST['work_nature'];

    $_SESSION['matric'] = $matric;

    if(!(empty($matric)) && !(empty($fullname)) && !(empty($campus)) && !(empty($college)) && !(empty($faculty)) && !(empty($department)) && !(empty($ststat)) && !(empty($level)) && !(empty($semester)) && !(empty($state)) && !(empty($lga)) && !(empty($centre_name)) && !(empty($centre_address)) && !(empty($trainer_name)) && !(empty($trainer_phone)) && !(empty($std_image)) && !(empty($work_nature))){

    $query = "SELECT matric_no FROM students WHERE matric_no = '{$matric}'";
    $student_query = mysqli_query($connection, $query);
    $count = mysqli_num_rows($student_query);
    
     if($count != 0){
         echo "<script>alert('Matriculation Number already exist');
         window.location.href='./';</script>";
  } else {
    $folder = "images/" . $std_image;
    move_uploaded_file($std_image_temp, $folder);

	$addquery = "INSERT INTO `students` (`matric_no`, `full_name`, `campus`, `college`, `faculty`, `department`, `std_status`, `std_level`, `semester`, `state`, `lga`, `training_centre`, `training_address`, `trainer_name`, `trainer_phone`, `nature_of_work`, `image`) ";
	$addquery .= "VALUES('{$matric}', '{$fullname}', '{$campus}', '{$college}', '{$faculty}', '{$department}', '{$ststat}', '{$level}', '{$semester}', '{$state}', '{$lga}', '{$centre_name}', '{$centre_address}', '{$trainer_name}', '{$trainer_phone}', '{$work_nature}', '{$std_image}')";
	$insert_query = mysqli_query($connection, $addquery);
	echo "<script>alert('Registration Successful, Proceed to Print');
         window.location.href='print';</script>";
  }
} else {
    echo "<script>alert('All fields are required');
    window.location.href='./';</script>";
}
}
?>