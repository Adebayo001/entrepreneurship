<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Entrepreneurship Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="entrepreneurship.yusufakinpeluconsults.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
            <form method="post" action="functions.php" id="wizard" enctype="multipart/form-data">
        		<!-- SECTION 1 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="images/form-wizard-1.jpg" alt=""> <?php include("index.html"); ?>
							</div>
						<div class="form-content" >
						<?php
                      if (isset($_GET['errorp'])){
                        if ($_GET['errorp']=="emptyfields"){
                          echo '<div style="color:red;">Please fill in all fields!</div>';
                        }else if ($_GET['errorp']=="matrictaken"){
                            echo '<div style="color:red;">Matriculation Number already exist</div>';
                        }else if ($_GET['errorp']=="File too large. File must be less than 100kb."){
                            echo '<div style="color:red;">File too large. File must be less than 100kb.</div>';
                        }else if ($_GET['errorp']=="Invalid file type. Only JPG, and PNG types are accepted."){
                            echo '<div style="color:red;">Invalid file type. Only JPG, and PNG types are accepted.</div>';
                        }
                      }
                       ?>
					   <div class="form-header">
								<h3>Academic Identification</h3>
							</div>
							<!-- <p>Please fill with your details</p> -->
							<div class="form-row">
								<div class="form-holder">
									<input type="text" class="form-control" autocomplete="off" name="matric" placeholder="Matriculation Number" required>
								</div>
								<div class="form-holder">
									<input type="text" autocomplete="off" name="fullname" placeholder="Your Full Name" class="form-control" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
									<select class="form-control" name="campus" placeholder="Select Campus" required>
                                        <option value="">--Select Campus--</option>
                                        <option>Osogbo</option>
                                        <option>Okuku</option>
                                        <option>Ikire</option>
                                        <option>Ejigbo</option>
                                        <option>Ipetu Ijesa</option>
                                        <option>Ifetedo</option>
									</select>
								</div>
								<div class="form-holder">
									<select class="form-control" name="college" placeholder="Select College" required>
                                        <option value="">--Select College--</option>
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
							<div class="form-row">
								<div class="form-holder">
									<input type="text" autocomplete="off" name="department" placeholder="Input Your Department" class="form-control" required>
								</div>
								<div class="form-holder">
									<input type="text" autocomplete="off" name="faculty" placeholder="Input Your Faculty" class="form-control" required>
								</div>
							</div>
							<div class="form-row">
							<div class="form-holder">
								<!-- <label style="font-size:12px; color:black;">Student Status</label> -->
									<select class="form-control" placeholder="Fresher or Returning" name="ststat" id="studentstat" onchange="show(this)" required>
									</select>
								</div>
								<div class="form-holder" id="slevel1">
									<select class="form-control" name="level" id="slevel" class="form-control" required>
										<option>--Select Level--</option>
										<option>100</option>
										<option>200</option>
										<option>300</option>
										<option>400</option>
										<option>500</option>
										</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
									<select class="form-control" name="semester" placeholder="Select Semester" required>
                                        <option value="">--Select Semester--</option>
                                        <option>Harmattan</option>
                                        <option>Rain</option>
									</select>
								</div>
							</div>
							<!-- <div class="form-row">
								
							</div> -->
						</div>
					</div>
                </section>

				<!-- SECTION 2 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="images/form-wizard-1.jpg" alt="">
						</div>
						<div class="form-content">
							<div class="form-header">
								<h3>State of Internship</h3>
							</div>
							<p>Please Choose State and LGA</p>
							<div class="form-row">
								<div class="form-holder w-100">
									<select class="form-control" name="state" id="state" placeholder="Pick State" onchange="show(this)">
									</select>
								</div>
							</div>
							<div class="form-row" id="slga1" style="display: none;">
								<div class="form-holder w-100">
									<select class="form-control" name="slga" id="slga" placeholder="State LGA">
									</select>
								</div>
							</div>
							<div class="form-row">
							</div>

							<div class="form-row">
								
								<div class="form-holder"></div>
							</div>
						</div>
					</div>
                </section>
                <!-- SECTION 3 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="images/form-wizard-1.jpg" alt="">
						</div>
						<div class="form-content">
							<div class="form-header">
								<h3>Internship</h3>
							</div>
							<p style="font-size: 15px;">Your Internship must be in-line with your field</p>
							<div class="form-row">
								<div class="form-holder">
									<input class="form-control" type="text" name="centre_name" placeholder="Internship Company Name" required>
								</div>
								<div class="form-holder">
									<input type="text" name="centre_address" placeholder="Internship Address" class="form-control" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
									<input type="text" name="trainer_name" placeholder="Trainer's Full Name" class="form-control" required>
								</div>
								<div class="form-holder">
									<input type="text" name="trainer_phone" placeholder="Trainer's Phone Number" class="form-control" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder w-100">
									<input type="file" class="form-control" name="uploadfile" id="uploadfile">
									<small style="font-size:12px; color:red;"><em>The picture must not be more than 100kb</em></small>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder w-100">
									<textarea name="work_nature" id="" placeholder="Please give brief description here!" class="form-control" style="height: 60px;"></textarea>
								</div>
							</div>
                            <!-- <div class="form-row">
								<div class="form-holder">
									<input type = "submit" class="form-control" value ="Submit">
								</div>
							</div> -->
							<!-- <div class="checkbox-circle mt-24">
								<label>
									<input type="checkbox" checked>  Please accept <a href="#">terms and conditions ?</a>
									<span class="checkmark"></span>
								</label>
							</div> -->
						</div>
					</div>
                </section>
            </form>
		</div>

		<!-- JQUERY -->
		<!-- <script src="js/status.js"></script> -->
		<script src="js/jquery-3.3.1.min.js"></script>
		
		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>
		<script src="js/main.js"></script>
        <script src="js/status.js"></script>
		<script src="files/assets/js/state.js"></script>
		
		<!-- <script src="../assets/js/state.js"></script> -->
		<!-- Template created and distributed by Colorlib -->

		
		
</body>
</html>
