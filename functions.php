<?php session_start();?>
<?php ob_start(); ?>
<?php include("db.php"); ?>
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
    $size= $_FILES['uploadfile']['size'];
    $work_nature = $_POST['work_nature'];

    $_SESSION['matric'] = $matric;

    $errors     = array();
    $maxsize    = 100000;
    $acceptable = array(
        'image/jpeg',
        'image/jpg',
        'image/png'
    );

   if(!(empty($matric)) && !(empty($fullname)) && !(empty($campus)) && !(empty($college)) && !(empty($faculty)) && !(empty($department)) && !(empty($ststat)) && !(empty($level)) && !(empty($semester)) && !(empty($state)) && !(empty($lga)) && !(empty($centre_name)) && !(empty($centre_address)) && !(empty($trainer_name)) && !(empty($trainer_phone)) && !(empty($std_image)) && !(empty($work_nature))){

    if(($size >= $maxsize) || ($size == 0)) {
        $errors[] = 'File too large. File must be less than 100kb.';
    }
    if((!in_array($_FILES["uploadfile"]["type"], $acceptable)) && (!empty($_FILES["uploadfile"]["type"]))) {
        $errors[] = 'Invalid file type. Only JPG, and PNG types are accepted.';
    }
    if(count($errors) === 0) {
        $query = "SELECT matric_no FROM students WHERE matric_no = '{$matric}'";
        $student_query = mysqli_query($connection, $query);
        $count = mysqli_num_rows($student_query);
    
     if($count != 0){
        header("Location: index_new.php?errorp=matrictaken");
  } else {
    $folder = "images/" . $std_image;
    move_uploaded_file($std_image_temp, $folder);

	$addquery = "INSERT INTO `students` (`matric_no`, `full_name`, `campus`, `college`, `faculty`, `department`, `std_status`, `std_level`, `semester`, `state`, `lga`, `training_centre`, `training_address`, `trainer_name`, `trainer_phone`, `nature_of_work`, `image`) ";
	$addquery .= "VALUES('{$matric}', '{$fullname}', '{$campus}', '{$college}', '{$faculty}', '{$department}', '{$ststat}', '{$level}', '{$semester}', '{$state}', '{$lga}', '{$centre_name}', '{$centre_address}', '{$trainer_name}', '{$trainer_phone}', '{$work_nature}', '{$std_image}')";
	$insert_query = mysqli_query($connection, $addquery);
	if($insert_query){
	    header("Location: print.php");
	} else {
	    header("Location: index_new.php?errorp=specialcharacter");
	}
         
         //   $to = "adepeju.adigun@uniosun.edu.ng";
          //  $subject = "Entrepreneurship Form";
         //   $txt = "A new student registered
          //  Name: {$fullname}
         //   Matriculation Number: {$matric}
          //  Campus: {$campus}
          //  College: {$college}
       //     Faculty: {$faculty}
        //    Department: {$department} ";
       //     $headers = "From: Adebayo" . "\r\n" .
        //    "CC: suleiman.adebayo@cset.uniosun.edu.ng";

            // mail($to,$subject,$txt,$headers);

  }
    } else {
        foreach($errors as $error) {
            $err = $error;
            header("Location: index_new.php?errorp=$err");
        }


    }
} else {
    header("Location: index_new.php?errorp=emptyfields");
}
}
?>