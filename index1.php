<?php include("db.php"); ?>
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
    <link rel="stylesheet" href="css/style.css">

    <title>ENTREPRENEURSHIP FORM</title>
  </head>
  <body>
  

  <div class="content">
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <!-- <div class="col-md-4">
          <div class="contact-info h-100">
            <img src="images/logo.png">
            <h3>OSUN STATE UNIVERSITY</h3>
            <pre style="clear: both; color: #fff; font-size: 16px; font-weight: 500;">OFFICE OF THE VICE CHANCELLOR</pre>
            <p style="color: #fff; font-weight: 600; font-size: 16px;">CENTRE FOR ENTREPRENEURSHIP</p>
            <p class="mb-5">ENTREPRENEURSHIP TRAINING FORM</p>
            <ul class="list-unstyled">
              <li class="d-flex">
                <span class="wrap-icon icon-room mr-3"></span>
                <span class="text">9757 Aspen Lane South Richmond Hill, NY 11419</span>
              </li>
              <li class="d-flex">
                <span class="wrap-icon icon-phone mr-3"></span>
                <span class="text">+1 (291) 939 9321</span>
              </li>
              <li class="d-flex">
                <span class="wrap-icon icon-envelope mr-3"></span>
                <span class="text">info@mywebsite.com</span>
              </li>
            </ul>
          </div>
        </div> -->
        <div class="col-md-12">
          <div class="form h-100">
            <h3>UNIOSUN ENTREPRENEURSHIP TRAINING FORM</h3>
            <form class="mb-5" method="post" action="print.php" id="contactForm" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Name *</label>
                  <input type="text" autocomplete="off" class="form-control" name="fullname" placeholder="Your Full Name" required>
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Matriculation Number *</label>
                  <input type="text" autocomplete="off" class="form-control" name="matric"  placeholder="Your Matric No" required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Department *</label>
                  <input type="text" autocomplete="off" class="form-control" name="department"  placeholder="Your Department" required>
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Level *</label>
                  <input type="text" autocomplete="off" class="form-control" name="level"  placeholder="Your Level" required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Session *</label>
                  <input type="text" autocomplete="off" class="form-control" name="session" value="2022/2023"  placeholder="Your Session" readonly>
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Training Centre's Full Name *</label>
                  <input type="text" autocomplete="off" class="form-control" name="centre_name"   placeholder="Training Centre" required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Training Centre's Full Address *</label>
                  <input type="text" autocomplete="off" class="form-control" name="centre_address"  placeholder="Including Street No, town and State" required>
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Trainer's Full Name *</label>
                  <input type="text" autocomplete="off" class="form-control" name="trainer_name"   placeholder="Training Officer Full Name" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Trainer's Phone Number *</label>
                  <input type="number" class="form-control" name="trainer_phone"  placeholder="Training Officer Phone Number" required>
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Training Duration *</label>
                  <input type="text" autocomplete="off" class="form-control" name="duration"  placeholder="E.g. From 19 Sept. to 29 Oct." required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="picture" class="col-form-label">Passport Image *</label>
                  <input type="file" class="form-control" name="uploadfile" id="uploadfile">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-5">
                  <label for="message" class="col-form-label">Nature of Work *</label>
                  <textarea class="form-control" name="work_nature" cols="30" rows="4"  placeholder="Please give brief discription" required></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" name="submit" href="print.php" value="Submit" class="btn btn-primary rounded-0 py-2 px-4">
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
    <!-- <script src="js/main.js"></script> -->

  </body>
</html>