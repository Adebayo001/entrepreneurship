<?php include("db.php");?>
<?php
if(isset($_POST['submit'])){
    $matric = $_POST['matric'];
    $result = array();
    $query = "SELECT matric_no FROM students WHERE matric_no = '$matric'";
    $student_query = mysqli_query($connection, $query);
    $count = mysqli_num_rows($student_query);
    
     if($count === 0){
         echo "New User";
     } else {
         echo "<script> alert('Matriculation Number already exist');
         window.location.href='index.php';</script>";
     }

}
// $query = "UPDATE students SET ";
// 	$query .= "campus = '{$campus}', ";
// 	$query .= "college = '{$college}', ";
// 	$query .= "matric_no = '{$matric}', ";
// 	$query .= "faculty = '{$faculty}', ";
// 	$query .= "department = '{$department}', ";
// 	$query .= "study = '{$study}', ";
// 	$query .= "std_level = '{$level}' ";
// 	$query .= "WHERE user_session = '{$get_session}'";
// 	$update_add = mysqli_query($connection, $query);

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <title>ENTREPRENEURSHIP FORM</title>
  </head>
  <body>
    <form class="mb-5" method="post">
    <div class="row">
                <div class="col-md-12 form-group mb-5">
                  <label for="" class="col-form-label">Matriculation Number *</label>
                  <input type="text" class="form-control" name="matric"  placeholder="Your Matric No" required>
                </div>
    </div>
    <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" name="submit" href="print.php" value="Submit" class="btn btn-primary rounded-0 py-2 px-4">
                </div>
    </div>
    </form>


  <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <!-- <script src="js/main.js"></script> -->

  </body>
</html>