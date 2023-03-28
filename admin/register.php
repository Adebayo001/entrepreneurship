<?php include("../db.php") ?>
<?php session_start(); ?>
<?php 
    if(isset($_POST['register'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if(!empty($email) && !empty($password)){
        $email = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);

        $pasword_hash = password_hash($password, PASSWORD_BCRYPT, ['cost'=>12]);
        // $salt = password_hash($password, PASSWORD_DEFAULT);
        // $password = crypt($password, $salt);
        
        $query = "INSERT INTO users (user_email, user_password) VALUES ('{$email}', '{$pasword_hash}')";
        $register_user = mysqli_query($connection, $query);
        
        if(!$register_user){
            die("Query Failed" . mysqli_error($connection));
        }
        echo "<script>alert('Registration Completed. You can sign in now');
            window.location.href ='./' </script>";
        //    $message = "Registration Completed. You can sign in now";
        //    header("Location: ./");
    } else {
            $message = "Fields cannot be empty";
        }
        
} else {
        $message = "";
    }

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Osun State University</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="300" src="images/logo/logo.png" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                    <h5>Registration Page</h5><br>
                     <form method = "post">
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Email Address</label>
                              <input type="email" name="email" autocomplete="off" placeholder="E-mail" required>
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" autocomplete="off" name="password" placeholder="Password" required>
                           </div>
                           <!-- <div class="field">
                              <label class="label_field hidden">hidden label</label>
                              <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                              <a class="forgot" href="">Forgotten Password?</a>
                           </div> -->
                           <div class="field">
                              <a class="forgot" href="./">Login</a>
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button name="register" class="main_bt">Register</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>