<?php include("db.php"); ?>
<?php session_start();?>
<?php
if(isset($_POST['submit'])){
	$matric = $_SESSION['matric'];
	$centre_name = $_POST['centre_name'];
    $centre_address = $_POST['centre_address'];
    $trainer_name = $_POST['trainer_name'];
    $trainer_phone = $_POST['trainer_phone'];
    $duration = $_POST['duration'];
    $std_image = $_FILES['uploadfile']['name'];
    $std_image_temp = $_FILES['uploadfile']['tmp_name'];
    $work_nature = $_POST['work_nature'];

    $folder = "images/" . $std_image;
    move_uploaded_file($std_image_temp, $folder);

	// training_centre, training_address, work_nature, trainer_name, duration, trainer_number, std_image
	$query = "UPDATE students SET ";
	$query .= "training_centre = '{$centre_name}', ";
	$query .= "training_address = '{$centre_address}', ";
	$query .= "nature_of_work = '{$work_nature}', ";
	$query .= "trainer_name = '{$trainer_name}', ";
	$query .= "training_duration = '{$duration}', ";
	$query .= "trainer_phone = '{$trainer_phone}', ";
	$query .= "image = '{$std_image}' ";
	$query .= "WHERE matric_no = '{$matric}'";
	$update_std = mysqli_query($connection, $query);

	header("Location: print.php");
}  
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>ENTREPRENEURSHIP FORM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<img width="120px" height="130px" src="images/logo.png"><br>
						<h2>OSUN STATE UNIVERSITY, OSOGBO</h2>
						<p>OFFICE OF THE VICE CHANCELLOR<br/>
						CENTRE FOR ENTREPRENEURSHIP</p>
						<!-- <p>A free, fully responsive HTML5 + CSS3 site template designed by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a><br />
						and released for free under the <a href="https://html5up.net/license">Creative Commons license</a>.</p> -->
						<ul class="actions">
							<!-- <li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li> -->
						</ul>
					</div>

				<!-- Header -->
					<!-- <header id="header">
						<a href="index.html" class="logo">Massively</a>
					</header> -->

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<!-- <li><a href="index.php">ACADEMIC IDENTIFICATION</a></li>
							<li><a href="state.php">State Placement</a></li> -->
							<li class="active"><a href="trainer.php">Training</a></li>
						</ul>
						</ul>
						<!-- <ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
						</ul> -->
					</nav>

				<!-- Main -->
					<div id="main" style="padding-bottom: 30px;">

						<!-- Featured Post -->
						<form method="post" action="" enctype="multipart/form-data">
							<div class="fields">
                                <div class="field">
									<label for="centre">Training Centre's Name</label>
									<input type="text" name="centre_name" placeholder="Business Name" required>
								</div>
                                <div class="field">
									<label for="address">Training Centre's Address</label>
									<input type="text" name="centre_address" placeholder="Business Address" required>
								</div>
                                <div class="field">
									<label for="trainer">Trainer's Name</label>
									<input type="text" name="trainer_name" placeholder="Trainer's Full Name" required>
								</div>
								<div class="field">
									<label for="phone">Trainer's Phone Number</label>
									<input type="text" name="trainer_phone" placeholder="Trainer's Phone Number" required>
								</div>
								<div class="field">
									<label for="duration">Training Duration</label>
									<input type="text" name="duration" value="6 weeks" readonly>
								</div>
								<div class="field">
									<label for="work">Nature of Work</label>
									<textarea name="work_nature" cols="30" rows="4"  placeholder="Please give brief discription" required></textarea>
								</div>
                                <div class="field">
									<label for="image">Upload Your Passport Image</label>
									<input type="file" class="form-control" name="uploadfile" id="uploadfile">
								</div>
								<!-- <div class="field">
									<label for="message">Message</label>
									<textarea name="message" id="message" rows="3"></textarea>
								</div> -->
							</div>
							<ul class="actions">
								<li><input type="submit" name="submit" value="Submit" /></li>
							</ul>
						</form>

					</div>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; CENTRE FOR ENTREPRENEURSHIP</li>
						<!-- <li>Design: <a href="">ADETECHNOLOGY</a></li> -->
					</ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/state.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>