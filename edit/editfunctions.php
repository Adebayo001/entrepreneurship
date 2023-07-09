<?php ob_start(); ?>
<?php 
include("../db.php"); ?>
<?php session_start();?>
<?php 
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $matric = $_POST['matric'];
        $fullname = $_POST['fullname'];
        $campus = $_POST['campus'];
        $college = $_POST['college'];
        $faculty = $_POST['faculty'];
        $department = $_POST['department'];
        $level = $_POST['level'];
        $semester = $_POST['semester'];
        $state = $_POST['state'];
        $lga = $_POST['slga'];
        $centre_name = $_POST['centre_name'];
        $centre_address = $_POST['centre_address'];
        $trainer_name = $_POST['trainer_name'];
        $trainer_phone = $_POST['trainer_phone'];
        $std_image = $_FILES['uploadfile']["name"];
        $std_image_temp = $_FILES['uploadfile']['tmp_name'];
        $ext = pathinfo($std_image, PATHINFO_EXTENSION);
        $new_image = $fullname.'_'.date('Hms-dmY').'.'.$ext;
        $size= $_FILES['uploadfile']['size'];
        $work_nature = $_POST['work_nature'];
    
        //$_SESSION['matric'] = $matric;
        $folder = "../images/" . basename($new_image);
        $errors     = array();
        $maxsize    = 100000;
        $acceptable = array(
            'image/jpeg',
            'image/jpg',
            'image/png'
        );
        if(!(empty($matric)) && !(empty($fullname)) && !(empty($campus)) && !(empty($college)) && !(empty($faculty)) && !(empty($department)) && !(empty($level)) && !(empty($semester)) && !(empty($state)) && !(empty($lga)) && !(empty($centre_name)) && !(empty($centre_address)) && !(empty($trainer_name)) && !(empty($trainer_phone)) && !(empty($std_image)) && !(empty($work_nature))){
            //check if image already exists in database
            $input = mysqli_real_escape_string($connection, $_FILES['uploadfile']['name']);

            $query = "SELECT * FROM students WHERE image = '$input'";
            $result = mysqli_query($connection, $query);

            // check if query returns any result
            if (mysqli_num_rows($result) > 0)
            {
                $errors[] = 'Sorry, this image already exists. Rename the image before uploading';
            }

            //check if image already exists in folder (old)
            if (file_exists($folder)) {
                $errors[] = 'Sorry, this image already exists. Rename the image before uploading';
            }
            if(($size >= $maxsize) || ($size == 0)) {
                $errors[] = 'File too large. File must be less than 100kb.';
            }
            if((!in_array($_FILES["uploadfile"]["type"], $acceptable)) && (!empty($_FILES["uploadfile"]["type"]))) {
                $errors[] = 'Invalid file type. Only JPG, and PNG types are accepted.';
            }
            if(count($errors) === 0) {
                move_uploaded_file($std_image_temp, $folder);
            
                $query = "UPDATE students SET ";
                $query .= "matric_no = '{$matric}', ";
                $query .= "full_name = '{$fullname}', ";
                $query .= "campus = '{$campus}', ";
                $query .= "college = '{$college}', ";
                $query .= "faculty = '{$faculty}', ";
                $query .= "department = '{$department}', ";
                $query .= "std_level = '{$level}', ";
                $query .= "semester = '{$semester}', ";
                $query .= "state = '{$state}', ";
                $query .= "lga = '{$lga}', ";
                $query .= "training_centre = '{$centre_name}', ";
                $query .= "training_address = '{$centre_address}', ";
                $query .= "trainer_name = '{$trainer_name}', ";
                $query .= "trainer_phone = '{$trainer_phone}', ";
                $query .= "nature_of_work = '{$work_nature}', ";
                $query .= "image = '{$new_image}' ";
                $query .= "WHERE id = {$id}";
                $update_query = mysqli_query($connection, $query);
                
                header("Location: print.php?matric=$matric");

            }   else {
                foreach($errors as $error) {
                    $err = $error;
                    header("Location: index.php?errorp=$err");
                }
        
            }
    } else {
        header("Location: index.php?errorp=emptyfields");
        }
}
?>