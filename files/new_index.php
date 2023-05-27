<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FormWizard_v1</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="entrepreneurship.yusufakinpeluconsults.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="colorlib/css/style.css">
		<noscript src="colorlib/js/status.js"></noscript>
	</head>
	<body>
		<div class="wrapper">
            <form action="" id="wizard">
        		<!-- SECTION 1 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="images/form-wizard-1.jpg" alt="">
						</div>
						<div class="form-content" >
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
									<select class="form-control" placeholder="Fresher or Returning" name="ststat" id="studentstat" onchange="show(this)" required>
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder" id="slevel1" style="display: none;">
									<select class="form-control" name="level" id="slevel" class="form-control" required>
										</select>
								</div>
								<div class="form-holder">
									<input type="text" class="form-control" autocomplete="off" name="session" value="2022/2023" readonly>
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
								<div class="form-holder">
									<input type="text" autocomplete="off" name="faculty" placeholder="Input Your Faculty" class="form-control" required>
								</div>
								<div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
									<div class="checkbox-tick">
										<label class="male">
											<input type="radio" name="gender" value="male" checked> Male<br>
											<span class="checkmark"></span>
										</label>
										<label class="female">
											<input type="radio" name="gender" value="female"> Female<br>
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
							</div> -->
							<!-- <div class="checkbox-circle">
								<label>
									<input type="checkbox" checked> Nor again is there anyone who loves or pursues or desires to obtaini.
									<span class="checkmark"></span>
								</label>
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
								<h3>State</h3>
							</div>
							<p>Please fill with additional info</p>
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
							<p>Send an optional message</p>
							<div class="form-row">
								<div class="form-holder w-100">
									<textarea name="" id="" placeholder="Your messagere here!" class="form-control" style="height: 99px;"></textarea>
								</div>
							</div>
							<div class="checkbox-circle mt-24">
								<label>
									<input type="checkbox" checked>  Please accept <a href="#">terms and conditions ?</a>
									<span class="checkmark"></span>
								</label>
							</div>
						</div>
					</div>
                </section>
            </form>
		</div>

		<!-- JQUERY -->
		<!-- <script src="js/status.js"></script> -->
		<script src="colorlib/js/jquery-3.3.1.min.js"></script>
		
		<!-- JQUERY STEP -->
		<script src="colorlib/js/jquery.steps.js"></script>
		<script src="colorlib/js/main.js"></script>
		<script src="assets/js/state.js"></script>
		
		
		<!-- <script src="../assets/js/state.js"></script> -->
		<!-- Template created and distributed by Colorlib -->

		
		
</body>
</html>
