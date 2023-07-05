<?php ob_start(); ?>
<?php include("../db.php"); ?>
<?php
if(isset($_POST['submit'])){
  $search = $_POST['search'];

  $query = "SELECT matric_no FROM students WHERE matric_no = '{$search}'";
  $student_query = mysqli_query($connection, $query);
  $count = mysqli_num_rows($student_query);
    
     if($count == 0){
       header("Location: index.php?errorp=matricnotexist");
  }

  $query = "SELECT * FROM students WHERE matric_no = '{$search}'";
  $fetch = mysqli_query($connection, $query);
  while($row = mysqli_fetch_assoc($fetch)){
      $id = $row['id'];
      $matric = $row['matric_no'];
      $fullname = $row['full_name'];
      $campus = $row['campus'];
      $college = $row['college'];
      $faculty = $row['faculty'];
      $department = $row['department'];
      $std_status = $row['std_status'];
      $std_level = $row['std_level'];
      $session = $row['session'];
      $semester = $row['semester'];
      $state = $row['state'];
      $lga = $row['lga'];
      $training_centre = $row['training_centre'];
      $training_address = $row['training_address'];
      $trainer_name = $row['trainer_name'];
      $trainer_phone = $row['trainer_phone'];
      $training_duration = $row['training_duration'];
      $nature_of_work = $row['nature_of_work'];
      $std_image = $row['image']; 
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Entrepreneurship Form</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <h3 style="color: black; font-size: 20px;">ENTREPRENEURSHIP FORM UPDATE</h3>
            
            <form class="mb-5" method="POST" action="editfunctions.php" name="contactForm" enctype="multipart/form-data">
              <div class="row">
                <div class="col-6 col-sm-6 form-group">
                  <label for="name" class="col-form-label">Matric No *</label>
                  <input type="text" class="form-control" value="<?php echo $matric ?>" autocomplete="off" name="matric" placeholder="Matriculation Number" required>
                </div>
                <div class="col-6 col-sm-6 form-group">
                  <label for="name" class="col-form-label">Full Name *</label>
                  <input type="text" autocomplete="off"  value="<?php echo $fullname ?>" name="fullname" placeholder="Your Full Name" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-sm-6 form-group">
                  <label for="name" class="col-form-label">Campus *</label>
                    <select class="custom-select" name="campus" placeholder="Select Campus" required>
                        <option><?php echo $campus ?></option>
                        <option>Osogbo</option>
                        <option>Okuku</option>
                        <option>Ikire</option>
                        <option>Ejigbo</option>
                        <option>Ipetu Ijesa</option>
                        <option>Ifetedo</option>
                    </select>
                </div>
                <div class="col-6 col-sm-6 form-group">
                  <label for="name" class="col-form-label">College *</label>
                    <select class="custom-select" name="college" placeholder="Select College" required>
                        <option><?php echo $college ?></option>
                        <option>Science, Engineering & Technology</option>
                        <option>Health Science</option>
                        <option>Management & Social Science</option>
                        <option>Education</option>
                        <option>Humanities & Culture</option>
                        <option>Law</option>
                        <option>Agriculture</option>
                    </select>
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-sm-6 form-group">
                  <label for="name" class="col-form-label">Faculty *</label>
                  <input type="text" autocomplete="off" name="faculty"  value="<?php echo $faculty; ?>" placeholder="Input Your Faculty" class="form-control" required>
                </div>
                <div class="col-6 col-sm-6 form-group">
                  <label for="name" class="col-form-label">Department *</label>
                  <input type="text" autocomplete="off" name="department" placeholder="Input Your Department"  value="<?php echo $department ?>" class="form-control" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-6 col-md-6 form-group">
                  <label for="name" class="col-form-label">Level *</label>
                    <select class="custom-select" name="level" id="slevel" class="form-control" required>
                    <option><?php echo $std_level ?></option>
                            <?php if($std_level === '100'){
                                echo "<option> 200 </option>";
                            } else {
                                echo "<option> 100 </option>";
                            }
                            ?>
                    </select>
                </div>
                <div class="col-6 col-md-6 form-group">
                  <label for="name" class="col-form-label">Semester *</label>
                    <select class="custom-select" name="semester" placeholder="Select Semester" required>
                            <option><?php echo $semester ?></option>
                            <?php if($semester === 'Rain'){
                                    echo "<option> Semester </option>";
                                } else {
                                    echo "<option> Rain </option>";
                                }
                                ?>
                    </select>
                </div>
                </div>
                <div class="row mb-3">
                <div class="col-6 col-sm-6 form-group">
                  <label for="name" class="col-form-label">State *</label>
                  <select class="custom-select" name="state" value="<?php echo $state ?>" id="state" placeholder="Pick State" onchange="show(this)">
					</select>
                </div>
                <div class="col-6 col-sm-6 form-group" id="slga1" style="display: none;">
                  <label for="name" class="col-form-label">LGA *</label>
                  <select class="custom-select" value="<?php echo $lga ?>" name="slga" id="slga" placeholder="State LGA">
					</select>
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-sm-6 form-group">
                  <label for="name" class="col-form-label">Internship Name *</label>
                  <input class="form-control" value="<?php echo $training_centre ?>" type="text" name="centre_name" placeholder="Internship Company Name" required>
                </div>
                <div class="col-6 col-sm-6 form-group">
                  <label for="name" class="col-form-label">Internship Address *</label>
                  <input type="text" name="centre_address"  value="<?php echo $training_address ?>" placeholder="Internship Address" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-sm-6 form-group">
                  <label for="name" class="col-form-label">Trainer Name *</label>
                  <input type="text" name="trainer_name"  value="<?php echo $trainer_name ?>" placeholder="Trainer's Full Name" class="form-control" required>
                </div>
                <div class="col-6 col-sm-6 form-group">
                  <label for="name" class="col-form-label">Trainer Phone *</label>
                  <input type="text" name="trainer_phone"  value="<?php echo $trainer_phone ?>" placeholder="Trainer's Phone Number" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="image" class="col-form-label">Image *</label><br>
                    <img width="70" src="../images/<?php echo $std_image ?>">
                    <input type="file" class="form-control" name="uploadfile">
                    <small style="font-size:12px; color:red;"><em>The picture must not be more than 100kb</em></small>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message" class="col-form-label">Nature of Work *</label>
                  <textarea class="form-control" name="work_nature" id="" cols="10" rows="3"><?php echo $nature_of_work ?></textarea>
                </div>
              </div>
              <input type="text" style="display:none" value="<?php echo $id ?>" autocomplete="off" name="id" placeholder="Matriculation Number" required>
              <div class="row">
                <div class="col-md-12">
                  <button name="update" class="btn btn-primary">UPDATE</button>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>
    <script src="../js/status.js"></script>
	<script src="../files/assets/js/state.js"></script>

  </body>
</html>